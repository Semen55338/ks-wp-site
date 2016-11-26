<?php breadcrumbs(); ?>

<article <?php post_class(); ?>>
  <div id="grid" class="entry-summary row">
    <?php
    $photos = get_field('post-gallery-photos');
    if( $photos ): ?>
       <?php foreach( $photos as $photo ): ?>
           <div class="grid-item col-sm-12">
             <?php echo wp_get_attachment_link( $photo['id'], 'thumbnail' ); ?>
           </div>
       <?php endforeach; ?>
    <?php endif; ?>
  </div>
</article>
