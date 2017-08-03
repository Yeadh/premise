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
 function premise_metabox_common($options){
	 
	$options = array();
	
	
    $options[ ] = array(
         'id' => 'premise_landing_page',
        'title' => 'Custom Home Page Options',
        'post_type' => 'page', // or post or CPT or array( 'page', 'post' )
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
             array(
                 'name' => 'section_config',
                'title' => __( 'Section Configaration', 'premise' ),
                'icon' => 'fa fa-music',
                'fields' => array(
                    array(
                         'id' => 'premise_active_section',
                        'type' => 'sorter',
                        'default' => array(
                             'enabled' => array(
							 'portfolio' => 'Portfolio Section',
                            ),
                            'disabled' => array( 
								'portfolio-2' => 'Portfolio masonry',
                                 'blog' => 'Blog Section',
                                 'testimonials' => 'Testimonials Section',
							) 
                        ),
                        'enabled_title' => 'Active Section',
                        'disabled_title' => 'Inactive Sections' 
                    ) 
                ) 
            ),

           
            // begin Blog section
            array(
                 'name' => 'blog',
                'title' => __( 'Blog Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
				
                     // Section field
                     array(
                         'id' => 'blog_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
					
					
                    // a field
                    array(
                         'id' => 'blog_number_of_posts',
                        'type' => 'select',
                        'title' => __( 'Number of posts', 'premise' ),
                        'options' => array(
                             '3' => 'Three',
                            '6' => 'Six',
                            '9' => 'Nine' 
                        ),
                        'default' => '3' 
                    ) 
                ) //end fields
            ),
            
           
        ) 
    );
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	return $options;
}
add_filter('cs_metabox_options','premise_metabox_common');
