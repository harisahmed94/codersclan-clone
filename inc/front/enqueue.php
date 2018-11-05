<?php

	function codersclan_external_scripts(){

	wp_register_style ('cc_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style ('cc_bootstrap');

	wp_register_style ('cc_roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_style ('cc_roboto');

	wp_enqueue_script('jquery');

	wp_register_script('cc_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(), false, true );
	wp_enqueue_script('cc_bootstrap');

	wp_register_script('cc_main', get_template_directory_uri() . '/assets/js/main.js',array(), false, true );
	wp_enqueue_script('cc_main');



	}

	add_action('wp_enqueue_scripts', 'codersclan_external_scripts');
	

 ?>