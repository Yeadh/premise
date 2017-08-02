<?php 
/**
 * Template Name: Homepage
 *
 * @package premise
 * @since premise 1.0
 */
 get_template_part('sections/hero-home');
get_header(); ?>
	<!-- Start Portfolio Area -->
	<section class="portfolio-area">
		<div class="container p-l-r-0 portfolio-masonry">
			<div class="portfolio">
				<?php get_template_part('template-parts/portfolio', 'loop'); ?>
			</div><!-- .portfolio -->
		</div><!-- .container -->
	</section>
	<!-- End Portfolio Area -->

		<?php get_template_part('sections/blog'); ?>
	<?php get_footer(); ?>