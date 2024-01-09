<?php

namespace App\Livewire\Membership;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Card extends Component
{

    public Collection $subscriptions;

    public function chooseSubscription($subscription): void
    {
        $this->redirectRoute('payment.index', ['subscription' => $subscription], navigate: true);
    }

}
