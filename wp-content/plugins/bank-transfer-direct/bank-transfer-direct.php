<?php

/**
 * Plugin Name: Direct Amount Transfer With QR Code Into Bank
 * Plugin URI: #
 * Description: It will directly Transfer the Amount into bank with scanner and It also triggers the payment apps in Mobile 
 * Version: 1.0.0
 * Author: Satyendra pandey(stranger)
 * Author URI: #
 * License: GPL2
 */

/*
 * This action hook registers our PHP class as a WooCommerce payment gateway
 */
add_filter('woocommerce_payment_gateways', 'misha_add_gateway_class');
function misha_add_gateway_class($gateways)
{
    $gateways[] = 'WC_Stranger_Gateway'; // your class name is here
    return $gateways;
}

/*
 * The class itself, please note that it is inside plugins_loaded action hook
 */
add_action('plugins_loaded', 'misha_init_gateway_class');
function misha_init_gateway_class()
{

    class WC_Stranger_Gateway extends WC_Payment_Gateway
    {

        public function __construct()
        {

            $this->id = 'stranger'; // payment gateway plugin ID
            $this->icon = ''; // URL of the icon that will be displayed on checkout page near your gateway name
            $this->has_fields = true; // in case you need a custom credit card form
            $this->method_title = ' Direct Amount Transfer With QR Code Into Bank-Stranger Gateway';
            $this->method_description = 'Description of Stranger payment gateway'; // will be displayed on the options page

            // gateways can support subscriptions, refunds, saved payment methods,
            // but in this tutorial we begin with simple payments
            $this->supports = array(
                'products'
            );

            // Method with all the options fields
            $this->init_form_fields();

            // Load the settings.
            $this->init_settings();
            $this->title = $this->get_option('title');
            $this->description = $this->get_option('description');
            $this->enabled = $this->get_option('enabled');
            $this->testmode = 'yes' === $this->get_option('testmode');
            $this->private_key = $this->testmode ? $this->get_option('test_private_key') : $this->get_option('private_key');
            $this->publishable_key = $this->testmode ? $this->get_option('test_publishable_key') : $this->get_option('publishable_key');

            // This action hook saves the settings
            add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));

            // We need custom JavaScript to obtain a token
            add_action('wp_enqueue_scripts', array($this, 'payment_scripts'));

            // You can also register a webhook here
            // add_action( 'woocommerce_api_{webhook name}', array( $this, 'webhook' ) );
        }




        public function init_form_fields()
        {

            $this->form_fields = array(
                'enabled' => array(
                    'title'       => 'Enable/Disable',
                    'label'       => 'Enable Stranger Gateway',
                    'type'        => 'checkbox',
                    'description' => '',
                    'default'     => 'no'
                ),
                'title' => array(
                    'title'       => 'Title',
                    'type'        => 'text',
                    'description' => 'This controls the title which the user sees during checkout.',
                    'default'     => 'Bank Transfer',
                    'desc_tip'    => true,
                ),
                'description' => array(
                    'title'       => 'Description',
                    'type'        => 'textarea',
                    'description' => 'This controls the description which the user sees during checkout.',
                    'default'     => 'Pay with your mobile phone direct in bank',
                ),

                'bank_owner_name' => array(
                    'title'       => 'Bank Owner Name',
                    'type'        => 'text'
                ),
                'bank_account_number' => array(
                    'title'       => 'Bank Accont number',
                    'type'        => 'number',
                ),
                'ifsc_code' => array(
                    'title'       => 'IFSC Code',
                    'type'        => 'text'
                )

            );
        }



        public function payment_scripts()
        {

            // we need JavaScript to process a token only on cart/checkout pages, right?
            if (!is_cart() && !is_checkout() && !isset($_GET['pay_for_order'])) {
                return;
            }

            // if our payment gateway is disabled, we do not have to enqueue JS too
            if ('no' === $this->enabled) {
                return;
            }

            // no reason to enqueue JavaScript if API keys are not set
            if (empty($this->private_key) || empty($this->publishable_key)) {
                return;
            }

            // do not work with card detailes without SSL unless your website is in a test mode
            if (!$this->testmode && !is_ssl()) {
                return;
            }


            // wp_enqueue_script( 'index.js', './public/index.js' );
            // wp_enqueue_script( 'qrcode.js', './public/qrcode.js' );


            // wp_register_script( 'woocommerce_stranger', plugins_url( 'qrcode.js', __FILE__ ), array( 'jquery', 'index_js' ) );

            // in most payment processors you have to use PUBLIC KEY to obtain a token
            wp_localize_script('woocommerce_stranger', 'stranger_params', array(
                'AccountNumber' => $this->bank_account_number,
                'IFSC_Code' => $this->ifsc_code,
                'Account_owner' => $this->bank_owner_name
            ));

            wp_enqueue_script('woocommerce_misha');
        }
    }
}
