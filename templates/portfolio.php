<?php 
/**
 * Template Name: Portfolio-page
 *
 * @package premise
 * @since premise 1.0
 */

 get_template_part('sections/hero');
 get_header(); ?>

	<!-- Start Portfolio Area -->
	<section class="portfolio-area">
		<div class="container p-l-r-0 portfolio-even">
			<div class="portfolio-filter text-center">
				<ul>
					
					<li class="active"><a href="#" data-filter="*"><?php _e('ALL'); ?></a></li>
					<?php 
						$premise_cat_list = get_terms('premise_portfolio_cat');
						
						foreach ($premise_cat_list as $premise_cat) :
					?>
						<li><a href="<?php the_permalink(); ?>" data-filter=".<?php echo $premise_cat->slug; ?>"><?php echo $premise_cat->name; ?></a></li>
					<?php endforeach; ?>
					
				</ul>
			</div><!-- .portfolio-filter-area -->
			<div class="portfolio" id="portfolio_box">
				
			<?php get_template_part('template-parts/portfolio', 'loop'); ?>
				
			</div><!-- .portfolio -->
		</div><!-- .container -->
		<div class="port-load-row">
			<button class="load-more-btn" data-source="portfolio-even-grid-more.html" data-loaded="0" data-maxload="1">Load More</button>
		</div>
	</section>
	<!-- End Portfolio Area -->
<?php get_footer(); ?>