<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coders_Clan
 */

$theme_opts 	=		get_option('cc_opts');

?>

<?php wp_footer(); ?>

<!-- FOOTER
================================================== -->
<footer class="center-text">
	
	<div class="container">
		
		<div class="icon-container">


			<?php if(!empty($theme_opts['logo_img'])){ ?>

				<a target="_blank" href="https://twitter.com/<?php echo $theme_opts['twitter']; ?>" class="icon-links"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/twitter.png" alt="Twitter Icon"></a>

			<?php } ?>

			<?php if(!empty($theme_opts['facebook'])){ ?>

				<a target="_blank" href="https://facebook.com/<?php echo $theme_opts['facebook'];  ?>" class="icon-links"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/facebook.png" alt="Facebook Icon"></a>

			<?php } ?>
			

		</div><!-- icon-container -->

		<div class="footer-content clearfix">

			<?php	if(!empty($theme_opts['footer'])){ ?> 

				<span class="copyright-text"><?php echo $theme_opts['footer'] ?></span>

				<?php } ?>

				<?php

					wp_nav_menu ( array(

							'theme_location' => 'footer',
							'container' => 'nav'
						) );

				 ?>
			
		</div><!-- col-xs-12 -->
		
	</div><!-- container -->

</footer>

</body>
</html>
