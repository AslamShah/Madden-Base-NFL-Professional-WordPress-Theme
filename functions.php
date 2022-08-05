<?php

if ( ! isset( $content_width ) ) {
    $content_width = 660;
}
function maddenbase_setup() {
    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
     * Text domain can be found in the comments of styls.css or the themes folder name.
     */
   

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
	
	
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'maddenbase' ),
) );
}
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );





/** Tell WordPress to run tranquilwp_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'maddenbase_setup' );

function maddenbase_scripts() {
    /* Add styles */
    wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/Assets/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css' );

    /* Add JS- Name, src, dependancies i.e bs requires jquery, */
    /* lastly in_footer = true - this adds script in footer with wp_footer tag  */
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/Assets/bootstrap/js/bootstrap.min.js', array('jquery'), true );
	
	  if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    
   
}
add_action( 'wp_enqueue_scripts', 'maddenbase_scripts' );


function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Register our sidebars and widgetized areas.
 *
 */
    function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar_blog',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

$args = array(
    // 'width'         => 980,
    // 'height'        => 60,
    'default-image' => get_template_directory_uri() . '/Assets/Images/Franchise.jpg',
    // allow site owner to upload images
    'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

add_theme_support( 'custom-logo' );

?>
