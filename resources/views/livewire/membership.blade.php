@php use \Illuminate\Support\Facades\Auth; @endphp
<div>
    <div class="membership-plans membership-header section-profile is-cover">
        <div class="profile-wrap is-cover" style="background-image: url(https://images.unsplash.com/photo-1511988617509-a57c8a288659?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;2000&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)">
            <h1>Gói đăng kí</h1>
            <h2>Mở khóa toàn quyền truy cập vào Datefs và xem toàn bộ nội dung chỉ dành cho người đăng ký</h2>
            <span class="membership-small-info">Lựa chọn gói đăng kí</span>
        </div>
    </div>
    <livewire:membership.card :subscriptions="$subscriptions"/>
</div>
