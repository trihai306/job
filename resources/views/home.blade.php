<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <style>
    </style>
</head>

<body>
@include('components.lang')

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="{{asset('assets/img/22c0e5189391fe51.jpg')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{asset('assets/img/b646500221c6c881.jpg')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{asset('assets/img/c35f7105a74e7082.jpg')}}" alt="">
            </div>

            <div class="slide">
                <img src="{{asset('assets/img/e5ce379c0681e05c.jpg')}}" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <!-- man -->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <div class="home-main">
        <div class="home-contaner">
            <div class="home-money-pink">
                <div id="recharge-option">
                    <a href="{{route('recharge')}}">
                        <img src="{{asset('assets/img/db8666_92x92.0113e1cf.png')}}" alt="">
                        <p style="color: #ffffff">nạp tiền</p>
                    </a>
                </div>
                <div id="recharge-moneyout">
                    <a href="">
                        <img src="{{asset('assets/img/5ecebe_92x92.68d4f142.png')}}" alt="">
                        <p>rút tiền</p>
                    </a>
                </div>
            </div>

            <div class="home-box-none">

            </div>

            <div class="account">
                <div class="conts">
                    <div class="conts-items">
                        <div class="conts-items1">
                            <div class="conts-items-color">
                                Số dư hiện tại
                            </div>

                            <div style="font-size: 20px;">
                                <p><span style="margin-bottom: 100px;">đ </span>{{Auth::user()->money}}</p>
                            </div>
                        </div>

                        <div class="conts-items2">
                            <img src="{{asset('assets/img/money.png')}}" alt="">
                        </div>
                    </div>

                    <div class="conts-items">
                        <div class="conts-items1">
                            <div class="conts-items-color">
                                Số dư đóng băng
                            </div>

                            <div style="font-size: 20px;">
                                <p><span style="margin-bottom: 100px;">đ</span> {{Auth::user()->freezing_money }}</p>
                            </div>
                        </div>

                        <div class="conts-items2">
                            <img src="{{asset('assets/img/money.png')}}" alt="">
                        </div>
                    </div>

                    <div class="conts-items">
                        <div class="conts-items1">
                            <div class="conts-items-color">
                                Hoa hồng hôm nay
                            </div>

                            <div style="font-size: 20px;">
                                <p><span style="margin-bottom: 100px;">đ</span>1500</p>
                            </div>
                        </div>

                        <div class="conts-items2">
                            <img src="{{asset('assets/img/money.png')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
            <div class="home-khuvuc">
                <div>
                    <img src="{{asset('assets/img/90l.png')}}" alt="">
                    <span>khu vực nhiệm vụ</span>
                </div>
            </div>

            <div class="vip-list">
                <div id="vip1-link" class="vip-list-contaner">
                    <div class="vipdopng">
                        <img src="{{asset('assets/img/vipdo.png')}}" alt="">
                        <div class="vipdo-text">VIP1</div>

                    </div>

                    <div class="vip-center">
                        <img src="{{asset('assets/img/vip.png')}}" alt="">
                    </div>

                    <div class="image-container">
                        <img src="{{asset('assets/img/xanh.png')}}" alt="">
                        <div class="image-overlay">
                            <p style="padding-left: 5px;">Tiền lợi nhuận 20%</p>
                        </div>
                    </div>
                </div>

                <div class="vip-list-contaner">
                    <div class="vip-khoa">
                        <img src="{{asset('assets/img/khoa.png')}}" alt="">
                    </div>
                    <div class="vipdopng">
                        <img src="{{asset('assets/img/vipdo.png')}}" alt="">
                        <div class="vipdo-text">VIP2</div>

                    </div>

                    <div class="vip-center">
                        <img src="{{asset('assets/img/vip.png')}}" alt="">
                    </div>

                    <div class="image-container">
                        <img src="{{asset('assets/img/xanh.png')}}" alt="">
                        <div class="image-overlay">
                            <p style="padding-left: 5px;">Tiền lợi nhuận 20%</p>
                        </div>
                    </div>
                </div>

                <div class="vip-list-contaner">
                    <div class="vip-khoa">
                        <img src="{{asset('assets/img/khoa.png')}}" alt="">
                    </div>
                    <div class="vipdopng">
                        <img src="{{asset('img/vipdo.png')}}" alt="">
                        <div class="vipdo-text">VIP3</div>

                    </div>

                    <div class="vip-center">
                        <img src="{{asset('assets/img/vip.png')}}" alt="">
                    </div>

                    <div class="image-container">
                        <img src="{{asset('assets/img/xanh.png')}}" alt="">
                        <div class="image-overlay">
                            <p style="padding-left: 5px;">Tiền lợi nhuận 20%</p>
                        </div>
                    </div>
                </div>

                <div class="vip-list-contaner">
                    <div class="vip-khoa">
                        <img src="{{asset('assets/img/khoa.png')}}" alt="">
                    </div>
                    <div class="vipdopng">
                        <img src="{{asset('img/vipdo.png')}}" alt="">
                        <div class="vipdo-text">VIP4</div>

                    </div>

                    <div class="vip-center">
                        <img src="{{asset('assets/img/vip.png')}}" alt="">
                    </div>

                    <div class="image-container">
                        <img src="{{asset('assets/img/xanh.png')}}" alt="">
                        <div class="image-overlay">
                            <p style="padding-left: 5px;">Tiền lợi nhuận 20%</p>
                        </div>
                    </div>
                </div>

                <div class="vip-list-contaner">
                    <div class="vip-khoa">
                        <img src="{{asset('assets/img/khoa.png')}}" alt="">
                    </div>
                    <div class="vipdopng">
                        <img src="{{asset('img/vipdo.png')}}" alt="">
                        <div class="vipdo-text">VIP5</div>

                    </div>

                    <div class="vip-center">
                        <img src="{{asset('assets/img/vip.png')}}" alt="">
                    </div>

                    <div class="image-container">
                        <img src="{{asset('assets/img/xanh.png')}}" alt="">
                        <div class="image-overlay">
                            <p style="padding-left: 5px;">Tiền lợi nhuận 20%</p>
                        </div>
                    </div>
                </div>

                <div class="vip-list-contaner">
                    <div class="vip-khoa">
                        <img src="{{asset('assets/img/khoa.png')}}" alt="">
                    </div>
                    <div class="vipdopng">
                        <img src="{{asset('img/vipdo.png')}}" alt="">
                        <div class="vipdo-text">VIP6</div>

                    </div>

                    <div class="vip-center">
                        <img src="{{asset('assets/img/vip.png')}}" alt="">
                    </div>

                    <div class="image-container">
                        <img src="{{asset('assets/img/xanh.png')}}" alt="">
                        <div class="image-overlay">
                            <p style="padding-left: 5px;">Tiền lợi nhuận 20%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-khuvuc">
                <div>
                    <img src="/img/90l.png" alt="">
                    <span>Chi tiết hoa hồng</span>
                </div>
            </div>
        </div>
    </div>

    <div class="home-slider">
        <div class="home-slider-img">
            <div class="home-slider-scroll">
                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******122</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫121212
                    </div>
                </div>

                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******123</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫6843534
                    </div>
                </div>

                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******123</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫683170
                    </div>
                </div>


                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******123</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫683890
                    </div>
                </div>

                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******099</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫683121
                    </div>
                </div>

                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******212</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫6831210
                    </div>
                </div>

                <div class="home-slider-items">
                    <div style="opacity: .5;">
                        <p>******458</p>
                        <p>Vinh dự</p>
                    </div>

                    <div style="font-weight: bold;">
                        ₫683122
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="footer">
        <div class="modal-footer">
            <div>
                <a href="/">
                    <img src="{{asset('assets/img/footer1.png')}}" alt="">
                    <p>Trang chủ</p>
                </a>
            </div>

            <div>
                <a href="{{route('mission')}}">
                    <img src="{{asset('assets/img/footer2.png')}}" alt="">
                    <p>Nhiệm vụ</p>
                </a>
            </div>

            <div>
                <a href="{{route('order')}}">
                    <img src="{{asset('assets/img/footer3.png')}}" alt="">
                    <p>Đơn hàng</p>
                </a>
            </div>

            <div>
                <a href="{{route('account')}}">
                    <img src="{{asset('assets/img/footer4.png')}}" alt="">
                    <p>Của tôi</p>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function () {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 3000);



    </script>
</body>

</html>
