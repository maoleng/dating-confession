@section('body-class'){{ $body_class }}@endsection
<div>
    <div id="slider" class="section-scrollable">
        @foreach ($slider_confessions as $confession)
            <div wire:key="'conf-slide-'.{{ $confession->id }}" class="section-featured is-featured-image">
                <div class="featured-image" style="background-image: url({{ $confession->banner }})"></div>
                <div class="featured-wrap flex">
                    <article class="featured-content">
                        <span class="featured-label global-tag">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.9712403,8.05987765 L16.2291373,8.05987765 L12.796794,0.459688839 C12.5516266,-0.153229613 11.4483734,-0.153229613 11.0806223,0.459688839 L7.64827899,8.05987765 L0.906176009,8.05987765 C0.538424938,8.05987765 0.170673866,8.30504503 0.0480901758,8.6727961 C-0.0744935148,9.04054717 0.0480901758,9.40829825 0.293257557,9.65346563 L5.31918887,14.3116459 L3.11268244,22.4021694 C2.99009875,22.7699205 3.11268244,23.1376716 3.48043351,23.382839 C3.72560089,23.6280063 4.21593565,23.6280063 4.46110303,23.5054227 L11.9387082,19.2149935 L19.4163133,23.5054227 C19.538897,23.6280063 19.6614807,23.6280063 19.906648,23.6280063 C20.1518154,23.6280063 20.2743991,23.5054227 20.5195665,23.382839 C20.7647339,23.1376716 20.8873176,22.7699205 20.8873176,22.4021694 L18.6808111,14.3116459 L23.7067424,9.65346563 C23.9519098,9.40829825 24.0744935,9.04054717 23.9519098,8.6727961 C23.7067424,8.30504503 23.3389914,8.05987765 22.9712403,8.05987765 Z"/>
                            </svg>
                            Featured
                        </span>
                        <h2><a href="/{{ $confession->slug }}" wire:navigate>{{ $confession->title }}</a><span class="featured-dot"></span></h2>
                        <div class="item-meta white">
                            <time datetime="{{ $confession->created_at }}">{{ $confession->yearCreated }}</time>
                        </div>
                    </article>
                </div>
            </div>
        @endforeach
    </div>
    <div id="next" class="scrollable-nav">
        <span class="next"></span>
    </div>
    <div id="loop" class="section-loop wrap no-featured">
        <div class="items-wrap flex">
            @foreach ($confessions as $confession)
                <livewire:confession.card :confession="$confession" :cur_page="$cur_page" :wire:key="'conf-'.$confession->id" />
            @endforeach
        </div>
    </div>
    <nav class="section-pagination pagination">
        <a class="older-posts" href="/?page=2">Older Posts</a>
    </nav>
    <div class="section-subscribe wrap">
        <div class="subscribe-wrap">
            <form data-members-form="subscribe" class="subscribe-form">
                <h3>Join our occasional newsletter</h3>
                <div id="ityped" class="ityped">
                    <span class="ityped-wrap"></span>
                </div>
                <div class="form-group">
                    <input data-members-email class="subscribe-input" placeholder="Your email address" type="email" name="email" aria-label="Your email address" required>
                </div>
                <button type="submit" class="global-button">Subscribe</button>
            </form>
            <p class="subscribe-alert-loading">Processing your application</p>
            <p class="subscribe-alert-error">There was an error sending the email, please try again</p>
            <div class="subscribe-success">
                <h3>Great!</h3>
                Check your inbox and click the link to confirm your subscription
            </div>
        </div>
    </div>
    <script>pageCount = '{{ $page_count }}'</script>

</div>
@push('page-script')
    <script src="{{ asset('assets/js/flickity.js') }}"></script>
    <script src="{{ asset('assets/js/flickity-custom.js') }}"></script>
    <script src="{{ asset('assets/js/infinite-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/infinite-scroll-custom.js') }}"></script>
@endpush
