<?php 

$con=mysqli_connect("localhost","zopnow_nitam","Q()H)umB5W8Q","zopnow_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

$delimiter = ",";
$filename = "zopnow-order-list-" . date('d-F-Y') . ".csv";

//create a file pointer
$f = fopen('php://memory', 'w');

//set column headers
$fields = array(
				'S.No', 
				'User Name', 
				'Email Address', 
				'Phone',
				'Pincode',
				'Total Amount',
				'Order Date');

fputcsv($f, $fields, $delimiter);

$result = mysqli_query($con, "select * from wp_wc_order_stats");

$myArray = array();
$counter = 1;
while($row = mysqli_fetch_row($result)){
	$pData = mysqli_fetch_row(mysqli_query($con, "select * from wp_wc_customer_lookup where customer_id = '".$row[11]."'"));
	if($pData[5] != ""){
		$lineData = array($counter,$pData[3].''.$pData[4],$pData[5],'',$pData[9],$row[5].' INR',$row[2]);
		fputcsv($f, $lineData, $delimiter);					
		$counter++;
	}
}

//move back to beginning of file
fseek($f, 0);

//set headers to download file rather than displayed
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

//output all remaining data on a file pointer
fpassthru($f);
mysqli_close($con);
die;
?>