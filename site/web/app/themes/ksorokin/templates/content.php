<article <?php post_class('col-xs-12'); ?>>
<div class="row">
<div class="col-xs-8">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</div>
<div class="col-xs-4">
  <a href="<?php the_permalink(); ?>">
    <img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>">
  </a>
</div>
</div>
</article>
