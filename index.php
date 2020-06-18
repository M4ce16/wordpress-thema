<?php get_header(); ?>

<div class="container">
  <div class="row">
    <main class="col-md-8">
    <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                 <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                 <div><p><?php the_excerpt() ?></p></div>
    <?php endwhile; else: ?>
          <p>geen bericht gevonden</p>
    <?php endif; ?>

  </main>

  <aside class="col-md-4 bg-light">
    <h3>Terzijde</h3>
  </aside>
</div>
</div>
    <?php get_footer(); ?>
