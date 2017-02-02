<?php
			//initialize
			$ono="";
			$pno="";
			$qty="";
				
			if(isset($_REQUEST['ono'])){
				$ono=$_REQUEST['ono'];
								

				//creates an object of the class
				include_once("orders.php");
				$obj=new orders();
				


					$s=$obj->getparts($ono);
					//echo $s;
					if($s==false){
					$strStatusMessage="Error while adding booking.";
					//echo $strStatusMessage;
					}else{
					echo'Done';
						//echo $strStatusMessage;
						}




				}
			
?>