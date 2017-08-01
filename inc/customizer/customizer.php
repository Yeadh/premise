<?php
/**
 * premise Theme Customizer
 *
 * @package premise
 */

function premise_customizer( $wp_customize ) {
	$wp_customize->add_panel( 'premise_hero', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Hero Setting', 'premise' ),
		) 
	);
	$wp_customize->add_section('premise_blog_hero', array(
		'title' => 'Blog Hero',
		'description' => 'Upload Hero Image.',
		'priority' => 20,
		'panel' => 'premise_hero',
		)
	);
	$wp_customize->add_setting('premise_bloghero_image', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
    );
	
	/**
	 * Background Image' image upload Control.
	 */
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'premise_hero_bg_img',array(
				'settings'		=> 'premise_bloghero_image',
				'section'		=> 'premise_blog_hero',
				'label'			=> __( 'Blog Hero Background Image', 'premise' ),
				'description'	=> __( 'Select the image to be used for Blog Hero Background.', 'premise' )
			)
		)
	);
   /*End Hero Image*/
   
   
	/*Start blog Hero Title*/
	$wp_customize->add_setting('premise_bloghero_text', array(
            'default' => 'PREMISE TRUE MINIMAL THEME',
			'sanitize_callback' => 'blog_hero_title'
        )
    );
	
	 function blog_hero_title( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('blog_herotitle', array(
			'label'    => __( 'Hero Title Text ', 'premise' ),
			'section'  => 'premise_blog_hero',
			'settings' => 'premise_bloghero_text',
			'type'     => 'text',
		)
	);
	/*End blog Hero Title*/

	/*Start Home Hero Image*/
	
	$wp_customize->add_section('premise_home_hero', array(
		'title' => 'Home Hero',
		'description' => 'Upload Hero Image.',
		'priority' => 10,
		'panel' => 'premise_hero',
		)
	);
	
	$wp_customize->add_setting('premise_homehero_image', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
    );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,'premise_homehero_bg_img',array(
               'label'      => __( 'Upload a Image', 'premise' ),
               'section'    => 'premise_home_hero',
               'settings'   => 'premise_homehero_image',
               'context'    => 'your_setting_context' 
           )
       )
   );
   /*End Home Hero Image*/
   
	/*Start Home Hero Title*/
	$wp_customize->add_setting('premise_homehero_text', array(
            'default' => 'PREMISE TRUE MINIMAL THEME',
			'sanitize_callback' => 'home_hero_title'
        )
    );
	
	 function home_hero_title( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_herotitle', array(
			'label'    => __( 'Hero Title Text ', 'premise' ),
			'section'  => 'premise_home_hero',
			'settings' => 'premise_homehero_text',
			'type'     => 'text',
		)
	);
	/*End Home Hero Title*/
	
	/*Start Home Hero Services*/
	$wp_customize->add_setting('premise_homehero_services', array(
            'default' => 'DESIGN | DEVELOPMENT | BRANDING',
			'sanitize_callback' => 'home_hero_services'
        )
    );
	
	 function home_hero_services( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_heroservices', array(
			'label'    => __( 'Hero Services ', 'premise' ),
			'section'  => 'premise_home_hero',
			'settings' => 'premise_homehero_services',
			'type'     => 'text',
		)
	);
	/*End Home Hero Services*/
	
	
	
	
	
	
	
	
	
	
	
