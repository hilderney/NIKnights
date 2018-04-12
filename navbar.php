<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

  <div class="container">

  <div class="brand-holder">
    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>">
      <img id="site-brand" src="<?php echo get_site_url(null, '/wp-content/themes/niknights/', 'http'); ?>assets/brand/NI_ICON.png" class="header-logo" alt="">
    </a>
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="navbar-brand-name" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo('name'); ?>">
          <?php echo bloginfo('name'); ?>
        </a>
      </li>

      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-podcast" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-podcast nav-item">
        <a class="nav-link" href="<?= bloginfo( 'url' ).'/podcast' ?>" title="Podcast"> Podcast </a>
      </li>

      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-blog" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-blog nav-item">
        <a class="nav-link" href="<?= bloginfo( 'url' ).'/blog' ?>" title="Blog"> Blog </a>
      </li>
      <?php
      wp_nav_menu( array(
        'theme_location'  => 'header-menu',
        'depth'       => 0, // 1 = with dropdowns, 0 = no dropdowns.
        'container'     => '',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbar-collapse-main-menu',
        'menu_class'    => 'navbar-nav',
        'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
        'walker'      => new WP_Bootstrap_Navwalker()
        ) );
      ?>
    </ul>

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar
      </button>
    </form> -->

  </div>

  </div>
</nav>