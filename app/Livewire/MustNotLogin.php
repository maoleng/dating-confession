<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MustNotLogin extends Component
{

    public function render()
    {
        if (Auth::check()) {

        }
    }


}
