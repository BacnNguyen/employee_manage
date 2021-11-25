<!DOCTYPE html>
<html>
	<head>
		<title>Trang chủ</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<link rel="stylesheet" href="style.css">
		<?php
	        session_start();
	        if(!isset($_SESSION['username'])){
	             echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'GDdangnhap.php'. '">';  
	             
	        }
	    ?> 
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

	                    <li class="nav-item">
	                        <a class="nav-link text-white" href="suathongtin.php">Sửa thông tin</a>
	                    </li>
					</ul>

					<div style="margin-left: auto;margin-right: 10px;">
	                    <span><a style="margin-left: auto;display: inline;color: #007bff"><?php echo ''.$_COOKIE['username']?></a></span>
	                    <span><a href="logout.php" style="padding: 10px">Đăng xuất</a></span>
	                </div>

					<!-- <a href="#" class="nav-link text-white" style="margin-left: auto;margin-right: 10px;">
						Đăng xuất
					</a> -->
				</div>
			</nav>
		</div>
		<div class="container-fluid" >
			<div id="demo" class="carousel slide carousel-fade" style="height: fit-content;" data-ride="carousel" data-interval = "true">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item">
						<img src="./images/active.jpg" alt="Los Angeles" width="100%" height="100%">
						<div class="carousel-caption">
							<h3>Năng động</h3>
							<p>Chúng tôi năng động!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="./images/creative.jpg" alt="Chicago" width="100%" height="100%">
						<div class="carousel-caption">
							<h3>Sáng tạo</h3>
							<p>Chúng tôi sáng tạo!</p>
						</div>
					</div>
					
					<div class="carousel-item active">
						<img src="./images/united.jpg" alt="Chicago" width="100%" height="100%">
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
		<br>
		<div class="container-fluid bg-light" style="opacity: 100%">
			<div class="row" style="background-color:#5d5d5d!important ">

				<!-- quan ly -->
				<div class="col-lg-8">
					<div class="text-center bg-info mt-3">
						<h1 class="shadow" style="padding: 10px;background-color: #858585;color: #fff">Quản lý tiêu biểu</h1>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-4">
							<div class="card mb-4  mx-auto" style="width: 200px;height: auto;">
								<img src="images/manager1.jpg" class="card-img-top" alt="Card image"  style="width: 200px;height: 200px;object-fit: cover;">
								<div class="card-body ">
									<h4 class="card-title">J.Lena</h4>
									<p class="card-text">Trưởng phòng Marketing</p>
									<button class="btn btn-primary" data-toggle="modal" data-target="#lena1">Xem chi tiết</button>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4 mx-auto" style="width: 200px;height: auto;">
								<img src="images/manager4.jpg" class="card-img-top" alt="Card image"  style="width: 200px;height: 200px;object-fit: cover;">
								<div class="card-body ">
									<h4 class="card-title">F.D.ELisa</h4>
									<p class="card-text">Trưởng Phòng Tổ chức- Hành chính</p>
									<button class="btn btn-primary" data-target="#elisa" data-toggle="modal">Xem chi tiết</button>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4  mx-auto" style="width: 200px;height: auto;">
								<img src="images/manager3.jpg" class="card-img-top" alt="Card image"  style="width: 200px;height: 200px;object-fit: cover;">
								<div class="card-body ">
									<h4 class="card-title">E.Mark</h4>
									<p class="card-text">Trưởng Phòng Kỹ thuật và Dịch vụ</p>
									<button  class="btn btn-primary btn-detail" data-target="#mark" data-toggle="modal">Xem chi tiết</button>
								</div>
							</div>
						</div>
					</div>
					<!-- nhan vien -->
					<hr style="border: 2px solid white">
					<div class="text-center bg-info mt-3">
						<h1 class = "shadow" style="padding: 10px; background-color: #858585;color: #fff">
						Nhân viên tiêu biểu
						</h1>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-4">
							<div class="card mb-4  mx-auto" style="width: 200px;height: auto;">
								<img src="images/stuff1.jpg" class="card-img-top" alt="Card image" style="width: auto;height: 200px;object-fit: cover;">
								<div class="card-body ">
									<h4 class="card-title">R.Benina</h4>
									<p class="card-text">Phòng Phát triển dự án</p>
									<a href="#" class="btn btn-primary btn-detail" data-target="#benina" data-toggle="modal">Xem chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4  mx-auto" style="width: 200px;height: auto;">
								<img src="images/stuff2.jpg" class="card-img-top" alt="Card image"  style="width: 200px;height: 200px;object-fit: cover;">
								<div class="card-body ">
									<h4 class="card-title">L.Fona</h4>
									<p class="card-text">Chuyên viên hệ thống công nghệ thông tin</p>
									<a href="#" class="btn btn-primary btn-detail" data-target="#fona" data-toggle="modal">Xem chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 mx-auto">
							<div class="card mb-4  mx-auto" style="width: 200px;height: auto;">
								<img src="images/stuff3.jpg" class="card-img-top" alt="Card image"  style="width: 200px;height: 200px;object-fit: cover;">
								<div class="card-body ">
									<h4 class="card-title">G.Toseli</h4>
									<p class="card-text">Phòng Dịch vụ và giải pháp</p>
									<a href="#" class="btn btn-primary btn-detail" data-target="#toseli" data-toggle="modal">Xem chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Hien thi thong tin moi nhat -->
				<div class="col-lg-4 thongbao" data-spy="scroll" data-target="content" data-offset="50">
					<div class="navbar justify-content-center shadow-lg bg-warning mt-2">
						<h5>Thông báo nội bộ</h5>
					</div>
					<div id="content">
						<div class="shadow p-3 m-3 bg-light">
							<h3>Các triệu chứng của COVID-19</h3>
							<p>
								<ol>
									<li>Đau nhức đầu, khó chịu</li>
									<li>Sốt cao (trên 38 độ)</li>
									<li>Ho hoặc đau họng</li>
									<li>Chảy nước mũi</li>
									<li>Khó thở</li>
									<li>Đau mỏi cơ</li>
								</ol>
							Nếu nhân viên có các triệu chứng như trên, bạn cần thông báo cho các cơ sở y tế và làm theo hướng dẫn.</p>
						</div>
						<div class="shadow p-3 m-3 bg-light">
							<h3>Cách ly phòng dịch</h3>
							<p>
								<ul>
									<li>Cần tự cách lý tại nhà và theo dõi sức khỏe trong vòng 14 ngày. Cần khai báo với cơ quan sở tại nơi gần nhất để được hỗ trợ khi cần thiết.</li>
									<li>Nếu có dấu hiệu sốt, ho, khó thở phải đeo khẩu trang bảo vệ, thông báo ngày đến cơ sở y tế gần nhất để được tư vấn, khám, điều trị kịp thời.</li>
									<li>Khi đến cần gọi điện trước để thông tin về các triệu chứng và lịch trình đã di chuyển trong thời gian gần đây để có biện pháp hỗ trợ.</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer container-fluid bg-white">
		<div class="row" style="padding-top: 10px;padding: 20px;">
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
	
	<!-- lena modal -->
	<div id="lena1" class="modal">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				<!-- modal header -->
				<div class="modal-header">
					<h3>Jotin Lena</h3>
				</div>
				<!-- modal body -->
				<div class="modal-body">
					<strong>
						<ul>
							<li>Chức vụ : Trưởng phòng Marketing</li>
							<li>Tuổi : 25</li>
							<li>Năm kinh nghiệm : 5 năm</li>
							<li>Bằng cấp: Thạc sĩ kinh tế</li>
						</ul>
					</strong>
				</div>
				<!-- modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn-btn-secondary" data-dismiss ="modal"> Đóng</button>
				</div>
			</div>
		</div>
	</div>


	<!-- elisa modal -->
	<div id="elisa" class="modal fade">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				
				<!-- header -->
				<div class="modal-header">
					<h4>Fedina Din Elisa</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- modal body -->
				<div class="modal-body">
					<strong>
						<ul>
							<li>Trưởng Phòng Tổ chức-Hành chính</li>
							<li>Tuổi : 27</li>
							<li>Năm kinh nghiệm : 4 năm</li>
							<li>Bằng cấp: Tiến sĩ quản lý nhân lực</li>
						</ul>
					</strong>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- mark modal -->
	<div id="mark" class="modal fade">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				
				<!-- header -->
				<div class="modal-header">
					<h4>Enathan Mark</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- modal body -->
				<div class="modal-body">
					<strong>
						<ul>
							<li>Trưởng Phòng Kỹ thuật và Dịch vụ</li>
							<li>Tuổi : 31</li>
							<li>Năm kinh nghiệm : 6 năm</li>
							<li>Bằng cấp: Thạc sỹ CNTT Đại học Harvard</li>
						</ul>
					</strong>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- benina modal -->
	<div id="benina" class="modal fade">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				
				<!-- header -->
				<div class="modal-header">
					<h4>Runo Benina</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- modal body -->
				<div class="modal-body">
					<strong>
						<ul>
							<li>Phòng Phát triển dự án</li>
							<li>Tuổi : 24</li>
							<li>Năm kinh nghiệm : 2 năm</li>
							<li>Bằng cấp: Cử nhân Kinh tế</li>
						</ul>
					</strong>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<!-- mark modal -->
	<div id="fona" class="modal fade">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				
				<!-- header -->
				<div class="modal-header">
					<h4>Lorim Fona</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- modal body -->
				<div class="modal-body">
					<strong>
						<ul>
							<li>Chuyên viên hệ thống công nghệ thông tin</li>
							<li>Tuổi : 25</li>
							<li>Năm kinh nghiệm : 2 năm</li>
							<li>Bằng cấp: Thạc sỹ CNTT</li>
						</ul>
					</strong>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>



	<!-- mark modal -->
	<div id="toseli" class="modal fade">
		<div class="modal-dialog modal-dialog-centered modal-sm">
			<div class="modal-content">
				
				<!-- header -->
				<div class="modal-header">
					<h4>Gondova Toseli</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- modal body -->
				<div class="modal-body">
					<strong>
						<ul>
							<li>Phòng Dịch vụ và giải pháp</li>
							<li>Tuổi : 22</li>
							<li>Năm kinh nghiệm : 1 năm</li>
							<li>Bằng cấp: Kỹ sư CNTT</li>
						</ul>
					</strong>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<script>
		
		$(document).ready(function(){
	// Activate Carousel with a specified interval
			$("#demo").carousel({interval: 2000,pause:"false"});
			window.onscroll = function(){scrollFunction()};
			function scrollFunction(){
			if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
				var x = document.getElementsByClassName("navbar");
				x[0].style.background= "rgba(52,58,64,1)";
			}
			else {
				var x = document.getElementsByClassName("navbar");
					x[0].style.background= "rgba(52,58,64,0)";
				}
			}
		});
	</script>
</body>
</html>