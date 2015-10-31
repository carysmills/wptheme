<?php get_header();  ?>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      
      		<?php if ( has_post_thumbnail() ): {
      		 		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
      		 		$the_title = get_the_title();


      		 				//the header hero image and text to be set by user in WP
      		                 echo '<div class="backgroundImageTwo" style="background-image:url('.$feat_image_url.');">

      		                 	<div class="contactBuffer wrapper">
      			                 	<h2 class="topH2">'.$the_title.'</h2>
      		                 	</div>

      		                 </div>';
      		            }
      		          endif; 
      		 ?>
      	      <?php endwhile; // end the loop?>


			<section class="socialWrapper">
	        	<div class="wrapper contactWrapper">
	        		<div class="socialTop">
						<?php the_field('contactsocial'); ?>
                                           <?php the_content(); ?>
					</div>
	        		<div class="contactForm">
	        			<?php the_field('contactform'); ?>
	        		</div>

	        	</div>
        	</section>


<?php get_footer(); ?>