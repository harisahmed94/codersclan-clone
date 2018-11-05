<?php

	function cc_save_options(){

		if ( !current_user_can('edit_theme_options') ){
			wp_die(__('You are not allowed to be on this page.') );

		}

		check_admin_referer ( 'cc_options_verify' );

		$opts 				= 		get_option('cc_opts');
		$opts['twitter']	=		sanitize_text_field($_POST['cc_inputTwitter']);
		$opts['facebook']	=		sanitize_text_field($_POST['cc_inputFacebook']);
		$opts['footer']		=		$_POST['cc_inputFooter'];
		$opts['logo_img']	=		esc_url_raw($_POST['cc_inputLogoImg']);
 
		update_option ( 'cc_opts', $opts );

		wp_redirect( admin_url('admin.php?page=cc_theme_opts&status=1') );

	}

?>