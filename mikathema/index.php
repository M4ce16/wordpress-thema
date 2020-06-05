
<!DOCTYPE html>
<html <?php language_attributes()?> dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
  </head>
  <body>
    <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                 <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                 <div><p><?php the_excerpt() ?></p></div>
    <?php endwhile; else: ?>
          <p>geen bericht gevonden</p>
    <?php endif; ?>
  </body>
</html>
