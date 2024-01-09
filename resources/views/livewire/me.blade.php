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
                            <span>{{ Auth::user()->premiumDescription }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Gia hạn thêm gói của bạn</h2>
        </div>
    </div>
    <livewire:membership.card :subscriptions="$subscriptions"/>
</div>
