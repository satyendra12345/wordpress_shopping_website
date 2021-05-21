<?php
global $wpdb;
$deletrec = (isset($_GET['deletrec']))?$_GET['deletrec']:'';
$msg='';
if($deletrec == 'users'){
	$not_delete = array(1);
	$adminuser = get_users(['role__in' => ['administrator']]);
	if(!empty($adminuser)){
		foreach($adminuser as $admusr){
			$not_delete[]=$admusr->ID;	
		}
	}
	if(!empty($not_delete)){		
		$table_usermeta = $wpdb->prefix.'usermeta';
		$sql = 'DELETE FROM `'.$table_usermeta.'` WHERE user_id NOT in ('.implode(",",$not_delete).')';
		$wpdb->query($sql);
		
		$table_users = $wpdb->prefix.'users';
		$sql = 'DELETE FROM `'.$table_users.'` WHERE ID NOT in ('.implode(",",$not_delete).')';
		$wpdb->query($sql);
		$msg='All User Succesfully Deleted.';
	}
}
if($deletrec == 'order'){
	   $woocommerce_order_itemmeta = $wpdb->prefix.'woocommerce_order_itemmeta';
	   $sql = 'DELETE FROM `'.$woocommerce_order_itemmeta.'`';
	   $wpdb->query($sql);
	   
	   $woocommerce_order_items = $wpdb->prefix.'woocommerce_order_items';
	   $sql = 'DELETE FROM `'.$woocommerce_order_items.'`';
	   $wpdb->query($sql);
	   
	   
	   $wc_order_coupon_lookup = $wpdb->prefix.'wc_order_coupon_lookup';
	   $sql = 'DELETE FROM `'.$wc_order_coupon_lookup.'`';
	   $wpdb->query($sql);
	   
	   $wc_order_product_lookup = $wpdb->prefix.'wc_order_product_lookup';
	   $sql = 'DELETE FROM `'.$wc_order_product_lookup.'`';
	   $wpdb->query($sql);
	   
	   $wc_order_stats = $wpdb->prefix.'wc_order_stats';
	   $sql = 'DELETE FROM `'.$wc_order_stats.'`';
	   $wpdb->query($sql);
	   
	   $wc_order_tax_lookup = $wpdb->prefix.'wc_order_tax_lookup';
	   $sql = 'DELETE FROM `'.$wc_order_tax_lookup.'`';
	   $wpdb->query($sql);	   	   	   	   
	   
	   
	   $wc_order_upi_data = $wpdb->prefix.'wc_order_upi_data';
	   $sql = 'DELETE FROM `'.$wc_order_upi_data.'`';
	   $wpdb->query($sql);
	   
	   $comments = $wpdb->prefix.'comments';
	   $sql = 'DELETE FROM `'.$comments.'` WHERE comment_type = "order_note"';
	   $wpdb->query($sql);	
	   
	   $posts = $wpdb->prefix.'posts';
	   $postmeta = $wpdb->prefix.'postmeta';
	   $sql = 'DELETE FROM `'.$postmeta.'` WHERE post_id IN ( SELECT ID FROM `'.$posts.'` WHERE post_type = "shop_order")';
	   $wpdb->query($sql);	      
	   
	   
	   $sql = 'DELETE FROM `'.$posts.'` WHERE post_type = "shop_order"';
	   $wpdb->query($sql);	      
	   
	   $msg='All Orders Succesfully Deleted.';
	   	   
}
if($deletrec == 'contactform'){

	   $posts = $wpdb->prefix.'posts';
	   $postmeta = $wpdb->prefix.'postmeta';
	   $sql = 'DELETE FROM `'.$postmeta.'` WHERE post_id IN ( SELECT ID FROM `'.$posts.'` WHERE post_type = "wpsc_ticket_thread")';
	   $wpdb->query($sql);
	   
	   $sql = 'DELETE FROM `'.$posts.'` WHERE post_type = "wpsc_ticket_thread"';
	   $wpdb->query($sql);	   

	   $wpsc_ticket = $wpdb->prefix.'wpsc_ticket';
	   $sql = 'DELETE FROM `'.$wpsc_ticket.'`';
	   $wpdb->query($sql);
	   
	   $wpsc_ticketmeta = $wpdb->prefix.'wpsc_ticketmeta';
	   $sql = 'DELETE FROM `'.$wpsc_ticketmeta.'`';
	   $wpdb->query($sql);	   
	  
	   $msg='All Contact Form Data Succesfully Deleted.';
}
?>
<style>
.com-adm-btn { background:#0073aa; color:#fff; border-radius:5px; padding:7px 15px; display:table; margin:2px auto; text-decoration:none; font-size:15px; display:inline-block;}
</style>
<?php if(!empty($msg)){ ?><div style="color:#F00;padding:15px;font-weight:bold;"><?=$msg;?></div><?php } ?>
<table cellpadding="10" cellspacing="10">
<tr>
 <td><a class="com-adm-btn" href="?page=clear-entry&deletrec=users">Clear User Entry</a></td>
</tr>
<tr>
 <td><a class="com-adm-btn" href="?page=clear-entry&deletrec=order">Clear Order Entry</a></td>
</tr>
<tr>
 <td><a class="com-adm-btn" href="?page=clear-entry&deletrec=contactform">Clear Contact Form Entry</a></td>
</tr>
</table>