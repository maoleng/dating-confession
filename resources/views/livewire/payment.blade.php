<article>
    <div id="loop" class="section-loop wrap">
        <div class="items-wrap flex">

            <div class="item-wrap flex post tag-education tag-hash-orange is-image">
                <article style="transform: none;">
                    <div class="item-image" style="background-image: url({{ asset('assets/img/logo.svg') }}); background-size: contain; opacity: 0.4"></div>
                    <p style="font-size: 200%">
                        <b>Thông tin đơn hàng</b>
                    </p>

                    <span style="font-size: 150%">
                        Mã đơn hàng
                    </span>
                    <br>
                    <span style="font-size: 150%">
                        <b>{{ $transaction->code }}</b>
                    </span>
                    <br><br>

                    <span style="font-size: 150%">
                        Mô tả
                    </span>
                    <br>
                    <span style="font-size: 150%">
                        <b>{{ $transaction->note }}</b>
                    </span>

                    <br><br>

                    <span style="font-size: 150%">
                        Số tiền
                    </span>
                    <br>
                    <span style="font-size: 150%">
                        <b>{{ formatMoney($transaction->money) }}đ</b>
                    </span>

                    <br>
                    <br>
                    <span style="font-size: 150%">
                        Giao dịch hết hạn sau:
                    </span>
                    <span style="font-size: 150%">
                        <mark><b style="font-weight: 1000" id="clock"></b></mark>
                    </span>

                    <br>    <br>
                    <span style="font-size: 120%">
                        Gặp khó khăn khi giao dịch? <b>Liên hệ</b>
                    </span>
                    <p id="btn-cancel" class="c-link" style="font-size: 120%">
                        <a style="font-size: 120%" aria-label="link Website">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                            Quay lại
                        </a>
                    </p>

                </article>
            </div>
            <div class="item-wrap flex  tag-hash-red">
                <article style="transform: none;">
                    <p align="center" style="font-size: 200%">
                        <b>Quét mã QR</b>
                    </p>
                    <div id="div-qr" class="" style="width:300px;height:300px;margin:0 auto 20px;border-radius:var(--border-radius-primary);background:no-repeat center center;background-size:contain;background-image: url({{ $transaction->qrUrl }})"></div>
                    <ul id="div-bank" hidden>
                        <li style="font-size: 120%">Ngân hàng: <b id="t-bank">{{ env('BANK_NAME') }}</b>
                            <a class="btn-copy" data-value="#t-bank">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M384 336H192c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16l140.1 0L400 115.9V320c0 8.8-7.2 16-16 16zM192 384H384c35.3 0 64-28.7 64-64V115.9c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1H192c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H256c35.3 0 64-28.7 64-64V416H272v32c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192c0-8.8 7.2-16 16-16H96V128H64z"/></svg>
                            </a>
                        </li>
                        <li style="font-size: 120%">Chủ tài khoản: <b id="t-bank_name">{{ env('BANK_ACCOUNT_NAME') }}</b>
                            <a class="btn-copy" data-value="#t-bank_name">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M384 336H192c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16l140.1 0L400 115.9V320c0 8.8-7.2 16-16 16zM192 384H384c35.3 0 64-28.7 64-64V115.9c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1H192c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H256c35.3 0 64-28.7 64-64V416H272v32c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192c0-8.8 7.2-16 16-16H96V128H64z"/></svg>
                            </a>
                        </li>
                        <li style="font-size: 120%">Số tài khoản: <b id="t-bank_number">{{ env('BANK_ACCOUNT_ID') }}</b>
                            <a class="btn-copy" data-value="#t-bank_number">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M384 336H192c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16l140.1 0L400 115.9V320c0 8.8-7.2 16-16 16zM192 384H384c35.3 0 64-28.7 64-64V115.9c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1H192c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H256c35.3 0 64-28.7 64-64V416H272v32c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192c0-8.8 7.2-16 16-16H96V128H64z"/></svg>
                            </a>
                        </li>
                        <li style="font-size: 120%">Số tiền: <b id="t-bank_money">{{ $transaction->money }}</b>
                            <a class="btn-copy" data-value="#t-bank_money">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M384 336H192c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16l140.1 0L400 115.9V320c0 8.8-7.2 16-16 16zM192 384H384c35.3 0 64-28.7 64-64V115.9c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1H192c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H256c35.3 0 64-28.7 64-64V416H272v32c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192c0-8.8 7.2-16 16-16H96V128H64z"/></svg>
                            </a>
                        </li>
                        <li style="font-size: 120%">Nội dung: <b id="t-bank_message">{{ $transaction->code }}</b>
                            <a class="btn-copy" data-value="#t-bank_message">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M384 336H192c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16l140.1 0L400 115.9V320c0 8.8-7.2 16-16 16zM192 384H384c35.3 0 64-28.7 64-64V115.9c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1H192c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H256c35.3 0 64-28.7 64-64V416H272v32c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192c0-8.8 7.2-16 16-16H96V128H64z"/></svg>
                            </a>
                        </li>
                    </ul>
                    <p align="center" class="c-link">
                        <a onclick="showBankInfo()" id="btn-view_bank" aria-label="link Website">
                            Xem thông tin chuyển khoản
                        </a>
                        <a onclick="showQRCode()" id="btn-view_qr" hidden aria-label="link Website">
                            Xem mã QR
                        </a>
                        |
                        <a aria-label="link Website">
                            Tải mã QR về
                        </a>
                    </p>
                    <p style="font-size: 120%">Nên quét bằng ứng dụng ngân hàng, quét bằng Momo hoặc VNPay, ... có thể sẽ lâu hơn</p>
                </article>
            </div>
        </div>
    </div>

