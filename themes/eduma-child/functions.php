<?php

function thim_child_enqueue_styles() {
	if ( is_multisite() ) {
		wp_enqueue_style( 'thim-child-style', get_stylesheet_uri() );
	} else {
		wp_enqueue_style( 'thim-parent-style', get_template_directory_uri() . '/style.css' );
	}
}

function face_scripts() {
// El primer paso es usar wp_register_script para registrar el script que queremos cargar. Fíjense que aquí sí usamos *get_template_directory_uri()*

wp_register_script( 'primer-script', get_template_directory_uri() . '/js/face.js', array( 'jquery'), '',true );

wp_enqueue_script( 'primer-script' );
}

add_action( 'wp_enqueue_scripts', 'thim_child_enqueue_styles', 1000 );
add_action('wp_enqueue_scripts', 'face_scripts');