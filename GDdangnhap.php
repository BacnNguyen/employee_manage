<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <?php
   		session_start();
   		$pages = array("trangchu","admin");
    	if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['permission'])){
    		$index = $_SESSION['permission'];
    		echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .$pages[$index-1]. '">';
	     //    if($_SESSION['username']==$_COOKIE['username']){
	     //    	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'index.php'. '">';
	    	// }
	    }
    ?>
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
		<span class="mx-auto bg-primary text-light" style="font-size: 50px;font-weight: bold;">Đăng nhập tài khoản</span>

		<div id="form" class="bg-dark m-5 p-5">
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="username" class="text-white">User name:</label>
					<input style="width: 300px" type="text" class="form-control" id="username" name="username" placeholder="username" required>
				</div>

				<div class="form-group">
					<label for="password" class="text-white">Password: </label>
					<input style="width: 300px" type="password" class="form-control" id="password" name="password" placeholder="password" required>
				</div>

				<button type="submit" name="btnlogin" class="btn btn-primary">Đăng nhập</button>
			</form>
		</div>
	</div>
</body>
</html>