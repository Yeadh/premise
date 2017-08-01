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
                                 'slider' => 'Slider Section',
                                'artists' => 'artists Section',
                                'albums' => 'albums Section',
                                'about' => 'About Section',
                                'events' => 'events',
                                'author' => 'Author Section',
                                'pricing' => 'Pricing Section',
                                'purchase' => 'Purchase',
                                'blog' => 'Blog Section',
                                'contact' => 'Contact Section' 
                            ),
                            'disabled' => array( ) 
                        ),
                        'enabled_title' => 'Active Section',
                        'disabled_title' => 'Inactive Sections' 
                    ) 
                ) 
            ),

            // begin section
            array(
                 'name' => 'slider_section',
                'title' => __( 'Slider Section', 'premise' ),
                'icon' => 'fa fa-book',
                'fields' => array(
                    // a field
                     array(
                         'id' => 'slider_headline',
                        'type' => 'text',
                        'title' => __( 'Slider Headline', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
					// a field
                     array(
                         'id' => 'slider_upcoming_event_neame',
                        'type' => 'text',
                        'title' => __( 'Upcoming Event', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
					// a field
                     array(
                         'id' => 'slider_upcoming_event_ticket_lebel',
                        'type' => 'text',
                        'title' => __( 'Button Text', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
					// a field
                     array(
                         'id' => 'slider_upcoming_event_ticket_url',
                        'type' => 'text',
                        'title' => __( 'Button URL', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
					// Live Track field
					array(
					  'id'              => 'slider_live_track_area',
					  'type'            => 'group',
					  'title'           => 'Upload Slider Music',
					  'button_title'    => 'Add New',
					  'accordion_title' => 'Add New Field',
					  'fields'          => array(
						array(
						  'id'    => 'slider_music_name',
						  'type'  => 'text',
						  'title' => 'Music Name',
						),
						array(
						  'id'    => 'slider_music_artist_name',
						  'type'  => 'text',
						  'title' => 'Music Artist Name',
						),
						
						array(
						  'id'    => 'slider_music_track',
						  'type'  => 'upload',
						  'title' => 'Upload Music',
						),
						
					  ),
					),	

				// End field
					// a field
                    array(
                         'id' => 'cover_layout',
                        'type' => 'radio',
                        'title' => __( 'Background Style', 'premise' ),
                        'options' => array(
                            'slider' => 'Slider Layout',
                            'video' => 'Video Layout' 
                        ),
                        'default' => 'slider' 
                    ),	
									
					array(
					  'id'          => 'gallery_2',
					  'type'        => 'gallery',
					  'title'       => 'Add Slider Images',
					  'add_title'   => 'Add Images',
					  'edit_title'  => 'Edit Images',
					  'clear_title' => 'Remove Images',
					  'dependency' => array(
                             'cover_layout_slider',
                            '==',
                            'true' 
                        ) 
					),
					
					array(
                         'id' => 'cover_video_id',
                        'type' => 'text',
                        'title' => __( 'Youtube Video ID', 'premise' ),
                        'default' => '',
                        'dependency' => array(
                             'cover_layout_video',
                            '==',
                            'true' 
                        ) 
                    ),
                ) //end fields
            ),
            // begin artists section
            array(
                 'name' => 'artists',
                'title' => __( 'Artists Section', 'premise' ),
                'icon' => 'fa fa-book',
                'fields' => array(
				
                    // Section field
                     array(
                         'id' => 'artists_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
                    
					
                ) //end fields
            ),
			
			
			
            // begin albums section
            array(
                 'name' => 'albums',
                'title' => __( 'albums Section', 'premise' ),
                'icon' => 'fa fa-book',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'albums_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
				array(
                         'id' => 'albums_section_bg_image',
                        'type' => 'image',
                        'title' => __( 'BG Image', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
                ) //end fields
            ),
			
			
            // begin About section
            array(
                 'name' => 'about',
                'title' => __( 'About Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'about_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
                    array(
                         'id' => 'about_details',
                        'type' => 'wysiwyg',
                        'title' => __( 'Description', 'premise' ),
                        'settings' => array(
                             'textarea_rows' => 15,
                            'tinymce' => true,
                            'media_buttons' => false 
                        ) 
                    ),
                    // a field
                    array(
                         'id' => 'about_image',
                        'type' => 'image',
                        'title' => __( 'Image', 'premise' ),
                        'add_title' => __( 'Add Image', 'premise' ) 
                    ),
                   
                ) //end fields
            ),
			
			
            // begin Events section
            array(
                 'name' => 'events',
                'title' => 'Events Section',
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'events_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premise' ),
                        'default' => __( '', 'premise' ) 
                    ),
					 // a field
                    array(
                         'id' => 'events_bgimage',
                        'type' => 'image',
                        'title' => __( 'Image', 'premise' ),
                        'add_title' => __( 'Add Image', 'premise' ) 
                    ),
                    
                ) //end fields
            ),
			
			
			// begin section
            array(
                 'name' => 'purchase',
                'title' => __( 'Purchase Section', 'premise' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                    // a field
                     array(
                         'id' => 'purchase_title',
                        'type' => 'text',
                        'title' => __( 'Purchase Title', 'premise' ),
                        'default' => __( 'There is no friend as loyal as book”', 'premise' ) 
                    ),
                    // a field
                    array(
                         'id' => 'purchase_btn_level',
                        'type' => 'text',
                        'title' => __( 'Button Level', 'premise' ),
                        'default' => __( 'Purchase Now', 'premise' ) 
                    ),
                    // a field
                    array(
                         'id' => 'purchase_btn_url',
                        'type' => 'text',
                        'title' => __( 'Button Url', 'premise' ),
                        'default' => __( '#', 'premise' ) 
                    ) 
                ) //end fields
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
