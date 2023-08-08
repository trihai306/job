<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rút tiền</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>
@include('components.lang')

    <div class="moneyout">
        <div class="moneyout-container recharge-contain">
            <div class="recharge-contain-flex">
                <div id="home-luachon" class="recharge-contain-flex-img">
                    <img src="{{asset('assets/img/muiten.png')}}" alt="">
                </div>

                <div>
                    Rút tiền
                </div>
            </div>


        </div>

        <div class="moneyout-1">
            <p style="opacity: .8;">Số dư tài khoản</p>
            <p style="font-weight: bold; font-size: 20px;">₫15000</p>
        </div>

        <div class="home-slider">
            <div class="home-slider-img moneyout-slider">
                <div class="money-scroll">
                    <div class="home-slider-items moneyout-slider-column">
                        <div style="opacity: .8;">
                            <p>Sô tiền cần rút</p>
                        </div>

                        <div>
                            <input type="text" placeholder="0.00">
                        </div>
                    </div>

                    <select name="" id="">
                        <option value="">******</option>
                        <option value="">******</option>
                    </select>

                    <div class="metroi">
                        <input type="password" placeholder="Mật khẩu quỹ">
                    </div>

                    <div style="font-size: 17px; margin-top: 20px;">
                        phí sử lý : <span>1%</span>
                    </div>
                </div>


            </div>

        </div>
        <div class="moneyout-btn">
            <button id="">Rút tiền ngay lập tức</button>
        </div>
    </div>


</body>
<script>
    document.getElementById('home-luachon').onclick = function() {
            window.location.href = '/';
        };
</script>
</html>
