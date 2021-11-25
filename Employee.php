<?php 

class Employee{
	private $name;
	private $gender;
	private $dateofbirth;
	private $address;
	private $phone;
	private $salary;
	private $degree;
	private $idPB;
	private $idCV;

	function __contruct($name,$gender,$dateofbirth,$address,$phone,$salary,$degree,$idPB,$idCV){
		this->name = $name;
		this->gender = $gender;
		this->dateofbirth = $dateofbirth;
		this->address = $address;
		this->phone = $phone;
		this->salary = $salary;
		this->degree = $degree;
		this->idPB = $idPB;
		this->idCV = $idCV;
	}


	function getName(){
		return this->name;
	}

	function getGender(){
		return this->gender;
	}


	function getDateOfBirth(){
		return this->dateofbirth;
	}

	function getAddress(){
		return this->address;
	}


	function getPhone(){
		return this->phone;
	}

	function getSalary(){
		return this->salary;
	}

	function getDegree(){
		return this->degree;
	}

	function getPB(){
		return idPB;
	}

	function getCV(){
		return idCV;
	}
	

}

 ?>