<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php the_content(); ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ): {
	 		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	 		$the_title = get_the_title();
	 		$the_content = get_the_content();

	                 echo '<div class="backgroundImage" style="background-image:url('.$feat_image_url.');">

	                 	<div class="buffer">

		                 	<h2 class="topH2">'.$the_title.'</h2>
		                 	<p class="topP">'.$the_content.'</p>
		                 	<button class="volunteer">Get invovled</button>

	                 	</div>

	                 </div>';
	            }
	          endif; 
	 ?>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->


<div class="main">
    <div class="main-container">
		<section class="secondBlock block">
			<?php the_field('abouthome'); ?>
		</section>
	</div>
</div>

<div class="main">
    <div class="main-containerTwo">
		<section class="thirdBlock block">
			<?php the_field('aboutevents'); ?>
		</section>
	</div>
</div>

<div class="main">
    <div class="main-containerThree">
		<section class="fourthBlock block">
			<?php the_field('donate'); ?>
		</section>
	</div>
</div>


<?php get_footer(); ?>