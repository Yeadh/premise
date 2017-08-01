<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package premise
 */

?>

	<div class="col-md-9 animated fadeInLeft visible">
		<!-- img -->
		<div class="blog-img post-img">
			<?php 
				if(has_post_thumbnail()){
					the_post_thumbnail('');
				}
			?> 
			<span><?php presley_posted_on(); ?></span>
		</div>
		<!-- end img -->
		<!-- portfolio content -->
		<div class="blog-content pad-tb-40">
			<!-- post title -->
			<?php
			if ( is_singular() ) :
			the_title( '<h3>', '</h3>' );
			else :
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;
		?>
			<!-- post content -->
			<div class="post-content pad-tb-20">
			<?php
				if(!is_single())
				{
					the_excerpt();
				}
				else
				{
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'READ MORE %s <span class="meta-nav">&rarr;</span>', 'premise' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'premise' ),
						'after'  => '</div>',
					) );
				}
			?> 
			</div>
			<!-- icons -->
			<div class="social-icons pad-tb-20">
			   <?php presley_blog_social_share(); ?>
			</div>
			<!-- end icons -->
		</div>
	</div>
	<!-- end col-9 -->
