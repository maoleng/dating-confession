@php use \Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="en">
@include('components.layouts.head-tag')
<body class="@yield('body-class')">
<div class="global-wrap">
    <div class="section-content-wrap">
        @include('components.layouts.header')
        {{ $slot }}
    </div>
    @include('components.layouts.footer')
</div>
@include('components.layouts.notification')
@include('components.layouts.search')
@stack('page-script')
<script src="{{ asset('assets/js/global.js') }}"></script>
<script src="{{ asset('assets/js/logout.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/res.css') }}">
<script data-navigate-once src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Auth::check() && Auth::user()->hasTransactionUncompleted())
    <script>
        Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: true,
            confirmButtonText: 'Tiếp tục giao dịch',
            showCancelButton: true,
            cancelButtonText: 'Hủy',
            cancelButtonColor: '#d33',
            allowOutsideClick: false,
            timer: null,
        }).fire({
            title: 'Giao dịch chưa hoàn tất',
            text: 'Bạn có giao dịch chưa hoàn tất, bạn muốn?',
            icon: 'info',
        }).then(async (result) => {
            if (result.isConfirmed) {
                Livewire.navigate('{{ route('payment.index') }}')
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                await httpRequest({url: '{{ route('payment.cancel') }}', method: 'POST'})
            }
        })
    </script>
@endif
</body>
</html>
