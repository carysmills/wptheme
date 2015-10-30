<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,600,500|Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="headerContainer">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  </div> <!-- /.container -->

<?php

$onePageQuery = new WP_Query(
  array(
    'posts_per_page' => -1,
    'post_type' => 'logo',
    'order' => 'ASC'
    )
); ?>

<?php if ( $onePageQuery->have_posts() ) : ?>

  <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

  <div class="logo">

  <?php if( get_field('logo') ): ?>
    <img src="<?php the_field('logo'); ?>" />
  <?php endif; ?>  

  </div>

  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
<?php endif; ?>



</header><!--/.header-->

