<?php
/**
*Maame Yaa Afriyie Poku
*/
include_once("adb.php");
/**
*Customer class
*/
class Customer extends adb{
	function Customer(){
	}
	/**
	*Adds a new customer
	*@param int user_id user id
	*@param string org_name Organization name
	*@param string event_name Event name
	*@param string event_description event description
	*@param string labname lab name
	*@param date bookingdate booking date 
	*@param string bookingtime booking time 
	*/
	function register($cfirstname,$clastname,$email,$password){
		$strQuery="insert into customers set
						cfirstname='$cfirstname',
						clastname='$clastname',
						email='$email',
						password='$password'
						";
		return $this->query($strQuery);	
	}

	function checkemail($email){
		$strQuery="SELECT * FROM customers where email='$email'";
		
		return $this->query($strQuery);
	}

	function deletecustomer($cno){
		$strQuery = "DELETE FROM customers WHERE cno = '$cno' ";
		
		return $this->query($strQuery);

	}	

	function editcustomer($cno, $cfirstname,$clastname,$house,$town,$region,$phone,$email){
		$strQuery = "UPDATE customers SET
						cfirstname = '$cfirstname',
						clastname = '$clastname',
						house = '$house',
						town = '$town',
						region = '$region', 
						phone = '$phone',
						email = '$email' 
						WHERE cno = '$cno' ";
		
		return $this->query($strQuery);

	}

	function getcustomers($filter=false){
		$strQuery="SELECT * FROM customers";
		
		if($filter){
			$strQuery=$strQuery . " where $filter";
		}
		
		return $this->query($strQuery);
	}

	function searchcustomers($text=false){
		$filter=false;
		
		if($text){
			$filter = " cfirstname like '%$text%' or clastname like '%$text%' ";
		}
		
		return $this->getcustomers($filter);
	}

	function login($email,$password){
		
		$strQuery="Select * from customers where email = '$email' and password = '$password'";

		return $this->query($strQuery);  

	}


	
}


?>