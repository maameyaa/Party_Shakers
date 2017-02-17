<?php

$DB_HOST ="localhost";
$DB_USERNAME ="root";
$DB_PASSWORD ="";

$db = new PDO("mysql:host=$DB_HOST",$DB_USERNAME,$DB_PASSWORD);

$db->query("CREATE DATABASE `party_shakers`;");
$query = file_get_contents("party_shakers.sql");

$stmt = $db->prepare($query);

if($stmt->execute())
	echo "Success";
else
	echo"Fail";
?>