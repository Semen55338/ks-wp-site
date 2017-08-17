<?php while (have_posts()) : the_post(); ?>


<a class="home-banner" href="<?php the_permalink(); ?>">
  <img src="<?php the_post_thumbnail_url(); ?>">
</a>


<?php endwhile; ?>
