
<?php

//Benedicta Amo Bempah
// 53532016
// Counting Visitors on Page
// Admin Display. Credit to Kings from Go Expert on Tracking Visitors on site


//Tracking visitors of site - getting information from your visitor
$ipaddress = $_SERVER['REMOTE_ADDR'];
$page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$page .= (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : "";
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$datetime = mktime();
$useragent = $_SERVER['HTTP_USER_AGENT'];
$remotehost = @gethostbyaddr(ipaddress);


//logging the information - writing to the log file

//creating log line
$logline = $ipaddress . '|' .$referrer .'|' . $datetime .'|' .$useragent .'|' .$remotehost .'|' .$page ."\n";

//writing to a log file
$logfile = 'logfile.txt';

// open the log file in "Append" mode
if(!$handle = fopen($logfile, 'a+')){
	die("Failed to open log file");
}

// write $logline to the logfile created
if(fwrite($handle, $logline) === FALSE){
	die("Failed to write to the log file");
}

fclose($handle);




?>