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
 function premise_metabox_about($options){

	$options[]      = array(
	  'id'            => 'about_landing_page',
	  'title'         => 'Custom Options',
	  'post_type'     => 'page', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin About section
            array(
                 'name' => 'about_Page',
                'title' => __( 'About Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'about_us_whatdo',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( 'WE LOVE WHAT WE DO', 'premise' ) 
                    ),
					
                    array(
                         'id' => 'about_page_details',
                        'type' => 'wysiwyg',
                        'title' => __( 'Add Your Description', 'premise' ),
                        'settings' => array(
                             'textarea_rows' => 15,
                            'tinymce' => true,
                            'media_buttons' => false 
                        ) 
                    ),
                    // a field
                    array(
                         'id' => 'about_page_image',
                        'type' => 'image',
                        'title' => __( 'Upload Your group Image', 'premise' ),
                        'add_title' => __( 'Add Image', 'premise' ) 
                    ),
                   
                ) //end fields
            ),
			// begin team section
            array(
                 'name' => 'about_Page_team',
                'title' => __( 'Team Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'about_us_team',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( 'WE ARE PASSIONATE AND CREATIVE', 'premise' ) 
                    ),
                    
                ) //end fields
            ),
			
			// begin  SPONSORS section
			
					
            array(
                 'name' => 'about_Page_sponsors',
                'title' => __( 'Sponsors Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Gallery group
					 // Section field
                     array(
                         'id' => 'about_clients',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( 'THEY GIVE US THEIR COMPLIMENTS', 'premise' ) 
                    ),
					array(
						  'id'          => 'sponsors_images',
						  'type'        => 'gallery',
						  'title'       => 'Add Sponsors Images',
						  'add_title'   => 'Add Images',
						  'edit_title'  => 'Edit Images',
						  'clear_title' => 'Remove Images',
						),
                    
                ) //end fields
            ),
	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premise_metabox_about');
