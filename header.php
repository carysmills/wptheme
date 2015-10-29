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
  <div class="logo">
    <img src="<?php echo bloginfo("template_url");?>/assets/RJAA.png" alt="">
  </div>
</header><!--/.header-->

