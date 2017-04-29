<?php
session_start();

require_once('config.php');


//This block of code puts the user's name in the header
if(isset($_SESSION['name'])){

	$name = $_SESSION['name'];

	//echo $name;

	$smarty->assign("name", $name);
}

$smarty->assign("itemsincart", 0);


//This block of code gets the number of items in the cart
// if(isset($_SESSION['login'])){

// 	$login = $_SESSION['login'];

// 	echo($login);

// 	if ($login==1){

// 	include("orders.php");
// 	 $obj=new orders();
// 	 $s=$obj->countItems();
// 	 $smarty->assign("noCartItems ", $s);
// }
 
// }

// This block of code will allow different pages to be displayed when the commands are given
if(!isset($_REQUEST['cmd'])){

	$smarty->display('index.tpl');

	}

	$cmd=$_REQUEST['cmd'];

	switch($cmd){

		case 1: 
		include_once("orders.php");
         $obj=new orders();
         $cno = $_SESSION['cno'];
         $result=$obj->getorders($cno);
         $orders = array();
         while($row = $obj->fetch()){
				$orders[] = $row;
			}
		$smarty->assign("orders", $orders);
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


		case 5:
			if(isset($_REQUEST['category'])){
            $category=$_REQUEST['category'];

			include("parts.php");
			$obj = new parts();
			$result = $obj->getPart($category);
			
			$items = array();

			while($row = $obj->fetch()){

				$items[] = $row;

			}
			$smarty->assign("items", $items);

			$smarty->assign("category", $category);

			$smarty->display('category.tpl');

		}

		break;

		case 6:
		session_unset();
		$smarty->display('index.tpl');
		break;


		case 7:

		 include_once("orders.php");

         $obj=new orders();

         $ono = $_SESSION['ono'];

         $result=$obj->getCartItems($ono);

         $cartitems = array();

         while($row = $obj->fetch()){

				$cartitems[] = $row;
			}

		$smarty->assign("cartitems", $cartitems);
		$smarty->display('basket.html');

         break;

         case 8:

	        $pno = $_REQUEST['pno'];

	        include_once("parts.php");

	        $obj = new parts();
	        $result = $obj->getParts($pno);

	        $row = $obj->fetch();

			$image = $row['image'];

			$name = $row['pname'];

			$price = $row['price'];

			$description = $row['description'];

			$category = $row['category'];
			
			$smarty->assign("itemimage", $image);
			$smarty->assign("itemname", $name);
			$smarty->assign("itemprice", $price);
			$smarty->assign("
				", $description); 
			$smarty->assign("itemcategory", $category); 


			$smarty->display('detail.html');

         break;
	}


?>