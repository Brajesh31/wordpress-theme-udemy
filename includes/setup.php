<?php
function udemy_setup_theme() {
    add_theme_support('editor-styles');

    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', 
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css'
    ]);
}