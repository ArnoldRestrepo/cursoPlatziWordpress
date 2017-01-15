<?php get_header(); ?>
    <body>
                  <?php
                    if ( have_posts() ) : while (  have_posts() ) :  the_post();
                  ?>
                    <h1 class="page-heading max-width"><?php the_title();?></h1>
                    <main class="max-width">
                        <article class="block">
                          <div class="block__title"><?php the_author(); ?></div>
                          <div class="block__body">
                            <p><?php the_content(); ?></p>
                            <footer>
                              <small><?php the_tags(); ?></small>
                            </footer>
                          </div>
                        </article
                      </main>
                  <?php
                      endwhile;
                      else :
                  ?>
                    <p><?php _e( 'Lo sentimos no hay contenido' ); ?></p>
                  <?php endif; ?>
      <?php get_footer(); ?>
