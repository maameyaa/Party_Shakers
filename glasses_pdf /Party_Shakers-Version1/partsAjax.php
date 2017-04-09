<?php
	if (!isset($_REQUEST['cmd'])) {
		echo '{"result": 0, "message": "Command not entered"}';
	}
	$command = $_REQUEST['cmd'];
	switch($command) {
		case 1:
		addPart();
		break;

		case 2:
		editPart();
		break;

		case 3:
		searchPart();
		break;

		default:
		echo "wrong cmd";
		break;
	}


function addPart() {
	if (($_REQUEST['pname']=="") || ($_REQUEST['qoh']=="") || ($_REQUEST['price']=="") || ($_REQUEST['olevel']=="")
		|| ($_REQUEST['category']=="")) {
		echo '{"result":0, "message": "All information required was not given"}';
		return;
	}
	
	include_once("parts.php");
	$obj = new parts();
	$pname = $_REQUEST['pname'];
	$qoh = $_REQUEST['qoh'];
	$price = $_REQUEST['price'];
	$olevel = $_REQUEST['olevel'];
	$category = $_REQUEST['category'];
	
	$a = $obj->newPart($pname,$qoh,$price,$olevel,$category);

	if (!$a) {
		echo '{"result":0 ,"message": "Could not add Part"}';
	}
	
	else {
	 echo '{"result":1, "message": "Part sucessfully added"}';	
	}
	
}

function editPart(){
		if (!isset($_REQUEST['pno'])) {
			echo '{"result": 0 "message": "Part not selected"}'
			//echo "0";
			return();
		 }

		$pno = $_REQUEST['pno'];

			include_once("parts.php");
			$obj = new parts();

			$a = $obj->editPart($pno,$pname,$qoh,$price,$olevel,$category);
	
			if (!$a) {
				echo '{"result": 0, "message": "Error Updating Part"}';
				return;
			}
			else {
				echo '{"result": 1, "message": "Part successfully updated"}';
			}
				
}

function searchPart(){

}


?>