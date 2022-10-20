<?php

add_action('after_setup_theme','schooltheme');

if(!function_exists('schooltheme')){

    function schooltheme(){
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
    load_theme_textdomain( 'classicschool', get_template_directory() .'/languages' );

    add_theme_support('post-formats', array ('aside','link','gallery','qoute','video'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );


    register_nav_menus( array(
        'primary' => __('Primary Menu', 'classicschool'),
        'secondary' => __('Secondary Menu', 'classicschool')
    ) );


        if(!function_exists('schoolthemescript')){

            function schoolthemescript(){

                wp_enqueue_style( 'style', get_stylesheet_uri() );

                // <!-- Google Fonts CDN Link --> 
                wp_register_style( 'fontlink', '"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' );
                wp_enqueue_style('fontlink');


                // <!-- Bootstrap core CSS --> 
                wp_enqueue_style( 'bscss', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), null, 'all');


                // <!-- Additional CSS Files -->
                wp_enqueue_style( 'stylesheet1', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), null, 'all');
                wp_enqueue_style( 'stylesheet2', get_template_directory_uri() . '/assets/css/templatemo-grad-school.css', array(), null, 'all');
                wp_enqueue_style( 'stylesheet3', get_template_directory_uri() . '/assets/css/owl.css', array(), null, 'all');
                wp_enqueue_style( 'stylesheet4', get_template_directory_uri() . '/assets/css/lightbox.css', array(), null, 'all');



                // <!-- /.footer-->          
                // <!-- Bootstrap core JavaScript -->
                wp_enqueue_script( 'jquerylib', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', null, null, true);
                wp_enqueue_script( 'bsmin', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', null, null, true);

                wp_enqueue_script( 'isotopejs', get_template_directory_uri() . '/assets/js/isotope.min.js', null, null, true);
                wp_enqueue_script( 'owljs', get_template_directory_uri() . '/assets/js/owl-carousel.js', null, null, true);
                wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/assets/js/lightbox.js', null, null, true);
                wp_enqueue_script( 'tabsjs', get_template_directory_uri() . '/assets/js/tabs.js', null, null, true);
                wp_enqueue_script( 'videojs', get_template_directory_uri() . '/assets/js/video.js', null, null, true);
                wp_enqueue_script( 'sliderjs', get_template_directory_uri() . '/assets/js/slick-slider.js', null, null, true);
                wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js', null, null, true);
                
                
                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                }
            
            }

        }

        add_action( 'wp_enqueue_scripts', 'schoolthemescript' );

    }

} 

// Included Files (Functions)
require_once('inc/custom-courses.php');


?>