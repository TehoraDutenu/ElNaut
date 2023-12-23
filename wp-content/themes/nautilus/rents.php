<?php
/*
 * Template Name: Page de Contact
 */
?>

<?php get_header() ?>

<main>
    <header class="rents-page">
        <h3>Embarquez à bord</h3>
        <em>Tous les formats pour tous les besoins</em>
    </header>
    <div>
        <div>
            <?php get_template_part('espaces', 'rents'); ?>
        </div>
    </div>
</main>

<?php get_footer() ?>

<!-- if($envoi) header("location:ma_page_html.html"); -->