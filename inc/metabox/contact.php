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
 function premise_metabox_contact($options){

	$options[]      = array(
	  'id'            => 'contact_landing_page',
	  'title'         => 'Custom Options',
	  'post_type'     => 'page', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin section
		array(
		  'name'      => 'contact_page',
		  'title'     => 'Contact Details',
		  'icon'      => 'fa fa-heart',
		  'fields'    => array(
		  
			
			// shortcode
			array(
			  'id'    => 'contact_shortcode',
			  'type'  => 'textarea',
			  'title' => 'Add Contact Form 7 shortCode Here',
			),
			// Field
			array(
			  'id'    => 'contact_address',
			  'type'  => 'textarea',
			  'title' => 'Add Address Here',
			),
			// Field
			array(
			  'id'    => 'contact_phone',
			  'type'  => 'textarea',
			  'title' => 'Add phone No. Here',
			),
			// Field
			array(
			  'id'    => 'contact_mail',
			  'type'  => 'textarea',
			  'title' => 'Add Email ID Here',
			),
			
			
				
		  ),
		),

	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premise_metabox_contact');
