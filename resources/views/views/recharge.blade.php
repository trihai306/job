<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nạp tiền</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .border-class {
            border: 1px solid #000; /* Đặt màu viền của bạn */
        }
    </style>
</head>
<body>
<div class="recharge-option">
    <div class="recharge-contain">
        <form action="">
            <div class="recharge-contain-flex">
                <div id="home-luachon" class="recharge-contain-flex-img">
                    <a href="/">  <img src="{{asset('assets/img/muiten.png')}}" alt=""></a>
                </div>
                <div>
                    Nạp tiền
                </div>
            </div>

            <div class="recharge">
                <div class="recharge-img1">
                    <img src="{{asset('assets/img/imgre.png')}}" alt="">
                </div>
                <div class="recharge-bg">
                    <div style="padding-bottom: 20px;">
                        Số tiền nạp
                    </div>

                    <div class="recharge-bg-input">
                        <input type="text" placeholder="0" name="money">
                        <input type="hidden" name="type" value="nạp">
                        @csrf
                    </div>
                </div>

                <div class="recharge-img2">
                    <img src="{{asset('assets/img/90l.png')}}" alt="">
                    <p style="margin-left: 10px;">Phương thức thanh toán</p>
                </div>

                <div class="recharge-box">
                    <p>Bank</p>
                    <p>momo</p>
                    <p>QR</p>
                    <p>Zalo</p>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <button id="">Tạo lệnh nạp tiền</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {

        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                let x = document.querySelector(".recharge-box");
                x.style.display = "flex";
            }, 1000);

            document.getElementById('home-luachon').onclick = function() {
                window.location.href = '/';
            };
        });

        var pTags = document.querySelectorAll('.recharge-box p');
        for (let i = 0; i < pTags.length; i++) {
            pTags[i].addEventListener('click', function() {
                for (let j = 0; j < pTags.length; j++) {
                    pTags[j].classList.remove('border-class');
                }
                this.classList.add('border-class');
            });
        }

        $('form').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '{{route('recharge')}}',
                data: formData,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        });
    });
</script>
</body>
</html>