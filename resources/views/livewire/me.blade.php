@php use \Illuminate\Support\Facades\Auth; @endphp
<div>
    <div class="section-profile">
        <div class="profile-wrap is-cover" style="background-image: url(https://nurui.fueko.net/content/images/2018/12/mike-wilson-188133.jpg)">
            <div class="author-image" style="background-image: url({{ Auth::user()->avatar }})"></div>
            <h1>{{ Auth::user()->name }}</h1>
            <div class="membership-details">
                <div class="membership-details-wrap flex">
                    <div class="membership-details-content free">
                        <div class="membership-detail free">
                            <label>Email</label>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <div class="membership-details-content free">
                        <div class="membership-detail free">
                            <label>Gói đăng kí</label>
                            <span>
                                {!! Auth::user()->premiumDescription !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Gia hạn thêm gói của bạn</h2>
        </div>
    </div>
    <livewire:membership.card :subscriptions="$subscriptions"/>
    <div class="section-page-tags wrap">
        <div class="page-tags-wrap flex">
            <div class="page-tags-title">
                <h4>Bộ sưu tập của bạn</h4>
            </div>
            <div class="page-tag-wrap other is-image">
                <a href="{{ route('collection', ['p' => 'history']) }}" class="item-link-overlay"></a>
                <div class="page-tag-image" style="background-image: url(https://images.unsplash.com/photo-1498637841888-108c6b723fcb?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;830&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)"></div>
                <h2><a href="{{ route('collection', ['p' => 'history']) }}">Lịch sử</a></h2>
            </div>
            <div class="page-tag-wrap other is-image">
                <a href="{{ route('collection', ['p' => 'watch-later']) }}" class="item-link-overlay"></a>
                <div class="page-tag-image" style="background-image: url(https://images.unsplash.com/photo-1498568584133-7b76cea38337?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;830&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)"></div>
                <h2><a href="{{ route('collection', ['p' => 'watch-later']) }}">Xem sau</a></h2>
            </div>
            <div class="page-tag-wrap other is-image">
                <a href="{{ route('collection', ['p' => 'liked']) }}" class="item-link-overlay"></a>
                <div class="page-tag-image" style="background-image: url(https://images.unsplash.com/photo-1533987316049-f862f4a9af19?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;830&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)"></div>
                <h2><a href="{{ route('collection', ['p' => 'liked']) }}">Đã thích</a></h2>
            </div>

        </div>
    </div>

</div>
@push('page-style')
    <style>
        a[class="t-hover"]:hover,
        a[class="t-hover"]:focus {
            text-decoration: none !important;
            color: var(--gradient-paid-end) !important;
            outline: 0 !important;
            cursor: pointer;
        }
    </style>
@endpush
