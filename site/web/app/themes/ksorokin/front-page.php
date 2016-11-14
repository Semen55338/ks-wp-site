<?php while (have_posts()) : the_post(); ?>

  <?php if( have_rows('front-page') ): ?>
      <div id="FrontPageSlider" class="carousel slide" data-ride="carousel" style="display: table; margin: auto;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php
          $i=0;
          while( have_rows('front-page') ): the_row(); ?>
          <li data-target="#FrontPageSlider" data-slide-to="<?php echo $i++ ?>" class="<?php if ($i==1) echo 'active'?>"></li>
          <?php endwhile; ?>
        </ol>
        <div class="carousel-inner h-100" role="listbox">
            <?php
            $i=1;
            while( have_rows('front-page') ): the_row();
            $o = $i++;
            $photo = get_sub_field('front-page-photo');
            ?>
          <div class="carousel-item <?php if ($o==1) echo 'active'?> h-100">
            <div class="container">
               <img class="img-fluid" src="<?php echo $photo['url']; ?>">
            </div>
         </div>
          <?php endwhile; ?>
        </div>
        <a class="left carousel-control" href="#FrontPageSlider" role="button" data-slide="prev">
           <span class="icon-prev" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#FrontPageSlider" role="button" data-slide="next">
           <span class="icon-next" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
        </a>
      </div>
  <?php endif; ?>

<?php endwhile; ?>
