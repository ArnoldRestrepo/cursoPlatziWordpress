<?php
//Template Name: Page With Sidebar
?>
<?php get_header(); ?>
    <body>
      <?php
        if ( have_posts() ) : while (  have_posts() ) :  the_post();
      ?>
      <h1 class="page-heading max-width">
        <?php the_title();?>
        <span>Información</span>
      </h1>
      <div class="grid max-width">
          <div class="block grid--item-9">
              <div class="block__body grid">
                          <div class="block__body">
                            <p><?php the_content(); ?></p>
                          </div>
                  <?php
                      endwhile;
                      else :
                  ?>
                    <p><?php _e( 'Lo sentimos no hay contenido' ); ?></p>
                  <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
      <?php get_footer(); ?>
