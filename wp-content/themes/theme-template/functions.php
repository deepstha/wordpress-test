<?php
    function test_theme_support(){
        //Addd dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'test_theme_support');

    function test_theme_menus() {
        $locations = array (
            'primary' =>"Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
        );
        register_nav_menus($locations);
    }
    
    add_action('init', 'test_theme_menus');
    function test_register_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('test-theme-style', get_template_directory_uri() . "/style.css", array('test-theme-bootstrap', 'test-theme-owl-carousel'),  $version, 'all');
        wp_enqueue_style('test-theme-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), '1.0', 'all');
        wp_enqueue_style('test-theme-owl-carousel', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), '2.3.4', 'all');
        wp_enqueue_style('test-theme-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), '4.3.1', 'all');
        wp_enqueue_style('test-style', get_template_directory_uri() . "/assets/css/style.min.css", array(), '', 'all');
        wp_enqueue_style('test-theme-main-style', get_template_directory_uri() . "/assets/css/main.min.css", array(), '', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'test_register_styles');

    function test_register_scripts(){
        wp_enqueue_script('test-theme-jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', true);
        wp_enqueue_script('test-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.3.1', true);
        wp_enqueue_script('test-theme-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true);
        wp_enqueue_script('test-theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'test_register_scripts');

    function test_theme_widget_areas(){
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => ''
            ),
            array(
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area'
            )
        );
    }
    add_action('widgets_init', 'test_theme_widget_areas')
?>