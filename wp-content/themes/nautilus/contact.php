<?php
/*
    Template Name: Contact
*/

get_header(); ?>

<div class="contact-main-container" style="width: 90%; margin: 0 auto; align-items: center; display: flex; flex-direction: column">
    <h2 class="contact-title" style="font-family: 'Abril Fatface', serif; color: #f3dcb0; margin: 10vw auto; text-shadow: 0 0 10px #000">Que pouvons nous faire pour vous ?</h2>

    <?php echo apply_shortcodes('[contact-form-7 id="ad7ad35" title="Sans titre"]'); ?>

</div>

<?php get_footer() ?>