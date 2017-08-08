<?php 
/**
 * Template Name: contact
 *
 * @package premise
 * @since premise 1.0
 */
	global $metabox;
	$metabox = get_post_meta(get_the_id(), 'contact_landing_page', true);
	$contact_shortcode = isset($metabox['contact_shortcode']) ? $metabox['contact_shortcode'] : '';
	$contact_address = isset($metabox['contact_address']) ? $metabox['contact_address'] : '';
	$contact_phone = isset($metabox['contact_phone']) ? $metabox['contact_phone'] : '';
	$contact_mail = isset($metabox['contact_mail']) ? $metabox['contact_mail'] : '';
	
 get_template_part('sections/hero');
 get_header(); ?>

	<div class="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<?php echo do_shortcode( $contact_shortcode, false ); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div>
	<div class="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="cont-data">
						<?php if($contact_address) : ?>
							<div class="cont-icon">
								<span class="icon-basic_map"></span>     
							</div>
							<p>Overseas Passenger </p>
							<p><?php echo esc_html($contact_address); ?></p>
						<?php endif; ?>
					</div><!-- .cont-data -->
				</div><!-- .col -->
				<div class="col-sm-4">
					<div class="cont-data">
						<?php if($contact_phone) : ?>
							<div class="cont-icon">
								<span class="icon-mobile"></span>
							</div>
							<p>Any time. We are open 24/7</p>
							<p><?php echo esc_html($contact_phone); ?></p>
						<?php endif; ?>
					</div><!-- .cont-data -->
				</div><!-- .col -->
				<div class="col-sm-4">
					<div class="cont-data">
						<?php if($contact_mail) : ?>
							<div class="cont-icon">
								<span class="icon-basic_mail_open"></span> 
							</div>
							<p>Best support via email</p>
							<p><?php echo esc_html($contact_mail); ?></p>
						<?php endif; ?>
					</div><!-- .cont-data -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div>
<?php get_footer(); ?>