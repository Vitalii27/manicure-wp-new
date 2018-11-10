<nav id="side-menu" class="swipe-menu shadow-text--super-light">
    <?php
    $args = array(
        'theme_location' => 'menu-1',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'menu_class' => 'swipe-menu__list',

        'walker' => '',
        'container' => 'ul',

    );
    wp_nav_menu($args);

    ?>
    <!-- swipe-menu -->

</nav>
<!-- swipe-menu -->