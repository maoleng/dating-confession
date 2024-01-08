<?php

namespace App\Models;

use App\Jobs\UpdateTransactionTimeout;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Transaction extends Base
{

    private const EXPIRED_MINUTES = 10;

    protected $fillable = [
        'code',
        'money',
        'given_money',
        'duration',
        'status',
        'note',
        'user_id',
        'created_at',
    ];

    public function getExpiredAtAttribute(): string
    {
        return Carbon::make($this->created_at)->addMinutes(self::EXPIRED_MINUTES)->toDateTimeString();
    }

    public function getQRUrlAttribute(): string
    {
        return "https://api.vietqr.io/image/970415-".env('BANK_ACCOUNT_ID')."-zov0Sqx.jpg?amount=$this->money&addInfo=$this->code";
    }

    public static function generateCode(): string
    {
        do {
            $code = strtoupper(Str::random(5));
        } while (self::query()->where('code', $code)->exists());

        return $code;
    }

    protected static function booted(): void
    {
        static::created(static function (Transaction $transaction) {
            $job = new UpdateTransactionTimeout($transaction);
            $job->delay(now()->addMinutes(self::EXPIRED_MINUTES));
            dispatch($job);
        });
    }


}
