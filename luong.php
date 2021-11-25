<!DOCTYPE html>
<html>

<head>
    <title>Lương</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <?php
        session_start();
        if(!isset($_SESSION['username'])){
             echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'GDdangnhap.php'. '">';  
             
        }
    ?> 
    <style>
        .thongbao {
            background-color: #f5ffd1;
            padding: 20px;
        }

    </style>
</head>

<body>
    <div class="header text-light" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-dark p-4">
            <h1 class="navbar-brand" href="index.html">)BAC(</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="trangchu">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="luong">Lương thưởng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="phongban">Phòng ban</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link text-white" href="doimatkhau">Đổi mật khẩu</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="true">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/active.jpg" alt="Los Angeles" width="100%" height="100%">
                    <div class="carousel-caption">
                        <h3>Năng động</h3>
                        <p>Chúng tôi năng động!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/creative.jpg" alt="Chicago" width="100%" height="100%">
                    <div class="carousel-caption">
                        <h3>Sáng tạo</h3>
                        <p>Chúng tôi sáng tạo!</p>
                    </div>
                </div>

                <div class="carousel-item active">
                    <img class="img-fluid" src="./images/united.jpg" alt="Chicago" width="100%" height="100%">
                    <div class="carousel-caption">
                        <h3>Đoàn kết</h3>
                        <p>Chúng tôi đoàn kết!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon"></span> -->
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <!-- <span class="carousel-control-next-icon"></span> -->
            </a>
        </div>
    </div>

    <div class="container-fluid" style="margin-top:30px;padding: 20px;background-color: aliceblue;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#luong"><strong>Lương</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#thuong"><strong>Thưởng</strong></a>
            </li>
        </ul>

        <div class="tab-content">
            <!-- luong tab -->
            <div id="luong" class="tab-pane active">
                <div class="row">
                    <div class="col-lg-4">

                        <span class="fakeimg">
                            <img src="./images/luong.jpg" alt="Luong">
                        </span>
                        <hr>
                        <h2>Bộ phận kế toán</h2>
                        <h4>Thời gian phát lương từ 8h - 16h các ngày làm việc.</h4>
                        <p class="mt-3">Điện thoại liên hệ : 0123456789</p>
                        <hr class="d-lg-none">
                    </div>
                    <div class="col-lg-8">
                        <div class="thongbao">
                            <h2>THÔNG BÁO LƯƠNG</h2>
                            <h5>Thông báo lương tháng 11 - 2020</h5>
                            <p>Hiện tại đã có lương tháng 11. Nhân dân có thể nhận lương qua tài khoản hoặc xuống bộ
                                phận
                                tài
                                chính để nhận lương.</p>
                            <p><i>Thời gian thông báo : 18h ,30/11/2020</i></p>
                        </div>
                        <br>
                        <div class="thongbao">
                            <h2>THÔNG BÁO LƯƠNG</h2>
                            <h5>Thông báo lương tháng 10 - 2020</h5>
                            <p>Hiện tại đã có lương tháng 10. Nhân dân có thể nhận lương qua tài khoản hoặc xuống bộ
                                phận
                                tài
                                chính để nhận lương.</p>
                            <p><i>Thời gian thông báo : 18h ,30/10/2020</i></p>
                        </div>
                        <br>
                        <div class="thongbao">
                            <h2>THÔNG BÁO LƯƠNG</h2>
                            <h5>Thông báo lương tháng 9 - 2020</h5>
                            <p>Hiện tại đã có lương tháng 9. Nhân dân có thể nhận lương qua tài khoản hoặc xuống bộ phận
                                tài
                                chính để nhận lương.</p>
                            <p><i>Thời gian thông báo : 18h ,30/09/2020</i></p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- thuong tab -->
            <div id="thuong" class="container tab-pane fade" style="margin-top:30px">
                <h2 style="margin-bottom: 20px;">Danh sách nhân viên được nhận thưởng dự án tháng 10.</h2>
                <table class="table table-bordered table-hover table-responsive-lg px-3">
                    <tr>
                        <th>Mã NV</th>
                        <th>Tên nhân viên</th>
                        <th>Chức vụ</th>
                        <th>Thưởng</th>
                    </tr>

                    <tr class="top3">
                        <td>NV122</td>
                        <td>R.Benia</td>
                        <td>Chuyên viên</td>
                        <td>5.000.000 VND</td>
                    </tr>

                    <tr class="top3">
                        <td>NV245</td>
                        <td>L.Fona</td>
                        <td>Chuyên viên</td>
                        <td>5.000.000 VND</td>
                    </tr>

                    <tr class="top3">
                        <td>NV250</td>
                        <td>G.Toseli</td>
                        <td>Chuyên viên</td>
                        <td>5.000.000 VND</td>
                    </tr>
                    <tr>
                        <td>NV042</td>
                        <td>Nguyên Trần</td>
                        <td>Chuyên viên</td>
                        <td>2.000.000 VND</td>
                    </tr>

                    <tr>
                        <td>NV066</td>
                        <td>Mahtolenia</td>
                        <td>Chuyên viên</td>
                        <td>2.000.000 VND</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <div class="footer container-fluid bg-white">
		<div class="row" style="padding: 20px; margin-top: 10px;background-color:#e0e0e0">
			<div class="col-sm-3 ">
				<h5>Liên hệ:</h5>
				<div>
					<img src="images/facebook.svg" style="width: 19px;height: 19px;">
					<a href="http://freewebsitetemplates.com/go/facebook/" id="fb">Facebook</a>
				</div>
				
				<div>
					<img src="images/twitter.svg" style="width: 19px;height: 19px;">
					<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">Twitter</a>
				</div>
				<div>
					<img src="images/google-plus.svg" style="width: 19px;height: 19px;">
					<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">Google+</a>
				</div>
			</div>
			<div class="col-sm-5">
				<h5>Địa chỉ:</h5>
				<div>
					<p><a href="#">30 Trần Phú, P. Mộ Lao, Hà Đông, Hà Nội</a></p>
					<p><a href="#">141 Chiến Thắng, Tân Triều, Thanh Trì, Hà Nội</a></p>
					<p><a href="#">2 Trần Phú, P. Mộ Lao, Hà Đông, Hà Nội</a></p>
				</div>
			</div>
			<div class="col-lg-4">
				<h5>Bản đồ:</h5>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14901.21012366381!2d105.7805630048828!3d20.980506711116618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIGLGsHUgY2jDrW5oIHZp4buFbiB0aMO0bmcgUHRpdA!5e0!3m2!1svi!2s!4v1602773848151!5m2!1svi!2s" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>








    <!-- script -->
    <script>

        $(document).ready(function () {
            // Activate Carousel with a specified interval
            $("#demo").carousel({ interval: 4000, pause: "hover" });
            window.onscroll = function () { scrollFunction() };
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    var x = document.getElementsByClassName("navbar");
                    x[0].style.background = "rgba(52,58,64,1)";
                }
                else {
                    var x = document.getElementsByClassName("navbar");
                    x[0].style.background = "rgba(52,58,64,0)";
                }
            }
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
    </script>
</body>

</html>