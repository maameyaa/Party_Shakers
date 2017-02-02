<?php
/**
*Maame Yaa Afriyie Poku
*/
include_once("adb.php");

/**
Maame Yaa Afriyie Poku
*orders  class
This class creats orders and dislays the parts in the order
*/
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

}
?>