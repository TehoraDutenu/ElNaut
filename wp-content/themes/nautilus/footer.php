<footer class="footer">
    <div class="address">
        <h5>Le Nautilus</h5>
<<<<<<< HEAD
        <address>20 rue Jules Verne<br>66000 Perpignan</address>
=======
        <address>10 rue Jules Verne<br>66000 Perpignan</address>
>>>>>>> f717446ab3f31d195967f9f6943a7f1dbcdc54d9
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