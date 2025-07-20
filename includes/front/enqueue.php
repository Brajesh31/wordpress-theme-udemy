<?php
function udemy_enqueue_scripts() {
    //styles
    wp_register_style( 'u-font-rubik-and-pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', array(), null, 'all' );
    wp_register_style('u-bootstrap-icon', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css'), array(), '1.0', 'all');
    wp_register_style('u-theme-style', get_theme_file_uri('assets/public/index.css'), array(), '1.0', 'all');


    //scripts
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
   
    wp_enqueue_style('u-font-rubik-and-pacifico');
    wp_enqueue_style('u-bootstrap-icon');
    wp_enqueue_style('u-theme-style');
}
