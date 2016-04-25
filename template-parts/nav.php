<nav id="nav-main" class="navbar navbar-fixed-top navbar-full" role="navigation">
        <div class="container">
            <a class="navbar-brand pull-left" type="button" rel="scrollId" href="#strona-domowa"></a>
            <div class="navbar-toggleable-xs" id="nav-main-li-group">
                <?php
                wp_nav_menu( array(
                               'menu'              => 'primary',
                               'theme_location'    => 'primary',
                               'depth'             => 2,
                               'container'         => 'div',
                               'container_class'   => 'navbar-toggleable-xs',
                               'container_id'      => 'nav-main-li-group',
                               'menu_class'        => 'nav navbar-nav pull-xs-right',
                               'menu_id'           => 'top-menu',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                ?>
                </div>
        </div>
</nav>
