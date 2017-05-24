<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        parent-style,
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script( 'main', '/wp-content/themes/test-theme/js/main.js', array ( 'jquery' ),  true);
}
?>