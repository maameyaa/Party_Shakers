<?php

//Benedicta Amo Bempah
// 53532016
// Counting Visitors on Page
// Admin Display. Credit to Kings from Go Expert on Tracking Visitors on site


include('visitor_info.php');

//open log file
$logfile = "logfile.txt";

if (file_exists($logfile)){

	$handle = fopen($logfile, "r");
	$logs = fread($handle, filesize($logfile));
	fclose($handle); }
else{
	die("The log file doesn't exist");
}

// seperating each logline
$log = explode("\n", trim($logs));

//searching each part in each logline

for($i = 0; $i < count($log); $i++){
	$log[$i] = trim($log[$i]);
	$log[$i] = explode('|', $log[$i]);
}

echo count($log) . " people have visited this website.";


?>