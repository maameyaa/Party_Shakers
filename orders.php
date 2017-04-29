<?php


include_once("adb.php");

class orders extends adb{
	/**
	*constructor
	*/
	function  orders(){
	}
	
	// This fuction adds to the orders table
	function addOrders($ono, $cno, $eno, $received, $shipped, $shippingdate, $receivedate, $orderdate){
		
		$strQuery="INSERT INTO orders SET
					ono = '$ono',
					cno = '$cno',
					eno = '$eno',
pingdate = '$shippingdate',
								received = '$received',
					shipped = '$shipped',
					ship		receiveddate = '$receiveddate',
					orderdate = '$orderdate'";
		return $this->query($strQuery);				
	}
	// This functions displays the parts in the order details table with refers to the order number 
	function getOrders(){
		$strQuery = "SELECT ono, cfirstname, clastname, status, shippingdate, receivedate, orderdate FROM orders, customers WHERE orders.cno = customers.cno";

		return $this->query($strQuery);	
	}

	function getOdetails($ono){
		$strQuery = "SELECT pname, price, category, qty FROM odetails, parts WHERE odetails.pno = parts.pno AND odetails.ono = $ono";
		return $this->query($strQuery);	
	}

	function getShipping($ono){
		$strQuery = "UPDATE orders SET status = 'Shipped' WHERE ono = $ono";

		return $this->query($strQuery);	
	}
} 

?>