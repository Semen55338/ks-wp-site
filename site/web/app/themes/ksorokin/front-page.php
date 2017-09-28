<?php
$query = new WP_Query( array( 'post_type' => 'work', 'posts_per_page' => 15, '_shuffle_and_pick' => 1 ) );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); ?>
       <a class="home-banner" href="/work">
          <img src="<?php the_post_thumbnail_url('large'); ?>">
       </a>      
    <?php endwhile; wp_reset_postdata();
endif; ?>