<header class="pos-f-t">
  <nav class="navbar navbar-light navbar-static-top bg-navbar">
     <div class="container">
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-expanded="false" aria-controls="exCollapsingNavbar" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar">
            <?php if (has_nav_menu('primary_navigation')) :
                wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'walker' => new wp_bootstrap_navwalker(),
                    'menu_class' => 'float-md-right nav navbar-nav'
                 ]);
            endif; ?>
        </div>
     </div>
  </nav>
</header>
