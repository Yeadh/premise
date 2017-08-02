<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package premise
 */

?>
	<?php 
		$home_blog = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 3,
		));
	?>
	<?php while($home_blog->have_posts()) : $home_blog->the_post();?>
	<div class="col-sm-4 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
		<div class="single-post">
			<div class="post-img">
				<a href="<?php the_permalink(); ?>">
					<?php 
					if(has_post_thumbnail()){
						the_post_thumbnail('home_blog_image');
					}
					?> 
			   </a>
				<div class="post-date text-center text-uppercase">
					<span><?php premise_posted_on(); ?></span>
				</div>
			</div><!-- End "post-img" -->
			<div class="post-desk">
				<h3 class="text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="post-meta text-uppercase">
					<a href="<?php get_the_author_link(); ?>" class="author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author() ?></a>
					<a href="<?php get_comment_link(); ?>" class="comment"><i class="fa fa-comment" aria-hidden="true"></i>
					<?php
						$comment_count = get_comments_number();
						
					?>
			</a>
				</div>
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
			</div><!-- End "post-desk" -->
		</div><!-- End "single-post" -->
	</div><!-- End col -->
	<?php endwhile; ?>
