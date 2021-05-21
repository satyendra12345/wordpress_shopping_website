<?php 

$con=mysqli_connect("localhost","root","","zopnow");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

$delimiter = ",";
$filename = "zopnow-user-list-" . date('d-F-Y') . ".csv";

//create a file pointer
$f = fopen('php://memory', 'w');

//set column headers
$fields = array(
				'S.No', 
				'User Name', 
				'Email Address', 
				'Phone',
				'Pincode');

fputcsv($f, $fields, $delimiter);

$result = mysqli_query($con, "select * from wp_wc_customer_lookup");

$myArray = array();
$counter = 1;
while($row = mysqli_fetch_row($result)){
	if($row[5] != ""){
		$lineData = array($counter,$row[3].''.$row[4],$row[5],'',$row[9]);
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