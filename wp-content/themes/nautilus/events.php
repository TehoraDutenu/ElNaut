<?php
/*
 * Template Name: Events
 */
?>

<body class="events-body">
    <?php get_header() ?>

    <main class="events-main">
        <div class="events-main-container">
            <div class="agenda">
                <iframe style="width:100%;" frameborder="0" scrolling="yes" allowtransparency="allowtransparency" class="cibulFrame cbpgbdy" data-oabdy src="//openagenda.com/agendas/21429945/embeds/4880713/events?lang=fr" data-lang="fr"></iframe>
                <script type="text/javascript" src="//openagenda.com/js/embed/cibulBodyWidget.js"></script>
            </div>
            <div class="calendar">
                <div class="cbpgcl cibulCalendar" data-oacl data-cbctl="21429945/4880713|fr" data-lang="fr"></div>
                <script type="text/javascript" src="//openagenda.com/js/embed/cibulCalendarWidget.js"></script>
            </div>
            <div class="map">
                <div class="cbpgmp cibulMap" data-oamp data-cbctl="21429945/4880713" data-lang="fr"></div>
                <script type="text/javascript" src="//openagenda.com/js/embed/cibulMapWidget.js"></script>
            </div>
            <div class="rents-linking">
                <h4>Vous avez un projet d'atelier ou d'événement ?</h4>
                <a href="#" type="button">Rejoignez-nous !</a>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>