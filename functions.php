<?php 

    function material_minimal_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'material_minimal_resources');
    add_theme_support( 'post-thumbnails' ); 

    ?>