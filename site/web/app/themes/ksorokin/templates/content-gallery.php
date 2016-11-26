<article <?php post_class('col-xs-12'); ?>>
<div class="card card-inverse">
  <img class="card-img img-fluid" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
  <div class="card-img-overlay">
    <h2 class="card-title"><?php the_title(); ?></h2>
    <p class="card-text"><?php the_field('post-gallery-description'); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Смотреть</a>
  </div>
</div>
</article>
