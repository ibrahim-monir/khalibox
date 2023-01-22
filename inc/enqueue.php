<?php

/**
 * Enqueue scripts and styles.
 */
function khalibox_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), _S_VERSION );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css', array(), _S_VERSION );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'khalibox-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'accordions', get_template_directory_uri() . '/assets/js/accordions.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'khalibox-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'khalibox_scripts' );