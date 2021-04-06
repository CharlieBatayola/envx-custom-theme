<?php

function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','load_css');

function load_js()
{
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);

    wp_register_script('bootstrap',  get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('owl-carousel',  get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 'jquery', false, true);
    wp_enqueue_script('owl-carousel');

    wp_register_script('mainscript',  get_template_directory_uri() . '/assets/js/mainscript.js', 'jquery', false, true);
    wp_enqueue_script('mainscript');

}
add_action('wp_enqueue_scripts','load_js');

/**add_theme_support('menus');

register_nav_menus(

    array(
        'side-menu' => 'Side Menu Location',
    )

);**/



