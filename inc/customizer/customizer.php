<?php
/**
 * premise Theme Customizer
 *
 * @package premise
 */

function premise_customizer( $wp_customize ) {
	$wp_customize->add_panel( 'premise_blog', array(
		'priority' => 20,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Blog Setting', 'borabor' ),
		) 
	);
	$wp_customize->add_section('premise_blog_hero', array(
		'title' => 'Blog Hero Section',
		'description' => 'Add Hero Image From Here.',
		'priority' => 10,
		'panel' => 'premise_blog',
		)
	);
	$wp_customize->add_setting('premise_bloghero_image', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_feature_cat1_button_url_text'
		)
    );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,'borabor_feature_cat_control1_img',array(
               'label'      => __( 'Upload a Image', 'borabor' ),
               'section'    => 'premise_blog_hero',
               'settings'   => 'premise_bloghero_image',
               'context'    => 'your_setting_context' 
           )
       )
   );
   /*End Hero Image*/

	$wp_customize->add_setting('premise_bloghero_text', array(
            'default' => 'PREMISE TRUE MINIMAL THEME',
			'sanitize_callback' => 'blog_hero_title'
        )
    );
	
	 function blog_hero_title( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('blog_herotitle', array(
			'label'    => __( 'Hero Title Text ', 'borabor' ),
			'section'  => 'premise_blog_hero',
			'settings' => 'premise_bloghero_text',
			'type'     => 'text',
		)
	);
}
add_action( 'customize_register', 'premise_customizer' );
