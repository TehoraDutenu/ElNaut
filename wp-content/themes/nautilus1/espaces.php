<?php
/*
 * Template Name: Espaces
 */
?>

<?php get_header() ?>

<main class="espaces-main">
    <div class="espaces-container">
        <?php
        echo apply_shortcodes('[smartslider3 slider="4"]');
        ?>
    </div>
    <div class="espaces-links-container">
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'menu-brut',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse espaces-nav',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav espaces-links',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new Simple_menu(),
        ));
        ?>

</main>

<?php get_footer() ?>