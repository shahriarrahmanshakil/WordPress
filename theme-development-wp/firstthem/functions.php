<?php
    /**
     * my theme function
    */

    //  theme title 

    add_theme_support('title-tag');

    //theme css and jquery file calling 
    function css_js_file_calling(){       
        wp_enqueue_style('shakil-style', get_stylesheet_uri());
        wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', 'all');
        wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('custom');
        
        // jquery 
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.3.3', 'true');
        wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '5.3.3', 'true');
        


    }
    add_action('wp_enqueue_scripts','css_js_file_calling');


    //Theme Function
    function srs_customizar_register($wp_customize){
        $wp_customize->add_section('srs_header_area', array(
        'title' =>__('Header Area', 'shahriarrahmanshakil'),
        'description' => 'If you interested to update your header area, you can do it here.'
        ));
    
        $wp_customize->add_setting('srs_logo', array(
        'default' => get_bloginfo('template_directory') .'/img/logosrs.png',
        ));
    
        $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'srs_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'srs_logo',
        'section' => 'srs_header_area',
        ) ));
    
    }
    
    add_action('customize_register', 'srs_customizar_register');

?>