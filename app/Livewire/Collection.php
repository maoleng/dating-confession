<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Collection extends Component
{

    public string $page = '';
    public $confessions;
    public int $page_count;
    public int $cur_page;
    public int $total;

    public function mount(Request $request): void
    {
        if (! in_array($page = $request->get('p'), ['history', 'watch-later', 'liked'])) {
            $this->redirectRoute('index');
            return;
        }
        $this->page = match ($page) { 'history' => 'Lịch sử', 'watch-later' => 'Xem sau', 'liked' => 'Đã thích' };
        $confessions = match($page) {
            'history' => Auth::user()->historyConfessions()->paginate(9),
            'watch-later' => Auth::user()->watchLaterConfessions()->paginate(9),
            'liked' => Auth::user()->likedConfessions()->paginate(9),
        };

        [$this->confessions, $this->page_count, $this->cur_page, $this->total] = [$confessions->items(), $confessions->lastPage(), $confessions->currentPage(), $confessions->total()];
    }

}
