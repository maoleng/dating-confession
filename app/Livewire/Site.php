<?php

namespace App\Livewire;

use App\Models\Confession;
use Illuminate\Support\Collection;
use Livewire\Component;

class Site extends Component
{

    public Collection $confessions;
    public Collection $slider_confessions;

    public function mount($page = 0): void
    {
        $this->slider_confessions = Confession::query()->whereNotNull('banner')->take(3)->get();
        $this->confessions = Confession::query()->whereNotIn('id', $this->slider_confessions->pluck('id')->toArray())
            ->skip($page * 9)->take(9)->get();
    }

}
