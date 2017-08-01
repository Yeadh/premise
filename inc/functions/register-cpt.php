<?php

/**
 * Custom post type for portfolio.
 *
 */
function premise_register_cpt() {
  register_post_type( 'premise_portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'portfolio' ),
		'add_new' => ('Add New portfolio'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail', ),
      'has_archive' => true,
    )
  );
   //Register custom post type team_members
  register_post_type( 'team_members',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team' ),
		'add_new' => ('Add New Team'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail',),
      'has_archive' => true,
    )
  );
  	// Add Categorys for artist
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'premise' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'premise' ),
		'search_items'      => __( 'Search Categorys', 'premise' ),
		'all_items'         => __( 'All Categorys', 'premise' ),
		'parent_item'       => __( 'Parent Category', 'premise' ),
		'parent_item_colon' => __( 'Parent Category:', 'premise' ),
		'edit_item'         => __( 'Edit Category', 'premise' ),
		'update_item'       => __( 'Update Category', 'premise' ),
		'add_new_item'      => __( 'Add New Category', 'premise' ),
		'new_item_name'     => __( 'New Category Name', 'premise' ),
		'menu_name'         => __( 'Category', 'premise' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-cat' ),
	);

	register_taxonomy( 'premise_portfolio_cat', array( 'premise_portfolio' ), $args );
	
	


}
add_action( 'init', 'premise_register_cpt' );
