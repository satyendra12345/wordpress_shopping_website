<?php 
require_once __DIR__ . '/admin.php';
global $wpdb;
//$orderID = $_REQUEST['order_id'];
//$vpaAddress = $_REQUEST['VPA_address'];
$orderID = 123;
$vpaAddress = "qwe@gmail.com";
$table = "wp_wc_order_upi_data";
$data = array('order_id' => $orderID, 'vap_address' => $vpaAddress);
$format = array('%s','%d');
$wpdb->insert($table,$data);

echo "Success"; die;
?>
