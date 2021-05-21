<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
$pageUrl = $_SERVER['REDIRECT_URL'];
$urlArray = explode("/",$pageUrl);
$siteUrl = home_url();

//print_r($urlArray);

if(isset($urlArray[1]) && $urlArray[1] == 'home' && isset($urlArray[2]) && isset($urlArray[2])){
	$arrayCount = count($urlArray);
	if($arrayCount == 3){
		$productSlug = $urlArray[2];
		$expSlug = explode("-",$productSlug);
		$productID = isset($expSlug[0])? $expSlug[0] : 0 ;
		$_SESSION['product_slug'] = $productID;
		$needUrl = $siteUrl;
	}
	echo '<script> window.location.href = "'.$needUrl.'";</script>';
}

if(isset($urlArray[1]) && $urlArray[1] == 'c' && isset($urlArray[2]) && isset($urlArray[3])){
	$arrayCount = count($urlArray);
	if($arrayCount == 4){
		$productSlug = $urlArray[3];
		$expSlug = explode("-",$productSlug);
		$productID = isset($expSlug[0])? $expSlug[0] : 0 ;
		$needUrl = $siteUrl.'/'.$urlArray[1].'/'.$urlArray[2].'/';
		$_SESSION['product_slug'] = $productID;
	}else if($arrayCount == 5){
		$productSlug = $urlArray[4];
		$expSlug = explode("-",$productSlug);
		$productID = isset($expSlug[0])? $expSlug[0] : 0 ;
		$needUrl = $siteUrl.'/'.$urlArray[1].'/'.$urlArray[2].'/'.$urlArray[3].'/';
		$_SESSION['product_slug'] = $productID;
	}
	echo '<script> window.location.href = "'.$needUrl.'";</script>';
}
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
    <section class="frntre-mid-wrap">
            <div class="container">
                <div class="frntre-account-wrap">
                    <div class="frntre-columns-row">
                        <div class="error-404 not-found">
                            <header class="page-header">
                                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
                            </header><!-- .page-header -->
                            <div class="page-content">
                                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
                                <?php // get_search_form(); ?>
                                <a href="<?php echo home_url() ?>" class="btn btn-warning btn-lg">Go To Home</a>
                            </div><!-- .page-content -->
                        </div><!-- .error-404 -->
                    </div>
                </div>
            </div>
    </section>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
