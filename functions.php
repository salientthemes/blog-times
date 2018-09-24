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

// for ticker position
if( ! function_exists('st_blog_header_alignment') ) {
	function st_blog_ticker_position() {
		return 'ticker_content';
	}
}

// for header, navigation alignment
if( ! function_exists('st_blog_header_alignment') ) {
	function st_blog_header_alignment() {
		return 'nav_first';
	}
}

// for slider alignment
if( ! function_exists('st_blog_slider_alignment') ) {
	function st_blog_slider_alignment() {
		return 'content_slider';
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

// theme name
if ( ! function_exists ( 'st_blog_theme_name' ) ) {
	function st_blog_theme_name() {
		return 'Blog Times';
	}
}

// for additional article
if ( ! function_exists ( 'st_blog_additional_article' ) ) {
	function st_blog_additional_article() {
		?>
		<div class="additional-sections">
			<div class="social-sharing">
				<div id="st-blog-social-icons">
					<ul>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"></a></li>
						<li><a href="https://twitter.com/home?status=<?php the_permalink();?>" target="_blank"></a></li>
						<li><a href="https://plus.google.com/share?url=<?php the_permalink();?>" target="_blank"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php
	}
}