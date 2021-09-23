<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <script async src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script async src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php bloginfo( 'url' )?>"><?php bloginfo( 'title' ); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'           => 2,
          'container'       => false,
          'menu_class'      => 'nav navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
      ) ); ?>
      <form class="d-flex">

      </form>
    </div>
  </div>
</nav>