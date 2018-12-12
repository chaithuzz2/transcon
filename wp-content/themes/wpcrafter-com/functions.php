<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//

function my_bb_upgrade_link() { 
    return 'https://www.wpbeaverbuilder.com/?fla=190'; 
}

add_filter( 'fl_builder_upgrade_url', 'my_bb_upgrade_link' );

// Remove the footer removal nag

function child_remove_display_notice() {
    remove_action( 'admin_notices', 'display_notice' );
    remove_action( 'admin_notices', 'display_tesseractplusnotice' );
}
add_action( 'wp_loaded', 'child_remove_display_notice' );