<?php

global$st_blog_sections;
global$st_blog_settings_controls;
global$st_blog_repeated_settings_controls;
global$st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['blog-times-enable-ticker']      		= 1;
$st_blog_customizer_defaults['blog-times-number-of-post']          	= 5;
$st_blog_customizer_defaults['blog-times-ticker-category-post'] 	= 1;


$st_blog_sections['blog-times-back-all-theme-setting'] = array(
    'priority'       => 5,
    'title'          => esc_html__( 'Ticker Options', 'blog-times' ),
    'panel'          => 'st-blog-homepage-panel',
);

/*show ticker*/
$st_blog_settings_controls['blog-times-enable-ticker'] = array(
'setting' => array(
    'default' => $st_blog_customizer_defaults['blog-times-enable-ticker'],
),
'control' => array(
    'label'                 =>  esc_html__( 'Show Ticker', 'blog-times' ),
    'section'               => 'blog-times-back-all-theme-setting',
    'type'                  => 'checkbox',
    'priority'              => 10,
)
);

/*number of post*/
$st_blog_settings_controls['blog-times-number-of-post'] = array(
'setting' => array(
    'default' => $st_blog_customizer_defaults['blog-times-number-of-post'],
),
'control' => array(
    'label'                 =>  esc_html__( 'Select Number Of Post', 'st-blog' ),
    'section'               => 'blog-times-back-all-theme-setting',
    'type'                  => 'select',
    'choices'  => array(
    	1					=> esc_html__('1','blog-times'),
    	2					=> esc_html__('2','blog-times'),
    	3					=> esc_html__('3','blog-times'),
    	4					=> esc_html__('4','blog-times'),
    	5					=> esc_html__('5','blog-times')

    ),
    'priority'              => 20,
)
);

/*Select category*/
$st_blog_settings_controls['blog-times-ticker-category-post'] = array(
'setting' => array(
    'default' => $st_blog_customizer_defaults['blog-times-ticker-category-post'],
),
'control' => array(
    'label'                 =>  esc_html__( 'Show Ticker', 'blog-times' ),
    'section'               => 'blog-times-back-all-theme-setting',
    'type'                  => 'category_dropdown',
    'priority'              => 30,
)
);