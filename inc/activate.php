<?php
/*
	
*/

function cc_activate (){
	if ( version_compare ( get_bloginfo('version'), '4.2', '<' ) ){
		wp_die ( __('You must have a minimum version of 4.2 to use this theme.') );
	}

	$theme_opts = get_option('cc_opts');

	if ( !$theme_opts ){
		$opts = array (

			'twitter'	=>	'',
			'facebook'	=>	'',
			'logo_img'	=>	'',
			'footer'	=> 	''

			);

		add_option( 'cc_opts', $opts );
	}

}

?>