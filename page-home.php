<?php get_header();  ?>

<div class="mainHome">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ): {
	 		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	 		$the_title = get_the_title();
	 		$the_content = get_the_content();


	 				//the header hero image and text to be set by user in WP
	                 echo '<div class="backgroundImage" style="background-image:url('.$feat_image_url.');">

	                 	<div class="buffer wrapper">
		                 	<h2 class="topH2">'.$the_title.'</h2>
		                 	<p class="topP">'.$the_content.'</p>
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
			<div class="wrapper">
				<?php the_field('abouthome'); ?>
			</div>
		</section>
	</div>
</div>

<div class="main">
    <div class="main-containerTwo">
		<section class="thirdBlock block">
			<div class="wrapper">
				<?php the_field('aboutevents'); ?>
			</div>
		</section>
	</div>
</div>

<div class="main">
	<div class="donate" style="background-image:url('http:<?php the_field('donatebackground'); ?>');">
	<div class="bufferTwo wrapper">
		<?php the_field('donate'); ?>
	</div>
</div>
</div>


<?php get_footer(); ?>