<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coders_Clan
 */

	$theme_opts 	 					=  		get_option('cc_opts');

 	$hero_background_image				= 		get_field('hero_background_image');

 	$hero_img 							=		$hero_background_image['url'];

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'codersclan' ); ?></a>

	<?php if(!empty($hero_background_image)){ //if the user uploads an image ?>

		
		<div class="img-container" style="

			background : -moz-linear-gradient(31.49% -65.53% -60deg,rgba(28, 183, 141, 1) 0%,rgba(37, 108, 141, 1) 45.19%,rgba(43, 56, 141, 1) 75.35%,rgba(14, 57, 92, 1) 100%), url(<?php echo $hero_img; ?>) center center no-repeat;
	  background : -webkit-linear-gradient(-60deg, rgba(28, 183, 141, 1) 0%, rgba(37, 108, 141, 1) 45.19%, rgba(43, 56, 141, 1) 75.35%, rgba(14, 57, 92, 1) 100%), url(<?php echo $hero_img; ?>) center center no-repeat;
	  background : -webkit-gradient(linear,31.49% -65.53% ,68.51% 165.53% ,color-stop(0,rgba(28, 183, 141, 1) ),color-stop(0.4519,rgba(37, 108, 141, 1) ),color-stop(0.7535,rgba(43, 56, 141, 1) ),color-stop(1,rgba(14, 57, 92, 1) )), url(<?php echo $hero_img; ?>) center center no-repeat;
	  background : -o-linear-gradient(-60deg, rgba(28, 183, 141, 1) 0%, rgba(37, 108, 141, 1) 45.19%, rgba(43, 56, 141, 1) 75.35%, rgba(14, 57, 92, 1) 100%), url(<?php echo $hero_img; ?>) center center no-repeat;
	  background : -ms-linear-gradient(-60deg, rgba(28, 183, 141, 1) 0%, rgba(37, 108, 141, 1) 45.19%, rgba(43, 56, 141, 1) 75.35%, rgba(14, 57, 92, 1) 100%), url(<?php echo $hero_img; ?>) center center no-repeat;
	  	background-size: cover;

		">

	<?php } else { ?>

		<div class="img-container">


	<?php } ?>
			
		<!-- HEADER
        ================================================== -->
		<header class="site-header" role="banner">
			<div class="container">

			<?php if(!empty($theme_opts['logo_img'])){ ?>

				<a href="<?php echo esc_url( home_url('/') ); ?>" class="navbar-brand"><img src="<?php echo $theme_opts['logo_img']; ?>" alt="Coders Clan Logo"></a>

			<?php } else {?>

			    <a href="<?php echo esc_url( home_url('/') ); ?>" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Coders Clan Logo"></a>

			<?php } ?>

			
				
			</div><!-- container -->
		</header>
