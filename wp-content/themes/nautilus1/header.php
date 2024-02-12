<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Press+Start+2P&family=Special+Elite&family=Workbench&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/frontpage.css"; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/events.css"; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/styles/espaces.css"; ?>">
    <title>Naut</title>
</head>

<body>
    <?php
    session_start(); // Démarrez la session

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'save-friend') {
        $db = new Elnaut_Database();
        $db->save_friend();
        header("Location:" . get_home_url($blog_id = null, $path = '/', $scheme = null));
        exit;
    }
    ?>

    <header>
        <div class="header">
            <a href="<?php echo get_bloginfo('wpurl') ?>">
                <img class="logo" src="<?php echo get_template_directory_uri() . "/images/logo.png"; ?>" alt="logo">
            </a>
        </div>
    </header>