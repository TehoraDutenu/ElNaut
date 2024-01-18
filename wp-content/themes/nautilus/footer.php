<footer class="footer">
    <div class="address">
        <h5>Le Nautilus</h5>
        <address>10 rue Jules Verne<br>66000 Perpignan</address>
    </div>
    <?php
    wp_nav_menu(array(
        'theme_location'    => 'menu-footer',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'footer-menu-container',
        'menu_class'        => 'menu-footer',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new Simple_menu(),
    ));
    ?>
    <div class="copyright">
        <p class="text-copyright">&copy; 2023 Nautilus. Tous droits réservés.</p>
    </div>
</footer>

</body>

</html>