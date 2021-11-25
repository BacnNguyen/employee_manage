<?php
include 'connection.php';
include 'controller.php';
if(isset($_POST['btnThem'])){
if(isset($_POST['em_name'])) $name = $_POST['em_name'];
if(isset($_POST['em_gender'])) $gender = $_POST['em_gender'];
if(isset($_POST['em_dateofbirth'])) $dateofbirth = $_POST['em_dateofbirth'];
if(isset($_POST['em_address']))$address = $_POST['em_address'];
if(isset($_POST['em_phone'])) $phone = $_POST['em_phone'];
if(isset($_POST['em_salary'])) $salary = $_POST['em_salary'];
if(isset($_POST['em_degree'])) $degree = $_POST['em_degree'];
if(isset($_POST['em_phongban'])) $idPB = $_POST['em_phongban'];
if(isset($_POST['em_chucvu'])) $idCV = $_POST['em_chucvu'];
if(addEmployee($name,$gender,$dateofbirth,$address,$phone,$salary,$degree,$idPB,$idCV,$conn)){
	echo "<script>alert('Thêm thành công!')</script>";
	echo "<script>window.location='http://localhost/responsive_website/admin'</script>";
}
else echo "<script>alert('Thêm thất bại!')</script>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Them nhan vien</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<style>
		label{
		color:black;
		font-weight: bold;
		font-size: 20px;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid bg-dark p-3" style="height: 900px;">
			<div id="add" class="mt-3 pb-1 bg-light">
				<h3 class="bg-primary p-3">Thêm nhân viên</h3>
				<form class="p-3 m-5" action="themnhanvien.php" method="post" style="background-color: #aaaaaa">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="em_name">Tên nhân viên:</label>
								<input style="width: 500px" type="text" name="em_name" class="form-control" id="em_name" placeholder="Tên nhân viên" required>
							</div>
							<div class="form-group">
								<label for="em_gender">Giới tính:</label>
								<select class="form-control" id="sel1" name="em_gender" style="width: 500px">
									<option value="0">Nam</option>
									<option value="1">Nữ</option>
								</select>
							</div>
							<div class="form-group">
								<label for="dateofbirth">Ngày sinh:</label>
								<input style="width: 500px" type="date" name="em_dateofbirth" class="form-control" id="dateofbirth" placeholder="YYYY-MM-DD" required>
							</div>
							<div class="form-group">
								<label for="address">Địa chỉ:</label>
								<input style="width: 500px" type="text" name="em_address" class="form-control" id="address" placeholder="Địa chỉ" required>
							</div>
							<div class="form-group">
								<label for="em_phone">Số điện thoại:</label>
								<input style="width: 500px" type="text" name="em_phone" class="form-control" id="em_phone" placeholder="+84 xxx xxx xxx" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="em_salary">Lương:</label>
								<input style="width: 500px" type="text" name="em_salary" class="form-control" id="em_salary" placeholder=".VND" required>
							</div>
							<div class="form-group">
								<label for="degree">Bằng cấp:</label>
								<input style="width: 500px" type="text" name="em_degree" class="form-control" id="degree" placeholder="Bằng cấp/Chứng chỉ" required>
							</div>
							<div class="form-group">
								<label for="phongban">Phòng ban:</label>
								<br>
								<?php
								include 'connection.php';
								$sql = "select * from phongban";
								$result = $conn ->query($sql);
								echo '<select class="form-control" id="sel1" name="em_phongban" style="width: 500px">';
									foreach ($result as $pb) {
									echo '<option value = '.$pb['idPB'].'>'.$pb['tenPB'].'</option>';
									# code...
									}
								echo '</select>';
								?>
								<!--       <select class="form-control" id="sel1" name="gender" style="width: 500px">
									<option>Nam</option>
									<option>Nữ</option>
								</select> -->
								<!-- <input style="width: 500px" type="text" name="phongban" class="form-control" id="phongban" placeholder="Phòng ban" required> -->
							</div>
							<div class="form-group">
								<label for="chucvu">Chức vụ:</label><br>
								<?php
								include 'connection.php';
								$sql = "select * from chucvu";
								$result = $conn ->query($sql);
								echo '<select class="form-control" id="sel2" name="em_chucvu" style="width: 500px">';
									foreach ($result as $pb) {
									echo '<option value = '.$pb['idCV'].'>'.$pb['tenCV'].'</option>';
									# code...
									}
								echo '</select>';
								?>
							</div>
						</div>
					</div>
					<div>
						<button type="submit" name="btnThem" class="btn btn-primary ml-3 mb-3" style="width: 100px;"> Thêm</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>