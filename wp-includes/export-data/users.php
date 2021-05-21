<?php 

$con=mysqli_connect("localhost","zopnow_nitam","Q()H)umB5W8Q","zopnow_db");

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

$result = mysqli_query($con, "select * from wp_users");

$myArray = array();
$counter = 1;
while($row = mysqli_fetch_row($result)){
	$fname = $lanme = $email = $phone = $zipcode = '';
	$firstName = mysqli_fetch_row(mysqli_query($con, "select * from wp_usermeta where user_id = '".$row[0]."' and meta_key = 'first_name'"));
	$lastName = mysqli_fetch_row(mysqli_query($con, "select * from wp_usermeta where user_id = '".$row[0]."' and meta_key = 'last_name'"));
	$phoenNumber = mysqli_fetch_row(mysqli_query($con, "select * from wp_usermeta where user_id = '".$row[0]."' and meta_key = 'billing_phone'"));
	$zip = mysqli_fetch_row(mysqli_query($con, "select * from wp_usermeta where user_id = '".$row[0]."' and meta_key = 'billing_postcode'"));
	if($firstName[3] != ""){ $fname = $firstName[3];}
	if($lastName[3] != ""){ $lanme = $lastName[3];}
	if($phoenNumber[3] != ""){ $phone = $phoenNumber[3];}
	if($zip[3] != ""){ $zipcode = $zip[3];}
	
	$lineData = array($counter,$fname.''.$lanme,$row[4],$phone,$zipcode);
	fputcsv($f, $lineData, $delimiter);					
	$counter++;
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