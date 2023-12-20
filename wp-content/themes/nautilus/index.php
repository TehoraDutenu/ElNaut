<?php
session_start(); // Démarrez la session

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'save-friend') {
    $db = new Elnaut_Database();
    $db->save_friend();
    header("Location:" . get_home_url($blog_id = null, $path = '/', $scheme = null));
    exit;
}
?>
<?php get_header() ?>

<main>
    <div class="main-container">

        <div class="img-container">
            <img src="<?php echo get_template_directory_uri() . '/images/imageSpace.jpg' ?>" class="index-img img-fluid" alt="Espaces du Nautilus">
        </div>

        <div class="agenda-container">
            <iframe style="width:100%;" frameborder="0" scrolling="yes" allowtransparency="allowtransparency" class="cibulFrame cbpgbdy" data-oabdy src="//openagenda.com/agendas/21429945/embeds/4880713/events?lang=fr" data-lang="fr"></iframe>
            <script type="text/javascript" src="//openagenda.com/js/embed/cibulBodyWidget.js"></script>
        </div>

        <div class="form-container">
            <div class="formulaire-infos">
                <p>Nous avons tant à faire ensemble</p>
                <h4>Gardons le contact !</h4>
            </div>
            <div class="formulaire">
                <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
                    <input type="hidden" name="action" id="action" value="save-friend">
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom">
                    <input type="text" name="nom" id="nom" placeholder="Nom">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="text" name="telephone" id="telephone" placeholder="Téléphone">
                    <input type="submit" name="send" value="S'inscrire" class="bouton-inscription">
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>

<!-- if($envoi) header("location:ma_page_html.html"); -->