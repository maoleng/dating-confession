<?php

namespace App\Livewire\Confession;

use App\Models\Confession;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{

    public Confession $confession;
    public string $body_class = '';
    public Collection $confessions;

    public function mount($slug): void
    {
        $confession = Confession::query()->where('slug', $slug)->firstOrFail();
        $this->confession = $confession;
        $this->body_class = $confession->bodyClass;

        $this->confessions = Auth::check()
            ? Confession::query()->whereDoesntHave('historyUsers', function ($q) {
                $q->where('user_id', Auth::id());
            })->inRandomOrder()->limit(2)->get()
            : Confession::query()->inRandomOrder()->limit(2)->get();
    }

}
