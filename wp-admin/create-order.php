<?php 
/** Load WordPress Bootstrap */
require_once dirname( __DIR__ ) . '/wp-load.php';

/** Load WordPress Administration APIs */
require_once ABSPATH . 'wp-admin/includes/admin.php';

/** Load Ajax Handlers for WordPress Core */
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php';

$productIDArray = array();
foreach(WC()->cart->cart_contents as $key => $item){
	$productIDArray[] = $item['product_id'];
}
global $wpdb;
global $woocommerce;
$address = array(
  'first_name' => $_REQUEST['billing_first_name'],
  'last_name'  => $_REQUEST['billing_last_name'],
  'company'    => '',
  'email'      => $_REQUEST['billing_email'],
  'phone'      => $_REQUEST['billing_phone'],
  'address_1'  => $_REQUEST['billing_address_1'],
  'address_2'  => '',
  'city'       => '',
  'state'      => '',
  'postcode'   => $_REQUEST['billing_postcode'],
  'country'    => $_REQUEST['billing_country']
);

// Now we create the order
$order = wc_create_order();

// The add_product() function below is located in /plugins/woocommerce/includes/abstracts/abstract_wc_order.php
foreach($productIDArray as $key => $pID){
$order->add_product( get_product($pID), 1); // This is an existing SIMPLE product
}
$order->set_address( $address, 'billing' );
$order->set_address( $address, 'shipping' );
//
$order->calculate_totals();
$order->update_status("Completed", 'Imported order', TRUE);  

$orderID = $order->id;
$vpaAddress = $_REQUEST['vpa_address'];
$amount = $_REQUEST['amount'];
$billing_first_name = $_REQUEST['billing_first_name'];
$table = "wp_wc_order_upi_data";
$data = array('order_id' => $orderID, 'vap_address' => $vpaAddress, 'amount' => $amount, 'customer_name' => $billing_first_name);
$format = array('%s','%d');
$wpdb->insert($table,$data);

WC()->cart->empty_cart();

echo $order->id; die;

?>