<?php
session_start();

$cno = $_SESSION['cno'];
?>
<?php
/**
 * Maame Yaa Afriyie Poku
 *
 * 
 */

require_once('config.php');

include("Customer.php");
include("orders.php");

$customer = new Customer();
$orders = new orders();

$cno = $_SESSION["cno"];


$smarty->assign("cno", $cno);

$smarty->assign("customer", $customer);

$smarty->assign("orders", $orders);







// This block of code will allow different pages to be displayed when the commands are given
if(!isset($_REQUEST['cmd'])){

	$smarty->display('index.tpl');

	}

	$cmd=$_REQUEST['cmd'];

    

	switch($cmd){

		case 1: 
		$smarty->display('customer-orders.html');
		break;

		case 2:
		$smarty->display('register.html');
		break;
            
        case 3:
		$smarty->display('index.tpl');
		break;
            
        case 4:
        if(isset($_REQUEST['category'])){
            $category=$_REQUEST['category'];
		    header('Location: category.php?category='.$category);
        }
		break;
	}


?>