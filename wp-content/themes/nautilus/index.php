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
            <form action="<?php echo esc_url(plugin_dir_url(__FILE__) . 'service/Elnaut_Database.php'); ?>" method="post">
                <input type="hidden" name="action" value="save-friend">
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="nom" placeholder="Nom">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="telephone" placeholder="Téléphone">
                <input type="submit" name="action" value="S'inscrire" class="bouton-inscription">
            </form>
        </div>
    </div>
</main>

<?php get_footer() ?>

<?php
// Bloc de logique de traitement pour le formulaire public
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'save-friend') {
    $db = new Elnaut_Database();
    $db->save_friend();
} else {
    echo "Formulaire non soumis correctement";
}
?>