<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn phương thức nạp tiền</title>
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
                    <button id="recharge">dgpay</button>
                   </div>
        </div>
    </div>
</body>
<script>
    document.getElementById('recharge').onclick = function() {
            window.location.href = 'recharge.html';
        };


        document.getElementById('home-luachon').onclick = function() {
            window.location.href = 'home.html';
        };
</script>
</html>
