<?php
/**
 	Template Name: Home Page
 */

get_header(); ?>

	<?php get_template_part ('template-parts/content', 'hero'); ?>
	
	<?php get_template_part ('template-parts/content', 'companies'); ?>
		
	<?php get_template_part ('template-parts/content', 'advantages'); ?>

	<?php get_template_part ('template-parts/content', 'superhero'); ?>

	<?php get_template_part ('template-parts/content', 'testimonials'); ?>

	<?php get_template_part ('template-parts/content', 'contact'); ?>

<?php
get_footer();
