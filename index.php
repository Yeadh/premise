<?php 
/**
 *The template for displaying all single posts
 * 
 *
 * @package premise
 */
 get_header();
 get_template_part('sections/hero');
 ?>

	<!-- Start Blog Area -->
	<section class="blog-area">
		<div class="container">
			<div class="row">
			<div class="col-sm-8">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content');

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>
				<?php
					the_posts_pagination( array(
						'mid_size'  => 4,
						'prev_text' => __( '<i class="fa fa-angle-left" aria-hidden="true"></i>', 'premix' ),
						'next_text' => __( '<i class="fa fa-angle-right" aria-hidden="true"></i>', 'premix' ),
					) );
				?>
				
			</div><!-- .col -->
				<?php get_template_part('template-parts/widget-areas/blog'); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- End Blog Area -->	
<?php get_footer(); ?>