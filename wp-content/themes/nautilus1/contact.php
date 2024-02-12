<?php
/*
    Template Name: Contact
*/

get_header(); ?>

<body class="contact-body">
    <div class="contact-main-container">
        <h2 class="contact-title">Que peut-on faire pour vous ?</h2>

        <?php echo apply_shortcodes('[contact-form-7 id="b788748" title="Le Nautilus"]'); ?>
    </div>
</body>

<?php get_footer() ?>