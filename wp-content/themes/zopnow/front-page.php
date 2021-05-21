<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!-- Frntre Banner -->
		<!-- <section class="frntre-banner">
			<div class="item">
				<video loop="loop" autoplay="autoplay">
				<source src="https://secure.img1-ag.wfcdn.com//media/video/35/355501.mp4" type="video/mp4">
				</video>
			</div>
			<div class="item">
				<video loop="loop" autoplay="autoplay">
				<source src="https://secure.img1-ag.wfcdn.com//media/video/34/346607.mp4" type="video/mp4">
				</video>
			</div>
			<div class="item">
				<video loop="loop" autoplay="autoplay">
				<source src="https://secure.img1-ag.wfcdn.com//media/video/35/355792.mp4" type="video/mp4">
				</video>
			</div>
		</section> -->

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'home-page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

			<!-- Frntre Services -->
			<!-- <section class="frntre-services">
				<div class="container">
					<?php
					// check if the repeater field has rows of data
					if( have_rows('services') ):
					?>
					<div class="row">
					<?php

					// loop through the rows of data
					while ( have_rows('services') ) : the_row();

					$image = get_sub_field('service_image');
					$title = get_sub_field('service_title');
					$content = get_sub_field('service_short_description');

					?>
						<div class="col-md-3">
							<div class="service-item">
							<img src="<?php echo $image['url'] ?>" alt="<?php echo $title ?>" width="110">
							<h2><?php echo $title ?></h2>
							<p><?php echo $content ?></p>
							</div>
						</div>
					<?php					

					endwhile;

					?>
					</div>
					<?php
					endif;
					?>
					
					</div>
				</div>
			</section> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
