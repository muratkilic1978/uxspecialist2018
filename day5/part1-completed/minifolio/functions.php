<?php

function load_scripts() {
    # First parameter is the id or name of the file you are adding - mustbe unique, second parameter is the path to the file
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.css' );
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style('animate-min-css', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    
    
    
    # First parameter is the id or name of the file you are adding - must be unique, second parameter is the path to the file, third parameter is dependency and typical when there is  no dependency you will type an empty array, fourth parameter is the version - you can use the value null or type the exact version number, fifth parameter will tell whether you want to add the script in the footer of your document.
    wp_enqueue_script('jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'null', true );
    wp_enqueue_script('jquery-fancybox-pack-js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), 'null', true );
    wp_enqueue_script('jquery-waypoints-min-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), 'null', true );
    wp_enqueue_script('retina-min-js', get_template_directory_uri() . '/js/retina.min.js', array(), 'null', true );
    wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/js/modernizr.js', array(), 'null', true );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), 'null', true );
    
}


add_action('wp_enqueue_scripts','load_scripts');
?>