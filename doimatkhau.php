<?php 
	include 'connection.php';
	include 'controller.php';
	session_start();

	$username = $_SESSION['username'];

	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$confirm_pass = $_POST['re_enter'];
	if($confirm_pass==$new_pass){
		if(login($username,$old_pass,$conn)){
			if(change_password($username,$new_pass,$conn)){
				echo '<script>alert("Thay đổi mật khẩu thành công!")</script>';
				echo '<meta http-equiv = refresh content= "1;'.'index.php'. ' ">';
			}
		}
	}

 ?>