<?php //index.php is the last resort template, if no other templates match ?>

 <?php get_header(); ?> 

    <?php if ( has_post_thumbnail() ): {
              $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );

                  //the header hero image most recent from blog
                           echo '<div class="backgroundImageTwo" style="background-image:url('.$feat_image_url.');">
                                      <div class="blogBuffer"><h2 class="blogType">News from the RJAA</h2></div>
                           </div>';
                      }
                    endif; 
           ?>

  <div class="noFooter">      

  <div class="blogContainer">
    <div class="realContainer wrapper">

  <div class="blogContent">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="blogArticle wrapper">

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="entry-title wrapper"><?php the_title(); ?></h1>

       <div class="entry-meta wrapper">
          <p> <?php echo get_avatar(get_the_author_meta("email"), "80" ); ?> Posted by 
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
          on  <?php the_time('D M j')?>  (<?php the_time('g:i A') ?>)</p>
        </div> <!-- .entry-meta --> 
        
        <div class="entry-content wrapper">
          <?php the_content(); ?>
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div>.

      <div id="nav-below" class="navigation wrapper">
        <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
        <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
      </div><!-- #nav-below -->

      <?php comments_template( '', true ); ?>
     </div> 
     </div>
  <!--    </div> -->

    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.content -->

      <?php get_sidebar(); ?> 

</div>
</div>  

  <?php get_footer(); ?>
 