<?php get_header();  ?>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      
      		<?php if ( has_post_thumbnail() ): {
      		 		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
      		 		$the_title = get_the_title();
      		 		$the_content = get_the_content();


      		 				//the header hero image and text to be set by user in WP
      		                 echo '<div class="backgroundImageTwo" style="background-image:url('.$feat_image_url.');">

      		                 	<div class="buffer wrapper contact">
      			                 	<h2 class="topH2">'.$the_title.'</h2>
      			                 	<p class="topP">'.$the_content.'</p>
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
					</div>
	     
                        <div class="team">
                        <div class="meet">
                              <?php the_field('meet'); ?>
                        </div>

                        <?php while( has_sub_field('team') ): ?>
                              <div class="member">
                                    <?php the_sub_field('team'); ?>
                              </div>      
                        <?php endwhile; ?>

                        </div>

	        	</div>
        	</section>


<?php get_footer(); ?>