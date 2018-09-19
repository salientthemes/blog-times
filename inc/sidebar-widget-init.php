<?php
/**
 * Register wi )dget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function st_blog_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'blog-times' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

     register_sidebar( array(
        'name'          => esc_html__( 'Secondary Sidebar', 'blog-times' ),
        'id'            => 'sidebar-2',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );


    $st_blog_get_all_options = st_blog_get_all_options(1);
    register_sidebar(array(
        'name' => esc_html__('Footer Column One', 'blog-times'),
        'id' => 'footer-col-one',
        'description' => esc_html__('Displays items on footer section.','blog-times'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
        
    register_sidebar(array(
        'name' => esc_html__('Footer Column Two', 'blog-times'),
        'id' => 'footer-col-two',
        'description'   => esc_html__('Displays items on footer section.','blog-times'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
        
    register_sidebar(array(
        'name' => esc_html__('Footer Column Three', 'blog-times'),
        'id' => 'footer-col-three',
        'description'   => esc_html__('Displays items on footer section.','blog-times'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
}
add_action( 'widgets_init', 'st_blog_widgets_init' );

$st_blog_st_blog_tab_path = st_blog_file_directory('inc/widgets/mainpage-st-blog-tab.php');
require $st_blog_st_blog_tab_path;


