@php use \Illuminate\Support\Facades\Auth; @endphp
<div>
    <div class="membership-account membership-header section-profile is-cover">
        <div class="profile-wrap is-cover" style="background-image: url(https://images.unsplash.com/photo-1506477331477-33d5d8b3dc85?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;2000&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)">
            <h1 class="membership-name">
                Your account
            </h1>
            <div class="membership-details">
                <div class="membership-details-wrap flex">
                    <div class="membership-details-content free">
                        <div class="membership-detail free">
                            <label>Email address</label>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <div class="membership-details-content free">
                        <div class="membership-detail free">
                            <label>Your plan</label>
                            <span>{{ Auth::user()->premiumDescription }}</span>
                        </div>
                    </div>

                </div>
            </div>
            <span class="membership-small-info">Need more? Choose your plan</span>
        </div>
    </div>
    <div id="loop" class="section-loop wrap">
        <div class="items-wrap membership-cards flex">
            <a wire:click="chooseSubscription({{ $subscriptions[0]->id }})" href="javascript:void(0)" class="membership-card paid-tier paid-tier-1">
                <div class="membership-card-content">
                    <h2 class="membership-card-title">{{ $subscriptions[0]->name }}</h2>
                    <h4 class="membership-card-price">{{ formatMoney($subscriptions[0]->price) }}<span style="font-size: 70%">đ</span><span>/tuần</span></h4>
                    <p class="membership-card-description">Get access to everything.</p>
                    <div class="membership-card-button-wrap">
                        <div class="membership-card-button global-button">Subscribe now</div>
                    </div>
                </div>
            </a>
            <a wire:click="chooseSubscription({{ $subscriptions[1]->id }})" href="javascript:void(0)" class="membership-card paid-tier paid-tier-2">
                <div class="membership-card-content">
                    <h2 class="membership-card-title">{{ $subscriptions[1]->name }}</h2>
                    <h4 class="membership-card-price">{{ formatMoney($subscriptions[1]->price) }}<span style="font-size: 70%">đ</span><span>/tháng</span></h4>
                    <p class="membership-card-description">Get access to everything.</p>
                    <div class="membership-card-button-wrap">
                        <div class="membership-card-button global-button">Subscribe now</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
@push('page-script')
    <script>
        document.querySelectorAll('.membership-card').forEach(function(card) {
            card.addEventListener('click', function() {

                var subscription = card.getAttribute('data-subscription');

                console.log('Subscription:', subscription);
            });
        });

    </script>

@endpush
