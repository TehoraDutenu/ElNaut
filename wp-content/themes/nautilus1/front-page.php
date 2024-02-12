<?php
/*
 * Template Name: Accueil
 */

?>

<?php get_header() ?>
<main>
    <div class="main-container">
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'menu-brut',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new Simple_menu(),
        ));
        ?>
    </div>
</main>

<?php get_footer() ?>