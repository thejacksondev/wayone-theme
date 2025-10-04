<nav class="nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-sm-1">
                <div class="nav__brand">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">wayone</a>
                    </div>
                </div>
            </div>
            <div class=" col-xs-11">
                <div class="nav__container">
                    <button class="nav__toggle" type="button" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="nav__toggle-icon"></span>
                    </button>
                    <div class="nav__menu nav__menu--desktop" id="primary-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>

                        <button class="nav__cta">
                            <span>Create Now</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>