/*
	*
	*Start Footer section
	*
*/
	
	$wp_customize->add_section('premise_Footer_setting', array(
		'title' => 'Footer Setting',
		'priority' => 30,
		)
	);
	
	$wp_customize->add_setting('footer_text', array(
            'default' => 'Copyright © 2017 premise. All Rights Reserved. Designed by Pressionate.',
			'sanitize_callback' => 'premise_footer_text'
        )
    );
	 function premise_footer_text( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('footer_text', array(
			'label'    => __( 'Copy Right', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'footer_text',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('facebook_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_facebook_link'
        )
    );
	 function footer_facebook_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('facebook_link', array(
			'label'    => __( 'Facebook ID', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'facebook_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('twitter_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_twitter_link'
        )
    );
	 function footer_twitter_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('twitter_link', array(
			'label'    => __( 'Twitter ID', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'twitter_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('google_plus_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_google_plus_link'
        )
    );
	 function footer_google_plus_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('google_plus_link', array(
			'label'    => __( 'Google Plus ID', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'google_plus_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('youtube_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_youtube_link'
        )
    );
	 function footer_youtube_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('youtube_link', array(
			'label'    => __( 'Youtube ID', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'youtube_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('instagram_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_instagram_link'
        )
    );
	 function footer_instagram_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('instagram_link', array(
			'label'    => __( 'Instagram ID', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'instagram_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('dribble_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_dribble_link'
        )
    );
	 function footer_dribble_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('dribble_link', array(
			'label'    => __( 'Dribble ID', 'premise' ),
			'section'  => 'premise_Footer_setting',
			'settings' => 'dribble_link',
			'type'     => 'text',
		)
	);
	
	/*End Footer*/
	
/*
	*
	*Start Contact section
	*
*/
	
	$wp_customize->add_section('premise_contact_setting', array(
		'title' => 'Contact Setting',
		'priority' => 30,
		)
	);
	//email
	$wp_customize->add_setting( 'premise_contact_email', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'info@yoursite.com',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'premise_contact_email', array(
	  'type' => 'textarea',
	  'section' => 'premise_contact_setting',
	  'settings' => 'premise_contact_email',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'Add Your Email ID.' ),
	) );
	//phone
	$wp_customize->add_setting( 'premise_contact_phone', array(
	  'capability' => 'edit_theme_options',
	  'default' => '+1 23456-67890',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'premise_contact_phone', array(
	  'type' => 'textarea',
	  'section' => 'premise_contact_setting',
	  'settings' => 'premise_contact_phone',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'This is a custom textarea.' ),
	) );
	
	//Address
	$wp_customize->add_setting( 'premise_contact_address', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'Upper Level, Overseas Passanger
					Terminal, The Rocks, Sydney 2000',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'premise_contact_address', array(
	  'type' => 'textarea',
	  'section' => 'premise_contact_setting',
	  'settings' => 'premise_contact_address',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'This is a custom textarea.' ),
	) );
	
	//Contact form shortcode

	$wp_customize->add_setting('premise_contact_shortcode', array(
            'default' => '',
			'sanitize_callback' => 'contact_shortcode'
        )
    );
	 function contact_shortcode( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('premise_contact_shortcode', array(
			'label'    => __( 'Shortcode', 'premise' ),
			'section'  => 'premise_contact_setting',
			'settings' => 'premise_contact_shortcode',
			'type'     => 'text',
		)
	);
	
	/*End contact*/
	
	
	
/*******************************************************
	*
	*ABout  Page
	*
**********************************************************/
	$wp_customize->add_panel( 'premise_about', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'About Page Setting', 'premise' ),
		) 
	);
	$wp_customize->add_section('premise_home_about', array(
		'title' => 'Home About section',
		'priority' => 20,
		'panel' => 'premise_about',
		)
	);
	
	$wp_customize->add_setting('premise_homeabout_image', array(
			'sanitize_callback'	=> 'sanitize_text_field',
			'transport'		=> 'postMessage'
		)
    );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,'premise_homeabout_image',array(
               'label'      => __( 'Upload Your Image', 'premise' ),
               'section'    => 'premise_home_about',
               'settings'   => 'premise_homeabout_image',
               'context'    => 'your_setting_context' 
           )
       )
   );
	/*End HomePage About Image*/
	
	/*Start HomePage About who are you*/
	
	$wp_customize->add_setting('premise_who_are_you', array(
            'default' => 'I AM A PASSIONATE DESIGNER',
			'sanitize_callback' => 'home_who_are_you'
        )
    );
	
	 function home_who_are_you( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('premise_who_are_you', array(
			'label'    => __( 'Button Text ', 'premise' ),
			'section'  => 'premise_home_about',
			'settings' => 'premise_who_are_you',
			'type'     => 'text',
		)
	);
	/*End HomePage About who are you?*/
	
	/*Start Home About what u do?*/
	
	$wp_customize->add_setting('premise_homeabout_whatudo', array(
            'default' => 'WE TRY TO PROVIDE BEST SERVICE',
			'sanitize_callback' => 'home_about_whatudo'
        )
    );
	
	 function home_about_whatudo( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('premise_homeabout_whatudo', array(
			'label'    => __( 'Button URL ', 'premise' ),
			'section'  => 'premise_home_about',
			'settings' => 'premise_homeabout_whatudo',
			'type'     => 'text',
		)
	);
	/*End Home About what u do?*/
	
	
	/*Start HomePage About content*/
	
	$wp_customize->add_setting( 'premise_textarea_setting_id', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the, when an unknown printer took a galley',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'premise_textarea_setting_id', array(
	  'type' => 'textarea',
	  'section' => 'premise_home_about',
	  'settings' => 'premise_textarea_setting_id',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'This is a custom textarea.' ),
	) );
	/*End HomePage About content*/
	
	
}
add_action( 'customize_register', 'premise_customizer' );
