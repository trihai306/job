<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Của tôi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .text-white {
            color: white;
        }
        .skiptranslate {
            background: #000;
        }
    </style>
</head>

<body>
@include('components.lang')
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
                    <p>Mã mời: <span
                            style="font-weight: bold; font-style: italic; margin-top: 5px;">{{Auth::user()->code}}</span>
                    </p>
                </div>
            </div>

            {{--            <div class="yourname-sodu1">--}}
            {{--                <div class="yourname-sodu2">--}}
            {{--                    <p>Số dư hiện tại</p>--}}
            {{--                    <p style="font-weight: bold; font-size: 22px;">₫ {{Auth::user()->money}}</p>--}}
            {{--                    <p>Số dư đóng băng</p>--}}
            {{--                    <p style="font-weight: bold; font-size: 22px;">₫ {{Auth::user()->freezing_money}}</p>--}}
            {{--                    <div class="{{asset('assets/yourname-sodu2-img')}}">--}}
            {{--                        <img style="width: 25px;" src="{{asset('assets/img/sum.png')}}" alt="">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
    {{--    <div class="yourname-second">--}}
    {{--    </div>--}}
    <h5 class="text-center text-white my-2">Lịch sử nạp tiền</h5>
    <div class="container table-responsive py-5">
        <table class="table table-dark table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Số tiền</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $key => $payment)
                <tr>
                    <td>{{number_format($payment->money)}} VNĐ</td>
                    <td>{{$payment->created_at}}</td>
                    <td>
                        @if($payment->status == 1)
                            <span class="badge badge-warning">Đang chờ</span>
                        @elseif($payment->status == 0)
                            <span class="badge badge-success">Thành công</span>
                        @else
                            <span class="badge badge-danger">Thất bại</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">
        {{ $payments->links('vendor.pagination', ['paginator' => $payments ]) }}
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
<style>
    .VIpgJd-ZVi9od-l4eHX-hSRGPd {
        display: none !important;
    }
</style>

</body>
</html>
