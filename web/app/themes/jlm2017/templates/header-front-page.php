<header class="home-header hidden-print banner">
  <div class="background" style="background-image: url('<?php header_image(); ?>');">
    <div class="container container-menu">
      <div class="row">
        <div class="logo">
          <img alt="<?php bloginfo('name'); ?>" src="">
        </div>
      </div>
      <div class="row row-menu">
        <div class="menu">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills nav-stacked']);
          endif;
          ?>
        </div>
        <div class="subheadline">
          <?php bloginfo('description') ?>
        </div>
      </div>
    </div>
  </div>
</header>
