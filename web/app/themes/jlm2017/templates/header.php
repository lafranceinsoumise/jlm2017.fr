<header class="banner">
  <nav class="nav-primary navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
          Menu <span class="caret"></span>
        </button>
        <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else { ?>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
              <?php bloginfo('name'); ?>
            </a> <?php
          }
        ?>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar-collapse">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'walker' => new wp_bootstrap_navwalker(),
            'menu_class' => 'nav navbar-nav navbar-right'
          ]);
        endif;
        ?>
      </div>
    </div>
  </nav>
</header>
