	    <!-- Employee Home Page
	         Benedicta Amo Bempah
             53532016
	         eCommerce Group Project
	         Support from: Hector Amoah 18' -->
<?php

session_start();

 require('empLogin.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted

if (isset($_POST['eusername']) and isset($_POST['password'])){

//3.1.1 Assigning posted values to variables.
$username = $_POST['eusername'];
$password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `employees` WHERE eusername='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

$qpass = "SELECT * FROM `employees` WHERE password='$password'";
$qry = mysqli_query($connection, $qpass);
$pwd = mysqli_fetch_assoc($qry);
$pass = $pwd['password'];

// creating sessions to keep track of the user

if($password===$pass){

}
else{
	header('Location: errorPage.html');
	
}


//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['eusername'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['eusername'])){
$username = $_SESSION['eusername'];
header("location:employeePage.php");

echo "Hello " . $username . "<br>";
echo "This is the Employees Area<br>
";
echo "<a href='logout.php'>Logout</a>";
 
}
else{ }
//3.2 When the user visits the page first time, simple login form will be displayed.

?>