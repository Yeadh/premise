<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package premise
 */

?>
	<?php 
		$premise_port_item = new WP_Query(array(
			'post_type' => 'premise_portfolio',
			'posts_per_page' => -1
		));
	?>
	<?php while($premise_port_item->have_posts()) : $premise_port_item->the_post();?>
		<div class="portfolio-item 
			<?php
				$premise_portitem_class = get_the_terms(get_the_id(), 'premise_portfolio_cat');
				foreach ($premise_portitem_class as $premise_portitem){
					echo $premise_portitem->slug;
				}
			?>">
			<div class="inner-portfolio">
				<?php the_post_thumbnail('port-image'); ?>
				<div class="portfolio-hover text-center">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h4><?php echo $premise_portitem->slug; ?></h4>
				</div><!-- .portfolio-hover -->
			</div>
		</div><!-- .portfolio-item -->
	<?php endwhile; ?>