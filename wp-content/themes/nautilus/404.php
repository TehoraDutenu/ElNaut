<?php
/*
    Template Name: 404
*/

get_header();
?>




<body class="oups-body">
    <main class="oups-main">

        <div class="oups-main-container">

            <img class="oups-img" class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/404.png"; ?>" alt="Page introuvable">

            <h2 class="oups-title">Oups ! <br> Il semblerait que la page que vous cherchez <br> soit introuvable </h2>

            <a class="oups-link" href="http://<?php echo get_bloginfo('wpurl') ?>">Revenons en lieu sûr</a>
        </div>
    </main>

</body>

</html>

<?php get_footer() ?>