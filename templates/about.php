<?php 
/**
 * Template Name: about
 *
 * @package premise
 * @since premise 1.0
 */
	global $metabox;
	$metabox = get_post_meta(get_the_id(), 'about_landing_page', true);
	$about_whatwedo = isset($metabox['about_us_whatdo'])  ? $metabox['about_us_whatdo'] : '';
	$about_discripton = isset($metabox['about_page_details'])  ? $metabox['about_page_details'] : '';
	$section_about_photo_id  = isset($metabox['about_page_image'])    ? $metabox['about_page_image'] : '';
	$attachment       = wp_get_attachment_image_src( $section_about_photo_id, ' ' );
	$section_about_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
	
	$about_team_title = isset($metabox['about_us_team'])  ? $metabox['about_us_team'] : '';
	
	$about_clients = isset($metabox['about_clients'])  ? $metabox['about_clients'] : '';
	$sponsors_images_id  = isset($metabox['sponsors_images'])    ? $metabox['sponsors_images'] : '';
 get_template_part('sections/hero');
 get_header(); ?>

	<section class="history-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<div class="history-text-area">
						<div class="section-header">
							<?php if($about_whatwedo): ?>
							<h2><?php _e('Our History'); ?></h2>
							<?php endif; ?>
							<h3><?php echo esc_html($about_whatwedo) ?></h3>
						</div>
						<div class="history-text">
							<p><?php echo esc_html($about_discripton) ?></p>
							</div>
					</div>
				</div><!-- .col -->
				<div class="col-md-6 col-md-pull-6">
					<div class="hst-feature-img">
						<img src="<?php echo esc_url($section_about_photo_src); ?>" alt="<?php echo esc_attr($section_about_photo_src); ?>" >
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- End History Area -->
	<section class="team-area">
		<div class="container">
			<div class="section-header text-center">
			<?php if($about_team_title) : ?>
				<h2><?php _e('Our Team'); ?></h2>
			<?php endif; ?>
				<h3><?php echo esc_html($about_team_title) ?></h3>
			</div><!-- .section-header -->
			<div class="row">
			
			<?php
				$premise_team = new WP_Query(array(
					'post_type' => 'team_members',
					'posts_per_page' => 3,
				));
				
				while ( $premise_team->have_posts() ) : $premise_team->the_post(); ?>
				
				<div class="col-sm-4">
					<div class="team-member">
						<div class="inner-team-member text-center">
							<?php the_post_thumbnail(); ?>
							<div class="member-details">
							<?php 
								$metabox = get_post_meta(get_the_id(), '_team_member_metabox', true);
								$fb = isset($metabox['about_fb'])  ? $metabox['about_fb'] : '';
								$twi = isset($metabox['about_tw'])  ? $metabox['about_tw'] : '';
								$ins = isset($metabox['about_ins'])  ? $metabox['about_ins'] : '';
								$pnt = isset($metabox['about_pnt'])  ? $metabox['about_pnt'] : '';
								$possition = isset($metabox['tem_possition']) ? $metabox['tem_possition'] : '';
							?>
								<h3><?php the_title(); ?></h3>
								<h4><?php echo esc_html($possition) ?></h4>
								<div class="team-social-area">
									<ul>
									
										<li><a href="<?php echo esc_url($fb) ?>"><?php if($fb): ?><?php _e('Facebook'); ?><?php endif; ?></a></li>
										<li><a href="<?php echo esc_url($twi) ?>"><?php if($twi): ?><?php _e('Twitter'); ?><?php endif; ?></a></li>
										<li><a href="<?php echo esc_url($ins) ?>"><?php if($ins): ?><?php _e('Instagram'); ?><?php endif; ?></a></li>
										<li><a href="<?php echo esc_url($pnt) ?>"><?php if($pnt): ?><?php _e('Pinterest'); ?><?php endif; ?></a></li>
									</ul>
								</div><!-- .team-social-area -->
							</div><!-- .member-details -->
						</div><!-- .inner-team-member -->
					</div><!-- .team-member -->
				</div><!-- .col -->
				<?php endwhile; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!--End Team area-->
	<section class="client-area">
		<div class="container">
			<div class="section-header text-center">
			<?php if($about_team_title) : ?>
				<h2><?php _e('Happy Clients'); ?></h2>
			<?php endif; ?>
				<h3><?php echo esc_html($about_clients) ?></h3>
			</div><!-- .section-header -->
			<div class="row">
				<div class="col-lg-12 p-l-r-0">
					<div class="client-logo">
						<?php
							if( ! empty( $sponsors_images_id ) ) {

							  $sponsors_images_id =  explode( ',', $sponsors_images_id );
							  
							  foreach ( $sponsors_images_id as $sponsor ) {
								  $attachment = wp_get_attachment_image_src( $sponsor, 'full' );
								 $sponsors_images_src = isset($attachment[0]) ?  $attachment[0] : '';
								 echo sprintf('<a href="#"><img src="%s" alt="%s"></a>', 
								 esc_url($sponsors_images_src), esc_attr($sponsors_images_src));
							  }
							}
						?>
					</div><!-- .client-logo -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!--End Clients area-->
<?php get_footer(); ?>