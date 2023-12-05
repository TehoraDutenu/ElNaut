<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!-- Style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>">

    <title>Le Nautilus</title>
</head>

<body>
    <div class="main-container">
        <header>
            <div class="header d-flex flex-row">
                <!-- Logo et titre -->
                <a href="<?php echo get_bloginfo('wpurl') ?>">
                    <img id="logo" src="<?php echo get_template_directory_uri() . "/images/logo6.png"; ?>" alt="logo">
                </a>
                <a class="title" href="<?php echo get_bloginfo('wpurl') ?>">
                    <h3> <?php echo get_bloginfo('name') ?> </h3>
                    <em> <?php echo get_bloginfo('description') ?></em>
                </a>
                <!-- Menu navigation -->
                <?php
                wp_nav_menu(array(
                    "theme_location" => "menu-sup",
                    "menu_class" => "custom-menu",
                    "container" => false,
                    "walker" => new Simple_menu()
                )) ?>
            </div>
        </header>