<?php
session_start();

	if(!isset($_REQUEST['cmd'])){

	  echo "Command not provided";
	  exit();

	}


	$cmd=$_REQUEST['cmd'];

	switch($cmd){

		case 1: 
		login();
		break; 

		case 2: 
		register();
		break;
	}


  	function login(){
	include_once("Customer.php");
		 $obj=new Customer();

		 if(!isset($_REQUEST['email'])||!isset($_REQUEST['password'])){

		 	echo '{"result":0,"message":"Please provide email address and password"}';

		 	return;
		 }

		$email=$_REQUEST["email"];
	  	$password=$_REQUEST["password"];

	  	$row=$obj->login($email,$password);
        
	  	$results=$obj->fetch();

	  	if(!$results){
	  		echo '{"result":0,"message":"Wrong email address or password"}';
	  		return;
	  	}

	  	else{
	  		echo '{"result":1,"message":"log in complete"}';
            

			$_SESSION['name']=$results['cfirstname'];
            
            $_SESSION['cno']=$results['cno'];

            $_SESSION['login'] = "1";
            
         
	  }
	}


	function register(){
	include_once("Customer.php");
		$obj=new customer();

		if (empty($_REQUEST['fname'])||empty($_REQUEST['lname']) || empty($_REQUEST['email'])||empty($_REQUEST['password'])){
            
	        echo'{"result":0,"message":"Please provide all sign up details"}';
	  		return;
	  	}

	  	else{
	  		$email	=$_REQUEST["email"];
   			$row=$obj->checkemail($email);
   			$results=$obj->fetch();

   			if ($results){
   				echo '{"result":0,"message":"Oops you already have an account with this email!"}';
   			}

   			else{
   				$fname	=$_REQUEST["fname"];
   				$lname	=$_REQUEST["lname"];
   				$email	=$_REQUEST["email"];
   				$password=$_REQUEST["password"];


   				if($obj->register($fname,$lname,$email,$password)){
//			  		echo '{"result":1,"message":"Registration successful"}';
			  		login();
			  		// print_r($_SESSION['CUSTOMER']);
			  	}


			  	else{
			  		echo '{"result":0,"message":"Error adding customer"}';
			  		return;
   			    }
   			}
	  	}
	}





?>