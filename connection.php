<?php
	$host = "localhost";
	$username = "root";
	$password ="";
	$db_name="qlnhanvien";

	$conn = mysqli_connect(
		$host,
		$username,
		$password,
		$db_name
	);

	mysqli_set_charset($conn,"utf8");

	if(!$conn){
		die("Connection failed.");
	}
?>