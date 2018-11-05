<?php

function cc_admin_init(){

	include ('enqueue.php');

	add_action ( 'admin_enqueue_scripts', 'cc_admin_enqueue' );

	add_action ( 'admin_post_cc_save_options', 'cc_save_options' );

}

?>

