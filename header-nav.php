<header class="header-main">
    <div class="logo-block">
        <h2>
            rod
        </h2>
    </div>
    <nav class="nav-main" role="navigation">
        <span>menu <i class="fab fa-accessible-icon"></i></span>
        <!-- <ul>
            <li><a href="#" title="meaningful">work</a></li>
            <li><a href="#" title="meaningful">blog</a></li>
            <li><a href="#" title="meaningful">about</a></li>
            <li><a href="#" title="meaningful">contact</a></li>
        </ul> -->
        <?php
        $args = array(
            'container' => 'false',
            // 'menu_class' => 'hide-on-mobile',
            'li' => 'not-active',
        );
        wp_nav_menu($args);
        ?>
    </nav>
</header>
