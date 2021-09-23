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
            while( have_posts() ): the_post();?>
            <article class="post">
              <?php if( has_post_thumbnail() ): ?>
                <div class="row">
                  <div class="col-md-3">
                    <div class="post-thumbnail">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title( '<h1>', '</h1>' ); ?>
                    </a>
                    <p class="meta">Posted by <b><?php the_author(); ?></b> at <?php the_date();?> on <?php the_time(); ?></p>
                  <div class="excerpt">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="btn btn-default">Read More &raquo;</a>
                  </div>
                </div>
                <?php else: ?>
                  <div class="row">
                    <div class="col-md-12">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title( '<h1>', '</h1>' ); ?>
                    </a>
                    <p class="meta">Posted by <b><?php the_author(); ?></b> at <?php the_date();?> on <?php the_time(); ?></p>
                    <div class="excerpt">
                      <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-default">Read More &raquo;</a>
                    </div>
                  </div>              
                  <?php endif; ?>
                </article>
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