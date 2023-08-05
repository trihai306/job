<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.2/dist/sweetalert2.min.css">
</head>

<body>
    <div class="order">
        <div style="min-height: 100vh;" class="order-contaner">
            <div class="order-text">
                <p><span>Lời phản hồi:</span>Trạng thái nhiệm vụ, trạng thái hoa hồng sẽ được cập nhật khi thanh toán
                    đơn hàng hoàn tất. Sau khi
                    đơn hàng được hoàn thành, toàn bộ số dư và hoa hồng sẽ được hoàn trả về số dư tài khoản của thành
                    viên.</p>
            </div>

            <div class="order-detail">
                <div class="order-detail-contaner">
                    <div class="order-detail-left">
                        <p>Giao dịch đang chờ xử lý</p>
                    </div>

                    <div class="order-detail-right">
                        <p>Hoàn thành</p>
                    </div>
                </div>

                <div class="order-detail-conten">
                    @foreach($orders_pending as $key => $order)
                    <div class="my-2">
                        <div class="order-detail-conten-first">
                            <p>UB2307291929343026</p>
                        </div>

                        <div id="order1" class="order-detail-conten-second">
                            <div style="width: 23%; display: flex; justify-content: center; align-items: center;">
                                <img src="/img/56d9480ee6ee8e23.jpg" alt="">
                            </div>
                            <div style="width: 54%; margin-left: 10px;">
                                <p>Giá trị đơn hàng: {{ number_format($order->product->price) }} vnđ </p>

                                <p>Hoa hồng: {{ number_format($order->product->level->price) }} vnđ</p>

                                <p>Tổng thực nhận: {{ number_format($order->product->price *
                                    $order->product->level->price) }} vnđ</p>
                            </div>
                            <div class="order-btn">
                                <button type="button" class="send_order" data-id={{ $order->id }}>Gửi đơn</button>
                                {{-- <form action="{{ route('send-order', $order->id) }}" method="post">
                                    @csrf
                                    <button type="submit">Gửi đơn</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($orders_done as $key => $order)
                    <div class="my-2">
                        <div id="order2" class="order-detail-conten-second">
                            <div style="width: 23%; display: flex; justify-content: center; align-items: center;">
                                <img src="/img/silit.png" alt="">
                            </div>
                            <div style="width: 54%;">
                                <p>Giá trị đơn hàng: {{ number_format($order->product->price) }}vnđ </p>

                                <p>Hoa hồng: {{ number_format($order->product->level->price) }}vnđ</p>

                                <p>Tổng thực nhận: {{ number_format($order->product->price *
                                    $order->product->level->price) }}vnđ</p>
                            </div>

                        </div>
                    </div>

                    @endforeach

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

    </div>

</body>
<script>
    let x = document.querySelector('.order-detail-right');
      let y = document.getElementById('order2');
      let z = document.getElementById('order1');

      let x2 = document.querySelector('.order-detail-left');
      x.onclick = function(){
        // event.preventDefault();
         y.style.display = "flex";
        //  y.classList.add("order-detail-conten-second");
         z.style.display = "none";
      }

      x2.onclick = function(){
        // event.preventDefault();
         y.style.display = "none";
         z.style.display = "flex";
      }


</script>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.2/dist/sweetalert2.min.js"></script>
<script src="{{ asset('assets/js/common.js') }}"></script>
<script>
    $('.send_order').click(function () {
        let id = $(this).data('id');
        callApi('/send-order/' + id, 'POST', {}, null,
            function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Gửi đơn hàng thành công! Xin vui lòng chờ tải lại trang.',
                    showConfirmButton: false,
                    timer: 1500
                })
                setTimeout(function () {
                    location.reload();
                }, 1500)
            },
            function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gửi đơn hàng thất bại',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        )
    })
</script>

</html>