<?php
function add_keywords()
{
    global $post;

    if ( is_home() || is_front_page() ) {

        echo '<meta name="keywords" content="Zopnow, Zopnow.in, Zop, now, Shop, Grocery, Indian grocery" />' . "\n";
    } else {

        if ( is_page('cart') ) {
            echo '<meta name="keywords" content="zopnow review, zopnow online review" />' . "\n";
        } elseif ( is_page('checkout') ) {        
            echo '<meta name="keywords" content="Shop All Grocery Items through From Zopnow.in Get delivered in next day " />' . "\n";
        } elseif ( is_page('contact-info') ) {        
            echo '<meta name="keywords" content="Shop All Grocery Items through From Zopnow.in Get delivered in next day " />' . "\n";
        }else {
            echo '<meta name="keywords" content="zopnow review, zopnow online review" />' . "\n";
        }
    }

    if ( is_product_category() ) {

        $cate = get_queried_object();

        echo '<meta name="keywords" content="' . $cate->name . '" />' . "\n";
    }
}