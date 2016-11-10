<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="photo-wrap col-sm-12">
      <?php 
      $photo = wp_get_attachment_image_src( get_the_ID(), 'large' );
      echo "<img src=$photo[0] class='thumbnail'>";
      ?>
    </div>
  </article>
  <nav class="photo-nav">
    <ul class="pager">
      <li><?php previous_image_link( false, 'Previous Image' ); ?></li>
      <li><?php next_image_link( false, 'Next Image' ); ?></li>
    </ul>
  </nav>
<?php endwhile; ?>


