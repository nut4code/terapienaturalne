<nav id="nav-main-2" class="navbar navbar-fixed-top navbar-full" role="navigation">

        <div id="nav-main-2-top-header" class="collapse">
            <div class="container">
                <span><small class="text-success">
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span>+48 500 530 655
                </small>
                <a href="mailto:gm@terapienaturalne.info.pl">
                    <small class="text-success">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                    gm@terapienaturalne.info.pl
                    </small>
                </a>
                </span>
            </div>
        </div>

        <div class="container">
            <a class="navbar-brand pull-left navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-main-2-top-header" href="#"></a>
            <div class="navbar-toggleable-xs" id="nav-main-2-li-group">
                <?php
                wp_nav_menu( array(
                               'menu'              => 'secondary',
                               'theme_location'    => 'secondary',
                               'depth'             => 2,
                               'container'         => 'div',
                               'container_class'   => 'navbar-toggleable-xs',
                               'container_id'      => 'nav-main-2-li-group',
                               'menu_class'        => 'nav navbar-nav pull-xs-right',
                               'menu_id'           => 'top-menu',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                ?>
                </div>
        </div>
</nav>
