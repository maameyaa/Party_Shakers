<?php
//session_start();
include_once("adb.php");

/**
Maame Yaa Afriyie Poku
*orders  class
This class creates orders and dislays the parts in the order
*/

class orders extends adb{

	/**
	*constructor
	*/
	function __construct(){
	}

  
    function createOrder(){

    	$cno = $_SESSION['cno'];

        
	 	$strQuery="INSERT INTO orders SET
	 				cno = '$cno'";
	 	
	 	// echo "<div>$strQuery</div>";

	 	
        //set order number
        $result=$this->query($strQuery);
	 	$ono  = $this->db->insert_id;

	 	//$ono = mysqli_insert_id($this->db);

	 	// echo($ono);

	 	$_SESSION['ono']=$ono;
	 	
	 	return 	$result;
	 }



	 // This function adds to the cart table
    function addToCart($pno, $qty){

	    if (!isset($_SESSION['ono'])){
	     	$this->createOrder();
	     }

	     $ono = $_SESSION['ono'];

	            $strQuery="INSERT INTO cart SET
						ono = '$ono',
						pno = '$pno',
						qty = '$qty'";
			return $this->query($strQuery);	     
     } 

    // This function adds to the odetails table
    function orderDetails($cno, $pno, $qty){

     $ono = $_SESSION['ono'];
        
            $strQuery="INSERT INTO odetails SET
					ono = '$ono',
					pno = '$pno',
					qty = '$qty'";
		return $this->query($strQuery);	     
     } 

	// This functions displays the parts in the odetals table with refers to the order number 

    function getCartItems($ono){
		$strQuery = "Select * from parts, cart WHERE cart.ono = $ono AND parts.pno=cart.pno";
		return $this->query($strQuery);	
	}


	function deleteitem($id){
		$strQuery="delete from cart where id='$id'";
        return $this->query($strQuery);

	}


	function getparts($ono){
		$strQuery = "Select * from parts, odetails WHERE odetails.ono = $ono AND parts.pno=odetails.pno";
		return $this->query($strQuery);	
	}

    
    function countItems(){
    	
    	$ono = $_SESSION['ono'];

        $strQuery = "SELECT Count(pno) as num from odetails where ono =$ono";
        $this->query($strQuery);	
        $val= $this->fetch();
        return $val['num'];
    }
    
    function updateOrder($cno, $ono){
    	$strQuery = "Update orders 
    				 set paid = 'Yes' 
    				 where cno = $cno and ono = $ono";

    	return $this->query($strQuery);	

    }

    function getorders($cno){
		$strQuery = "Select * from orders WHERE cno = $cno and paid = 'Yes' ";
		return $this->query($strQuery);	
	}
}
?>