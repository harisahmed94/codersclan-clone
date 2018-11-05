<?php

	//Template Name: Advantages

$advantage_1_title 				= 		get_field('advantage_1_title');
$advantage_1_description 		= 		get_field('advantage_1_description');
$advantage_1_image 				= 		get_field('advantage_1_image');
$advantage_2_title 				= 		get_field('advantage_2_title');
$advantage_2_description 		= 		get_field('advantage_2_description');
$advantage_2_image 				= 		get_field('advantage_2_image');
$advantage_3_title 				= 		get_field('advantage_3_title');
$advantage_3_description 		= 		get_field('advantage_3_description');
$advantage_3_image 				= 		get_field('advantage_3_image');
?>

<!-- ADVANTAGE1
================================================== -->
<section class="advantages">
	
	<div class="container">
		
		<div class="row vertical">
			
			<div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
				
				<h2><?php echo $advantage_1_title; ?></h2>

				<p><?php echo $advantage_1_description; ?>
				</p>

			</div><!-- col-md-5 -->
			
			<div class="col-sm-5 col-md-4">
				
				<img src="<?php echo $advantage_1_image['url']; ?>" alt="<?php echo $advantage_1_image['alt']; ?>" class="img-responsive">

			</div><!-- col-md-5 -->
			

		</div><!-- row -->

	</div><!-- container -->

</section>

<!-- ADVANTAGE2
================================================== -->
<section class="advantages">
	
	<div class="container">
		
		<div class="row vertical">
			
			<div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
				
				<img src="<?php echo $advantage_2_image['url']; ?>" alt="<?php echo $advantage_2_image['alt']; ?>" class="img-responsive">

			</div><!-- col-md-5 -->
			
			<div class="col-sm-5 col-md-4">

				<h2><?php echo $advantage_2_title; ?></h2>

				<p><?php echo $advantage_2_description; ?></p>

			</div><!-- col-md-5 -->
			

		</div><!-- row -->

	</div><!-- container -->

</section>

<!-- ADVANTAGE3
================================================== -->
<section class="advantages">

	<div class="container">
		
		<div class="row vertical">
			
			<div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
				
				<h2><?php echo $advantage_3_title; ?></h2>

				<p><?php echo $advantage_3_description; ?></p>

			</div><!-- col-md-5 -->
			
			<div class="col-sm-5 col-md-4">
				
				<img src="<?php echo $advantage_3_image['url']; ?>" alt="<?php echo $advantage_3_image['alt']; ?>" class="img-responsive">

			</div><!-- col-md-5 -->
			

		</div><!-- row -->

	</div><!-- container -->

</section>