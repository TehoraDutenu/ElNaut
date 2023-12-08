<?php get_header() ?>
<main>
    <div class="img-container">
        <img src="<?php echo get_template_directory_uri() . '/images/imageSpace.jpg' ?>" class="index-img img-fluid" alt="Espaces du Nautilus">
    </div>
    <div class="agenda">
        <iframe style="width:100%;" frameborder="0" scrolling="yes" allowtransparency="allowtransparency" class="cibulFrame cbpgbdy" data-oabdy src="//openagenda.com/agendas/21429945/embeds/4880713/events?lang=fr" data-lang="fr"></iframe>
        <script type="text/javascript" src="//openagenda.com/js/embed/cibulBodyWidget.js"></script>
    </div>
</main>
<?php get_footer() ?>