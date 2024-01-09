<?php

namespace App\Livewire;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Me extends Component
{

    public Collection $subscriptions;

    public function mount(): void
    {
        $this->subscriptions = Subscription::all();
    }

}
