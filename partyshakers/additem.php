

<?php
  

if(isset($_REQUEST['cno'])){
    $cno=$_REQUEST['cno'];
    $pno=$_REQUEST['pno'];
    $qty=$_REQUEST['qty'];

    //creates an object of the class orders
    include_once("orders.php");
    $obj=new orders();

//    session_start();
//    $cno = $_SESSION['cno'];

    $s=$obj->addOrders($cno);
    //echo $s;

    if($s==false){
    $strStatusMessage="Error";
    //echo $strStatusMessage;
    }else{
    echo'Done';
    
    //echo $strStatusMessage;
    }
}
else {
    echo "no order number";
}
?>