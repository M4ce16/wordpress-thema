<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                 <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                 <div><p><?php the_excerpt() ?></p></div>
    <?php endwhile; else: ?>
          <p>geen bericht gevonden</p>
    <?php endif; ?>
    <?php get_footer(); ?>
