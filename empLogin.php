<?php

$server = "localhost:3306";
$username = "root";
$password = "mysql@benedicta";
$database = "party_shakers";


// create connection
$connection = mysqli_connect($server, $username, $password, $database);

//check connection
if(!$connection){
	die ("Connection failed: " . mysqli_connect_error());

}


?>
