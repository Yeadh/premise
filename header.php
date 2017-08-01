<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premise
 */

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<!-- Meta Tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon and Apple Touch Icon -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,700|Roboto:300,400,700'" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Start Preloader
		<div id="p-preloader">
			<div class="p-preloader-wave"></div>
		</div>
	 -->
	<!-- End Preloader -->
	<!-- Start Header -->
	<header class="header-wrap">
		<div class="navbar-collapse">
			<div class="navbar-container">
				<div class="container position-rl">
					<div class="nav-bar-area">
						<div class="menu-toggle">
							<div class="menu-bar"><span></span></div>
							<div class="menu-text">MENU</div>
						</div>
					</div><!-- .nav-bar-area -->
					<div class="pull-left">
						
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) {
								
									printf('<a href="%s" class="custom-logo-link">', home_url());
									the_custom_logo();
									printf('</a>');
							
							}
							 else 
							{
								printf('<a class="logo" href="%s">%s</a>', home_url(), esc_attr( get_bloginfo( 'name' ) ));
							}
							
						?> <!-- .logo -->
					</div><!-- .pull-left -->
				</div><!-- .container -->
			</div><!-- .navbar-container -->
		</div><!-- .navbar-collapse -->
		<div class="nav-area">
			<div class="inner-nav-area">
			<div class="nav-list">
				<?php 
					wp_nav_menu( array( 
						'theme_location' => 'primary-nav',
					) );  
				?>
			</div><!-- .inner-nav-list -->
			</div><!-- .inner-nav-area -->
			<div class="container nav-other">
				<p class="menu-copyright pull-left"><?php footer_text_copyright(); ?></p>
				<div class="menu-socials pull-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div><!-- .nav-area -->
	</header>
	<!-- End Header -->
