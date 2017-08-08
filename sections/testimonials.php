<?php 

global $metabox;
$testimonial_title     = isset($metabox['testimonial_title'])    ? $metabox['testimonial_title'] : '' ;
$testimonial_subtitle  = isset($metabox['testimonial_subtitle']) ? $metabox['testimonial_subtitle'] : '';
$testimonial_boxs = isset($metabox['testimonial_boxs']) ? (array) $metabox['testimonial_boxs'] : array();
?>
<section class="testimonial-section sd-section">
	<div class="container">
		<div class="section-header text-center">
			<h2><?php echo esc_html($testimonial_title); ?></h2>
			<h3><?php echo esc_html($testimonial_subtitle) ?></h3>
		</div><!-- .section-header -->
		<div id="testimonial">
		
			<?php 
				foreach($testimonial_boxs as $box):
					$name        = isset($box['name']) ? $box['name'] : '';
					$description  = isset($box['description']) ? $box['description'] : '';

			?> 
			<?php if ( $name ) : ?>
				<div>
					<blockquote>
						<?php echo esc_attr($description); ?>
						<small><?php echo esc_attr($name); ?></small>
					</blockquote>
				</div>
		<?php endif; ?>
			<?php endforeach; ?>
		</div><!-- #testimonial -->
	</div><!-- .container -->
</section>