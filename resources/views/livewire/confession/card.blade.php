<div data-cur_page="{{ $cur_page }}" class="item-wrap flex post {{ $confession->colorClass }}">
    <article>
        <a href="/{{ $confession->slug }}" wire:navigate class="item-link-overlay" aria-label="{{ $confession->title }}"></a>
        {!! $confession->htmlImageCard !!}
        <h2><a href="/{{ $confession->slug }}" wire:navigate class="white">{{ $confession->id. $confession->title }}</a></h2>
        <div class="item-meta white is-primary-tag {{ $confession->isPaidContent() ? 'is-members-label' : null }}">
            <time datetime="{{ $confession->created_at }}">{{ $confession->yearCreated }}</time>
        </div>
{{--            <a class="primary-tag global-tag white" href="/tag/story/">Story</a>--}}
        @if ($confession->isPaidContent())
            <span class="members-label white">
                Paid-members
            </span>
        @endif
    </article>
</div>
