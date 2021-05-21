<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6F543F');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<meta name="google-site-verification" content="FCgnipEjGhZm-DY8iUi2irgBwg2bVgjfU3k4OKiqkxY" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<input type="hidden" id="baseurl" name="baseurl" value="<?php echo home_url(); ?>" />

<?php wp_head(); ?>
<?php add_keywords() ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ecb874fc75cbf1769ef0e9a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '973811399782258');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=973811399782258&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6F543F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Frntre Header -->
<header class="frntre-header">
  <div class="container process-container">
    <div class="row align-items-center">
      <div class="col-md-3 col-5">
        <a href="<?php echo get_home_url() ?>" class="frntre-brand"><img src="https://ik.imagekit.io/gro/logo.png" alt="Furniture" width="150"></a>
      </div>
      <div class="col-md-9 col-7">
        <ul class="user-menus-wrap user-menus-style-two">
          <li>
            <span class="anchor-label">
              <svg viewBox="0 0 28 28" class="frntre-icon">
                <path d="M20 10h-2a4 4 0 1 0-8 0H8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-6-2a2 2 0 0 1 2 2h-4a2 2 0 0 1 2-2zm5 12H9v-8h10v8z"></path>
                <path d="M14 13.5a1 1 0 0 0-1 1v3a1 1 0 0 0 2 0v-3a1 1 0 0 0-1-1z"></path>
              </svg>
              <span class="user-menu">Secure Checkout</span>
            </span>
          </li>
          <li>
            <a href="<?php echo get_home_url() . '/cart' ?>" class="has-underline">
              <svg viewBox="0 0 28 28" class="frntre-icon">
                <path d="M20.86 18.14H10.19l.91-1.31h9.76a1 1 0 0 0 1-.83L23 9.38a1 1 0 0 0-.23-.81 1 1 0 0 0-.77-.36H9.63l-.38-1.46a1 1 0 0 0-1-.75H6a1 1 0 1 0 0 2h1.51l2 7.64-2 2.93a1 1 0 0 0-.06 1 1 1 0 0 0 .89.53h.46a1.38 1.38 0 1 0 2.4 0h6.74a1.47 1.47 0 0 0-.17.66 1.38 1.38 0 1 0 2.57-.66h.52a1 1 0 1 0 0-2v.04zm-.05-7.93L20 14.83h-8.65l-1.2-4.62h10.66z"></path>
              </svg>
              <span class="user-menu">Back to Cart</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>