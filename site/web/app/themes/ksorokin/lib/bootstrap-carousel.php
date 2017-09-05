<?php
// Bootstrap 4 carousel slideshow
if ( ! function_exists( 'bootstrap_carousel' ) ) {
  function bootstrap_carousel() {
    if( have_rows('bootstrap-carousel') ): ?>
       <div class="container">
          <div id="FrontPageSlider" class="carousel slide" data-ride="carousel">
             <!-- Indicators -->
                <ol class="carousel-indicators">
                <?php $i=0; while( have_rows('bootstrap-carousel') ): the_row(); ?>
                  <li data-target="#FrontPageSlider" data-slide-to="<?php echo $i++ ?>" class="<?php if ($i==1) echo 'active'?>"></li>
                <?php endwhile; ?>
                </ol>
                <div class="carousel-caption d-none d-md-block">
                   <?php if( get_field('carousel-header') ): ?>
                   <h1><?php the_field('carousel-header')?></h1>
                   <?php endif; ?>
                   <?php if( get_field('carousel-content') ): ?>
                   <p><?php the_field('carousel-content')?></p>
                   <?php endif; ?>
                   <p><a class="btn btn-lg btn-primary" href="/work" role="button">Learn more</a></p>
                </div>
                <div class="carousel-inner h-100" role="listbox">
                <?php $i=1; while( have_rows('bootstrap-carousel') ): the_row(); $o = $i++;
                $slide = get_sub_field('bootstrap-carousel-slide'); ?>
                  <div class="carousel-item <?php if ($o==1) echo 'active'?> h-100">
                     <img class="img-fluid" src="<?php echo $slide['url']; ?>" alt="<?php echo $slide['alt']; ?>">
                  </div>
                <?php endwhile; ?>
                </div>
                <?php if($i!==2): ?>
                <a class="left carousel-control" href="#FrontPageSlider" role="button" data-slide="prev">
                   <span class="icon-prev" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#FrontPageSlider" role="button" data-slide="next">
                   <span class="icon-next" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                </a>
                <?php endif; ?>
             </div>
           </div>
    <?php endif;
    }
}
