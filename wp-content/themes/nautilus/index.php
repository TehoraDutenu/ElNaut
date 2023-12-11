<?php get_header() ?>

<main>
    <div class="img-container">
        <img src="<?php echo get_template_directory_uri() . '/images/imageSpace.jpg' ?>" class="index-img img-fluid" alt="Espaces du Nautilus">
        <a href="#" type="button" class="votre-bouton">Plongez dans l'univers du Nautilus</a>
    </div>

    <div class="agenda">
        <iframe style="width:100%;" frameborder="0" scrolling="yes" allowtransparency="allowtransparency" class="cibulFrame cbpgbdy" data-oabdy src="//openagenda.com/agendas/21429945/embeds/4880713/events?lang=fr" data-lang="fr"></iframe>
        <script type="text/javascript" src="//openagenda.com/js/embed/cibulBodyWidget.js"></script>
    </div>

    <div class="form-container">
        <div class="formulaire-infos">
            <p>Nous avons tant à faire ensemble</p>
            <h4>Gardons le contact !</h4>
        </div>
        <div class="formulaire">
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                <input type="text" placeholder="Prénom">
                <input type="text" placeholder="Nom">
                <input type="email" placeholder="Email">
                <input type="submit" value="S'inscrire" class="bouton-inscription">
            </form>
        </div>
    </div>
</main>

<?php get_footer() ?>