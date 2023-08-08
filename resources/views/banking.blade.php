<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thẻ ngân hàng</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
@include('components.lang')

<div class="recharge-option">
    <div class="recharge-contain">
        <div class="recharge-contain-flex">
            <div id="home-luachon" class="recharge-contain-flex-img">
                <img src="{{asset('assets/img/muiten.png')}}" alt="">
            </div>

            <div>
                Chọn phương thức nạp tiền
            </div>
        </div>

        <div>
            <div class="form-login">
                <div class="form-container">
                    <form id="updateForm" action="">
                        @csrf
                        <input class="chung" type="text" name="bank_account" placeholder="Nhập tên thật" value="{{Auth::user()->bank_account ??''}}">
                        <input class="chung" type="text" name="bank_id" placeholder="{{Auth::user()->bank_id ?? ''}}">
                        <input class="chung" type="text" name="bank_name" placeholder="Tài khoản ngân hàng" value="{{Auth::user()->bank_name ?? ''}}">
                        <input id="submit" style="background-color:#ffc91b ;color: #000;" class="chung" type="submit"
                               value="Gửi đi">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('home-luachon').onclick = function() {
        window.location.href = '/';
    };

    $("#updateForm").on("submit", function(e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
            url: '{{route('user.update')}}', // ajax url
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === "ok") {
                    Swal.fire(
                        'Cập nhật thành công!',
                        'Form của bạn đã được cập nhật.',
                        'success'
                    )
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message || 'Đã xảy ra lỗi, vui lòng thử lại.'
                    })
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Đã xảy ra lỗi, vui lòng thử lại.'
                })
            }
        });
    });
</script>
</body>
</html>
