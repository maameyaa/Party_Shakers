<?php
session_start();

include_once("orders.php");

	if(!isset($_REQUEST['cmd'])){

	  echo "Command not provided";
	  exit();

	}


	$cmd=$_REQUEST['cmd'];

	switch($cmd){

		case 1: 
		addtocart();
		break; 

		case 2: 
		deleteitem();
		break; 
	}


	 	function addtocart(){
	include_once("orders.php");
		 $obj=new orders();

		 $obj->connect();

		 if(!isset($_REQUEST['pno'])||!isset($_REQUEST['qty'])){

		 	echo '{"result":0,"message":"Please provide pno and qty"}';

		 	return;
		 }

		$pno=$_REQUEST["pno"];
	  	$qty=$_REQUEST["qty"];

	  	$row=$obj->addToCart($pno,$qty);
        
	  	

	  	if(!$row){
	  		echo '{"result":0,"message":"unable to add to cart"}';
	  		return;
	  	}

	  	else{
	  		echo '{"result":1,"message":"added to cart"}';
          //  $_SESSION['login'] = "1";
            
         
	  }
	}


	function deleteitem(){

		include_once("orders.php");
		$obj = new orders();

		$itemId = $_REQUEST['id'];

		$result =$obj->deleteitem($itemId);
		//var_dump($res);
		if (!$result) {
		echo '{"result":0 ,"message": "Failed to remove item."}';
		}else{
		echo '{"result":1, "message": "Item removed."}';
		}
	}



?>