</article>
@push('page-style')
    <style>
        .c-link a {
            padding: 11px 20px;
            border: 0;
        }

        .c-link svg {
            width: 19px;
            height: 19px;
            transition: all 0.2s ease;
            fill: white;
        }

        .c-link a:hover svg {
            fill: var(--gradient-green-end);
        }

        .c-link svg:hover {
            color: var(--gradient-green-end) !important;
            outline: 0 !important;
        }
        a:hover,
        a:focus {
            text-decoration: none !important;
            color: var(--gradient-green-end) !important;
            outline: 0 !important;
            cursor: pointer;
        }

        @media (max-width: 479px) {
            .c-link a {
                padding: 11px 10px;
            }
        }
    </style>

@endpush
@push('page-script')
    <script data-navigate-once src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var clock = document.querySelector('#clock')

        var endTime = new Date('{{ $transaction->expiredAt }}').getTime();

        var iUpdateCountdown = setInterval(updateCountdown, 2000);
        var iValidateTransaction = setInterval(validateTransaction, 2000);

        async function validateTransaction()
        {
            if (window.location.pathname !== '/payment') {
                cancelTransactionInterval()
                return
            }
            const response = await fetch('{{ route('payment.validate') }}')
            const result = await response.json()
            if (result.status === false) {
                cancelTransactionInterval()
                await Swal.fire({
                    title: 'Giao dịch thất bại',
                    text: result.message,
                    icon: "error",
                })
                Livewire.navigate('{{ route('me') }}')
            }
            if (result.status === true) {
                cancelTransactionInterval()
                await Swal.fire({
                    title: 'Giao dịch thành công',
                    text: result.message,
                    icon: "success",
                })
                Livewire.navigate('{{ route('me') }}')
            }
        }

        function updateCountdown()
        {
            if (window.location.pathname !== '/payment') {
                cancelTransactionInterval()
                return
            }
            const now = new Date().getTime()
            const timeDifference = endTime - now

            if (timeDifference > 0) {
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60))
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000)

                const formattedMinutes = minutes < 10 ? `0${minutes}` : `${minutes}`
                const formattedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`

                clock.textContent = `${formattedMinutes}:${formattedSeconds}`
            } else {
                clock.textContent = '00:00'
            }
        }

        function cancelTransactionInterval()
        {
            clearInterval(iUpdateCountdown)
            clearInterval(iValidateTransaction)
        }

        var copyButtons = document.querySelectorAll('.btn-copy')
        copyButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var targetId = this.getAttribute('data-value')
                var targetElement = document.querySelector(targetId)
                var textToCopy = targetElement.innerText || targetElement.textContent
                navigator.clipboard.writeText(textToCopy).then(function () {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "success",
                        title: `Đã sao chép ${textToCopy}`
                    })
                })
            })
        })


        function showBankInfo() {
            document.getElementById('div-qr').style.display = 'none'
            document.getElementById('btn-view_bank').style.display = 'none'
            document.getElementById('div-bank').removeAttribute('hidden')
            document.getElementById('btn-view_qr').style.display = 'inline'
        }

        function showQRCode() {
            document.getElementById('div-qr').style.display = 'block'
            document.getElementById('btn-view_bank').style.display = 'inline'
            document.getElementById('div-bank').setAttribute('hidden', 'true')
            document.getElementById('btn-view_qr').style.display = 'none'
        }

        document.querySelector('#btn-cancel').addEventListener('click', async function (e) {
            result = await Swal.fire({
                title: 'Bạn có chắc sẽ hủy giao dịch?',
                showCancelButton: true,
                cancelButtonText: 'Không',
                confirmButtonText: 'Có',
            })

            if (result.isConfirmed) {
                Livewire.navigate('{{ route('me') }}')
            }


        })

    </script>
@endpush
