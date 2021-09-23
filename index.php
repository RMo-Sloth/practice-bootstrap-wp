<?php get_header(); ?>
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
<?php get_footer();