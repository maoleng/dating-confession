<?php

namespace App\Livewire\Confession;

use App\Models\Confession;
use Livewire\Component;

class Show extends Component
{

    public Confession $confession;
    public string $body_class = '';
    public function mount($slug): void
    {
        $confession = Confession::query()->where('slug', $slug)->firstOrFail();
        $this->confession = $confession;
        $this->body_class = $confession->bodyClass;
        //todo: other confessions
    }

}
