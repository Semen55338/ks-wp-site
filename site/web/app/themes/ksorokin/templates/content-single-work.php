<?php breadcrumbs(); ?>

<article <?php post_class(); ?>>
  <header style="display:none;">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div id="grid" class="entry-summary row">
    <?php
    $photos = get_field('work-gallery');
    if( $photos ): ?>
       <?php foreach( $photos as $photo ): ?>
           <div class="grid-item col-sm-12">
             <?php echo wp_get_attachment_link( $photo['id'], 'thumbnail' ); ?>
           </div>
       <?php endforeach; ?>
    <?php endif; ?>
  </div>
</article>
