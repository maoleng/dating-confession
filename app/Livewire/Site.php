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
        $this->slider_confessions = Confession::query()->whereNotNull('banner')->orderByDesc('created_at')->take(3)->get();
        $confessions = Confession::query()->whereNotIn('id', $this->slider_confessions->pluck('id')->toArray())->orderByDesc('created_at')->paginate(9);
        [$this->confessions, $this->page_count, $this->cur_page] = [$confessions->items(), $confessions->lastPage(), $confessions->currentPage()];
    }

}
