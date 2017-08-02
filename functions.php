<?php
/**
 * premise functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package premise
 */

if ( ! function_exists( 'premise_setup' ) ) :

function premise_setup() {

	load_theme_textdomain( 'premise', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post', 'premise_portfolio', 'team_members' ) );
		add_image_size( 'port-image', 360, 285, true ); 
		add_image_size( 'home_blog_image', 360, 240, true ); 
		

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'premise_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
	
	
	
	
	
	
	
	
	
	
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary-nav' => esc_html__( 'Primary nav', 'premise' ),
	) );
	
	
	
}
endif;
add_action( 'after_setup_theme', 'premise_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function premise_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'premise_content_width', 640 );
}
add_action( 'after_setup_theme', 'premise_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function premise_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'premise' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'premise' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'premise_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function premise_scripts() {
	wp_enqueue_style( 'premise-style', get_stylesheet_uri() );
	wp_enqueue_style( 'plugins', 	get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0' );
	wp_enqueue_style( 'style', 		get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' );
	wp_enqueue_style( 'custom', 	get_template_directory_uri() . '/assets/css/custom.css' );
	

	wp_enqueue_script( 'premise-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'premise-plugin', 	get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'premise-main', 	get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'premise-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'customizer', 	get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'premise_scripts' );

function premise_customize_css(){
    ?>
         <style type="text/css">
             .home .hero-area { background-image: url(<?php echo get_theme_mod('premise_homehero_image', ''); ?>); }
             .hero-area-all { background-image: url(<?php echo get_theme_mod('premise_bloghero_image', ''); ?>); }
			 
         </style>
    <?php
}
add_action( 'wp_head', 'premise_customize_css');


//Premix activation metabox for pages
	
function premise_admin_enqueue() {
	wp_enqueue_script( 'premise-admin-enquee', get_template_directory_uri() . '/assets/js/myscript.js' );
}
add_action( 'admin_enqueue_scripts', 'premise_admin_enqueue' );

/**
 * Automatic creating a page
 */
function premix_activate()
{
$pages = get_pages(array(
	'meta_key' => '_wp_page_template',
	'meta_value' => 'homepage.php',
));
if ( (!$pages) && isset($_GET['activated']) ){
	$new_page_title = 'Premise Home Page';
	$new_page_content = 'This is the page content';
	$new_page_template = 'homepage.php'; 
	$new_page = array(
			'post_type' => 'page',
			'post_title' => $new_page_title,
			'post_content' => $new_page_content,
			'post_status' => 'publish',
			'post_author' => 1,
	);
	if(!isset($page_check->ID)){
		$new_page_id = wp_insert_post($new_page);
		if(!empty($new_page_template)){
			update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
			do_action( 'premise_activated', $new_page_id );
		}
	}
}
}
register_activation_hook( __FILE__, 'premix_activate' );
		






/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('the_excerpt', function ($content){
	$post_content = explode(" ", $content);
	$less_content = array_slice($post_content, 0, 42);
	$excert =  implode(" ", $less_content);
	$excert = sprintf('<p>%s</p> <a href="%s" class="pb-btn p-btn-medium">%s</a>',$excert, get_the_permalink(),__('Read More','premise')) ;
	return $excert;	
});


//premise Footer social

function premise_social_share(){
	  if( get_theme_mod( 'facebook_link' )  )
	  {
		echo sprintf('<li><a href="%s">Facebook</a></li>', esc_url( get_theme_mod( 'facebook_link' )  ) );
	  }
	  if( get_theme_mod( 'twitter_link' )  )
	  {
		echo sprintf('<li><a href="%s">Twitter</a></li>', esc_url( get_theme_mod( 'twitter_link' )  ) );
	  }
	  if( get_theme_mod( 'google_plus_link' )  )
	  {
		echo sprintf('<li><a href="%s">Google+</a></li>', esc_url( get_theme_mod( 'google_plus_link' )  ) );
	  }
	  if( get_theme_mod( 'youtube_link' )  )
	  {
		echo sprintf('<li><a href="%s">Youtube</a></li>', esc_url( get_theme_mod( 'youtube_link' )  ) );
	  }
	  if( get_theme_mod( 'instagram_link' )  )
	  {
		echo sprintf('<li><a href="%s">Instagram</a></li>', esc_url( get_theme_mod( 'instagram_link' )  ) );
	  }
	  if( get_theme_mod( 'dribble_link' )  )
	  {
		echo sprintf('<li><a href="%s">Dribbble</a></li>', esc_url( get_theme_mod( 'dribble_link' )  ) );
	  }
	  
}
//premise blog social share

function premise_blog_social_share(){
	$urlpramarater = array(
		array(
			'class'		=> 'facebook',
			'phrase' 	=> 'https://www.facebook.com/sharer.php?u={url}',
		),
		array(
			'class'		=> 'twitter',
			'phrase' 	=> 'https://twitter.com/intent/tweet?url={url}&text={title}',
		),
		
		array(
			'class'		=> 'linkedin',
			'phrase' 	=> 'https://plus.google.com/share?url={url}',
		),
		array(
			'class'		=> 'google-plus',
			'phrase' 	=> 'https://plus.google.com/share?url={url}',
		),
	);
	$permalink = urlencode( wp_get_shortlink() );
	$title =  get_the_title();
	?>
	
	<div class="social-feedback">
		<?php 
			$urlpramarater = (array) apply_filters('premise_social_urlpramarater', $urlpramarater);
			foreach( $urlpramarater as $pramarater)
			{
				$url = str_replace( array('{url}','{title}'), array($permalink, $title), $pramarater['phrase'] );
				echo sprintf('<a class="common-btn" href="%s">%s</a>', $url, $pramarater['class']);
			}
		?>
	</div><!-- .social-feedback -->
	<?php
}

//premise pegination

function premise_pegination(){
	array(
		'base'               => '%_%',
		'format'             => '?paged=%#%',
		'total'              => 1,
		'current'            => 0,
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 2,
		'prev_next'          => true,
		'prev_text'          => __('« Previous'),
		'next_text'          => __('Next »'),
		'type'               => 'plain',
		'add_args'           => false,
		'add_fragment'       => '',
		'before_page_number' => '',
		'after_page_number'  => ''
	);
}

//  BREADCRUMBS		

function the_breadcrumb() {
    $sep = '  ';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumb">
				<ul>';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
		bloginfo('name');
        echo '</li>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'premise' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'premise' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'premise' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'premise' ), get_the_date( _x( 'Y', 'yearly archives date format', 'premise' ) ) );
            } else {
                _e( 'Blog Archives', 'premise' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</ul></div>';
    }
}






require_once get_template_directory() . '/inc/functions/register-cpt.php';
require_once get_template_directory() . '/inc/customizer/functions.php';
require_once get_template_directory() . '/inc/metabox/common.php';
require_once get_template_directory() . '/inc/metabox/about.php';