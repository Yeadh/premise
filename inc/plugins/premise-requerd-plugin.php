<?php

add_action( 'tgmpa_register', 'premise_register_required_plugins' );


function premise_register_required_plugins() {
	
	$plugins = array(
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Photo Gallery',
			'slug'      => 'photo-gallery',
			'required'  => false,
		),
		array(
			'name'      => 'woocommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
	// This is an example of how to include a plugin from a GitHub repository in your theme.
	// This presumes that the plugin code is based in the root of the GitHub repository
	// and not in a subdirectory ('/src') of the repository.
	array(
		'name'      => 'Premise MetaBox',
		'slug'      => 'Premise-metaboxes',
		'source'    => 'https://github.com/Yeadh/Premise-metaboxes/archive/master.zip',
	),

	);
	
	
	


	
	
	
	
	
	
	
	$config = array(
		'id'           => 'premise',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}
