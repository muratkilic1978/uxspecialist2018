<?php

function add_styles(){
    $parent_style = 'hamilton-style';
    $child_style = 'child-style';
    
    # Specifying and linking to the mother themes style.css file
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');
    
    # Specifying and linking to the child themes style.css file + getting the version number of the mother theme
    wp_enqueue_style(  $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') 
    );      
}

add_action('wp_enqueue_scripts','add_styles');





?>