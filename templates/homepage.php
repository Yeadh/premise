<?php 
/**
 * Template Name: Homepage
 *
 * @package premise
 * @since premise 1.0
 */
 	global $metabox;

	$metabox   = get_post_meta( get_queried_object_id(), 'premise_landing_page', true );

 get_template_part('sections/hero-home');
get_header(); ?>
	
<?php
	$active_sections = isset($metabox['premise_active_section']['enabled']) ? (array) $metabox['premise_active_section']['enabled'] : array();

	foreach($active_sections as $section => $title)
	{
 		get_template_part( sprintf('sections/%s', $section ) ); 
	}
?>

<?php get_footer(); ?>