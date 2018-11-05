<?php

	// Template Name: Testimonials

 $testimonials_section_title		=		get_field('testimonials_section_title');

?>

<!-- TESTIMONIALS
================================================== -->
<section class="testimonials">

	<div class="container">

		<h2><?php echo $testimonials_section_title; ?></h2>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<!-- wrapper for the slides -->
			<div class="carousel-inner" role="listbox">

				<?php

					$queryArgs = array (

							'post_type' => 'testimonial',
							'order_by' => 'post_id',
							'order' => 'ASC'

						);

					$query = new WP_Query( $queryArgs );
					$active = ' active';

				 ?>

				 <?php if( $query-> have_posts()): while ( $query-> have_posts()) : $query->the_post(); 

				 	$testimonial_feature_image = get_field('testimonial_feature_image');
				 	$testimonial_body = get_field('testimonial_body');
				 	$customer_name = get_field('customer_name');
				 	$customer_designation = get_field('customer_designation');
				 	$customer_image = get_field('customer_image');

				 ?>
				
				<div class="item row <?php echo $active; ?>">
		
					<div class="col-sm-3">
						<img src="<?php echo $testimonial_feature_image['url']; ?>" alt="<?php echo $testimonial_feature_image['alt']; ?>" class="img-responsive testimonial-logo">
					</div><!-- col-sm-4 -->
					
					<div class="carousel-caption col-sm-8 col-sm-offset-1">
						<blockquote>
							<?php echo $testimonial_body; ?>
							<cite><img src="<?php echo $customer_image['url']; ?>" alt="<?php echo $customer_image['alt']; ?>" class="testimonial-img"><span><?php echo $customer_name; ?></span> <?php echo $customer_designation; ?></cite>
						</blockquote>
					</div><!-- col-sm-8 -->
					
				</div><!-- item -->

				<?php $active =''; ?>

			<?php endwhile; ?>

		<?php endif; ?>

		<?php wp_reset_query(); ?>

		</div><!-- #myCarousel -->
					
			<!-- indicators -->
			<ol class="carousel-indicators">

				<?php $count_testimonial = wp_count_posts('testimonial'); 

				 $published_posts = $count_testimonial->publish; 

				 $count = 0;

				 $active = ' active'; 

				 while ($count < $published_posts) : ?>

				<li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="<?php echo $active; ?>"></li>

				<?php $count = $count + 1; 

					$active = '';
				?>

			<?php endwhile; ?>
				
				
			</ol>

					
		</div><!-- row -->

	</div><!-- container -->
	
</section>