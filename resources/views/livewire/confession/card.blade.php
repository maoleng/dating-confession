<div class="item-wrap flex post {{ $confession->colorClass }}">
    <article>
        <a href="/{{ $confession->slug }}" class="item-link-overlay" aria-label="{{ $confession->title }}"></a>
        {!! $confession->htmlImageCard !!}
        <h2><a href="/{{ $confession->slug }}" class="white">{{ $confession->title }}</a></h2>
        <div class="item-meta white is-primary-tag {{ $confession->isPaidContent() ? 'is-members-label' : null }}">
            <time datetime="2018-05-17">{{ $confession->yearCreated }}</time>
        </div>
{{--            <a class="primary-tag global-tag white" href="/tag/story/">Story</a>--}}
        @if ($confession->isPaidContent())
            <span class="members-label white">
                Paid-members
            </span>
        @endif
    </article>
</div>
