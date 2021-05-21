<?php

/**
 * wayfair functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wayfair
 */

defined('PRODUCT_IMAGE_URL_BASE') or define('PRODUCT_IMAGE_URL_BASE', 'https://ik.imagekit.io/gro/');
defined('PRODUCT_IMAGE_URL_BASE_ALTERNATE') or define('PRODUCT_IMAGE_URL_BASE_ALTERNATE', 'https://ik.imagekit.io/grocery/');
defined('PRODUCT_IMAGE_URL_BASE_GROC') or define('PRODUCT_IMAGE_URL_BASE_GROC', 'https://ik.imagekit.io/groc/');

defined('MINIMUM_CHECKOUT_AMOUNT') or define('MINIMUM_CHECKOUT_AMOUNT', 999.00);
defined('AMOUNT_FREE_SHIPPING') or define('AMOUNT_FREE_SHIPPING', 999.00);
defined('AMOUNT_5_PERCENT_DISCOUNT') or define('AMOUNT_5_PERCENT_DISCOUNT', 1700.00);
defined('AMOUNT_10_PERCENT_DISCOUNT') or define('AMOUNT_10_PERCENT_DISCOUNT', 2500.00);
defined('CUSTOM_ORDER_NUMBER_START') or define('CUSTOM_ORDER_NUMBER_START', 377295028993);
defined('WF_CURRENCY') or define('WF_CURRENCY', '₹');

defined('COOKIE_LOCATION_PIN') or define('COOKIE_LOCATION_PIN', 'user-location-pin');

include_once __DIR__ . '/inc/seo.php';

if (!function_exists('wayfair_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wayfair_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wayfair, use a find and replace
		 * to change 'wayfair' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('wayfair', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');
        add_image_size('blog-size', 400, 200, true);
        add_image_size('featured-size', 500, 300, true);
        add_image_size('featured-post-size', 600, 250, true);


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'wayfair'),
        ));

        // Portfolio Category Menu
        register_nav_menus(array(
            'portfolio' => esc_html__('Portfolio', 'wayfair'),
        ));

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wayfair_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));

        // add woocommerce support
        add_theme_support('woocommerce');
    }
endif;
add_action('after_setup_theme', 'wayfair_setup');



