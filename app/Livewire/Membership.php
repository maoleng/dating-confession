<?php

namespace App\Livewire;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Membership extends Component
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
