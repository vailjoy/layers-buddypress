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
		); // Parent Style for Version visibility

		
	}
	
}

// Add new widget area for BuddyPress pages
function layers_child_register_bp_widgets_area() {
    register_sidebar( array(
        'name'       => __( 'BuddyPress Sidebar', 'layers' ),
        'id'         => 'bp-sidebar',
        'description'    => __( 'Appears in the sidebar section of all BuddyPress pages.', 'layers' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'layers_child_register_bp_widgets_area' );
 
// Add the sidebar body class for BP pages if the Secondary Widget area is not active
function layers_child_add_sidebar_body_class( $classes ) {
    if ( function_exists ( 'bp_loaded' ) &&  !bp_is_blog_page() && !is_active_sidebar( 'sidebar-2' )  )  {
        $classes[] = 'sidebar';
    }
    return $classes;
}
add_filter( 'body_class', 'layers_child_add_sidebar_body_class' );