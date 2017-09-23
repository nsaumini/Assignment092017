<?php

function grabjet_enqueue_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('grabjet-style', get_stylesheet_uri(), $dependencies);
    wp_enqueue_style('bootstrap-select-style', get_template_directory_uri().'/bootstrap/css/bootstrap-select.min.css', $dependencies);
    wp_enqueue_style('jqueryui-style', get_template_directory_uri().'/assets/css/jquery-ui.min.css', []);
    wp_enqueue_style('jqueryui-timepicker-style', get_template_directory_uri().'/assets/css/jquery-ui-timepicker-addon.css', []);
}

function grabjet_enqueue_scripts()
{
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.7', true);
    wp_enqueue_script('bootstrap-select', get_template_directory_uri().'/bootstrap/js/bootstrap-select.min.js', ['bootstrap'], '1.6.3');
    wp_enqueue_script('jqueryui', get_template_directory_uri().'/assets/js/jquery-ui.min.js', $dependencies, '1.12.1');
    wp_enqueue_script('jqueryui-timepicker', get_template_directory_uri().'/assets/js/jquery-ui-timepicker-addon.js', $dependencies, '1.12.1');
}

add_action('wp_enqueue_scripts', 'grabjet_enqueue_styles');
add_action('wp_enqueue_scripts', 'grabjet_enqueue_scripts');

?>