<?php
/**
 * Template Name: Template With Left Sidebar
 *
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="frntre-mid-wrap">

				<div class="container">

					<div class="frntre-account-wrap">

						<div class="frntre-columns-row">

							<div class="frntre-primary">
								<?php if ( is_active_sidebar( 'page-left-sidebar' ) ) : ?>
									<?php dynamic_sidebar( 'page-left-sidebar' ); ?>
								<?php endif; ?>
							</div>

							<div class="frntre-secondary">
								<?php
								// Start the Loop.
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', 'page' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}

								endwhile; // End the loop.
								?>
							</div>

						</div>

					</div>

				</div>		
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
