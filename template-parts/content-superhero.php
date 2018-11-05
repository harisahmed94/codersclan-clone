<?php 

	// Template Name: Superhero

	$superhero_section_image 			=		get_field('superhero_section_image');
 	$superhero_section_headline 		=		get_field('superhero_section_headline');
 	$superhero_section_description 		=		get_field('superhero_section_description');

?>

<!-- SUPERHERO
================================================== -->
<section class="superhero">
	
	
	<div class="container">
		
		<div class="row">
		
			<div class="col col-sm-8 col-sm-offset-2 center-text">

				<?php if (!empty($superhero_section_image)){ ?>
		
				<img src="<?php echo $superhero_section_image['url']; ?>" alt="<?php echo $superhero_section_image['alt']; ?>" class="img-responsive superhero-img">
				
				<?php } else { ?>

					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/superhero-banner.svg" alt="Super Hero Banner with Animation" class="img-responsive superhero-img">

				<?php } ?>				

				<div class="superhero-text">
					
					<h2><?php echo $superhero_section_headline; ?></h2>
				
			
					<div class="superhero-paragraph">
						<p><?php echo $superhero_section_description; ?></p>
					</div>

				</div>

			</div><!-- col col-sm-9 col-sm-offset-2 -->


		</div><!-- row -->

	</div><!-- container -->

</section>