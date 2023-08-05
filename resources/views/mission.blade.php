<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhiệm vụ</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.2/dist/sweetalert2.min.css">
</head>

<body>
    <div class="mission">
        <div class="account mission-contaner">
            <div style="margin-top: 0 ; height: 430px;" class="conts">
                <div class="conts-items">
                    <div class="conts-items1">
                        <div class="conts-items-color">
                            Số dư hiện tại
                        </div>

                        <div style="font-size: 20px;">
                            <p><span style="margin-bottom: 100px;">đ</span>{{Auth::user()->money}}</p>
                        </div>
                    </div>

                    <div class="conts-items2">
                        <img src="{{asset('assets/img/money.png')}}" alt="">
                    </div>
                </div>

                <div class="miss-counter">
                    <div class="miss-counter-duong">

                    </div>
                    <div class="miss-miss-counter">
                        <div>
                            <p>Số lượng hoàng thành</p>
                            <p style="font-size: 16px; font-weight: bold; padding-top:5px ;">0</p>
                        </div>

                        <div style="padding-left: 8px;">
                            <p>Nhiệm vụ</p>
                            <p style="font-size: 16px; font-weight: bold; padding-top:5px">
                                {{Auth::user()->level->price}}%</p>
                        </div>

                        <div style=" margin-top: 20px;">
                            <p>Hoa hồng</p>
                            <p style="font-size: 16px; font-weight: bold; padding-top:5px"><span>đ</span>0</p>
                        </div>


                    </div>
                </div>

                <div class="mission-button">
                    <button>Chấp nhận đơn hàng</button>
                </div>
            </div>

        </div>
        <div class="mission-slider">
            <div class="mission-slider-contain">
                <div style="display: flex;" class="slidler-items">
                    <div>
                        ******2705
                    </div>

                    <div>
                        Vinh dự
                    </div>

                    <div>
                        ₫5100000
                    </div>
                </div>

                <div class="slidler-items">
                    <div>
                        ******1234
                    </div>

                    <div>
                        Vinh dự
                    </div>

                    <div>
                        ₫5200000
                    </div>
                </div>

                <div class="slidler-items">
                    <div>
                        ******2722
                    </div>

                    <div>
                        Vinh dự
                    </div>

                    <div>
                        ₫5000000
                    </div>
                </div>

                <div class="slidler-items">
                    <div>
                        ******1092
                    </div>

                    <div>
                        Vinh dự
                    </div>

                    <div>
                        ₫2000000
                    </div>
                </div>

                <div class="slidler-items">
                    <div>
                        ******4529
                    </div>

                    <div>
                        Vinh dự
                    </div>

                    <div>
                        ₫1900000
                    </div>
                </div>

                <div class="slidler-items">
                    <div>
                        ******2190
                    </div>

                    <div>
                        Vinh dự
                    </div>

                    <div>
                        ₫3220000
                    </div>
                </div>
            </div>
        </div>
        <div class="home-khuvuc">
            <div>
                <img src="/img/90l.png" alt="">
                <span>Liên doanh</span>
            </div>
        </div>

        <div class="account">
            <div style="height: 200px;" class="conts">

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
    </div>
</body>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.2/dist/sweetalert2.min.js"></script>
<script src="{{ asset('assets/js/common.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.mission-button button').on('click', function() {
            Swal.fire({
                title: 'Xác nhận',
                text: "Bạn có muốn lấy đơn hàng không?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, tôi muốn lấy!',
                cancelButtonText: 'Không, hủy bỏ!'
            }).then((result) => {
                if (result.isConfirmed) {
                    callApi('/get-mission', 'GET', {}, null,
                        function(res) {
                            Swal.fire(
                                'Hoàn thành!',
                                'Bạn đã lấy đơn hàng',
                                'success'
                            )
                        }, function(res) {
                            Swal.fire(
                                'Lôi!',
                                'Không mong muốn!',
                                'error'
                            )
                        }
                    )
                } else {
                    Swal.fire(
                        'Hủy bỏ!',
                        'Bạn đã hủy bỏ lấy đơn hàng',
                        'error'
                    )
                }
            });
        });
    });
</script>

</html>