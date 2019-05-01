<?php
    function slick_slider_styles(){
        wp_enqueue_style( 'slick_css', '//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css' );
    }
    add_action( 'wp_enqueue_scripts', 'slick_slider_styles' );

    //Scripts
    function slick_slider_js(){
        wp_enqueue_script( 'slick_js', '//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js', array('jquery'), '', true );
    }
    add_action( 'wp_enqueue_scripts', 'slick_slider_js' );