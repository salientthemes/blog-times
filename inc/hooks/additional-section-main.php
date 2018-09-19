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
        ?>
        <div class="additional-sections">
            <div class="st-blog-vticker-wrap" style="display: none;">
                <div class="st-blog-vticker">
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }
endif;
add_action('st_blog_homepage_additional_section_main','st_blog_additional_section_main',20);
