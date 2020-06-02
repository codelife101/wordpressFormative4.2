<?php

// loading css
function load_css(){

    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('bootstrap');


    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts','load_css');

// loading javascript
function load_js(){
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrapjs',get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts','load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'custom-logo' );

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);

// Register sidebars
// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');




//custom imgage size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);


// adding google fonts
function wpb_add_google_fonts(){
    wp_register_style('wpb-googleFonts','<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">');
    wp_enqueue_style('wpb-googleFonts');
}
add_action('wp_print_styles','wpb_add_google_fonts');


//adding custom menu
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  function register_my_menu() {
    register_nav_menu('new-menu',__( 'New Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  // custom post type
function my_first_post_type(){
  $args = array(
    'labels' => array(
        'name' => 'Plants',
        'singular_name' => 'Plant',
    ),

  'hierarchical' => true, //boolean value toggles between pages & posts without labels
  'menu_icon' => 'dashicons-palmtree',//get icon name from wordpress dashicons
  'public' => true,
  'has_archive' => true,
  'supports' => array('title','editor','thumbnail','custom-fields' ),// if one of the argument is  not mentioned,
  //if makes difference in features

);
  register_post_type('plants',$args);
}

add_action('init','my_first_post_type');





//customize API
require_once get_template_directory() . '/customizer.php';




