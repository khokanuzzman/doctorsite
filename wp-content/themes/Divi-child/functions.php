<?php

/*	enqueue style */
function wp_divi_child_style() {
    wp_enqueue_style( 'rokan-style', get_stylesheet_directory_uri().'/editor-style.css' );
    // wp_enqueue_style( 'shipon-style', get_stylesheet_directory_uri().'/editor-style.css' );
}
add_action( 'wp_enqueue_scripts', 'wp_divi_child_style' );

remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');


?>