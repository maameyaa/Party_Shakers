<?php

$connect = mysqli_connect("localhost", "root", "", "party_Shakers");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
	print ("Connection successful");
}
$data_array=array();
/* return name of current default database */
if ($result = mysqli_query($connect, "SELECT pno, pname, qoh, price, category FROM parts")) {
    while($row = mysqli_fetch_row($result))
    {
    var_dump($row);
	$data_array[] = $row;    
    print("<div>".$row[0]."</div>");
    printf("Parts include:", $row);
    }
    //free is after you are done
    mysqli_free_result($result);
}
print("<pre>");
var_dump($data_array);
mysqli_close($connect);
?>