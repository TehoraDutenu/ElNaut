<?php
/*
 * Template Name: Events
 */
?>

<?php get_header() ?>

<main class="events-main">
    <div class="events-container">
        <iframe style="width:100%;" frameborder="0" scrolling="yes" allowtransparency="allowtransparency" class="cibulFrame cbpgbdy" data-oabdy src="//openagenda.com/agendas/64371698/embeds/19969799/events?lang=fr" data-lang="fr"></iframe>
        <script type="text/javascript" src="//openagenda.com/js/embed/cibulBodyWidget.js"></script>
    </div>
    <div class="events-links-container">
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'menu-brut',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse events-nav',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav events-links',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new Simple_menu(),
        ));
        ?>
    </div>
</main>

<?php get_footer() ?>