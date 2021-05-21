<?php 
require_once 'wp-config.php';
global $wpdb;
$orderID = $_REQUEST['order_id'];
$vpaAddress = $_REQUEST['VPA_address'];
$amount = $_REQUEST['amount'];
$billing_first_name = $_REQUEST['billing_first_name'];
$table = "wp_wc_order_upi_data";
$data = array('order_id' => $orderID, 'vap_address' => $vpaAddress, 'amount' => $amount, 'customer_name' => $billing_first_name);
$format = array('%s','%d');
$wpdb->insert($table,$data);

echo "Success"; die;
