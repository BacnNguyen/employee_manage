<!DOCTYPE html>
<html>
<head>
	<title>Đổi mật khẩu</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <style>
	span{
		display: table;
		margin: 0 auto;
		padding: 10px 30px 10px 30px;
	}
    </style>
</head>
<body>	
	<div class="container bg-secondary mt-5" style="height: 500px; ">
		<span class="mx-auto bg-primary text-light" style="font-size: 50px;font-weight: bold;">Thay đổi mật khẩu</span>

		<div id="form" class="bg-dark m-5 p-5">
			<form action="doimatkhau.php" method="post">
				<div class="form-group">
					<label for="username" class="text-white">Mật khẩu cũ:</label>
					<input style="width: 300px" type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Mật khẩu cũ" required>
				</div>

				<div class="form-group">
					<label for="password" class="text-white">Mật khẩu mới: </label>
					<input style="width: 300px" type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Mật khẩu mới" required>
				</div>

				<div class="form-group">
					<label for="password" class="text-white">Nhập lại mật khẩu mới: </label>
					<input style="width: 300px" type="password" class="form-control" id="re_enter" name="re_enter" placeholder="Nhập lại" required>
				</div>

				<button type="submit" name="btnChangePass" class="btn btn-primary">Lưu</button>
			</form>
		</div>
	</div>
</body>
</html>