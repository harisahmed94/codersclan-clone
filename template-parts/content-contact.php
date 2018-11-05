<?php
	
	//Template Name: Contact

 $contact_section_title				=		get_field('contact_section_title');
 $contact_section_description		=		get_field('contact_section_description');
 $contact_form						=		get_field('contact_form');

?>

<!-- CONTACT
================================================== -->
<section class="contact" id="contact">
	
	<div class="container">
		
		<div class="row">

			<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 center-text">
				
				<h1 class="header-text"><?php echo $contact_section_title; ?></h2>
				<p class="lead"><?php echo $contact_section_description; ?></p>

			</div><!-- col-lg-6 -->
			
				
				<?php echo do_shortcode($contact_form); ?>
			

		</div><!-- row -->

	</div><!-- container -->

</section>