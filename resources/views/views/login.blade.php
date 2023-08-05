<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
<div id="app">
    <div class="pr-box">
        <div class="login-box">
            <div class="language">
                <img src="{{asset('assets/img/tải xuống.png')}}" alt="language">
            </div>

            <div class="welcome">
                <div class="welcome-text">
                    Đăng nhập
                </div>
            </div>

            <div class="welcome-img">
                <img src="{{asset('assets/img/icon2.74d4287d.png')}}" alt="cart">
            </div>
        </div>
    </div>
    <div id="login" class="form-login">
        <div class="form-container">
            <form>
                <div class="login-sdt">
                    <div>+84</div>
                    <input class="login" type="text" id="phone" placeholder="Vui lòng nhập điện thoại">
                </div>
                <input class="chung" type="password" id="password" placeholder="Vui lòng nhập mật khẩu của bạn">
                <input id="submit" style="background-color:#ffc91b ;color: #000;" class="chung" type="submit"
                       value="Đăng nhập">
                <a class="register" href="{{route('register')}}" style="text-align: center">Đăng kí</a>
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
        // get csrf token value
        const CSRF_TOKEN = '{{ csrf_token() }}';
        $(document).ajaxStart(function() {
            $("#loading").fadeIn();
        });

        $(document).ajaxStop(function() {
            $("#loading").fadeOut();
        });
        $('#submit').on('click', function (event) {
            event.preventDefault();
            // get user inputs
            let phone = $('#phone').val();
            let password = $('#password').val();

            $.ajax({
                url: '/login',  // replace with your Login API route
                method: 'POST',
                data: {
                    "_token": CSRF_TOKEN,
                    "phone": phone,
                    "password": password
                },
                dataType: 'JSON',
                success: function (response) {
                    if (response.status === 'success') {
                        window.location.href = '/';   // Replace with your dashboard route
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi',
                            text: 'Cung cấp không phù hợp với hồ sơ của chúng tôi.'
                        });
                    }
                },
                error: function(response){
                    console.log(response);
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: 'Xảy ra lỗi không mong muốn. Vui lòng thử lại.'
                    });
                }
            });
        });
    });
</script>

</body>


</html>