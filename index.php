<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
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
        <!-- NAVWALKER ?? -->

      <form class="d-flex">

      </form>
    </div>
  </div>
</nav>
<div class="container index">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">TITLE</h3>
        </div>
      </div>
      <div class="panel-body">
        <?php 
          if( have_posts() ): 
            while( have_posts() ): the_post(); ?>
              <div class="row">
                <div class="col-md-3">IMAGE</div>
                <div class="col-md-9">
                  <?php the_title( 'h1', 'h1' ); ?>
                </div>
              </div>
            <?php endwhile;
          endif;
        ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php 
        if( is_active_sidebar( 'sidebar' ) ):
          dynamic_sidebar( 'sidebar' );
        endif;
      ?>
    </div>
  </div>
</div>
  <?php wp_footer(); ?>
</body>
</html>