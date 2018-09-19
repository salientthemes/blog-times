<?php

global$st_blog_sections;
global$st_blog_settings_controls;
global$st_blog_repeated_settings_controls;
global$st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['st-blog-enable-static-page']      = 1;
$st_blog_customizer_defaults['st-blog-default-layout']          = 'right-sidebar';
$st_blog_customizer_defaults['st-blog-single-post-image-align'] = 'full';
$st_blog_customizer_defaults['st-blog-archive-layout']          = 'thumbnail-and-excerpt';
$st_blog_customizer_defaults['st-blog-default-body-layout']     = 'boxed';

$st_blog_sections['st-blog-back-all-theme-setting'] = array(
    'priority'       => 10,
    'title'          => esc_html__( 'Layout Options', 'st-blog' ),
    'panel'          => 'st-blog-homepage-panel',
);

/*home page static page display*/
$st_blog_settings_controls['st-blog-enable-static-page'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-enable-static-page'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Static Front Page', 'blog-times' ),
        'description'           =>  esc_html__( 'If you disable this, the static page will be disappeared form the front page and other section will remain as it is', 'blog-times' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'checkbox',
        'priority'              => 10,
    )
);


/*layout-options option responsive lodader start*/
$st_blog_settings_controls['st-blog-default-layout'] = array(
    'setting' =>  array(
        'default'              =>$st_blog_customizer_defaults['st-blog-default-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Default Layout', 'blog-times' ),
        'description'           =>  esc_html__( 'Please note that this section can be overridden by individual page/post settings', 'blog-times' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices' => array(
            'right-sidebar'     => esc_html__( 'Content - Primary Sidebar', 'blog-times' ),
            'left-sidebar'      => esc_html__( 'Primary Sidebar - Content', 'blog-times' ),
            'both-sidebar'      => esc_html__( 'Three Columns  - Content', 'blog-times' ),
            'no-sidebar'        => esc_html__( 'No Sidebar', 'blog-times' )
        ),
        'priority'              => 20,
        'active_callback'       => ''
    )
);


$st_blog_settings_controls['st-blog-single-post-image-align'] = array(
    'setting' =>  array(
        'default'  =>$st_blog_customizer_defaults['st-blog-single-post-image-align'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Alignment of Image in Single Post/Page', 'blog-times' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices' => array(
            'full'      => esc_html__( 'Full', 'blog-times' ),
            'right'     => esc_html__( 'Right', 'blog-times' ),
            'left'      => esc_html__( 'Left', 'blog-times' ),
            'no-image'  => esc_html__( 'No image', 'blog-times' )
        ),
        'priority'              => 40,
        'description'           =>  esc_html__( 'Please note that this section can be overridden by individual page/post settings', 'blog-times' ),
    )
);


$st_blog_settings_controls['st-blog-archive-layout'] = array(
    'setting' =>  array(
        'default'              => $st_blog_customizer_defaults['st-blog-archive-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Archive Layout', 'blog-times' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices'  => array(
            'excerpt-only'              => esc_html__( 'Excerpt Only', 'blog-times' ),
            'thumbnail-and-excerpt'     => esc_html__( 'Thumbnail and Excerpt', 'blog-times' ),
            'full-post'                 => esc_html__( 'Full Post', 'blog-times' ),
            'thumbnail-and-full-post'   => esc_html__( 'Thumbnail and Full Post', 'blog-times' ),
        ),
        'priority'              => 55,
    )
);

$st_blog_settings_controls['st-blog-default-body-layout'] = array(
    'setting' =>     array(
        'default'              => $st_blog_customizer_defaults['st-blog-default-body-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Blog Post Layout', 'blog-times' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices'               => array(
            'boxed'         => esc_html__( 'Grid Layout', 'blog-times' ),
            'full-width'    => esc_html__( 'Full Width Layout', 'blog-times' ),
        ),
        'priority'              => 70,
        'active_callback'       => ''
    )
);


