<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package premise
 */

?>
<div class="blog-item single-blog-item <?php post_class(); ?>"  id="post-<?php the_ID(); ?>">
	<div class="blog-media">
		<?php 
			if(has_post_thumbnail()){
				the_post_thumbnail('');
			}
		?> 
	</div><!-- .blog-media -->
	<div class="blog-item-body">
		<div class="blog-item-data"><?php premise_posted_on(); ?></div>
		<?php
			if ( is_singular() ) :
			the_title( '<h2>', '</h2>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>
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
	</div><!-- .blog-item-body -->
</div><!-- .blog-post -->
<!-- #post-<?php the_ID(); ?> -->
