<?php

	//Template Name: Companies 

$logo_1 							=		get_field('logo_1');
$logo_2 							=		get_field('logo_2');
$logo_3 							=		get_field('logo_3');

?>

<!-- COMPANIES
================================================== -->
<section class="companies">

	<div class="container">

		<div class="row">
			<div class="col-xs-4 col-sm-2 col-sm-offset-3">
				<img src="<?php echo $logo_1['url']; ?>" alt="<?php echo $logo_1['alt']; ?>" class="img-responsive">
				
			</div><!-- col -->

			<div class="col-xs-4 col-sm-2">
				
				<img src="<?php echo $logo_2['url']; ?>" alt="<?php echo $logo_2['alt']; ?>" class="img-responsive">
				
			</div><!-- col -->

			<div class="col-xs-4 col-sm-2">
				<img src="<?php echo $logo_3['url']; ?>" alt="<?php echo $logo_3['alt']; ?>" class="img-responsive">
			</div><!-- col -->


		</div><!-- row -->
	</div><!-- container -->
	
</section>