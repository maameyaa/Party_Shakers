<?php
/**
* Author: Benedicta Amo Bempah
  id    : 53532016
  File description: employee class to support all employee function
*/

$connect = mysqli_connect("localhost:3306", "root", "mysql@benedicta", "party_shakers");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
	print (" ");
}

/**
*Creating an Employee class where each function created will be able to process key activities such as add, update, delete and fix a basic search in the employee database
*/
include_once('adb.php');

class Employee extends adb{

	function employee(){
	}
	
	// Function created to Add a new employee

	function addEmployee($efirstname,$elastname,$house,$town,$region,$hiredate,$birthdate,$phone,$email,$gender,$eusername,$password,$status){
		$strQuery="insert into employees set
						efirstname='$efirstname',
						elastname='$elastname',
						house = '$house',
						town='$town',
						region='$region',
						hiredate ='$hiredate',
						birthdate ='$birthdate',
						phone='$phone',
						email='$email',
						gender='$gender',
						eusername='$eusername',
						password='$password',
						status='$status'
						";
		return $this->query($strQuery);	
	}

	function deleteEmployee($eno){
		$strQuery = "DELETE FROM Employees WHERE eno = '$eno' ";
		
		return $this->query($strQuery);

	}	

// Function created for employee updates

	function editEmployee($eno, $efirstname,$elastname,$house,$town,$region,$hiredate, $birthdate, $phone,$email,$gender, $password, $eusername, $status){
		$strQuery = "UPDATE employees SET
						efirstname = '$cfirstname',
						elastname = '$clastname',
						house = '$house',
						town = '$town',
						region = '$region', 
						hiredate = '$hiredate',
						birthdate = '$birthdate',
						phone = '$phone',
						email = '$email', 
						gender = '$gender',
						password = '$password',
						eusername = '$eusername',
						status = '$status'
						WHERE eno = '$eno' ";
		
		return $this->query($strQuery);

	}

// Function created for edit employee updates

	function amendEmployee($eno, $efirstname,$elastname,$region,$hiredate, $birthdate, $phone,$email,$gender){
		$strQuery = "UPDATE employees SET
						efirstname = '$efirstname',
						elastname = '$elastname',
						region = '$region', 
						hiredate = '$hiredate',
						birthdate = '$birthdate',
						phone = '$phone',
						email = '$email', 
						gender = '$gender'
						WHERE eno = '$eno'";
		
		return $this->query($strQuery); 
	}


   // Function created to easily access records in employee database
	function getEmployees($filter=false){

		$strQuery="SELECT * FROM employees";
		// var_dump($strQuery);
		if($filter){
			$strQuery= $strQuery . " where $filter";
		}
		
		return $this->query($strQuery);

}

// Function created to easily access records in employee database
	function getEmp($eno){

		$strQuery="SELECT * FROM employees WHERE eno =$eno";
		
		// if($filter){
		// 	$strQuery= $strQuery . " where $filter";
		// }
		
		return $this->query($strQuery);
	}


// function created to enable search within employee database
	function searchEmployees($text=false){
		$filter=false;
		
		if($text){
			$filter = "efirstname like '%$text%' or elastname like '%$text%' ";
		}
		
		return $this->getEmployees($filter);
	}

	
	
}


?>