/* custom theme styles */
function wayfair_styles()
{

    wp_enqueue_style('watfair-slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('watfair-slick', get_stylesheet_directory_uri() . '/assets/css/slick.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('watfair-mCustomScrollbar', get_stylesheet_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('watfair-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('watfair-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('watfair-styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.1.2', 'all');
    wp_enqueue_style('watfair-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('watfair-app', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), '1.0.3', 'all');
}
add_action('wp_enqueue_scripts', 'wayfair_styles', 99);


/* custom theme scripts */
function wayfair_scripts()
{

    wp_enqueue_script('watfair-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-html5', get_stylesheet_directory_uri() . '/assets/js/html5.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-jquerycookit', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'), '', true);
    // wp_enqueue_script('watfair-googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDzrqqR26S0lHgjXdAfA2m-8TebjtfUw9k', array('jquery'), '', true);
    wp_enqueue_script('watfair-placeholders', get_stylesheet_directory_uri() . '/assets/js/placeholders.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-respond', get_stylesheet_directory_uri() . '/assets/js/respond.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-bootstrap-4', get_stylesheet_directory_uri() . '/assets/js/bootstrap-4-autocomplete.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-elevateZoom', get_stylesheet_directory_uri() . '/assets/js/jquery.elevateZoom-3.0.8.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-mCustomScrollbar', get_stylesheet_directory_uri() . '/assets/js/jquery.mCustomScrollbar.min.js', array('jquery'), '', true);
    wp_enqueue_script('watfair-sweetalert', 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js', array('jquery'), '', true);
    // wp_enqueue_script('watfair-countdown', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js', array('jquery'), '', true);

    // add JS to checkout page only
    if (is_page('checkout')) {

        wp_enqueue_script('watfair-accordion', get_stylesheet_directory_uri() . '/assets/js/jquery.accordion-wizard.min.js', array('jquery'), '', true);
    }

    wp_enqueue_script('watfair-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.3.5', true);

    // localize the script to your domain name, so that you can reference the url to admin-ajax.php file easily
    wp_localize_script('watfair-scripts', 'wayfair_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'wayfair_scripts', 99);


/*=============================================
=            ACF OPTIONS PAGE CODE            =
=============================================*/

add_action('acf/init', 'wayfair_acf_op_init');
function wayfair_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}


/* nav walker */
class Wayfair_Menu_Walker extends Walker_Nav_Menu
{


    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {

        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;


        $icon_data = wp_get_attachment_image_src($item->thumbnail_id);
        $icon_url = $icon_data[0];
        //$img='';
        if (isset($icon_url)) {
            $img = '<img class="menu-icon" src="' . $icon_url . '">';
        }

        // Check our custom has_children property.
        if ($args->walker->has_children && $depth === 0) {
            // if item (li) has children and its depth is 0

            // hover functionality
            $menu_data_hover = explode(' ', $item->title);
            $menu_data_hover = implode('', $menu_data_hover);

            // replace that character to avoid JS error
            if (strpos($menu_data_hover, '&') !== -1) {

                $menu_data_hover = str_replace('&', '', $menu_data_hover);
            }

            $output .= "<li class='" .  implode(" ", $item->classes) . "' data-hover='" . $menu_data_hover . "'>  ";
        } else {
            $output .= "<li class='" .  implode(" ", $item->classes) . "'> ";
        }



        //Add SPAN if no Permalink
        if ($args->walker->has_children && $depth === 0) {

            if ($permalink && $permalink != '#') {
                $output .= '<a href="#">' . $img . '<span class="menu-text"> ';
            } else {
                $output .= '<span>';
            }
        } else {

            if ($permalink && $permalink != '#') {

                $icon_data = wp_get_attachment_image_src($item->thumbnail_id);
                $icon_url = $icon_data[0];
                //$img='';
                if (isset($icon_url)) {
                    $img = '<img class="menu-icon" src="' . $icon_url . '">';
                } else {
                    $img = '';
                }

                $output .= '<a href="' . $permalink . '">' . $img . '<span class="menu-text">';
                //$output .= '<a href="' . $permalink . '"><span class="menu-text">';
            } else {
                $output .= '<span>';
            }
        }

        $output .= $title;

        if ($description != '' && $depth == 0) {
            $output .= '<small class="description">' . $description . '</small>';
        }

        if ($permalink && $permalink != '#') {
            $output .= '</span></a>';
        } else {
            $output .= '</span>';
        }

        apply_filters('walker_nav_menu_start_lvl', $output, $item, $depth, $args->myarg = $item->title);
    }


    // add classes to ul sub-menus
    function start_lvl(&$output, $depth = 0, $args = array())
    {

        // echo '<pre>'; print_r($args); die;

        // depth dependent classes
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            // 'sub-menu',
            // 'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);

        // hover functionality
        $menu_data_hover = explode(' ', $args->myarg);
        $menu_data_hover = implode('', $menu_data_hover);

        // replace that character to avoid JS error
        if (strpos($menu_data_hover, '&') !== -1) {

            $menu_data_hover = str_replace('&', '', $menu_data_hover);
        }

        // build html
        if ($display_depth == 1) {
            $output .= "\n" . $indent . '<ul class="' . $class_names . '" data-hover-popup="' . $menu_data_hover . '">' . "\n";
        } else {
            $output .= "\n" . $indent . '<ul class="' . $class_names . '|' . '">' . "\n";
        }
    }
}



/**
 *
 * THIS IS TO GET THE CURRENT TEMPLATE NAME FOR DEBUGGING REASON
 *
 */

add_filter('template_include', 'var_template_include', 1000);

function var_template_include($t)
{

    $GLOBALS['current_theme_template'] = basename($t);

    return $t;
}


function get_current_template($echo = false)
{

    if (!isset($GLOBALS['current_theme_template'])) {

        return false;
    }

    if ($echo) {

        echo $GLOBALS['current_theme_template'];
    } else {

        return $GLOBALS['current_theme_template'];
    }
}


/**
 * On user logout it stay on my account page
 * Following code force to redirect to home page
 */
add_action('wp_logout', 'auto_redirect_after_logout');
function auto_redirect_after_logout()
{

    wp_redirect(home_url());
    exit();
}


// modify price html layout
function price_array($price)
{
    // print_r($price); die;
    $del = array('<span class="amount">', '</span>', '<del>', '<ins>', '<span class="woocommerce-Price-amount amount">',);
    $price = str_replace($del, '', $price);
    $price = str_replace('</del>', '', $price);
    $price = str_replace('</ins>', '', $price);
    $price = str_replace('<span class="woocommerce-Price-currencySymbol ">', '',  $price);
    $price = str_replace('<span>', '',  $price);
    $price_arr = explode(' ', $price);
    $price_arr = array_filter($price_arr);
    return $price_arr;

    // $html = '<h4 class="product-price">' . $price . '<span>' . $price. '</span></h4>';

    // return $html;
}
// add_filter( 'woocommerce_get_price_html', 'price_array', 100, 2 );



add_action('woocommerce_cart_calculate_fees', 'prefix_add_discount_line', 10, 1);
function prefix_add_discount_line($cart)
{

    if (is_admin() && !defined('DOING_AJAX'))
        return;

    $discount = 0;
    // Get the unformated taxes array
    $taxes = $cart->get_taxes();
    // Add each taxes to $discount
    foreach ($taxes as $tax) $discount += $tax;

    // Applying a discount if not null or equal to zero
    if ($discount > 0 && !empty($discount))
        $cart->add_fee(__('Tax Paid On COD', 'your-text-domain'), -$discount);
}


/* Cart drop down on header */
function custom_mini_cart()
{

    if (WC()->cart->get_cart_contents_count()  > 0) {

        echo woocommerce_mini_cart();
    } else {

?>
        <h2>Your cart is empty. Something missing?</h2>
        <p>Sign in to see items you may have added or saved during a previous visit.</p>
        <a href="javascript:void(0);" class="btn btn-danger btn-block" data-toggle="modal" data-target="#LoginSignup">Sign In</a>
    <?php
    }
}
add_shortcode('custom-techno-mini-cart', 'custom_mini_cart');



// Update Mini Cart By AJAX
/*
* Quick view modal content
*/
add_action("wp_ajax_update_mini_cart_by_ajax", "update_mini_cart_by_ajax");
add_action("wp_ajax_nopriv_update_mini_cart_by_ajax", "update_mini_cart_by_ajax");

function update_mini_cart_by_ajax()
{

    if (empty($_GET['params'])) {

        ob_start();

        // mini cart html stored in buffer to assign in a variable
        woocommerce_mini_cart();

        if (WC()->cart->get_cart_contents_count() === 0) {

            $data = json_encode(
                array(
                    'contents' => ob_get_contents(),
                    'count' => WC()->cart->get_cart_contents_count()
                )
            );
        } else {

            $data = json_encode(
                array(
                    'count' => WC()->cart->get_cart_contents_count()
                )
            );
        }

        ob_clean();
    } else {

        $data = json_encode(
            array(
                'count' => WC()->cart->get_cart_contents_count()
            )
        );
    }

    echo $data;
    die;
}



/* Shop page product title */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
function woocommerce_template_loop_product_title($title)
{

    ?>
    <h2 class="product-title"><?php echo get_the_title() ?></h2>
<?php
}





/* Replace add to cart button in the loop.
 */
function iconic_change_loop_add_to_carts()
{
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
    add_action('woocommerce_after_shop_loop_item', 'iconic_template_loop_add_to_carts', 10);
}

add_action('init', 'iconic_change_loop_add_to_carts', 10);

/**
 * Use single add to cart button for variable products.
 */
function iconic_template_loop_add_to_carts()
{
    global $product;

    if (!$product->is_type('variable')) {
        woocommerce_template_loop_add_to_cart();
        return;
    }

    remove_action('woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20);
    add_action('woocommerce_single_variation', 'iconic_loop_variation_add_to_cart_button', 20);

    woocommerce_template_single_add_to_cart();
}

/**
 * Customise variable add to cart button for loop.
 *
 * Remove qty selector and simplify.
 */
function iconic_loop_variation_add_to_cart_button()
{
    global $product;

    $variant = get_variant($product->get_id());
    // print_r($variant['attributes']);
    $cart_item_key = get_cart_item_key_by_product_id($product->get_id(), $variant['attributes']['attribute_pa_weight']);
?>
    <div class="woocommerce-variation-add-to-cart variations_button">

        <button type="button" class="btn btn-warning btn-sm single_add_to_cart_button" style="display: <?php echo (!empty($cart_item_key)) ? 'none' : 'block' ?>">
            <?php echo esc_html($product->single_add_to_cart_text()); ?>
        </button>
        <div class="quantity_buttons" style="display: <?php echo (!empty($cart_item_key)) ? 'block' : 'none' ?>" data-product-id="<?php echo absint($product->get_id()); ?>">
            <input type="number" name="ProductNumberOne" value="<?php echo get_product_quantity($product->get_id()) ?>" min="0" max="10" readonly="readonly" inputmode="numeric" class="form-control" id="ProductNumberOne">
            <span class="quantity-controler down">-</span>
            <span class="quantity-controler up">+</span>
        </div>

        <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
        <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
        <input type="hidden" name="variation_id" class="variation_id" value="<?php echo $variant['variation_id'] ?>" />
    </div>
<?php
}


/**
 * Add bootstrap class to variant dropdown
 */
add_filter('woocommerce_dropdown_variation_attribute_options_html', 'wayfair_dropdown_variation_attribute_options_html');
function wayfair_dropdown_variation_attribute_options_html($html)
{
    // print_r($html); die;
    $html = str_replace('class=', 'class="form-control"', $html);

    return $html;
}


/*
* Quick view modal content
*/
add_action("wp_ajax_quick_view_product_details", "quick_view_product_details");
add_action("wp_ajax_nopriv_quick_view_product_details", "quick_view_product_details");

function quick_view_product_details()
{

    $product_id = $_REQUEST['product_id'];

    echo get_product_details();

    die();
}

function get_product_details()
{

    ob_start();

    include_once __DIR__ . '/template-parts/content-product-details.php';

    $modal_content = ob_get_contents();

    ob_clean();

    $in_cart = false;

    // getting the cart count if any
    foreach (WC()->cart->get_cart() as $cart_item) {

        $product_id = $cart_item['product_id'];

        if ($product_id == $_REQUEST['product_id']) {

            $in_cart = $cart_item['quantity'];
        }
    }

    echo json_encode(
        array(
            'content'   => $modal_content,
            'in_cart'   => $in_cart
        )
    );
}


// add to cart
add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
function woocommerce_ajax_add_to_cart()
{

    $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
    $variations   = !empty($_POST['variation']) ? (array) $_POST['variation'] : '';
    $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id);

    if (!$variation_id) {

        $variant = get_variant($product_id, $variations);
        $item_key = WC()->cart->add_to_cart($product_id, $quantity, $variant['variation_id'], $variations);
    } else {

        $item_key = WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variations);
    }

    if ($passed_validation && $item_key && 'publish' === $product_status) {

        do_action('woocommerce_ajax_added_to_cart', $product_id);

        if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
            wc_add_to_cart_message(array($product_id => $quantity), true);
        }

        echo json_encode(['item_key' => $item_key]);

        // WC_AJAX :: get_refreshed_fragments();
    } else {

        $data = array(
            'error' => true,
            'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
        );

        echo wp_send_json($data);
    }

    wp_die();
}



/**
 *
 */
function get_variant($product_id, $variant = '')
{
    $product = wc_get_product($product_id);

    // echo $_REQUEST['product_id'] . ', ' . $variant; die;

    if ($product->is_type('variable')) {

        $default_attributes = $product->get_default_attributes();

        foreach ($product->get_available_variations() as $variation_values) {

            foreach ($variation_values['attributes'] as $key => $attribute_value) {

                $attribute_name = str_replace('attribute_', '', $key);

                // die(json_encode(['$attribute_values' => $attribute_value, 'req' => $variant]));

                if (!empty($variant)) {

                    if ($variant ==  $attribute_value) {

                        // die(json_encode(['attribute_valuex' => $attribute_value]));

                        $is_default_variation = true;
                        break;
                    }
                } else {

                    $default_value = $product->get_variation_default_attribute($attribute_name);

                    if ($default_value == $attribute_value) {

                        $is_default_variation = true;
                    } else {

                        $is_default_variation = false;
                        break; // Stop this loop to start next main lopp
                    }
                }
            }

            if ($is_default_variation) {

                $variation_id = $variation_values['variation_id'];

                return $variation_values;
            }
        }
    }

    return false;
}




// update cart
add_action('wp_ajax_update_item_from_cart', 'update_item_from_cart');
add_action('wp_ajax_nopriv_update_item_from_cart', 'update_item_from_cart');
function update_item_from_cart()
{

    // $cart_item_key = $_POST['cart_item_key'];
    $cart_item_key_post = get_cart_item_key_by_product_id($_REQUEST['product_id'], $_REQUEST['variation']);
    $quantity           = intval($_POST['qty']);
    $category_id        = intval($_REQUEST['category_id']);

    // Get mini cart
    ob_start();

    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        if ($cart_item_key == $cart_item_key_post) {
            if (($category_id == 0) && $quantity > 1) {

                $categories = wc_get_product_cat_ids($_REQUEST['product_id']);
                if (in_array('463', $categories) !== false) {

                    die('open_limit_popup');
                } else {

                    WC()->cart->set_quantity($cart_item_key, $quantity, $refresh_totals = true);
                    break;
                }
            } else {

                WC()->cart->set_quantity($cart_item_key, $quantity, $refresh_totals = true);
                break;
            }
        }
    }
    WC()->cart->calculate_totals();
    WC()->cart->maybe_set_cart_cookies();
    return true;
}


/**
 * get cart item by product id
 */
function get_cart_item_key_by_product_id($product_id, $variation = '')
{
    $cart_item_key = false;

    foreach (WC()->cart->get_cart() as $cart_item) {

        $pid = $cart_item['product_id'];

        if (!empty($variation)) {

            if ($product_id == $pid && in_array($variation, $cart_item['variation'])) {

                $cart_item_key = $cart_item['key'];
                break;
            }
        } else {

            if ($product_id == $pid) {

                $cart_item_key = $cart_item['key'];
                break;
            }
        }
    }

    return $cart_item_key;
}


function get_product_quantity($product_id)
{
    foreach (WC()->cart->get_cart() as $cart_item) {

        $pid = $cart_item['product_id'];

        if ($product_id == $pid) {

            return $cart_item['quantity'];
        }
    }

    return 0;
}



add_filter('woocommerce_dropdown_variation_attribute_options_html', 'filter_dropdown_option_html', 12, 2);
function filter_dropdown_option_html($html, $args)
{
    $show_option_none_text  = $args['show_option_none'] ? $args['show_option_none'] : __('Choose an option', 'woocommerce');
    $show_option_none_html  = '<option value="">' . esc_html($show_option_none_text) . '</option>';

    $html = str_replace($show_option_none_html, '', $html);

    return $html;
}

// add_filter( 'woocommerce_dropdown_variation_attribute_options_html', 'filter_dropdown_option_html', 12, 2 );
// function filter_dropdown_option_html( $html, $args ) {

//     // $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' );
//     // $show_option_none_text = esc_html( $show_option_none_text );

//     // $html = str_replace($show_option_none_text, '', $html);

//     if ( stripos($html, 'Choose an option') !== false )
//         $html = str_replace('<option value="">Choose an option</option>', '-', $html);

//     return $html;
// }



/**
 * Single variant was not showing the price where all other multiple variants are showing
 * By using the following filter, we can get the price in place
 */
add_filter('woocommerce_show_variation_price', function () {
    return true;
});


/**
 * get address
 */
function get_woo_customer_address()
{
    $customer_id = get_current_user_id();

    if (!wc_ship_to_billing_address_only() && wc_shipping_enabled()) {
        $get_addresses = apply_filters(
            'woocommerce_my_account_get_addresses',
            array(
                'billing'  => __('Billing address', 'woocommerce'),
                'shipping' => __('Shipping address', 'woocommerce'),
            ),
            $customer_id
        );
    } else {
        $get_addresses = apply_filters(
            'woocommerce_my_account_get_addresses',
            array(
                'billing' => __('Billing address', 'woocommerce'),
            ),
            $customer_id
        );
    }

    foreach ($get_addresses as $name => $address_title) :

        $address = wc_get_account_formatted_address($name);

        $address ? wp_kses_post($address) : esc_html_e('You have not set up this type of address yet.', 'woocommerce');

    endforeach;
}


function get_orders()
{
    $customer_orders = get_posts(array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys(wc_get_order_statuses()),
    ));

    $orders = []; //

    if (!empty($customer_orders)) {

        foreach ($customer_orders as $customer_order) {

            $orderq = wc_get_order($customer_order);
            $orders[] = [
                "id" => $orderq->get_id(),
                "total" => $orderq->get_total(),
                "date" => $orderq->get_date_created()->date_i18n('Y-m-d'),
                "status" => $orderq->get_status(),
                "ship_to" => $orderq->get_customer_id()
            ];
        }
    }

    return $orders;
}


// add_filter( 'woocommerce_product_variation_title_include_attributes', '__return_false' );

/**
 * Show sale prices in the cart.
 */
function my_custom_show_sale_price_at_cart($old_display, $cart_item, $cart_item_key)
{

    /** @var WC_Product $product */
    $product = $cart_item['data'];

    if ($product) {
        return $product->get_price_html();
    }

    return $old_display;
}
add_filter('woocommerce_cart_item_price', 'my_custom_show_sale_price_at_cart', 10, 3);


/* cart item quantity */
// define the woocommerce_checkout_cart_item_quantity callback
function filter_wayfair_cart_item_quantity($strong_class_product_quantity_sprintf_times_s_cart_item_quantity_strong, $cart_item, $cart_item_key)
{
    // make filter magic happen here...
?>
    <!-- <input type="number" id="quantity_5eb4f61094931" class="input-text qty text" step="1" min="0" max="5" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"> -->
    <?php // print_r($strong_class_product_quantity_sprintf_times_s_cart_item_quantity_strong); die; 
    ?>
    <?php
    $qty_element = explode('value="', $strong_class_product_quantity_sprintf_times_s_cart_item_quantity_strong);
    $qty_element = explode('"', $qty_element[1]);
    // echo $qty_element[0]; die;
    ?>
    <div class="form-group has-select-styles">
        <label for="Quantity">Quantity</label>
        <input type="number" min="1" max="10" class="form-control" name="cart[<?php echo $cart_item ?>][qty]" id="quantity_<?php echo $cart_item_key['key'] ?>" value="<?php echo $qty_element[0] ?>">
        <!-- <select
                            name="cart[<?php echo $cart_item ?>][qty]"
                            class="form-control"
                            id="quantity_<?php echo $cart_item_key['key'] ?>">
                                <?php foreach (range(1, 10) as $qty) : ?>
                                    <option value="<?php echo $qty ?>" <?php echo ($qty == $qty_element[0]) ? 'selected' : '' ?>>
                                        <?php echo $qty ?>
                                    </option>
                                <?php endforeach; ?>
                            </select> -->
    </div>
<?php
};

// add the filter
add_filter('woocommerce_cart_item_quantity', 'filter_wayfair_cart_item_quantity', 10, 3);



/* ---------- CHECKOUT ---------- */


/** Forms */

if (!function_exists('woocommerce_form_field')) {

    /**
     * Outputs a checkout/address form field.
     *
     * @param string $key Key.
     * @param mixed  $args Arguments.
     * @param string $value (default: null).
     * @return string
     */
    function woocommerce_form_field($key, $args, $value = null)
    {
        $defaults = array(
            'type'              => 'text',
            'label'             => '',
            'description'       => '',
            'placeholder'       => '',
            'maxlength'         => false,
            'required'          => false,
            'autocomplete'      => false,
            'id'                => $key,
            'class'             => array(),
            'label_class'       => array(),
            'input_class'       => array(),
            'return'            => false,
            'options'           => array(),
            'custom_attributes' => array(),
            'validate'          => array(),
            'default'           => '',
            'autofocus'         => '',
            'priority'          => '',
        );

        $args = wp_parse_args($args, $defaults);
        $args = apply_filters('woocommerce_form_field_args', $args, $key, $value);

        if ($args['required']) {
            $args['class'][] = 'validate-required';
            $required        = '&nbsp;<abbr class="required" title="' . esc_attr__('required', 'woocommerce') . '">*</abbr>';
        } else {
            $required = '&nbsp;<span class="optional">(' . esc_html__('optional', 'woocommerce') . ')</span>';
        }

        if (is_string($args['label_class'])) {
            $args['label_class'] = array($args['label_class']);
        }

        if (is_null($value)) {
            $value = $args['default'];
        }

        // Custom attribute handling.
        $custom_attributes         = array();
        $args['custom_attributes'] = array_filter((array) $args['custom_attributes'], 'strlen');

        if ($args['maxlength']) {
            $args['custom_attributes']['maxlength'] = absint($args['maxlength']);
        }

        if (!empty($args['autocomplete'])) {
            $args['custom_attributes']['autocomplete'] = $args['autocomplete'];
        }

        if (true === $args['autofocus']) {
            $args['custom_attributes']['autofocus'] = 'autofocus';
        }

        if ($args['description']) {
            $args['custom_attributes']['aria-describedby'] = $args['id'] . '-description';
        }

        if (!empty($args['custom_attributes']) && is_array($args['custom_attributes'])) {
            foreach ($args['custom_attributes'] as $attribute => $attribute_value) {
                $custom_attributes[] = esc_attr($attribute) . '="' . esc_attr($attribute_value) . '"';
            }
        }

        if (!empty($args['validate'])) {
            foreach ($args['validate'] as $validate) {
                $args['class'][] = 'validate-' . $validate;
            }
        }

        $field           = '';
        $label_id        = $args['id'];
        $sort            = $args['priority'] ? $args['priority'] : '';


        if (strpos($key, 'first_name') !== false || strpos($key, 'last_name') !== false) {

            if (strpos($key, 'first_name') !== false) {

                $field_container = '<div class="row"><div class="form-group col-md-6" data-priority="' . esc_attr($sort) . '">%3$s</div>';
            } elseif (strpos($key, 'last_name') !== false) {

                $field_container = '<div class="form-group col-md-6" data-priority="' . esc_attr($sort) . '">%3$s</div></div>';
            }
        } elseif (strpos($key, 'billing_country') !== false) {

            $field_container = '<div class="form-group d-none" data-priority="' . esc_attr($sort) . '">%3$s</div>';
        } elseif (strpos($key, 'billing_phone') !== false || strpos($key, 'billing_email') !== false) {

            if (strpos($key, 'billing_phone') !== false) {

                $field_container = '<div class="row"><div class="form-group col-md-6" data-priority="' . esc_attr($sort) . '">%3$s</div>';
            } elseif (strpos($key, 'billing_email') !== false) {

                $field_container = '<div class="form-group col-md-6" data-priority="' . esc_attr($sort) . '">%3$s</div></div>';
            }
        } else {

            $field_container = '<div class="form-group" data-priority="' . esc_attr($sort) . '">%3$s</div>';
        }


        switch ($args['type']) {
            case 'country':
                $countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

                if (1 === count($countries)) {

                    $field .= '<strong>' . current(array_values($countries)) . '</strong>';

                    $field .= '<input type="hidden" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="' . current(array_keys($countries)) . '" ' . implode(' ', $custom_attributes) . ' class="country_to_state" readonly="readonly" />';
                } else {

                    $field = '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="country_to_state country_select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . '><option value="">' . esc_html__('Select a country / region&hellip;', 'woocommerce') . '</option>';

                    foreach ($countries as $ckey => $cvalue) {
                        $field .= '<option value="' . esc_attr($ckey) . '" ' . selected($value, $ckey, false) . '>' . $cvalue . '</option>';
                    }

                    $field .= '</select>';

                    $field .= '<noscript><button type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__('Update country / region', 'woocommerce') . '">' . esc_html__('Update country / region', 'woocommerce') . '</button></noscript>';
                }

                break;
            case 'state':
                /* Get country this state field is representing */
                $for_country = isset($args['country']) ? $args['country'] : WC()->checkout->get_value('billing_state' === $key ? 'billing_country' : 'shipping_country');
                $states      = WC()->countries->get_states($for_country);

                if (is_array($states) && empty($states)) {

                    $field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

                    $field .= '<input type="hidden" class="hidden" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="" ' . implode(' ', $custom_attributes) . ' placeholder="' . esc_attr($args['placeholder']) . '" readonly="readonly" data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '"/>';
                } elseif (!is_null($for_country) && is_array($states)) {

                    $field .= '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="state_select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder'] ? $args['placeholder'] : esc_html__('Select an option&hellip;', 'woocommerce')) . '"  data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '">
						<option value="">' . esc_html__('Select an option&hellip;', 'woocommerce') . '</option>';

                    foreach ($states as $ckey => $cvalue) {
                        $field .= '<option value="' . esc_attr($ckey) . '" ' . selected($value, $ckey, false) . '>' . $cvalue . '</option>';
                    }

                    $field .= '</select>';
                } else {

                    $field .= '<input type="text" class="input-text form-control' . esc_attr(implode(' ', $args['input_class'])) . '" value="' . esc_attr($value) . '"  placeholder="' . esc_attr($args['placeholder']) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" ' . implode(' ', $custom_attributes) . ' data-input-classes="' . esc_attr(implode(' ', $args['input_class'])) . '"/>';
                }

                break;
            case 'textarea':
                $field .= '<textarea name="' . esc_attr($key) . '" class="input-text form-control' . esc_attr(implode(' ', $args['input_class'])) . '" id="' . esc_attr($args['id']) . '" placeholder="' . esc_attr($args['placeholder']) . '" ' . (empty($args['custom_attributes']['rows']) ? ' rows="2"' : '') . (empty($args['custom_attributes']['cols']) ? ' cols="5"' : '') . implode(' ', $custom_attributes) . '>' . esc_textarea($value) . '</textarea>';

                break;
            case 'checkbox':
                $field = '<label class="checkbox ' . implode(' ', $args['label_class']) . '" ' . implode(' ', $custom_attributes) . '>
						<input type="' . esc_attr($args['type']) . '" class="input-checkbox ' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" value="1" ' . checked($value, 1, false) . ' /> ' . $args['label'] . $required . '</label>';

                break;
            case 'text':
            case 'password':
            case 'datetime':
            case 'datetime-local':
            case 'date':
            case 'month':
            case 'time':
            case 'week':
            case 'number':
            case 'email':
            case 'url':
            case 'tel':
                if ($key === 'billing_postcode') {

                    $pin_from_cookie = (!empty($_COOKIE['user-location-pin'])) ? $_COOKIE['user-location-pin'] : '';
                    $field .= '<input type="' . esc_attr($args['type']) . '" class="input-text form-control' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" placeholder="' .  $args['label'] . '"  value="' . esc_attr($pin_from_cookie) . '" ' . implode(' ', $custom_attributes) . ' />';

                    // if ( (!empty($_COOKIE['user-location-pin'])) ) {
                    //     $field .= '<button type="button" class="btn btn-flat btn-link-custom" onclick="change_pin_code()">Change</button>';
                    // }
                } elseif ($key === 'billing_address_1') {

                    $field .= '<textarea name="' . esc_attr($key) . '" class="input-text form-control' . esc_attr(implode(' ', $args['input_class'])) . '" id="' . esc_attr($args['id']) . '" placeholder="' . esc_attr($args['placeholder']) . '" ' . (empty($args['custom_attributes']['rows']) ? ' rows="2"' : '') . (empty($args['custom_attributes']['cols']) ? ' cols="5"' : '') . implode(' ', $custom_attributes) . '>' . esc_textarea($value) . '</textarea>';
                } else {

                    $field .= '<input type="' . esc_attr($args['type']) . '" class="input-text form-control' . esc_attr(implode(' ', $args['input_class'])) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" placeholder="' .  $args['label'] . '"  value="' . esc_attr($value) . '" ' . implode(' ', $custom_attributes) . ' />';
                }
                // $field .= '<input type="' . esc_attr( $args['type'] ) . '" class="input-text form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' .  $args['label'] . '"  value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

                break;
            case 'select':
                $field   = '';
                $options = '';

                if (!empty($args['options'])) {
                    foreach ($args['options'] as $option_key => $option_text) {
                        if ('' === $option_key) {
                            // If we have a blank option, select2 needs a placeholder.
                            if (empty($args['placeholder'])) {
                                $args['placeholder'] = $option_text ? $option_text : __('Choose an option', 'woocommerce');
                            }
                            $custom_attributes[] = 'data-allow_clear="true"';
                        }
                        $options .= '<option value="' . esc_attr($option_key) . '" ' . selected($value, $option_key, false) . '>' . esc_attr($option_text) . '</option>';
                    }

                    $field .= '<select name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '" class="select ' . esc_attr(implode(' ', $args['input_class'])) . '" ' . implode(' ', $custom_attributes) . ' data-placeholder="' . esc_attr($args['placeholder']) . '">
							' . $options . '
						</select>';
                }

                break;
            case 'radio':
                $label_id .= '_' . current(array_keys($args['options']));

                if (!empty($args['options'])) {
                    foreach ($args['options'] as $option_key => $option_text) {
                        $field .= '<input type="radio" class="input-radio ' . esc_attr(implode(' ', $args['input_class'])) . '" value="' . esc_attr($option_key) . '" name="' . esc_attr($key) . '" ' . implode(' ', $custom_attributes) . ' id="' . esc_attr($args['id']) . '_' . esc_attr($option_key) . '"' . checked($value, $option_key, false) . ' />';
                        $field .= '<label for="' . esc_attr($args['id']) . '_' . esc_attr($option_key) . '" class="radio ' . implode(' ', $args['label_class']) . '">' . $option_text . '</label>';
                    }
                }

                break;
        }

        if (!empty($field)) {
            $field_html = '';

            if ($args['label'] && 'checkbox' !== $args['type']) {
                // $field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) . '">' . $args['label'] . $required . '</label>';
            }

            $field_html .= '<span class="woocommerce-input-wrapper">' . $field;

            if ($args['description']) {
                $field_html .= '<span class="description" id="' . esc_attr($args['id']) . '-description" aria-hidden="true">' . wp_kses_post($args['description']) . '</span>';
            }

            $field_html .= '</span>';

            $container_class = esc_attr(implode(' ', $args['class']));
            $container_id    = esc_attr($args['id']) . '_field';
            $field           = sprintf($field_container, $container_class, $container_id, $field_html);
        }

        /**
         * Filter by type.
         */
        $field = apply_filters('woocommerce_form_field_' . $args['type'], $field, $key, $args, $value);

        /**
         * General filter on form fields.
         *
         * @since 3.4.0
         */
        $field = apply_filters('woocommerce_form_field', $field, $key, $args, $value);

        if ($args['return']) {
            return $field;
        } else {
            echo $field; // WPCS: XSS ok.
        }
    }
}


/* Remove payment option from order review */
remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);

