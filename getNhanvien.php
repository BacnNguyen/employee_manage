<?php 
	include 'connection.php';

	$sql = 'select * from nhanvien';
	$query = $conn ->query($sql);

	$data = array();

	while ($row = $query->fetch_array()) {
		# code...
		$data[] = array(
			"id" =>$row['id'],
			"name" =>$row['name'],
			"gender" =>$row['gender'],
			"dataofbird" =>$row['dateofbird'],
			"address" =>$row['address'],
			"phone" =>$row['phone'],
			"salary" =>$row['salary'],
			"certificate" =>$row['certificate'],
			"idPB" =>$row['idPB'],
			"idCV" =>$row['idCV'],
			"username" =>$row['username']
		);
		
	}

	echo json_encode($data);

	echo $data[0]['name'];
 ?>