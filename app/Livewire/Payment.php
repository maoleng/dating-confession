<?php

namespace App\Livewire;

use App\Enums\TransactionStatus;
use App\Jobs\UpdateTransactionTimeout;
use App\Models\Subscription;
use App\Models\Transaction;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app-auth')]
class Payment extends Component
{

    public Model $transaction;

    public function mount(Request $request): void
    {
        $transaction = Transaction::query()->where('status', TransactionStatus::WAITING)
            ->where('user_id', Auth::id())->first();
        if (empty($transaction)) {
            $subscription_id = $request->get('subscription');
            if (! $subscription_id) {
                $this->redirectRoute('index', navigate: true);

                return;
            }
            $subscription = Subscription::query()->findOrFail($subscription_id);

            $transaction = Transaction::query()->create([
                'code' => Transaction::generateCode(),
                'money' => $subscription->price,
                'duration' => $subscription->duration,
                'note' => "Thanh toán: $subscription->name",
                'user_id' => Auth::id(),
                'created_at' => now(),
            ]);
        }

        $this->transaction = $transaction;
    }

    public function cancelPayment(): void
    {
        Transaction::query()->where('status', TransactionStatus::WAITING)
            ->where('user_id', Auth::id())->update(['status' => TransactionStatus::CANCEL]);
    }

    public function validatePayment(): array
    {
        $transaction = Transaction::query()->where('status', TransactionStatus::WAITING)
            ->where('user_id', Auth::id())->first();
        if ($transaction === null) {
            return [
                'status' => false,
                'message' => 'Quá thời gian giao dịch',
            ];
        }

        $client = new Client(['headers' => ['Authorization' => 'Apikey '.env('PAYMENT_API_KEY')]]);
        $endpoint = env('PAYMENT_API_ENDPOINT').'?sort=DESC&pageSize=100000&fromDate='.now()->subDay()->toDateString();
        $data = $client->get($endpoint)->getBody()->getContents();
        $data = json_decode($data)->data->records;
        foreach ($data as $each) {
            if (str_contains($each->description, $transaction->code)) {
                if ($each->amount > $transaction->money) {
                    $redundant = $each->amount - $transaction->money;
                    $status = true;
                    $message = "Bạn đã chuyển thừa {$redundant}đ, liên hệ để có thể nhận phần tiền thừa";
                } elseif ($each->amount < $transaction->money) {
                    $lack = $transaction->money - $each->amount;
                    $status = false;
                    $message = "Bạn đã chuyển thiếu {$lack}đ, liên hệ để có thể xử lí";
                } else {
                    $status = true;
                    $message = 'Hãy tận hưởng gói thành viên của bạn';
                }

                $transaction->update([
                    'given_money' => $each->amount,
                    'status' => $status ? TransactionStatus::SUCCESS : TransactionStatus::FAIL,
                ]);
                if ($status) {
                    $user = Auth::user();
                    $premium_until = !$user->premium_until || Carbon::make($user->premium_until)->lt(now())
                        ? now()->addDays($transaction->duration)
                        : Carbon::make($user->premium_until)->addDays($transaction->duration);

                    Auth::user()->update(['premium_until' => $premium_until]);
                }

                return [
                    'status' => $status,
                    'message' => $message,
                ];
            }
        }

        return [
            'status' => null,
        ];
    }

}
