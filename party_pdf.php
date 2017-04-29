<?php
require('fpdf.php');


$connect = mysqli_connect("localhost", "root", "", "party_Shakers");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// else{
//  print ("Connection successful");
// }
$data_array=array();
/* return name of current default database */
if ($result = mysqli_query($connect, "SELECT pno, pname, qoh, price, category FROM parts order by pno asc")) {
    while($row = mysqli_fetch_row($result))
    {
    //var_dump($row);
 $data_array[] = $row;    
    //print("<div>".$row[0]."</div>");
    //printf("Parts include:", $row);
    }
    //free is after you are done
    mysqli_free_result($result);
}

class Party_PDF extends FPDF{

	// Page Header
	function Header()
{
    // Logo
    $this->Image('glass.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(70,20,'Eye Candy',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

function ReceiptTitle($label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,6,"Thank you, your glass list is as follows : $label",0,1,'L',true);
    // Line break
    $this->Ln(8);
}

// Print Receipt Details
function PrintReceipt($title)
{
    // $this->AddPage();
    $this->ReceiptTitle($title);
    // $this->ChapterBody($file);
}

// Colored table
function PartsTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');

    // Header
    $w = array(40, 45, 30, 35, 40);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();

    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');

    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,number_format($row[0]),'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'L',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Cell($w[4],6,$row[4],'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


}

// Instanciation of inherited class
$pdf = new Party_PDF();
// // Column headings
$header = array('Glass no', 'Glass name', 'Quantity', 'Price', 'Category');
// $header_array = array();
// $header_array[] = "Parts No";
// $header_array[] = "Parts1";
// $header_array[] = "Parts2";
// $header_array[] = "Parts3";
// $header_array[] = "Parts4";

// $data_array = array();
// for($i = 0; $i < 10; $i++)
// {
//  //data for your row (this can be done for each for in the database result)
//  $data_row = array();
//  for($j = 0; $j < 5; $j++)
//  {
//   $data_row[] = "$i.$j";
//  }
//  $data_array[] = $data_row;
// }
// Data loading
//print ("<pre>");
$data = $pdf->LoadData('parts.txt');
//var_dump($header);
//var_dump($data);
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'Your only eye wear shop in Ghana!');
$pdf->Ln();
$pdf->PrintReceipt('Your Order List is as follows -');
$pdf->Ln();
$pdf->PartsTable($header,$data_array);
// $pdf->PartsTable($header_array,$data_array);

$pdf->Output();
?>




