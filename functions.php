<?php

function load_scripts(){
  wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'fancybox-jquery', get_template_directory_uri() . '/css/jquery.fancybox.css');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style( 'bootstrap-cdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  wp_enqueue_script( 'jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
  wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'null', true);
  wp_enqueue_script( 'fancy-box', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), 'null', true);
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), 'null', true);
  wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.min.js', array(), 'null', true);
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), 'null', true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), 'null', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

