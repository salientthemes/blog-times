<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */  


  add_action( 'wp_enqueue_scripts', 'blog_times_style' );
  function blog_times_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}


/**
 *Your code goes below
 */

// for header, navigation alignment
if( ! function_exists('st_blog_header_alignment') ) {
	function st_blog_header_alignment() {
		return 'nav_first';//header_first, nav_first
	}
}

// for slider alignment
if( ! function_exists('st_blog_slider_alignment') ) {
	function st_blog_slider_alignment() {
		return 'content_slider';//full_width_slider, content_slider
	}
}

// for additional support
if ( ! function_exists( 'st_blog_additional_class' ) ) {
    function st_blog_additional_class($id) {
        //  Do something.
 		if($id == 'st-blog-featured') {
			return 'featured-layout-2';
		}       
    }
}

