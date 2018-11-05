<?php

// Template Name: Hero Section

// Advanced Custom Fields
 $hero_headline						= 		get_field('hero_headline');
 $hero_description					= 		get_field('hero_description');
 $hero_cta_text						= 		get_field('hero_cta_text');
 $hero_cta_link						= 		get_field('hero_cta_link');

?>

<!-- HERO
================================================== -->
<section id="hero" class="center-text">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="header-text"><?php echo $hero_headline; ?></h1>
				<p class="lead"><?php echo $hero_description; ?></p>
				<a href="<?php echo $hero_cta_link; ?>" class="btn btn-lg btn-success"><?php echo $hero_cta_text ?></a>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
	
</section>

</div><!-- img-container -->