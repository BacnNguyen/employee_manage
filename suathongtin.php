<?php 
session_start();
	include 'connection.php';
	$username = $_SESSION['username'];
	

	$sql_acc = "select * from account where username = '$username'";
	$query_acc = $conn->query($sql_acc);
	$acc = $query_acc->fetch_array();

	$id = $acc['idnhanvien'];
	$sql = "select * from nhanvien where id= '$id'; ";
	$query = $conn ->query($sql);
	$row = $query->fetch_array();
	

	include 'controller.php';
	if(isset($_POST['btn_edit_info'])){
		if(isset($_POST['em_id'])) $id = $_POST['em_id'];
		if(isset($_POST['em_name'])) $name = $_POST['em_name'];
		if(isset($_POST['em_gender'])) $gender = $_POST['em_gender'];
		if(isset($_POST['em_dateofbirth'])) $dateofbirth = $_POST['em_dateofbirth'];
		if(isset($_POST['em_address']))$address = $_POST['em_address'];
		if(isset($_POST['em_phone'])) $phone = $_POST['em_phone'];
		if(isset($_POST['em_salary'])) $salary = $_POST['em_salary'];
		if(isset($_POST['em_degree'])) $degree = $_POST['em_degree'];
		if(isset($_POST['em_phongban'])) $idPB = $_POST['em_phongban'];
		if(isset($_POST['em_chucvu'])) $idCV = $_POST['em_chucvu'];
		if(isset($_POST['em_username'])) $username = $_POST['em_username'];
		if(isset($_POST['em_password'])) $password = $_POST['em_password'];
		if(isset($_POST['em_imageurl'])) $imageurl = $_POST['em_imageurl'];

		if(editEmployeeSelf($id,$name,$gender,$dateofbirth,$address,$phone,$salary,$degree,$idPB,$idCV,$imageurl,$conn)&&editAccountSelf($id,$username,$password,$conn)){
			echo "<script>alert('Sửa thành công!')</script>";
			echo "<script>window.location='http://localhost/responsive_website/trangchu'</script>";
		}
		else{
			echo "<script>alert('Sửa thất bại!')</script>";
			echo "<script>window.location='http://localhost/responsive_website/trangchu'</script>";
		}
	}
 ?>

 <!DOCTYPE html>
<html>
	<head>
		<title>Sửa thông tin</title>
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
				<h3 class="bg-primary p-3">Sửa thông tin cá nhân</h3>
				<form class="p-3 m-5" action="suathongtin.php" method="post" style="background-color: #aaaaaa">
					<div class="row p-3">
						<div class="col-6">
							<input type="hidden" name="em_id" value="<?php echo (isset($row))? $row['id']:"None";?>">
							<div class="form-group">
								<label for="em_name">Tên nhân viên:</label>
								<input style="width: 500px" type="text" name="em_name" class="form-control" id="em_name" placeholder="Tên nhân viên" value="<?php echo (isset($row))? $row['name']:"None";?>" required>
							</div>
							<div class="form-group">
								<label for="em_gender">Giới tính:</label>
								<select class="form-control" id="sel1" name="em_gender" style="width: 500px" value = "<?php echo (isset($row))? $row['gender']:"None";?>">
									<option value="0">Nam</option>
									<option value="1">Nữ</option>
								</select>
							</div>
							<div class="form-group">
								<label for="dateofbirth">Ngày sinh:</label>
								<input style="width: 500px" type="date" name="em_dateofbirth" class="form-control" id="dateofbirth" placeholder="YYYY-MM-DD" value="<?php echo (isset($row))? $row['dateofbirth']:"None";?>" required>
							</div>
							<div class="form-group">
								<label for="address">Địa chỉ:</label>
								<input style="width: 500px" type="text" name="em_address" class="form-control" id="address" placeholder="Địa chỉ" value="<?php echo (isset($row))? $row['address']:"None";?>" required>
							</div>
							<div class="form-group">
								<label for="em_phone">Số điện thoại:</label>
								<input style="width: 500px" type="text" name="em_phone" class="form-control" id="em_phone" placeholder="+84 xxx xxx xxx" value="<?php echo (isset($row))? $row['phone']:"None";?>" required>
							</div>

							<div class="form-group">
								<label for="em_salary">Lương:</label>
								<input style="width: 500px" type="text" name="em_salary" class="form-control" id="em_salary" placeholder=".VND" value="<?php echo (isset($row))? $row['salary']:"None";?>" required>
							</div>
						</div>
						<div class="col-6">
							
							<div class="form-group">
								<label for="degree">Bằng cấp:</label>
								<input style="width: 500px" type="text" name="em_degree" class="form-control" id="degree" placeholder="Bằng cấp/Chứng chỉ" required value="<?php echo (isset($row))? $row['degree']:"None";?>">
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
										if ($pb['idPB']==$row['idPB']) {
											# code...
											echo '<option value = '.$pb['idPB'].' selected>'.$pb['tenPB'].'</option>';
										}
										else echo '<option value = '.$pb['idPB'].'>'.$pb['tenPB'].'</option>';
									# code...
									}
								echo '</select>';
								?>
							</div>
							<div class="form-group">
								<label for="chucvu">Chức vụ:</label><br>
								<?php
								include 'connection.php';
								$sql = "select * from chucvu";
								$result = $conn ->query($sql);
								echo '<select class="form-control" id="sel2" name="em_chucvu" style="width: 500px">';
									foreach ($result as $pb) {
										if($pb['idCV']==$row['idCV']){
											echo '<option value = '.$pb['idCV'].' selected>'.$pb['tenCV'].'</option>';
										}
										else echo '<option value = '.$pb['idCV'].'>'.$pb['tenCV'].'</option>';
									# code...
									}
								echo '</select>';
								?>
							</div>
							<div class="form-group">
								<label for="username">Username:</label>
								<input style="width: 500px" type="text" name="em_username" class="form-control" id="degree" placeholder="username" required value="<?php echo (isset($acc))? $acc['username']:"None";?>">
							</div>


							<div class="form-group">
								<label for="password">Password:</label>
								<input style="width: 500px" type="text" name="em_password" class="form-control" id="degree" placeholder="password" required value="<?php echo (isset($acc))? $acc['password']:"None";?>">
							</div>


							<div class="form-group">
								<label for="em_imageurl">Đường dẫn ảnh:</label>
								<input style="width: 500px" type="text" name="em_imageurl" class="form-control" id="degree" placeholder="URL image..." required value="<?php echo (isset($row))? $row['image_url']:"None";?>">
							</div>
						</div>
					</div>
					<div>
						<button type="submit" name="btn_edit_info" class="btn btn-primary ml-3 mb-3" style="width: 100px;"> Sửa</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>