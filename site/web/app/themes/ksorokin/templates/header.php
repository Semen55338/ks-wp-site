<header class="banner pos-f-t">
  <nav class="navbar navbar-light navbar-static-top">
     <div class="container">
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           &#9776;
          </button>
        <div class="collapse navbar-toggleable-sm" id="navbarCollapse">
        <?php
         if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'pull-md-right nav navbar-nav']);
         endif;
        ?>
        </div>
     </div>
  </nav>
</header>
