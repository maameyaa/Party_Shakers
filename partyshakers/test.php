 <?php

 include_once("adb.php");

   


class test extends adb{

	/**
	*constructor
	*/
	function __construct(){
	}

 function createOrder($cno){
        
	 	$strQuery="INSERT INTO orders SET
	 				cno = '$cno'";
	 	
	 	echo "<div>$strQuery</div>";

	 	

        //set order number
        $result=$this->query($strQuery);
	 	$ono  = $this->db->insert_id;
	 	//$ono = mysqli_insert_id($this->db);
	 	echo($ono);
	 	$_SESSION['ono']=$ono;
	 	

	 	return 	$result;
	 }

}


include_once("test.php");
    $obj=new test();


	 $cno = 3;
	
$obj->connect();
	  $s=$obj->createOrder($cno);

	  if($s==false){
      
    echo'Error';
    
    
    }else{
    echo'Done'; }

	?>