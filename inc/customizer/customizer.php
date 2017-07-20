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
			'default' => '',
			'sanitize_callback' => 'sanitize_feature_cat1_button_url_text'
		)
    );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,'premise_hero_bg_img',array(
               'label'      => __( 'Upload a Image', 'premise' ),
               'section'    => 'premise_blog_hero',
               'settings'   => 'premise_bloghero_image',
               'context'    => 'your_setting_context' 
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
			'default' => '',
			'sanitize_callback' => 'sanitize_feature_cat1_button_url_text'
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
}
add_action( 'customize_register', 'premise_customizer' );