/* Add payment form after the address forms */
add_action('woocommerce_checkout_after_customer_details', 'woocommerce_checkout_payment', 30);


/**
 * Change PayPal icon on checkout page
 */
function change_paypal_icon_checkout_page($icon_html)
{

    if (stripos($icon_html, 'paypal') !== false) {

        $icon_html = '<img src="/wp-content/uploads/2020/05/paypal.png" class="checkout-payment-method-paypal-image">';
    }

    return $icon_html;
}
add_filter('woocommerce_gateway_icon', 'change_paypal_icon_checkout_page');



/**
 * Get cart summary
 */
function get_cart_summary()
{
?>
    <dl class="row">
        <dt class="col-8"><?php echo esc_html_e('Subtotal', 'wayfair'); ?></dt>
        <dd class="col-4"><?php echo WC()->cart->get_cart_total() ?></dd>
        <dt class="col-8"><?php echo esc_html_e('Ship To', 'wayfair'); ?></dt>
        <dd class="col-4"><?php echo WF_CURRENCY . (floatval(WC()->cart->get_shipping_total()) == 0) ? 'Free' : WC()->cart->get_shipping_total() ?></dd>
        <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
            <dt class="col-8"><?php wc_cart_totals_coupon_label($coupon); ?></dt>
            <dd data-title="<?php echo esc_attr(wc_cart_totals_coupon_label($coupon, false)); ?>" class="col-4">
                <?php wc_cart_totals_coupon_html($coupon); ?>
            </dd>
        <?php endforeach; ?>
        <dt class="col-8"><?php echo esc_html_e('Tax', 'wayfair'); ?></dt>
        <dd class="col-4"><?php _e('All Tax Included') ?></dd>
        <dt class="col-8 total"><?php echo esc_html_e('Total', 'wayfair'); ?></dt>
        <dd class="col-4 total"><?php echo WC()->cart->get_total() ?></dd>

        <!-- <dt class="col-8">You Save:</dt>
                  <dd class="col-4">$3,888.56</dd> -->
    </dl>
    <?php
}


