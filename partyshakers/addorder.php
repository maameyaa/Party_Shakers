<?php

session_start();

  
if(isset($_SESSION['ono'])){

    $cno=$_SESSION['cno'];

     $ono=$_SESSION['ono'];
    
    
    //creates an object of the class orders
    include_once("orders.php");
    $obj=new orders();

//    session_start();
//    $cno = $_SESSION['cno'];

    $s=$obj->updateOrder($cno, $ono);
//    echo $s;

    if($s==false){
      
    $strStatusMessage="Error";
    //echo $strStatusMessage;
    
    
    }else{
    echo'Done';
    header('Location: index.php?cmd=1');
    //echo $strStatusMessage;
    }
}
else {
    echo "no order number";
}
?>