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
	</section>
	