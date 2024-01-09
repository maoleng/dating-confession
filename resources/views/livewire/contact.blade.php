<div class="section-page-custom flex">
    <div class="page-custom-image" style="background-image: url(https://images.unsplash.com/photo-1470290378698-263fa7ca60ab?ixlib&#x3D;rb-1.2.1&amp;q&#x3D;75&amp;fm&#x3D;jpg&amp;crop&#x3D;entropy&amp;cs&#x3D;tinysrgb&amp;w&#x3D;830&amp;fit&#x3D;max&amp;ixid&#x3D;eyJhcHBfaWQiOjExNzczfQ)"></div>
    <div class="page-custom-wrap">
        <div class="page-custom-header">
            <a wire:navigate href="{{ route('index') }}">Quay lại</a>
        </div>
        <div class="page-custom-content flex">
            <div class="subscribe-wrap contact-wrap">
                <h3>Liên hệ chúng tôi</h3>
                @if($errors->isNotEmpty())
                    <p>{{ $errors->first() }}</p>
                @elseif ($success = session()->get('success'))
                    <p>{{ $success }}</p>
                @endif

                <form wire:submit="store">
                    <input class="subscribe-input contact-name" required type="text" wire:model="form.name" placeholder="Tên của bạn">
                    <input class="subscribe-input contact-email" required type="email" wire:model="form.email" placeholder="Địa chỉ email">
                    <textarea class="subscribe-input contact-message" required wire:model="form.message" placeholder="Nội dung cần hỗ trợ"></textarea><br>
                    <button class="global-button" type="submit">Gửi thông tin</button>

                </form>
            </div>

        </div>
        <div class="page-custom-footer">
            <a href="https://nurui.fueko.net">Datefession</a>
            <span>Thoughts, stories and ideas</span>
        </div>
    </div>
</div>
