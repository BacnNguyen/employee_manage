<?php
	session_start();
	include 'connection.php';

	

	$username  = $_POST['username'];
	$password = $_POST['password'];

	// if($username==null||$password==null){
	// 	echo '<script>alert("Login Failed.")</script>';
	// 	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.'GDdangnhap.html'.'">';
	// }

	$sql = "select * from account where username = '$username' 
	and password = '$password'";

	$query = $conn ->query($sql);
	$row = $query ->fetch_array();

	if($row){
		$data = array(
			"username" => $row['username'],
			"password" => $row['password'],
			"permission" =>$row['permission']
		);
		if($data['permission']==1){
			$url='trangchu';
			 $_SESSION['username'] = $data['username'];
  			 $_SESSION['password'] = $data['password'];
  			 $_SESSION['permission'] = $data['permission'];
  			 setcookie('username',$_SESSION['username'],time()+3600); 
  			 echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
  			 
  			

		}
		else if($data['permission']==2){
			$url='admin';
			 $_SESSION['username'] = $data['username'];
  			 $_SESSION['password'] = $data['password'];
  			 $_SESSION['permission'] = $data['permission'];
  			 setcookie('username',$_SESSION['username'],time()+3600); 
  			 echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
  			 
  			
		}
		// echo '<script>alert("Login'. 8 .'successfully.")</script>';
		// echo '<script>alert("Login successfully.'. $_SESSION['username'] . '")</script>';
	}
	else {
		echo '<script>alert("Login Failed.")</script>';
		echo '<META HTTP-EQUIV=REFRESH CONTENT="1;' .'dangnhap'. '">';
		header('HTTP/1.1 401 login fail');
	}

?>