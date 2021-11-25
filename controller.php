<?php 
	

	//login function : return true if success, false if error occurred
	function login($username,$password,$conn){
		$sql = "select * from account where username = '$username' and password='$password'";
		$query = $conn ->query($sql);
		$row = $query->fetch_array();

		if($row){
			return true;
		}
		else return false;
	}

	//change password : required username and new password
	function change_password($username,$new_password,$conn){
		$sql = "update account set password = '$new_password' where username = '$username'";
		$query = $conn->query($sql);
		if($query){
			return true;
		}
		else return false;
	}


	//function addEmployee: add an employee to database.
	function addEmployee($name,$gender,$dateofbirth,$address,$phone,$salary,$degree,$idPB,$idCV,$conn){
		$sql = "insert into nhanvien(name,gender,dateofbirth,address,phone,salary,degree,idPB,idCV) values ('$name','$gender','$dateofbirth','$address','$phone','$salary','$degree','$idPB','$idCV')";
		$query = $conn->query($sql);
		

		//make username////////////////////////////////
		$arr = explode(" ", $name);
		$size = count($arr);
		$username = $arr[$size-1];
		for ($i=0; $i <$size-1 ; $i++) { 
			# code...
			$username.=$arr[$i][0];
		}
		$username .=date('md',strtotime($dateofbirth));
		//////////////////////////////////////////


		//get id nhan vien
		$sql_id = "select max(id) from nhanvien";
		$query_id = $conn->query($sql_id);
		$id = $query_id ->fetch_array()[0];

		$sql_acc = "insert into account (username,password,permission,idnhanvien) values ('$username','1',1,'$id')";
		$query_acc = $conn->query($sql_acc);

		if($query&&$query_acc){
			return true;
		}
		else return false;
	}

	function editEmployee($id,$name,$gender,$dateofbirth,$address,$phone,$salary,$degree,$idPB,$idCV,$conn){
		$sql = "update nhanvien set name ='$name', gender = '$gender', dateofbirth ='$dateofbirth',address ='$address',phone ='$phone',salary='$salary',degree = '$degree',idPB ='$idPB', idCV='$idCV' where id= '$id' ";

		// $sql = "update nhanvien set name = '$name' where id ='$id'";
		$query = $conn->query($sql);
		
		if($query){
			return true;
		}
		else return false;
	}

	function editEmployeeSelf($id,$name,$gender,$dateofbirth,$address,$phone,$salary,$degree,$idPB,$idCV,$imageurl,$conn){
		$sql = "update nhanvien set name ='$name', gender = '$gender', dateofbirth ='$dateofbirth',address ='$address',phone ='$phone',salary='$salary',degree = '$degree',idPB ='$idPB', idCV='$idCV',image_url = '$imageurl' where id= '$id' ";

		// $sql = "update nhanvien set name = '$name' where id ='$id'";
		$query = $conn->query($sql);
		
		if($query){
			return true;
		}
		else return false;
	}


	function editAccount($id,$username,$password,$permission,$conn){
		$sql = "update account set username ='$username',password = '$password',permission ='$permission' where idnhanvien = '$id'";
		$query = $conn->query($sql);
		if($query){
			return true;
		}
		else return false;
	}

	function editAccountSelf($id,$username,$password,$conn){
		$sql = "update account set username ='$username',password = '$password' where idnhanvien = '$id'";
		$query = $conn->query($sql);
		if($query){
			return true;
		}
		else return false;
	}


	function getPBbyID($idPB,$conn){
		$sql = "select tenPB from phongban where idPB = '$idPB'";
		$query = $conn ->query($sql);
		$row = $query->fetch_array();
		return $row['0'];
	}


	function getCVbyID($idCV,$conn){
		$sql = "select tenCV from chucvu where idCV = '$idCV'";
		$query = $conn ->query($sql);
		$row = $query->fetch_array();
		return $row['0'];
	}

 ?>