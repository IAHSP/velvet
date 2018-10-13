<?php
/**
 * Velvet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Velvet
 */

if ( ! function_exists( 'velvet_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function velvet_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Velvet, use a find and replace
	 * to change 'velvet' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'velvet', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
  
  /**
   * Register menus.
   */
  function register_my_menus() {
    register_nav_menus(
      array(
        'menu-1' => esc_html__( 'Primary', 'velvet' ),
        'top-menu' => __( 'Top Menu', "velvet" ),
        'main-menu' => __( 'Main Menu', "velvet" )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
  
  /** 
   * Customize Main Menu.
   */
  class MenuMainWalker extends Walker_Nav_Menu {
    // Adds dropdown-menu class
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $indent = str_repeat("\t", $depth);
          $output .= "\n$indent<ul class='dropdown-menu'>\n";
    } // start_lvl

    function end_lvl( &$output, $depth = 0, $args = array() ) {
          $indent = str_repeat("\t", $depth);
          $output .= "$indent</ul>\n";
      } // end_lvl
    // Add dropdowns after first <li>
    
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
          if($depth == 0) {
        $output .= sprintf( '<li class="dropdown"><a href="' . $item->url . '" class="dropdown-toggle">' . $item->title . '</a>',
          $item->url,
          ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
          $item->title
        );
      } else {
        $output .= sprintf( '<li class=""><a href="' . $item->url . '">' . $item->title . '</a>',
          $item->url,
          ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
          $item->title
        );
      }
    } // start_el()
  } // MenuMainWalker

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
	add_theme_support( 'custom-background', apply_filters( 'velvet_custom_background_args', array(
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
}
endif;
add_action( 'after_setup_theme', 'velvet_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function velvet_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'velvet_content_width', 640 );
}
add_action( 'after_setup_theme', 'velvet_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function velvet_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'velvet' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'velvet' ),
		'before_widget' => '<section id="%1$s" class="panel panel-default %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="panel-heading space-bottom-10"><h3 class="panel-title widget-title">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'velvet_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function velvet_scripts() {
	wp_enqueue_style( 'velvet-style', get_stylesheet_uri() );

	wp_enqueue_script( 'velvet-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'velvet-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'velvet_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Removes the extra <p> tags.
 */
remove_filter('the_content', 'wpautop');

add_action( 'wp_footer', 'wpcf7_success_redirects' );
function wpcf7_success_redirects() {
?>
	<script type="text/javascript">
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			if ( '120' == event.detail.contactFormId ) { // Sends sumissions on form 947 to the first thank you page
				// Run some API.
				
				// Redirect to success page.
				location = "https://www.eventbrite.com/e/2018-iahsp-conference-expo-tickets-36424043294";
			} else if ( '122' == event.detail.contactFormId ) { // Sends submissions on form 1070 to the second thank you page
				// Run some API.
				
				// Redirect to success page.
				location = "https://iahsp.com/europe/conference-2018";
			} else { // Sends submissions on all unaccounted for forms to the third thank you page
				// Run some API.
				
				// Redirect to success page.
				location = "https://pages.iahsp.com/thank-you/";
			} // if
		}, false );
	</script>
	<?php
}