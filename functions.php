<?php
if(!function_exists('nova_theme_setup')){
	function nova_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('menus');
		register_nav_menu('primary','Top Menu');
		register_nav_menu('secondary','Footer Navigation');
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-logo', array(
            'default-image' => get_stylesheet_directory_uri().'/dist/img/logo.png',
			'width' => 150,
			'height' => 150,
			'flex-width' => true,
		) );
	}
}
if(!function_exists('nova_styles')){
	function nova_styles(){
		wp_enqueue_style('bootstrap-css',get_stylesheet_directory_uri().'/lib/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome',get_stylesheet_directory_uri().'/lib/css/font-awesome.min.css');
		wp_enqueue_style('style',get_stylesheet_directory_uri().'/style.css');
	}
}
if(!function_exists('nova_scripts')){
	function nova_scripts(){
		wp_enqueue_script('bootstrap-js',get_stylesheet_directory_uri().'/lib/js/bootstrap.min.js',array('jquery'));
		wp_enqueue_script('main',get_stylesheet_directory_uri().'/main.js',array('jquery'));
	}
}
add_action('wp_enqueue_scripts','nova_styles');
add_action('wp_enqueue_scripts','nova_scripts');
add_action('after_setup_theme','nova_theme_setup');