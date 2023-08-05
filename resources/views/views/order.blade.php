<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>
    <div  class="order">
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
                    <div class="order-detail-conten-first">
                        <p>UB2307291929343026</p>
                    </div>

                    <div id="order1" class="order-detail-conten-second">
                        <div style="width: 23%; display: flex; justify-content: center; align-items: center;">
                            <img src="/img/56d9480ee6ee8e23.jpg" alt="">
                        </div>
                        <div style="width: 54%; margin-left: 10px;">
                            <p>Giá trị đơn hàng:??????vnđ </p>

                            <p>Hoa hồng:??????vnđ</p>

                            <p>Tổng thực nhận:??????vnđ</p>
                        </div>
                        <div class="order-btn">
                            <button>Gửi đơn</button>
                        </div>
                    </div>

                    <div id="order2" class="order-detail-conten-second">
                        <div style="width: 23%; display: flex; justify-content: center; align-items: center;">
                            <img src="/img/silit.png" alt="">
                        </div>
                        <div style="width: 54%;">
                            <p>Giá trị đơn hàng:1500vnđ </p>

                            <p>Hoa hồng:2000vnđ</p>

                            <p>Tổng thực nhận:18000vnđ</p>
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
</html>
