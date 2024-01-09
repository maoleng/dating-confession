<?php

namespace App\Livewire\Membership;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{

    public Collection $subscriptions;

    public function mount(): void
    {
        $this->subscriptions = Subscription::all();
    }

    public function chooseSubscription($subscription): void
    {
        $this->redirectRoute('payment.index', ['subscription' => $subscription], navigate: true);
    }

}
