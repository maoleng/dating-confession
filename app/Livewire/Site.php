<?php

namespace App\Livewire;

use App\Models\Confession;
use Illuminate\Support\Collection;
use Livewire\Component;

class Site extends Component
{

    public string $body_class = 'home-template global-cta-violet';
    public $confessions;
    public Collection $slider_confessions;
    public int $page_count;
    public int $cur_page;

    public function mount(): void
    {
        $this->slider_confessions = Confession::query()->whereNotNull('banner')->take(3)->get();
        $p_confessions = Confession::query()->whereNotIn('id', $this->slider_confessions->pluck('id')->toArray())->paginate(9);
        $this->confessions = $p_confessions->items();
        $this->page_count = $p_confessions->total();
        $this->cur_page = $p_confessions->currentPage();
    }

}
