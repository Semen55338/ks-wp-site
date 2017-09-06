<article <?php post_class('col-sm-12 grid-item'); ?>>
  <a href="<?php the_permalink(); ?>" class="card card-inverse">
    <?php the_post_thumbnail('thumbnail', array('class' => 'card-img')); ?>
    <div class="card-img-overlay">
      <p class="card-text"><?php echo count( get_field('work-gallery') ); ?> Images</p>
      <h5 class="card-title text-xs-center"><?php the_title(); ?></h5>
    </div>
  </a>
</article>
