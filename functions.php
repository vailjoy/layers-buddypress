<?php

/**
 * Layers Child Theme Custom Functions
 * Replace layers_child in examples with your own child theme name!
**/

 
add_action( 'wp_enqueue_scripts', 'layers_child_styles' );	

if( ! function_exists( 'layers_child_styles' ) ) {	

	function layers_child_styles() {				
		
		wp_enqueue_style(
			'layers-parent-style',
			get_template_directory_uri() . '/style.css',
			array()
		); // Parent Stylesheet for version visibility

		
	}
	
}