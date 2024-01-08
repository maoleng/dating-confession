@php use \Illuminate\Support\Facades\Auth; @endphp
<div>
    <div class="section-profile">
        <div class="profile-wrap is-cover" style="background-image: url(https://nurui.fueko.net/content/images/2018/12/mike-wilson-188133.jpg)">
            <div class="author-image" style="background-image: url(https://nurui.fueko.net/content/images/2018/12/toa-heftiba-547030-unsplash.jpg)"></div>
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
    <div id="loop" class="section-loop wrap">
        <div class="items-wrap membership-cards flex">
            <a wire:click="chooseSubscription({{ $subscriptions[0]->id }})" href="javascript:void(0)" class="membership-card paid-tier paid-tier-1">
                <div class="membership-card-content">
                    <h2 class="membership-card-title">{{ $subscriptions[0]->name }}</h2>
                    <h4 class="membership-card-price">{{ formatMoney($subscriptions[0]->price) }}<span style="font-size: 70%">đ</span><span>/tuần</span></h4>
                    <p class="membership-card-description">Có thể truy cập mọi thứ</p>
                    <div class="membership-card-button-wrap">
                        <div class="membership-card-button global-button">Subscribe now</div>
                    </div>
                </div>
            </a>
            <a wire:click="chooseSubscription({{ $subscriptions[1]->id }})" href="javascript:void(0)" class="membership-card paid-tier paid-tier-2">
                <div class="membership-card-content">
                    <h2 class="membership-card-title">{{ $subscriptions[1]->name }}</h2>
                    <h4 class="membership-card-price">{{ formatMoney($subscriptions[1]->price) }}<span style="font-size: 70%">đ</span><span>/tháng</span></h4>
                    <p class="membership-card-description">Có thể truy cập mọi thứ</p>
                    <div class="membership-card-button-wrap">
                        <div class="membership-card-button global-button">Subscribe now</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
