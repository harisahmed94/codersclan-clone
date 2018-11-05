<?php

function cc_admin_enqueue(){

	if(!isset($_GET['page']) || $_GET['page'] != "cc_theme_opts"){
		return;
	}
	
	wp_register_style ('cc_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style ('cc_bootstrap');

	wp_enqueue_media();
	
	wp_register_script ('cc_options', get_template_directory_uri() . '/assets/js/options.js', array(), false, true );
	wp_enqueue_script ('cc_options');

}

?>