// add_action( 'woocommerce_after_add_to_cart_button', 'wayfair_after_add_to_cart_btn' );
// function wayfair_after_add_to_cart_btn(){
// 	echo 'Some custom text here';
// }


/**
 * @snippet       Display Advanced Custom Fields @ Single Product - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=22015
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action('woocommerce_product_thumbnails', 'bbloomer_display_acf_field_under_images', 30);

function bbloomer_display_acf_field_under_images()
{
    echo '<b>Trade Price:</b> ' . get_field('product_image_url');
    // Note: 'trade' is the slug of the ACF
}


/**
 * Listing image
 */
function replacing_template_loop_product_thumbnail()
{

    global $product;

    // Remove product images from the shop loop
    remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    // Adding something instead
    function wc_template_loop_product_replaced_thumb()
    {

        global $product;

        $image_url = get_post_meta($product->get_id(), 'product_image_url', true);

        echo "<img src='" . make_image_url($image_url, 300, 300) . "'>";
    }
    add_action('woocommerce_before_shop_loop_item_title', 'wc_template_loop_product_replaced_thumb', 10);
}
add_action('woocommerce_init', 'replacing_template_loop_product_thumbnail');


/**
 *
 */
function get_product_image_url($product_id, $width = 0, $height = 0)
{
    $image_url = get_post_meta($product_id, 'product_image_url', true);

    return make_image_url($image_url, $width, $height);
}


/**
 * Checks if variant exists on cart
 */
function action_on_change_variant_dropdown()
{

    $product = wc_get_product($_REQUEST['product_id']);

    // Only for variable products when cart is not empty
    if (!($product->is_type('variable') && !WC()->cart->is_empty())) return; // Exit

    $variation_ids_in_cart = array();

    // Loop through cart items
    foreach (WC()->cart->get_cart() as $cart_item) {

        if ($product->get_id() == $cart_item['product_id']) {

            // check variant
            if (($cart_item['variation_id'] > 0) && (in_array($_REQUEST['variation'], $cart_item['variation']))) {

                die(json_encode(['status' => true, 'quantity' => $cart_item['quantity']]));
            }
        }
    }

    die(json_encode(['status' => false, '1' => $_REQUEST['variation'], $cart_item]));
}
add_action('wp_ajax_action_on_change_variant_dropdown', 'action_on_change_variant_dropdown');
add_action('wp_ajax_nopriv_action_on_change_variant_dropdown', 'action_on_change_variant_dropdown');


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter('loop_shop_per_page', 'new_loop_shop_per_page', 20);

function new_loop_shop_per_page($cols)
{
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 20;
    return $cols;
}


/**
 * create image URL based on size
 *
 * https://ik.imagekit.io/gro/tr:w-300,h-300/best-deals/14.jpg
 */
