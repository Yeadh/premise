<?php 

global $metabox;
$overview_title     = isset($metabox['overview_title'])    ? $metabox['overview_title'] : '' ;
$overview_subtitle  = isset($metabox['overview_subtitle']) ? $metabox['overview_subtitle'] : '';
$overview_icon_boxs = isset($metabox['overview_icon_boxs']) ? (array) $metabox['overview_icon_boxs'] : array();
?>
<section class="service-section sd-section">
	<div class="container">
		<div class="section-header text-center">
			<h2><?php echo esc_html($overview_title); ?></h2>
			<h3><?php echo esc_html($overview_subtitle) ?></h3>
		</div><!-- .section-header -->
		<div class="row">
			<?php 
				foreach($overview_icon_boxs as $box):
					$icon         = isset($box['icon']) ? $box['icon'] : '';
					$title        = isset($box['title']) ? $box['title'] : '';
					$description  = isset($box['description']) ? $box['description'] : '';

			?> 
				<div class="col-sm-4 text-center">
					<div class="single-service">
						<div class="service-icon"><span class="<?php echo esc_attr($icon); ?>"></span></div>
						<h3 class="service-head"><?php echo esc_attr($title); ?></h3>
						<div class="service-body"><?php echo esc_attr($description); ?></div>
					</div>
				</div><!-- .col -->
			<?php endforeach; ?>
			
		</div><!-- .row -->
	</div><!-- .container -->
</section>