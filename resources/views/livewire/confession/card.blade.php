<div data-cur_page="{{ $cur_page }}" class="item-wrap flex post {{ $confession->colorClass }}">
    <article>
        <a href="/{{ $confession->slug }}" wire:navigate class="item-link-overlay" aria-label="{{ $confession->title }}"></a>
        {!! $confession->htmlImageCard !!}
        <h2><a href="/{{ $confession->slug }}" wire:navigate class="white">{{ $confession->id. $confession->title }}</a></h2>
        <div class="item-meta white is-primary-tag {{ $confession->isPaidContent() ? 'is-members-label' : null }}">
            <time datetime="{{ $confession->created_at }}">{{ $confession->yearCreated }}</time>
        </div>
        @if ($confession->isPaidContent())
            <span class="members-label white">
                Paid-members
            </span>
        @endif
        @if ($p = request()->get('p'))
            <a class="primary-tag global-tag white" href="/tag/story/">
                @if ($p === 'history')
                    Read at {{ $confession->pivot->read_at }}
                @elseif ($p === 'liked')
                    Liked at {{ $confession->pivot->liked_at }}
                @elseif ($p === 'watch-later')
                    Marked at {{ $confession->pivot->watch_later_at }}
                @endif
            </a>
        @endif
    </article>
</div>
