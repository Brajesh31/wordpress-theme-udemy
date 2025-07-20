<?php

// Variables

// Include the required files
include(get_theme_file_path('/includes/front/enqueue.php')); //full sytem path to the file
include(get_theme_file_path('/includes/front/head.php')); 
include(get_theme_file_path('/includes/setup.php'));

// Hooks
add_action('wp_enqueue_scripts', 'udemy_enqueue_scripts');
add_action('wp_head', 'udemy_head', 5); //priority 5
add_action('after_setup_theme', 'udemy_setup_theme');