<?php
 include_once("adb.php");

class orders extends adb{

	/**
	*constructor
	*/
	function __construct(){
	}
	
	// This fuction adds to the odetails table
	function addOrders($ono, $pno, $qty ){
		
		$strQuery="INSERT INTO odetails SET
					ono = '$ono',
					pno = '$pno',
					qty = '$qty'";
		return $this->query($strQuery);				
	}

	// This functions displays the parts in the odetals table with refers to the order number 
	function getparts($ono){
		$strQuery = "Select * from parts, odetails WHERE odetails.ono = $ono AND parts.pno=odetails.pno";
		return $this->query($strQuery);	
	}

		// This functions displays the parts in the order details table with refers to the order number 
	function getOrders(){
		$strQuery = "SELECT ono, cfirstname, clastname, email, shippingdate, receivedate, orderdate, status, total FROM orders, customers WHERE orders.cno = customers.cno";

		return $this->query($strQuery);	
	}

	function getOdetails($ono){
		$strQuery = "SELECT pname, price, category, qty FROM odetails, parts WHERE odetails.pno = parts.pno AND odetails.ono = $ono";
		return $this->query($strQuery);	
	}

	function getStatus($ono){
		$strQuery = "SELECT * FROM orders WHERE ono = $ono";

		return $this->query($strQuery);	
	}

	function changeStatus($ono,$status,$sdate,$rdate){
		$strQuery = "UPDATE orders SET status ='$status', shippingdate = '$sdate', receivedate = '$rdate' WHERE ono = $ono";
	
		return $this->query($strQuery);	
	}

}
?>