<?php
    /**
     * my theme function
    */

    //  theme title 

    add_theme_support('title-tag');

    //theme css and jquery file calling 
    function css_js_file_calling(){       
        wp_enqueue_style('shakil-style', get_stylesheet_uri());

    }
    add_action('wp_enqueue_scripts','css_js_file_calling');

?>