<div>
    <div class="section-profile">
        <div class="profile-wrap is-cover" style="background-image: url(https://images.unsplash.com/photo-1470162656305-6f429ba817bf?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;830&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)">
            <h1>{{ $page }}</h1>
            <div class="posts-number">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4429008,23.7744902 L8.34787826,17.944169 L2.25285576,23.7744902 C2.10780746,23.8894094 1.94171423,23.9595562 1.77120393,23.9868714 C1.71719951,23.9954904 1.66181846,24 1.6053913,24 C0.733763643,24 4.4408921e-16,23.3090623 4.4408921e-16,22.42036 L4.4408921e-16,1.25412932 C4.4408921e-16,0.723799848 0.28433197,0.244699969 0.822236618,0.0663515255 C0.982404415,0.0132460589 1.12666656,-0.00204032517 1.28186513,0.000211809426 C1.35304676,0.0012447482 1.38046168,0.0031905923 1.50305219,0.0133965248 C1.55929016,0.0180784608 1.58577038,0.0196251488 1.6053913,0.0196251488 L15.0902609,0.0196251488 C15.1098818,0.0196251488 15.136362,0.0180784608 15.1926,0.0133965248 C15.3151905,0.0031905923 15.3426054,0.0012447482 15.413787,0.000211809426 C15.5689856,-0.00204032517 15.7132478,0.0132460589 15.8734156,0.0663515255 C16.4113202,0.244699969 16.6956522,0.723799848 16.6956522,1.25412932 L16.6956522,22.42036 C16.6956522,23.3090623 15.9618885,24 15.0902609,24 C15.0061199,24 14.9243049,23.9899728 14.8459304,23.9710405 C14.7032293,23.9368156 14.5655424,23.871657 14.4429008,23.7744902 Z"/>
                </svg>
                <span>{{ $total }} bài</span>
            </div>
        </div>
    </div>
    <div id="loop" class="section-loop wrap no-featured">
        <div class="items-wrap flex">
            @foreach ($confessions as $confession)
                <livewire:confession.card :confession="$confession" :cur_page="$cur_page" :wire:key="'conf-'.$confession->id" />
            @endforeach
        </div>
    </div>
    <nav class="section-pagination pagination">
        <a class="older-posts" href="/collection?p={{ request()->get('p') }}&page=2">Older Posts</a>
    </nav>
    <script>pageCount = '{{ $page_count }}'</script>

</div>
@push('page-script')
    <script src="{{ asset('assets/js/infinite-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/infinite-scroll-custom.js') }}"></script>
@endpush
