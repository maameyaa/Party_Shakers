<?php

include('visitor_info.php');

//open log file
$logfile = "/some/path/to/your/$logfile.txt";

if (file_exists($logfile)){

	$handle = fopen($logfile, "r");
	$log = fread($handle, filesize($logfile));
	fclose($handle); }
else{
	die("The log file doesn't exist");
}

// seperating each logline
$log = explode("\n", trim($log));

//searching each part in each logline

for($i = 0; $i < count($log); $i++){
	$log[$i] = trim($log[$i]);
	$log[$i] = explode('|', $log[$i]);
}

echo count($log) . " people have visited this website.";

}

?>