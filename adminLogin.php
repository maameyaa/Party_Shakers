<?php
session_start();
?>
	    <!-- Employee Home Page
	         Benedicta Amo Bempah
             53532016
	         eCommerce Group Project
	         Support from: Hector Amoah 18' -->

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "party_shakers";


// create connection
$connection = mysqli_connect($server, $username, $password, $database);

//check connection
if(!$connection){
	die ("Connection failed: " . mysqli_connect_error());

}


 // require('empLogin.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted



if (isset($_POST['eusername']) and isset($_POST['password']) /*and isset($POST_['status']) */){

	//3.1.1 Assigning posted values to variables.
	$username = $_POST['eusername'];
	$password = $_POST['password'];

	//3.1.2 Checking the values are existing in the database or not
	$query = "SELECT * FROM `employees` WHERE eusername='$username' and password='$password' and status='Admin'";
	 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	// creating sessions to keep track of the user
	//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
	if ($count == 1){
		$_SESSION['eusername'] = $username;
		header("location:admin.php");
	}else{
		header("location:errorPage.html");
	//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
		$fmsg = "Invalid Login Credentials. Sorry, you're not an Admin";
	}

}

//3.1.4 if the user is logged in Greets the user with message

//3.2 When the user visits the page first time, simple login form will be displayed.


?>
