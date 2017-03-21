<?php
/**
 * Maame Yaa Afriyie Poku
 *
 * 
 */

require_once('config.php');

include("Customer.php");

$customer = new Customer();

$smarty->assign("customer", $customer);


// This block of code will allow different pages to be displayed when the commands are given
if(!isset($_REQUEST['cmd'])){

	$smarty->display('index.tpl');

	}

	$cmd=$_REQUEST['cmd'];

	switch($cmd){

		case 1: 
		
		break;

		case 2:
		signup();
		break;
	}


?>