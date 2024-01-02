<?php

namespace App\Livewire\Confession;

use Livewire\Component;

class Show extends Component
{

    public string $slug = '';

    public function mount($slug)
    {
        $this->slug = $slug;
    }

}
