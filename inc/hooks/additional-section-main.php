<?php
if ( !function_exists('st_blog_additional_section_main') ) :

     /**
     * additional section main
     *
     * @since st-blog 1.0.0
     *
     * @param null
     * @return null
     *
     */

    function  st_blog_additional_section_main()
    {

        global $st_blog_customizer_all_values;
        $blog_times_slecet_category_post =  $st_blog_customizer_all_values['blog-times-ticker-category-post'];
        // var_dump($blog_times_slecet_category_post);die('k vo');

        if( 1 == $st_blog_customizer_all_values['blog-times-enable-ticker'] ) { ?>
            <div class="additional-sections">
                <div class="st-blog-vticker-wrap">
                    <?php  
                    if(0  != $blog_times_slecet_category_post  ) {   
                        $cat_post_array = array(
                            'post_type'           =>'post',
                            'posts_per_page'       => 5,
                            'cat'                 => absint($blog_times_slecet_category_post),
                            'ignore_sticky_posts' => true


                        );
                    } ?>
                    
                    <div class="st-blog-vticker">
                        <ul>
                        <?php
                        $ticker_category = new WP_Query($blog_times_slecet_category_post);
                        if(  $ticker_category -> have_posts() ){
                            while($ticker_category -> have_posts() ){
                                $ticker_category -> the_post(); ?>
                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                            <?php }
                        }  ?>
                        </ul>
                            
                    </div>

                            
                   
                </div>
            </div>

        <?php } 
    }
endif;
add_action('st_blog_homepage_additional_section_main','st_blog_additional_section_main',20);
