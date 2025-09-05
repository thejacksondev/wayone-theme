<nav class="nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="nav__brand">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">wayone</a>
                </div>
            </div>
            <div class="nav__content">
                <button class="nav__toggle" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="nav__toggle-icon"></span>
                </button>
                <div class="nav__menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'depth'           => 2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'primary-menu',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker()
                    ));
                    ?>
                    <button class="nav__cta">Create Now</button>
                </div>
            </div>
        </div>
    </div>
</nav>