function make_image_url($image_url, $width = 0, $height = 0)
{
    // echo $image_url;
    return $image_url;

    // image category
    /*
	if(!empty($image_url)){
		if (preg_match("/grocery/i", $image_url)) {
			$parts = explode(PRODUCT_IMAGE_URL_BASE_ALTERNATE, $image_url);
		} elseif (preg_match("/groc/i", $image_url)) {
			$parts = explode(PRODUCT_IMAGE_URL_BASE_GROC, $image_url);
		} else {
			$parts = explode(PRODUCT_IMAGE_URL_BASE, $image_url);
		}


		if ( $width > 0 && $height > 0 ) {

			if (preg_match("/grocery/i", $image_url)) {
				$url = PRODUCT_IMAGE_URL_BASE_ALTERNATE . 'tr:w-' . $width . ',h-' . $height . '/' . (isset($parts[1]))?$parts[1]:'';
			} elseif (preg_match("/groc/i", $image_url)) {
				$url = PRODUCT_IMAGE_URL_BASE_GROC . 'tr:w-' . $width . ',h-' . $height . '/' . (isset($parts[1]))?$parts[1]:'';
			} else {
				$url = PRODUCT_IMAGE_URL_BASE . 'tr:w-' . $width . ',h-' . $height . '/' . (isset($parts[1]))?$parts[1]:'';
			}

			// $url = (preg_match("/grocery/i", $image_url)) ? PRODUCT_IMAGE_URL_BASE_ALTERNATE . 'tr:w-' . $width . ',h-' . $height . '/' . $parts[1] : PRODUCT_IMAGE_URL_BASE . 'tr:w-' . $width . ',h-' . $height . '/' . $parts[1];
		} elseif ( $width > 0 ) {

			if (preg_match("/grocery/i", $image_url)) {
				$url = PRODUCT_IMAGE_URL_BASE_ALTERNATE . 'tr:w-' . $width . '/' . (isset($parts[1]))?$parts[1]:'';
			} elseif (preg_match("/groc/i", $image_url)) {
				$url = PRODUCT_IMAGE_URL_BASE_GROC . 'tr:w-' . $width . '/' . (isset($parts[1]))?$parts[1]:'';
			} else {
				$url = PRODUCT_IMAGE_URL_BASE . 'tr:w-' . $width . '/' . (isset($parts[1]))?$parts[1]:'';
			}

			// $url = (preg_match("/grocery/i", $image_url)) ? PRODUCT_IMAGE_URL_BASE_ALTERNATE . 'tr:w-' . $width . '/' . $parts[1] : PRODUCT_IMAGE_URL_BASE . 'tr:w-' . $width . '/' . $parts[1];
		}
	}
	*/
    //return $image_url;
}



/**
 * Change product sorting order to menu, the way have added or arranged on admin
 */
add_filter('woocommerce_default_catalog_orderby', 'wayfair_default_catalog_orderby');
function wayfair_default_catalog_orderby($sort_by)
{

    return ['ID', 'asc'];
}


add_filter('woocommerce_output_related_products_args', 'wh_related_products_args');

function wh_related_products_args($args)
{
    $args['orderby'] = 'ID'; // or  $args['orderby'] = 'post__in';

    return $args;
}


/**
 * Disbale the checkout button
 * If the amount is less than 399, show the SweetAlert and disable the checkout
 */
