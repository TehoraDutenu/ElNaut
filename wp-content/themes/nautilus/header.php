<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato&display=swap" rel="stylesheet">
    <!-- Style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>">
    <!-- Script Fontawesome -->
    <script src="https://kit.fontawesome.com/54fffc0b5a.js" crossorigin="anonymous"></script>
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <title>Le Nautilus</title>
</head>

<body>
    <header>
        <div class="header d-flex flex-row">
            <!-- Logo et titre -->
            <a href="<?php echo get_bloginfo('wpurl') ?>">
                <img class="img-fluid" id="logo" src="<?php echo get_template_directory_uri() . "/images/logoShadow2.png"; ?>" alt="logo">
            </a>
            <div class="d-flex flex-column custom_header">
                <!-- Menu navigation -->
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <div class="toggle-nav container-fluid justify-content-end mt-4">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                            <i class="fa-solid fa-bars" style="color: #f3dcb0;"></i>
                        </button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu-sup',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new Simple_menu(),
                        ));
                        ?>
                    </div>
                </nav>

                <a class="title" href="<?php echo get_bloginfo('wpurl') ?>">
                    <h3> <?php echo get_bloginfo('name') ?> </h3>
                    <em> <?php echo get_bloginfo('description') ?></em>
                </a>
            </div>
            <?php
            // wp_nav_menu(array(
            //    "theme_location" => "menu-sup",
            //    "menu_class" => "custom-menu",
            //    "container" => false,
            //    "walker" => new Simple_menu()
            //)) 
            ?>
        </div>
    </header>