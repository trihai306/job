<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Của tôi</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <style>
        .text-white {
            color: white;
        }
    </style>
</head>

<body>
    <div class="yourname">
        <div class="yourname-container">
            <div class="yourname-fist">
                <div>
                    <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                </div>

                <div class="yourname-detail">
                    <div>
                        <img src="{{asset('assets/img/imgyourname.jpg')}}" alt="">
                    </div>

                    <div style="margin-left: 20px;">
                        <p style="margin-bottom: 5px;">{{Auth::user()->phone}}</p>
                        <p>Mã mời: <span style="font-weight: bold; font-style: italic; margin-top: 5px;">{{Auth::user()->code}}</span>
                        </p>
                    </div>
                </div>

                <div class="yourname-sodu1">
                    <div class="yourname-sodu2">
                        <p>Số dư hiện tại</p>
                        <p style="font-weight: bold; font-size: 22px;">₫ {{Auth::user()->money}}</p>
                        <p>Số dư đóng băng</p>
                        <p style="font-weight: bold; font-size: 22px;">₫ {{Auth::user()->freezing_money}}</p>
                        <div class="{{asset('assets/yourname-sodu2-img')}}">
                            <img style="width: 25px;" src="{{asset('assets/img/sum.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="yourname-second">
            <div class="yourname-second-container">
                <div class="yourname-second-img">
                    <div id="nap1">
                        <a href="{{route('recharge')}}">
                            <img src="{{asset('assets/img/db8666_92x92.0113e1cf.png')}}" alt="">
                            <p>nạp tiền</p>
                        </a>
                    </div>

                    <div id="nap2">
                        <a href="{{route('moneyout')}}">
                            <img src="{{asset('assets/img/5ecebe_92x92.68d4f142.png')}}" alt="">
                            <p>rút tiền</p>
                        </a>
                    </div>

                    <div id="nap3">
                        <a href="{{route('banking')}}">
                            <img src="{{asset('assets/img/thenganhang.png')}}" alt="">
                            <p>Thẻ ngân hàng</p>
                        </a>
                    </div>
                </div>


            </div>
            <div class="trungtapdichvu">
                <div style="margin-bottom: 20px;" class="trungtapdichvu-img1">
                   <img src="{{asset('assets/img/90l.png')}}" alt="">
                   <span style="margin-left: 5px;">Trung tâm dịch vụ</span>
                </div>

                <div class="trungtapdichvu-item aaa">
                      <div>
                       <img src="{{asset('assets/img/items.png')}}" alt="">
                       <a href="{{ route('history-deposit') }}" class="text-white">Nhật kí nạp tiền</a>
                      </div>

                      <div>
                       <img style="width: 20px;" src="{{asset('assets/img/muiten.png')}}" alt="">
                      </div>
                </div>
                <div class="trungtapdichvu-item">
                    <div>
                     <img src="{{asset('assets/img/items.png')}}" alt="">
                     <a href="{{ route('history-withdraw') }}" class="text-white">Hồ sơ rút tiền</a>
                    </div>

                    <div>
                     <img style="width: 20px;" src="{{asset('assets/img/muiten.png')}}" alt="">
                    </div>
              </div>
              <div class="trungtapdichvu-item">
                <div>
                 <img src="{{asset('assets/img/items.png')}}" alt="">
                 <p>Thẻ ngân hàng</p>
                </div>

                <div>
                 <img style="width: 20px;" src="{{asset('assets/img/muiten.png')}}" alt="">
                </div>
          </div>

          <div class="btn-yourname">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf  <!-- Needed to prevent CSRF attacks -->
                  <button type="submit">Đăng xuất</button>
              </form>
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
</body>
</html>
