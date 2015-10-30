<footer>
  <div class="container">


  <?php

  $onePageQuery = new WP_Query(
    array(
      'posts_per_page' => -1,
      'post_type' => 'social',
      'order' => 'ASC'
      )
  ); ?>

  <?php if ( $onePageQuery->have_posts() ) : ?>

    <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

    <div class="social">

    <?php if( get_field('socialmedia') ): ?>
        <?php the_field('socialmedia'); ?>
    <?php endif; ?>  

    </div>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

  <?php else:  ?>
  <?php endif; ?>

  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>