function disable_checkout_button_no_shipping()
{

    $total = WC()->cart->subtotal; // Change made

    if ($total < floatval(MINIMUM_CHECKOUT_AMOUNT)) {

        remove_action('woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20);
        echo '<a href="javascript:void(0)" class="checkout-button button alt btn btn-warning btn-lg btn-block" onclick="showAlert()">Proceed to checkout</a>';
    ?>
        <script>
            jQuery(document).ready(function($) {

                $('.woocommerce-mini-cart__buttons .checkout ').hide();
            });

            function showAlert() {
                // this is a Node object
                var span = document.createElement("span");
                span.innerHTML = "Due To High Volume Order And Limited Man Power <strong>We Are Not Accepting Any Order Less Than ₹, <span style='color: red'>Minimum Order ₹999 We Are Serving</span></strong>.";

                swal({
                    // title: "WayFair Notice",
                    content: span,
                    allowOutsideClick: "true"
                });
            }
        </script>
    <?php
    } else {

    ?>
        <script>
            jQuery(document).ready(function($) {

                $('.woocommerce-mini-cart__buttons .checkout').show();
            });
        </script>
    <?php
    }
}
add_action('woocommerce_proceed_to_checkout', 'disable_checkout_button_no_shipping', 1);
add_action('woocommerce_widget_shopping_cart_buttons', 'disable_checkout_button_no_shipping', 20);



// sidebars

function wayfair_custom_footer_sidebar1()
{
    register_sidebar(
        array(
            'name' => __('Footer Sidebar 1', 'wayfair'),
            'id' => 'custom-side-bar1',
            'description' => __('Footer Sidebar 1', 'wayfair'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer Sidebar 2', 'wayfair'),
            'id' => 'custom-side-bar2',
            'description' => __('Footer Sidebar 2', 'wayfair'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer Sidebar 3', 'wayfair'),
            'id' => 'custom-side-bar3',
            'description' => __('Footer Sidebar 3', 'wayfair'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer Sidebar 4', 'wayfair'),
            'id' => 'custom-side-bar4',
            'description' => __('Footer Sidebar 4', 'wayfair'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );


    // page left sidebar
    register_sidebar(
        array(
            'name' => __('Page Left Sidebar', 'wayfair'),
            'id' => 'page-left-sidebar',
            'description' => __('Page Left Sidebar', 'wayfair'),
            'before_widget' => '<div class="widget-content"><div class="widget-wrap">',
            'after_widget' => "</div></div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );


    // page right sidebar
    register_sidebar(
        array(
            'name' => __('Page Right Sidebar', 'wayfair'),
            'id' => 'page-right-sidebar',
            'description' => __('Page Right Sidebar', 'wayfair'),
            'before_widget' => '<div class="widget-content"><div class="widget-wrap">',
            'after_widget' => "</div></div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'wayfair_custom_footer_sidebar1');


/**
 *
 */
function wc_get_customer_orders()
{

    // Get all customer orders
    $customer_orders = get_posts(array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys(wc_get_order_statuses()),
    ));

    $customer = wp_get_current_user();

    // Order count for a "loyal" customer
    $loyal_count = 5;

    // Text for our "thanks for loyalty" message
    // $notice_text = sprintf( 'Hey %1$s &#x1f600; We noticed you\'ve placed more than %2$s orders with us – thanks for being a loyal customer!', $customer->display_name, $loyal_count );

    // Display our notice if the customer has at least 5 orders
    // if ( count( $customer_orders ) >= $loyal_count ) {
    //     wc_print_notice( $notice_text, 'notice' );
    // }

    return $customer_orders;
}


function custom_woocommerce_cart_shipping_method_full_label($label)
{
    $location_pin = (!empty($_COOKIE['user-location-pin'])) ? esc_html($_COOKIE['user-location-pin']) : '';

    //$label =  str_replace( "Shipping", "Ship To <strong>" . $location_pin . " </strong>", $label );

    $label =  str_replace("(Free)", "<div>Free</div>", $label);
    $label =  str_replace("(FREE)", "<div>Free</div>", $label);

    return $label;
}
add_filter('woocommerce_cart_shipping_method_full_label', 'custom_woocommerce_cart_shipping_method_full_label');


/**
 * Search result link change
 */
add_filter('aws_search_results_products', 'my_aws_search_results_all', 10, 2);
function my_aws_search_results_all($result_array, $s = '')
{

    // echo $s; die;

    // Sort product by price
    foreach ($result_array as $k => $product) {

        $result_array[$k]['link'] = home_url() . '?s=' . $s . '&post_type=product&type_aws=true';
    }

    return $result_array;
}


/* Shortcode for Featured Category */
add_shortcode('WayFair_Featured_Category', 'action_featured_category_block');
function action_featured_category_block($atts)
{

    ob_start();

    include_once __DIR__ . '/view/shortcodes/featured_category.php';

    $data = ob_get_contents();

    ob_clean();

    return $data;
}



/**
 * Open Sign In / Register popup on some menu items on footer
 *
 */
function my_menu_popup_form()
{
    if (!is_user_logged_in()) {

    ?>
        <script>
            jQuery(document).ready(function($) {

                jQuery('#menu-item-3244 > a, #menu-item-3245 > a').click(function() {
                    jQuery('#LoginSignup').modal('show');
                    return false;
                });
            });
        </script>
    <?php
    } else { //

    ?>
        <script>
            jQuery(document).ready(function($) {

                jQuery('#menu-item-3244 > a').attr('href', $('#baseurl').val() + '/my-account/orders/');
                jQuery('#menu-item-3245 > a').attr('href', $('#baseurl').val() + '/my-account/orders/');
            });
        </script>
    <?php
    }
}
add_action('wp_footer', 'my_menu_popup_form');


/**
 * Update the footer cart contents
 */
add_action("wp_ajax_update_footer_cart_contents", "update_footer_cart_contents");
add_action("wp_ajax_nopriv_update_footer_cart_contents", "update_footer_cart_contents");
function update_footer_cart_contents()
{
    ob_start();
    ?>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-7 col-left">

                <?php if (WC()->cart->subtotal < floatval(MINIMUM_CHECKOUT_AMOUNT)) : ?>
                    <?php echo _e('Add ' . WF_CURRENCY . (MINIMUM_CHECKOUT_AMOUNT - WC()->cart->subtotal) . ' more to place order') ?>
                <?php elseif (WC()->cart->subtotal < AMOUNT_FREE_SHIPPING) : ?>
                    <?php echo _e('Add ' . WF_CURRENCY . (AMOUNT_FREE_SHIPPING - WC()->cart->subtotal) . ' more to get free shipping') ?>
                <?php elseif (WC()->cart->subtotal < AMOUNT_5_PERCENT_DISCOUNT) : ?>
                    <?php echo _e('Add ' . WF_CURRENCY . (AMOUNT_5_PERCENT_DISCOUNT - WC()->cart->subtotal) . ' more to get 5% flat discount') ?>
                <?php elseif (WC()->cart->subtotal < AMOUNT_10_PERCENT_DISCOUNT) : ?>
                    <?php echo _e('Add ' . WF_CURRENCY . (AMOUNT_10_PERCENT_DISCOUNT - WC()->cart->subtotal) . 'more to get 10% flat discount') ?>
                <?php else : ?>
                    <?php echo _e('All discount applied. Checkout NOW!') ?>
                <?php endif; ?>
            </div>
            <div class="col-md-5 pl-0 col-right">
                <a href="<?php echo home_url() . '/cart/' ?>">
                    <svg viewBox="0 0 28 28" class="frntre-icon">
                        <path d="M20.86 18.14H10.19l.91-1.31h9.76a1 1 0 0 0 1-.83L23 9.38a1 1 0 0 0-.23-.81 1 1 0 0 0-.77-.36H9.63l-.38-1.46a1 1 0 0 0-1-.75H6a1 1 0 1 0 0 2h1.51l2 7.64-2 2.93a1 1 0 0 0-.06 1 1 1 0 0 0 .89.53h.46a1.38 1.38 0 1 0 2.4 0h6.74a1.47 1.47 0 0 0-.17.66 1.38 1.38 0 1 0 2.57-.66h.52a1 1 0 1 0 0-2v.04zm-.05-7.93L20 14.83h-8.65l-1.2-4.62h10.66z"></path>
                    </svg>
                    <?php echo WC()->cart->get_cart_subtotal() ?>
                </a>
            </div>
        </div>
    </div>
<?php

    $content = ob_get_contents();
    ob_clean();

    echo json_encode(
        array(
            'content'   => $content,
            'cart_count'   => WC()->cart->get_cart_contents_count()
        )
    );

    die;
}



/**
 * Display the % off from sale price to regular price
 */
add_action("wp_ajax_load_discount_label_for_product_variant", "load_discount_label_for_product_variant");
add_action("wp_ajax_nopriv_load_discount_label_for_product_variant", "load_discount_label_for_product_variant");
function load_discount_label_for_product_variant()
{
    $product = wc_get_product($_REQUEST['product_id']);
    $variant = $_REQUEST['variant'];

    // echo $_REQUEST['product_id'] . ', ' . $variant; die;

    if ($product->is_type('variable')) {

        $default_attributes = $product->get_default_attributes();

        foreach ($product->get_available_variations() as $variation_values) {

            foreach ($variation_values['attributes'] as $key => $attribute_value) {

                $attribute_name = str_replace('attribute_', '', $key);

                // die(json_encode(['$attribute_values' => $attribute_value, 'req' => $variant]));

                if (!empty($variant)) {

                    if ($variant ==  $attribute_value) {

                        // die(json_encode(['attribute_valuex' => $attribute_value]));

                        $is_default_variation = true;
                        break;
                    }
                } else {

                    $default_value = $product->get_variation_default_attribute($attribute_name);

                    if ($default_value == $attribute_value) {

                        $is_default_variation = true;
                    } else {

                        $is_default_variation = false;
                        break; // Stop this loop to start next main lopp
                    }
                }
            }

            if ($is_default_variation) {

                $variation_id = $variation_values['variation_id'];
                break; // Stop the main loop
            }
        }

        // Now we get the default variation data
        if ($is_default_variation) {

            $amount_saved = $variation_values['display_regular_price'] - $variation_values['display_price'];
            $currency_symbol = get_woocommerce_currency_symbol();

            $discount = round(((floatval($variation_values['display_regular_price']) - floatval($variation_values['display_price'])) / floatval($variation_values['display_regular_price'])) * 100);

            die(json_encode(
                [
                    'discount'      => $discount . '% OFF',
                    'variant_id'    => $variation_id,
                    'currency'      => WF_CURRENCY,
                    'regular_price' => $variation_values['display_regular_price'],
                    'display_price' => $variation_values['display_price'],
                ]
            ));

            // Raw output of available "default" variation details data
            // echo '<pre>'; print_r($variation_values); echo '</pre>';
            // die(json_encode($variation_values));

            // Get the "default" WC_Product_Variation object to use available methods
            // $default_variation = wc_get_product($variation_id);

            // Get The active price
            // $price = $default_variation->get_price();
        }
    }

    // echo $price; die;
}



function display_product_variant($product)
{
    if ($product->is_type('variable')) {

        $default_attributes = $product->get_default_attributes();

        foreach ($product->get_available_variations() as $variation_values) {

            foreach ($variation_values['attributes'] as $key => $attribute_value) {

                $attribute_name = str_replace('attribute_', '', $key);

                $default_value = $product->get_variation_default_attribute($attribute_name);

                if ($default_value == $attribute_value) {

                    $is_default_variation = true;
                } else {

                    $is_default_variation = false;
                    break; // Stop this loop to start next main lopp
                }
            }

            if ($is_default_variation) {

                $variation_id = $variation_values['variation_id'];
                break; // Stop the main loop
            }
        }

        // Now we get the default variation data
        if ($is_default_variation) {

            $amount_saved = $variation_values['display_regular_price'] - $variation_values['display_price'];
            $currency_symbol = get_woocommerce_currency_symbol();

            $discount = round(((floatval($variation_values['display_regular_price']) - floatval($variation_values['display_price'])) / floatval($variation_values['display_regular_price'])) * 100);


            return (json_encode(
                [
                    'discount'          => $discount . '% OFF',
                    'discount_value'    => $discount,
                    'variant_id'        => $variation_id,
                    'regular_price'     => $variation_values['display_regular_price'],
                    'display_price'     => $variation_values['display_price'],
                ]
            ));
        }
    }

    return false;
}


/**
 * Change currency symbol of sale price to M.R.P.
 */
function bd_rrp_sale_price_html($price, $product)
{

    // echo $price; die;

    $has_sale_text = array(
        '<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#8377;</span>' => '<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">M.R.P.&nbsp;</span>',
    );

    $return_string = str_replace(array_keys($has_sale_text), array_values($has_sale_text), $price);

    return $return_string;
}
add_filter('woocommerce_get_price_html', 'bd_rrp_sale_price_html', 100, 2);


// add_action('wp_enqueue_scripts', 'override_woo_frontend_scripts');
// function override_woo_frontend_scripts() {
//     wp_deregister_script('wc-checkout');
//     wp_enqueue_script('wc-checkout', get_template_directory_uri() . '/woocommerce/js/checkout.js', array('jquery', 'woocommerce', 'wc-country-select', 'wc-address-i18n'), null, true);
// }





/**
 * Get the total product count in the cart
 */
function get_product_count_in_cart($product_id)
{
    // Loop through cart items
    if (!empty(WC()->cart)) {

        foreach (WC()->cart->get_cart() as $cart_item) {

            if ($product_id == $cart_item['product_id']) {

                return intval($cart_item['quantity']);
            }
        }
    }

    return 0;
}


/**
 *
 */
add_action("wp_ajax_get_cart_quantity_of_product", "get_cart_quantity_of_product");
add_action("wp_ajax_nopriv_get_cart_quantity_of_product", "get_cart_quantity_of_product");
function get_cart_quantity_of_product()
{
    $counter = get_product_count_in_cart($_REQUEST['product_id']);

    die(json_encode(
        ['count' => sprintf("%d in cart", $counter), 'value' => $counter]
    ));
}

function bbloomer_change_checkout_field_input_type()
{
    echo "<script>document.getElementById('billing_postcode').type = 'text';
         </script>";
}

add_action('woocommerce_after_checkout_form', 'bbloomer_change_checkout_field_input_type');


/**
 *
 */
function get_coupons($code = '')
{
    $args = array(
        'posts_per_page'   => -1,
        'orderby'          => 'title',
        'order'            => 'asc',
        'post_type'        => 'shop_coupon',
        'post_status'      => 'publish',
    );

    $coupons = get_posts($args);

    if (!empty($code)) {

        foreach ($coupons as $coupon) {

            if ($coupon->post_title === $code)
                return $coupon;
        }
    }

    return $coupons;
}


/**
 * @snippet       Add A Coupon Dynamically based on Cart Subtotal with WooCommerce
 * @sourcecode    http://hirejordansmith.com
 * @author        Jordan Smith
 * @compatible    WooCommerce 2.4.7
 */

add_action('woocommerce_before_cart', 'apply_matched_coupons');
function apply_matched_coupons()
{
    global $woocommerce;

    // Set your coupon codes
    $coupon_code_hatch    = 'hatch';
    $coupon_code_baby     = 'baby';

    // Get the cart subtotal in non-decimal number format
    $cart_subtotal = WC()->cart->subtotal;

    // If cart subtotal is less than 400 remove coupons
    if ($cart_subtotal < AMOUNT_5_PERCENT_DISCOUNT) {

        if ($woocommerce->cart->has_discount($coupon_code_hatch) || $woocommerce->cart->has_discount($coupon_code_baby)) {

            WC()->cart->remove_coupon($coupon_code_hatch);
            WC()->cart->remove_coupon($coupon_code_baby);
        }
    }

    // If cart subtotal is greater 1099 AND is less than 1699 add or remove coupons
    if ($cart_subtotal >= AMOUNT_5_PERCENT_DISCOUNT && $cart_subtotal < AMOUNT_10_PERCENT_DISCOUNT) {

        if ($woocommerce->cart->has_discount($coupon_code_hatch)) return;

        if ($woocommerce->cart->has_discount($coupon_code_baby)) {

            WC()->cart->remove_coupon($coupon_code_baby);
        }

        $woocommerce->cart->add_discount($coupon_code_hatch);
    }

    // If cart subtotal is greater than 1699 add or remove coupons
    if ($cart_subtotal > AMOUNT_10_PERCENT_DISCOUNT) {

        if ($woocommerce->cart->has_discount($coupon_code_baby)) return;

        if ($woocommerce->cart->has_discount($coupon_code_hatch)) {
            WC()->cart->remove_coupon($coupon_code_hatch);
        }

        $woocommerce->cart->add_discount($coupon_code_baby);
    }
}






/* ----------------------------------------------------------------------------- */

/**
 * Process the checkout
 **/
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process()
{
    global $woocommerce;

    echo json_encode($_POST);

    // Check if set, if its not set add an error.
    if (!$_POST['available_delivery_slot'])
        wc_add_notice('<strong>Available Delivery Slot</strong> ' . __('is a required field.', 'woocommerce'), 'error');
}

/**
 * Update the order meta with field value
 **/
add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');
function my_custom_checkout_field_update_order_meta($order_id)
{
    if ($_POST['available_delivery_slot']) update_post_meta($order_id, 'available_delivery_slot', esc_attr($_POST['available_delivery_slot']));
}


add_action('woocommerce_new_order', 'tp_new_order');
function tp_new_order($order_id)
{

    $tp_preferred_slot_nr = isset($_POST['available_delivery_slot']) ? $_POST['available_delivery_slot'] : 0;
    add_post_meta($order_id, 'available_delivery_slot', $tp_preferred_slot_nr, true);
}



/**
 * Add a custom field (in an order) to the emails
 */
add_filter('woocommerce_email_order_meta_fields', 'custom_woocommerce_email_order_meta_fields', 10, 3);

function custom_woocommerce_email_order_meta_fields($fields, $sent_to_admin, $order)
{
    $fields['available_delivery_slot'] = array(
        'delivery_slot' => __('Delivery Slot'),
        'value' => get_post_meta($order->get_id(), 'available_delivery_slot', true),
    );
    return $fields;
}


/**
 * Custom Order ID
 */
add_filter('woocommerce_order_number', 'change_woocommerce_order_number');
function change_woocommerce_order_number($order_id)
{

    $new_order_id = intval($order_id) + CUSTOM_ORDER_NUMBER_START;
    return $new_order_id;
}


/* Disable plugin updates */
add_filter('site_transient_update_plugins', '__return_false');


/**
 * Remove not required field from Billing address
 * This will same as checkout Delivery address
 */
add_filter('woocommerce_billing_fields', 'wayfair_hide_billing_fields');
function wayfair_hide_billing_fields($billing_fields)
{
    $billing_fields['billing_postcode']['maxlength'] = 6;
    // print_r($required_fields); die;
    unset($billing_fields["billing_company"]);
    unset($billing_fields["billing_address_2"]);
    unset($billing_fields["billing_city"]);
    unset($billing_fields["billing_state"]);
    return $billing_fields;
}


/**
 * Remove not required field from Shipping address
 * This will same as checkout Delivery address
 */
add_filter('woocommerce_shipping_fields', 'wayfair_hide_shipping_fields');
function wayfair_hide_shipping_fields($shipping_fields)
{
    // print_r($required_fields); die;
    unset($shipping_fields["shipping_company"]);
    unset($shipping_fields["shipping_address_2"]);
    unset($shipping_fields["shipping_city"]);
    unset($shipping_fields["shipping_state"]);
    return $shipping_fields;
}


/**
 * Remove category from the ticket
 */
add_filter('wpsc_print_create_ticket_html', 'wayfair_wpsc_print_create_ticket_html');
function wayfair_wpsc_print_create_ticket_html($html)
{
?>

    <script>
        jQuery(document).ready(function($) {

            $('.field_1069').remove();
        });
    </script>
    <?php

    return $html;
}


/**
 * Add Gift card / promo code
 */
add_action("wp_ajax_add_gift_card_promo_code", "add_gift_card_promo_code");
add_action("wp_ajax_nopriv_add_gift_card_promo_code", "add_gift_card_promo_code");
function add_gift_card_promo_code()
{
    global $woocommerce;

    $code = $_REQUEST['code'];
    $excluded_coupons = array('hatch', 'baby');

    // Get the cart subtotal in non-decimal number format
    // $cart_subtotal = WC()->cart->subtotal;

    foreach (get_coupons() as $coupon) {

        if ($coupon->post_title === $code) {

            // If coupon is not any of the excluded coupons
            if (in_array($code, $excluded_coupons) === false) {

                $woocommerce->cart->add_discount($code);

                die(json_encode(
                    ['redirect' => true]
                ));
            }
        }
    }

    die(json_encode(
        ['redirect' => false, 'message' => 'Sorry! You have applied wrong code']
    ));
}


/**
 * Chnage variation label with current sale price
 */
// add_filter( 'woocommerce_variation_option_name','display_price_in_variation_option_name');
function display_price_in_variation_option_name($term)
{
    global $product;
    static $st_wv_counter = 0;
    static $variation_id_st = 0;
    static $product_id = 0;

    if (empty($term)) {
        return $term;
    }
    if (empty($product->id)) {
        return $term;
    }

    if ($product_id != $product->get_id()) {

        $st_wv_counter = 0;
    }

    $product_id = $product->get_id();


    $variation_id = $product->get_available_variations()[$st_wv_counter++]['variation_id'];
    // print_r($variation_id); die;
    // $term = $term . ' - '  . $variation_id;
    //print_r($variation_id); die;

    $_product       = new WC_Product_Variation($variation_id);
    $variation_data = $_product->get_variation_attributes();

    //print_r($_product); die;

    foreach ($variation_data as $key => $data) {

        // if ( $data == $term ) {

        //     // print_r($term); die;
        //     $html  = wp_kses( woocommerce_price( $_product->get_price() ), array() );
        //     // $html .= ' - ' . $term;
        //     $html .= ( $_product->get_stock_quantity() ) ? ' - ' . $_product->get_stock_quantity() : '';
        //     return $html;
        // }

        $term = explode(' - ', $term);
        $term[1] = WF_CURRENCY . $_product->get_sale_price();
        $term = implode(' | ', $term);

        // $html  = wp_kses( woocommerce_price( $_product->get_price() ), array() );
        $html = $term;
        // $html .= ( $_product->get_stock_quantity() ) ? ' - ' . $_product->get_stock_quantity() : '';
        return $html;
    }

    return $term;
}



add_action("wp_ajax_check_add_user_location_cookie", "check_add_user_location_cookie");
add_action("wp_ajax_nopriv_check_add_user_location_cookie", "check_add_user_location_cookie");
function check_add_user_location_cookie()
{
    $pin = $_REQUEST['pin'];

    if (!empty($pin)) {

        setcookie(COOKIE_LOCATION_PIN, $pin, strtotime("+1 year"), '/', false); // '/', 'zopnow.com'

        die(json_encode(
            ['redirect' => true]
        ));
    }

    die(json_encode(
        ['html' => '<p class="invalid-code">Invalid Pincode</p>']
    ));
}


/**
 *
 */
// function theme_slug_filter_the_content( $content ) {

//     if ( isset($_COOKIE[COOKIE_LOCATION_PIN]) ) {
//         return $content;
//     }

//     return;
// }
// add_filter( 'the_content', 'theme_slug_filter_the_content' );
// add_filter( 'wp_nav_menu', 'theme_slug_filter_the_content' );

/*add_action('woocommerce_checkout_order_processed', 'create_xml_order', 10, 1);

function create_xml_order($order_id) {

    //get order data
    $order = new WC_Order( $order_id );
    //print_r($order); die();

    //Some order Info you can use
    $order_number = $order->get_order_number();

    $company_name = $order->get_billing_company();

    $address_1 = $order->get_billing_address_1();
    $address_2 = $order->get_billing_address_2();
    $city = $order->get_billing_city();
    $postal_code = $order->get_billing_postcode();
    $instructions = $order->get_customer_note();
    $payment_method = $order->get_payment_method();
    $payment_date = $order->get_date_paid();


    $email = $order->get_billing_email();
    $billing_name = $order->get_formatted_billing_full_name();
    $contact_number = str_replace(' ', '', $order->get_billing_phone());
    $shipping_address_1 = $order->get_shipping_address_1();
    $shipping_address_2 = $order->get_shipping_address_2();
    $shipping_city = $order->get_shipping_city();
    $shipping_postal_code = $order->get_shipping_postcode();

    $shipping_address=$shipping_address_1.', '.$shipping_address_2.', '.$shipping_city.', '.$shipping_postal_code;

    //This total will only be the cart items costs
    $order_total = wc_format_decimal($order->get_subtotal(), 2);
    //This total will include other costs like shipping

    $order_total_inc = wc_format_decimal($order->get_total(), 2);

    $order_currency = $order->get_currency();


        //extract data from the post
        //set POST variables
        $url = 'http://truecomretail.in/roz/pay.php';
        $fields = array(
            'name' => urlencode($billing_name),
            'shipping_address' => urlencode($shipping_address),
            'currency' => urlencode($order_currency),
            'amount' => urlencode($order_total_inc),
            'email' => urlencode($email),
            'phone' => urlencode($contact_number),
            'receipt' => urldecode($order_number)
        );

        //url-ify the data for the POST
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        //execute post
        //$result = curl_exec($ch);
        //$res=json_decode($result);
        //print_r($res);
        //close connection
        curl_close($ch);

/*    foreach ($order->get_items() as $item_id => $item_data) {
        //Get the product ID
        $product_id = $item->get_product_id();
        // Get the WC_Product object
        $product = $item->get_product();
        $product_sku    = $product->get_sku();
        $description = get_post($item['product_id'])->post_content;
        // Name of the product
        $item_name    = $item->get_name();
        $quantity     = $item->get_quantity();
        $tax_class    = $item->get_tax_class();
        // Line subtotal (non discounted)
        $line_subtotal     = $item->get_subtotal();
        // Line subtotal tax (non discounted)
        $line_subtotal_tax = $item->get_subtotal_tax();
        // Line total (discounted)
        $line_total        = $item->get_total();
        // Line total tax (discounted)
        $line_total_tax    = $item->get_total_tax();
    }*/





//You can now add all the above to a var for sending via email
// Or save it all to a DB as previously mentioned.

/*}*/


add_action("wp_ajax_my_action", "my_order_create");
add_action("wp_ajax_nopriv_my_action", "my_order_create");

function my_order_create()
{
    $order_post_id = 0;
    //global $woocommerce;
    $cart = WC()->cart;

    $params = array();
    parse_str($_POST['formdata'], $params);
    //print_r($params);
    $order_data = array(
        'first_name' => $params['billing_first_name'],
        'last_name'  => $params['billing_last_name'],
        'email'      => $params['billing_email'],
        'phone'      => $params['billing_phone'],
        'address_1'  => $params['billing_address_1'],
        'address_2'  => $params['billing_address_1'],
        'postcode'   => $params['billing_postcode'],
        'country'    => $params['billing_country'],
    );
    $shipping_data = array(
        'first_name' => $params['shipping_first_name'],
        'last_name'  => $params['shipping_last_name'],
        'address_1'  => $params['shipping_address_1'],
        'address_2'  => $params['shipping_address_1'],
        'postcode'   => $params['shipping_postcode'],
        'country'    => $params['shipping_country'],
    );

    // Now we create the order
    // $order = wc_create_order();
    $new_order = wc_create_order($order_data);

    foreach (WC()->cart->get_cart() as $cart_item_key => $values) {
        $item_id = $new_order->add_product(
            $values['data'],
            $values['quantity'],
            array(
                'variation' => $values['variation'],
                'totals' => array(
                    'subtotal' => $values['line_subtotal'],
                    'subtotal_tax' => $values['line_subtotal_tax'],
                    'total' => $values['line_total'],
                    'tax' => $values['line_tax'],
                    'tax_data' => $values['line_tax_data'] // Since 2.2
                )
            )
        );
    }
    $new_order->set_address($order_data, 'billing');
    $new_order->set_address($shipping_data, 'shipping');
    //
    $new_order->calculate_totals();
    //pprint_r($cart);
    //print_r($new_order);

    if ($new_order) {
        $cart->empty_cart();
        $order_post_id = $new_order->get_id();
    }
    echo $order_post_id;
    wp_die();
}







add_action('wp_ajax_ajax_order', 'submited_ajax_order_data');
add_action('wp_ajax_nopriv_ajax_order', 'submited_ajax_order_data');
function submited_ajax_order_data()
{
    if (isset($_POST['fields']) && !empty($_POST['fields'])) {

        $order    = new WC_Order();
        $cart     = WC()->cart;
        $checkout = WC()->checkout;
        $data     = [];

        // Loop through posted data array transmitted via jQuery
        foreach ($_POST['fields'] as $values) {
            // Set each key / value pairs in an array
            $data[$values['name']] = $values['value'];
        }

        $cart_hash          = md5(json_encode(wc_clean($cart->get_cart_for_session())) . $cart->total);
        $available_gateways = WC()->payment_gateways->get_available_payment_gateways();

        // Loop through the data array
        foreach ($data as $key => $value) {
            // Use WC_Order setter methods if they exist
            if (is_callable(array($order, "set_{$key}"))) {
                $order->{"set_{$key}"}($value);

                // Store custom fields prefixed with wither shipping_ or billing_
            } elseif ((0 === stripos($key, 'billing_') || 0 === stripos($key, 'shipping_'))
                && !in_array($key, array('shipping_method', 'shipping_total', 'shipping_tax'))
            ) {
                $order->update_meta_data('_' . $key, $value);
            }
        }


        // The chosen shipping method (string) - Output the Shipping method rate ID
        $chosen_shipping_methods = WC()->session->get('chosen_shipping_methods')[0];

        // The array of shipping methods enabled for the current shipping zone:
        $shipping_methods = WC()->session->get('shipping_for_package_0')['rates'];

        // Loop through the array
        $calculate_tax_for = array(
            'country' => "IN",
        );
        foreach ($shipping_methods as $method_id => $shipping_rate) {
            $rate_id        = $shipping_rate->id;
            $method_id      = $shipping_rate->method_id;
            $instance_id    = $shipping_rate->instance_id;
            $label          = $shipping_rate->label;
            $cost           = $shipping_rate->cost;
            $taxes          = $shipping_rate->taxes;

            // Get the meta data in an unprotected array
            $meta_data = $shipping_rate->get_meta_data();

            ## ----- BELOW the data you are looking for ----- ##

            $connect_packages = $meta_data['wc_connect_packages'][0];

            $box_id = $connect_packages->box_id; // (string)
            $length = $connect_packages->length; // (float)
            $width  = $connect_packages->width;  // (float)
            $height = $connect_packages->height; // (float)
            $weight = $connect_packages->weight; // (float)
            $items  = $connect_packages->items;  // (array of object)

            $item  = new WC_Order_Item_Shipping();

            //  $items = array($item);
            // $new_item = true;
            $item->set_method_title(__($label));
            $item->set_method_id($method_id); // set an existing Shipping method rate ID
            $item->set_total($cost); // (optional)
            // $item->save();
            $item->calculate_taxes($calculate_tax_for);
            $order->add_item($item);
        }


        $params = array();
        parse_str($_POST['fields'], $params);


        $order->set_created_via('checkout');
        $order->set_cart_hash($cart_hash);
        $order->set_customer_id(apply_filters('woocommerce_checkout_customer_id', isset($_POST['user_id']) ? $_POST['user_id'] : ''));
        $order->set_currency(get_woocommerce_currency());
        $order->set_prices_include_tax('yes' === get_option('woocommerce_prices_include_tax'));
        $order->set_customer_ip_address(WC_Geolocation::get_ip_address());
        $order->set_customer_user_agent(wc_get_user_agent());
        $order->set_customer_note(isset($data['order_comments']) ? $data['order_comments'] : '');
        $order->set_payment_method(isset($available_gateways[$params['payment_method']]) ? $available_gateways[$params['payment_method']]  : $params['payment_method']);
        $order->set_shipping_total($cart->get_shipping_total());
        $order->set_discount_total($cart->get_discount_total());
        $order->set_discount_tax($cart->get_discount_tax());
        $order->set_cart_tax($cart->get_cart_contents_tax() + $cart->get_fee_tax());
        $order->set_shipping_tax($cart->get_shipping_tax());
        $order->set_total($cart->get_total('edit'));

        $checkout->create_order_line_items($order, $cart);
        $checkout->create_order_fee_lines($order, $cart);
        $checkout->create_order_shipping_lines($order, WC()->session->get('chosen_shipping_methods'), WC()->shipping->get_packages());
        $checkout->create_order_tax_lines($order, $cart);
        $checkout->create_order_coupon_lines($order, $cart);
        // add shipping and billing adress


        //print_r($params);
        $order_data = array(
            'first_name' => $params['billing_first_name'],
            'last_name'  => $params['billing_last_name'],
            'email'      => $params['billing_email'],
            'phone'      => $params['billing_phone'],
            'address_1'  => $params['billing_address_1'],
            'postcode'   => $params['billing_postcode'],
            'country'    => $params['billing_country'],
        );

        $shipping_params = array();
        parse_str($_POST['shipping_fields'], $shipping_params);
        $shipping_data = array(
            'first_name' => $shipping_params['shipping_first_name'],
            'last_name'  => $shipping_params['shipping_last_name'],
            'address_1'  => $shipping_params['shipping_address_1'],
            'postcode'   => $shipping_params['shipping_postcode'],
            'country'    => $shipping_params['shipping_country'],
        );
        $order->set_address($order_data, 'billing');

        $order->set_address($shipping_data, 'shipping');
        /**
         * Action hook to adjust order before save.
         * @since 3.0.0
         */
        do_action('woocommerce_checkout_create_order', $order, $data);

        // Save the order.
        $order_id = $order->save();

        update_post_meta($order_id, 'available_delivery_slot', $_POST['available_delivery_slot']);

        if ($order_id) {
            $cart = WC()->cart;
            $cart->empty_cart();
        }

        do_action('woocommerce_checkout_update_order_meta', $order_id, $data);

        echo $order_id;
    }
    die();
}

add_action('admin_menu', 'my_menu_pages_user_info');
function my_menu_pages_user_info()
{
    add_menu_page('Clear Entries', 'Clear Entries', 'manage_options', 'clear-entry', 'custom_function_clear_entry', 'dashicons-money');
}
function custom_function_clear_entry()
{
    include "clearrecors.php";
}



function smartwp_remove_wp_block_library_css()
{
    //if(!is_admin()){
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
    //}
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

function my_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');




add_action('wp_ajax_ajax_prod_detail', 'ajax_prod_detail_fun');
add_action('wp_ajax_nopriv_ajax_prod_detail', 'ajax_prod_detail_fun');
function ajax_prod_detail_fun()
{

    global $wpdb;
    $reponse = array();
    ob_start();
    $res = '';
    if (!empty($_POST['productID']) && !empty($_POST['productName'])) {
        $productId = $_POST['productID'];
        global $product;
        $product = wc_get_product($productId);

        // get the discount value
        $p_details = display_product_variant($product);
        if ($p_details !== false) {
            $p_details = json_decode($p_details, true);
        }
    ?>

        <div class="row">
            <div class="col-md-6">
                <?php // do_action( 'woocommerce_before_shop_loop_item_title' ); 
                ?>
                <img src="<?php echo get_product_image_url($productId, 500, 500) ?>" alt="<?php echo $_POST['productName']; ?>">
            </div>
            <div class="col-md-6">
                <div class="product-detail-inner">
                    <div class="discount-label"><?php echo $p_details['discount'] ?></div>
                    <h2 class="product-title"> <?php do_action('woocommerce_shop_loop_item_title'); ?></h2>
                    <h3 class="product-price">
                        <?php do_action('woocommerce_after_shop_loop_item_title'); ?>
                    </h3>
                    <div class="form-group">
                        <label for="AvailableIn">Available in:</label>
                        <div class="woocommerce-variation single_variation p_alt product_div_model">
                            <div class="woocommerce-variation-description"></div>
                            <div class="woocommerce-variation-price">
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">M.R.P.&nbsp;</span><?php echo $p_details['regular_price'] ?>
                                        </span>
                                    </del>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"><?php echo WF_CURRENCY; ?></span><?php echo $p_details['display_price'] ?>
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                        <?php do_action('woocommerce_after_shop_loop_item'); ?>
                    </div>
                    <div class="furniture-shop">
                        <h4>Why shop from Zopnow?</h4>
                        <div class="shop-benefit">
                            <div class="icon-wrap">
                                <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icons8-return-purchase-24.png" alt="Easy returns &amp; refunds"></div>
                            </div>
                            <div class="shop-info">
                                <h5>Easy returns &amp; refunds</h5>
                                <p>Return products at doorstep and get refund in seconds.</p>
                            </div>
                        </div>
                        <div class="shop-benefit">
                            <div class="icon-wrap">
                                <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icons8-money-bag-rupee-80.png" alt="Lowest price guaranteed"></div>
                            </div>
                            <div class="shop-info">
                                <h5>Lower price than your supermarket.</h5>
                                <p>At least 30% or more discount available on M.R.P. on all FMCG products from top brands.</p>
                            </div>
                        </div>
                        <div class="shop-benefit">
                            <div class="icon-wrap">
                                <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icons8-ask-question-16.png" alt="Lowest price guaranteed"></div>
                            </div>
                            <div class="shop-info">
                                <h5>No question asked return policy. </h5>
                                <p>We are confidence about our quality, still didn’t like it? Raise request and get exchanged or return without any question asked. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php

        /*$res.='<div class="row">';

		$res.='<div class="col-md-6">';
		  $res.='<img src="'.get_product_image_url($productId, 500, 500).'" alt="'.$_POST['productName'].'">';
		$res.='</div>';
		$res.='<div class="col-md-6">';
		  $res.='<div class="product-detail-inner">';
		  	$res.='<div class="discount-label">'.$p_details['discount'].'</div>';
			$res.='<h2 class="product-title">'.$_POST['productName'].'</div>';


		  $res.='</div>';
		$res.='</div>';

		$res.='</div>';*/

        $res = ob_get_contents();
        ob_end_clean();
        $_SESSION['product_slug'] = '';
        $response['response'] = $res;
    } else {
        $response['response'] = "";
    }

    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}

add_action('wp_footer', 'eps_footer');
function eps_footer()
{
    echo "<script>var ajax_request_url = '" . admin_url('admin-ajax.php') . "'</script>";
}
