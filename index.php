<?php get_header(); ?>
    <body>
        <h1 class="page-heading max-width"><?php bloginfo('name')?></h1>
        <div class="grid max-width">
            <div class="block grid--item-9">
                <div class="block__title">
                    Últimos Trabajos
                </div>
                <div class="block__body grid">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="block grid--item-6">
                      <h2 class="block__title"><?php the_title(); ?></h2>
                      <div class="block__body">
                        <p><?php the_excerpt(); ?></p>
                        <footer>
                          <small><?php the_tags(); ?> <?php the_author(); ?></small>
                        </footer>
                      </div>
                    </article>
                  <?php endwhile; else : ?>
                    <p><?php _e( 'Lo sentimos no hay contenido' ); ?></p>
                  <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
      <?php get_footer(); ?>
