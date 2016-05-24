<?php
/**
 * The template for the WooCommerce shop page.
 *
 * @package wpb
 */

get_header(); ?>

<div id="content" class="row site-content">

	<?php do_action( 'boldgrid_menu_tertiary' ); ?> 

	<div class="row">
		<div class="col-md-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php woocommerce_content(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col -->
		
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div><!-- .col -->
	</div><!-- .row -->

	<?php get_footer(); ?>
