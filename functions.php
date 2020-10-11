<?php
// Load Stylesheets
function load_css() 
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css', 
        array(), false, 'all');
    wp_enqueue_style('magnific');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', 
    array(), false, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 
        'jquery', false, true);
    wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');


// Load Font
function load_font() 
{ 
	wp_enqueue_style( 'epilogue', 'https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400;0,600;0,700;1,500&display=swap' ); 
}
add_action( 'wp_enqueue_scripts', 'load_font' ); 


// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus( 
    
    array (
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )

);

// Custom Image Sizes
add_image_size('blog-large', 800, 600, true); //true crop, false resize
add_image_size('blog-medium', 990, 475, true);
add_image_size('blog-small', 300, 200, true);

// Register Sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
            //'before_widget' => '<div class="widget-item">',
            //'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
            //'before_widget' => '<div class="widget-item">',
            //'after_widget' => '</div>'
        )
    );

}
add_action('widgets_init', 'my_sidebars');

function my_theme_archive_title($title) 
{
    if (is_category()) {
        $title = single_cat_title( '', false );
    } elseif (is_tag()) {
        $title = single_tag_title( '', false );
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title( '', false );
    } elseif (is_tax()) {
        $title = single_term_title( '', false );
    }
    return $title;
}
 
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
