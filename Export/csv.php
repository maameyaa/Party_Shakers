<?php

include_once("Customer.php");
                            
                            if (isset ($_REQUEST['text'])){
                                
                                $text = $_REQUEST['text'];
                            
                            $customer = new Customer();
                            
                            $customers = $customer -> searchcustomers($text);

                            }

                            else 
                                {
                                    $customer = new Customer();
                                    $text="";
                                    $customers = $customer -> searchcustomers($text);
                                }

                            
                            if ($customers==false){
                                echo "Error";
                                exit();
                            }

                            if ($customers==false){
                                echo "Error";
                                exit();
                            }
                            
                            else
                            {
                                $row = $customer ->fetch();
                            }

                            $Name=array();
                            $Address=array();
                            $Town=array();
                            $Region=array();
                            $Number=array();
                            $Email=array();

                            while ($row = $customer ->fetch())
                            {
                            	array_push($Name, $row["cfirstname"]);
                            	array_push($Address, $row["house"]);
                            	array_push($Town, $row["town"]);
                            	array_push($Region, $row["region"]);
                            	array_push($Number, $row["phone"]);
                            	array_push($Email, $row["email"]);

                            }


// output headers so that the file is downloaded rather than displayed
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="demo.csv"');
 
// do not cache the file
header('Pragma: no-cache');
header('Expires: 0');
 
// create a file pointer connected to the output stream
$file = fopen('php://output', 'w');
 
// send the column headers
fputcsv($file, array('Name','Address', 'Town', 'Region', 'Phone Number', 'Email'));
 
 
// output each row of the data
$i = 0;
while ($i<count($Name)) {
	 fputcsv($file, array($Name[$i],$Address[$i],$Town[$i],$Region[$i],$Number[$i],$Email[$i]));
	 $i++;
}
exit();

?>