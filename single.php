<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package premise
 */

get_header(); ?>

<section class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format());
						
					endwhile; // End of the loop.
				?>
				<?php premise_blog_social_share(); ?>
				<?php 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
				<div class="blog-comment">
					<h3>LEAVE A COMMENT</h3>
					<form>
						<textarea name="comment" cols="30" rows="10" placeholder="Write a comment"></textarea>
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Name">
							</div><!-- .col -->
							<div class="col-md-6">
								<input type="email" placeholder="E-Mail">
							</div><!-- .col -->
							<div class="col-md-12">
								<button class="blog-form-btn">Send</button>
							</div><!-- .col -->
						</div>
					</form>
				</div><!-- .blog-comment -->
			</div><!-- .col -->
			<?php get_template_part('template-parts/widget-areas/blog'); ?>
		</div><!-- .row -->
	</div><!-- .container -->
</section>






<?php
get_footer();
