<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <style>
        #loading {
            display: none;
            position: fixed;
            z-index: 100;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0,0.6);
            text-align: center;
            color: white;
            padding-top: 20%;
        }
    </style>
</head>

<body>
@include('components.lang')

<div id="app">
    <div class="pr-box">
        <div class="login-box">
            <div class="language">
                <img src="{{asset('assets/img/tải xuống.png')}}" alt="language">
            </div>

            <div class="welcome">
                <div class="welcome-text">
                    Đăng Ký
                </div>
            </div>

            <div class="welcome-img">
                <img src="{{asset('assets/img/icon2.74d4287d.png')}}" alt="cart">
            </div>
        </div>
    </div>
    <div id="signup" class="form-login">
        <div class="form-container">
            <form>
                <div class="login-sdt">
                    <div>+84</div>
                    <input class="login" type="text" id="phone" placeholder="Vui lòng nhập điện thoại">
                </div>
                <input class="chung" type="password" id="password" placeholder="Vui lòng nhập mật khẩu của bạn">
                <input class="chung" type="password" id="password_confirm" placeholder="Vui lòng nhập lại mật khẩu của bạn">
                <input class="chung" type="text" id="invite_code" placeholder="Vui lòng nhập mã lời mời">
                <input id="submit" style="background-color:#ffc91b ;color: #000;" class="chung" type="submit"
                       value="Đăng Ký">
                <a class="register" href="{{route('login')}}" style="text-align: center">Đăng nhập</a>
            </form>
        </div>
    </div>
</div>

<div id="loading" style="display: none;">
    <h2>Loading...</h2>
</div>

<script src="http://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function () {
        const CSRF_TOKEN = '{{ csrf_token() }}';

        $(document).ajaxStart(function() {
            $("#loading").fadeIn();
        });

        $(document).ajaxStop(function() {
            $("#loading").fadeOut();
        });

        $('#submit').on('click', function (event) {
            event.preventDefault();

            let phone = $('#phone').val();
            let password = $('#password').val();
            let password_confirm = $('#password_confirm').val();
            let invite_code = $('#invite_code').val();

            // Xác thực dữ liệu đầu vào
            if (!phone.trim() || !password.trim() || !password_confirm.trim() || !invite_code.trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: 'Tất cả các trường là bắt buộc.'
                });
                return false;
            }

            // Kiểm tra xem password và password_confirm có khớp nhau không
            if(password !== password_confirm){
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: 'Mật khẩu và mật khẩu xác nhận không khớp.'
                });
                return false;
            }

            // Thêm xác thực số điện thoại
            let phoneRegExp = /^(\+84|0)[3|5|7|8|9][0-9]{8}$/;
            if (!phoneRegExp.test(phone)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: 'Vui lòng nhập một số điện thoại hợp lệ.'
                });
                return false;
            }

            $.ajax({
                url: '/register',
                method: 'POST',
                data: {
                    "_token": CSRF_TOKEN,
                    "phone": phone,
                    "password": password,
                    "invite_code": invite_code
                },
                dataType: 'JSON',
                success: function (response) {
                    if (!response.error) {
                        window.location.href = '/login';
                    } else {
                        // Thêm thông báo lỗi từ phía máy chủ
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi',
                            text: response.message || 'Đăng ký không thành công. Vui lòng thử lại.'
                        });
                    }
                },
                error: function(response){
                    console.log(response);
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: 'Một lỗi bất ngờ xảy ra. Vui lòng thử lại.'
                    });
                }
            });
        });
    });
</script>

</body>



</html>
