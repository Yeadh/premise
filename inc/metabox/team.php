<?php


if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Metabox Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
 function premise_metabox_team($options){

	$options[]      = array(
	  'id'            => '_team_member_metabox',
	  'title'         => 'Custom Options',
	  'post_type'     => 'team_members', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin section
		array(
		  'name'      => 'section_team',
		  'title'     => 'Possition / Social Share',
		  'icon'      => 'fa fa-heart',
		  'fields'    => array(
		   // Section field
		   	 array(
				 'id' => 'tem_possition',
				'type' => 'text',
				'title' => __( 'Possition', 'premise' ),
				'default' => __( '', 'premise' ) 
			),
			 array(
				 'id' => 'about_fb',
				'type' => 'text',
				'title' => __( 'Facebook', 'premise' ),
				'default' => __( '#', 'premise' ) 
			),
			 array(
				 'id' => 'about_tw',
				'type' => 'text',
				'title' => __( 'Twitter', 'premise' ),
				'default' => __( '#', 'premise' ) 
			),
			 array(
				 'id' => 'about_ins',
				'type' => 'text',
				'title' => __( 'Instagram', 'premise' ),
				'default' => __( '#', 'premise' ) 
			),
			 array(
				 'id' => 'about_pnt',
				'type' => 'text',
				'title' => __( 'Pinterest', 'premise' ),
				'default' => __( '#', 'premise' ) 
			),
		  ),
		),

	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premise_metabox_team');
