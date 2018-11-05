<?php


function cc_admin_menus(){
	add_menu_page(

			'CodersClan Theme Options',
			'Theme Options',
			'edit_theme_options',
			'cc_theme_opts',
			'cc_theme_opts_page'

		);
}

?>