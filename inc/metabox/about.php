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
                         'id' => 'about_team_bgimage',
                        'type' => 'image',
                        'title' => __( 'Team Section BG Image', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
                    
                ) //end fields
            ),
			
			// begin  SPONSORS section
            array(
                 'name' => 'about_Page_sponsors',
                'title' => __( 'SPONSORS Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Gallery group
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
