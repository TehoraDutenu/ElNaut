<?php
/*
Plugin Name: Elnaut Plugin
Description: Plugin du Nautilus
Author: Kalkom
Version: 1.0
*/

require_once plugin_dir_path(__FILE__) . 'service/Elnaut_Database.php';
require_once plugin_dir_path(__FILE__) . 'Friends_List.php';


class ElNaut
{
    public function __construct()
    {
        register_activation_hook(__FILE__, array('Elnaut_Database', 'create_db'));

        add_action('admin_menu', array($this, 'add_menu_amis'));
    }

    public function add_menu_amis()
    {
        add_menu_page(
            'Les amis du Nautilus',
            'Nautilus Friends',
            'manage_options',
            'friends',
            array($this, 'nosAmis'),
            'dashicons-groups',
            40
        );

        add_submenu_page(
            'friends',
            'Ajouter des amis',
            'Ajouter',
            'manage_options',
            'ajouter-amis',
            array($this, 'nosAmis')
        );
    }

    public function nosAmis()
    {
        $db = new Elnaut_Database();

        echo "<h2>" . get_admin_page_title() . "</h2>";

        if ($_GET['page'] == 'friends' || $_POST['send'] == 'ok' || $_POST['action'] == 'delete-friend') {

            if (isset($_POST['send']) && $_POST['send'] == 'ok') {
                $db->save_friend();
            }

            if (isset($_POST['action']) && $_POST['action'] == 'delete-friend') {
                $db->delete_friend($_POST['delete-friend']);
            }

            $table = new Friends_list();
            $table->prepare_items();

            echo "<form method='post'>";
            $table->display();
            echo "</form>";
        } else {
            echo "<form action='" . esc_url(admin_url('admin-post.php')) . "' method='post'>";
            echo "<input type='hidden' name='action' value='save-friend'>";
            echo "<div>" .
                "<label for='prenom'>Prénom</label>" .
                "<input type='text' name='prenom' id='prenom' class='widefat' required>" .
                "</div>";

            echo "<div>" .
                "<label for='nom'>Nom</label>" .
                "<input type='text' name='nom' id='nom' class='widefat' required>" .
                "</div>";

            echo "<div>" .
                "<label for='email'>Email</label>" .
                "<input type='email' name='email' id='email' class='widefat' required>" .
                "</div>";

            echo "<div>" .
                "<label for='telephone'>Téléphone</label>" .
                "<input type='text' name='telephone' id='telephone' class='widefat' required>" .
                "</div>";

            echo "<div>" .
                "<input type='submit' name='send' value='Ajouter' class='button button-primary'>" .
                "</div>";
        }
    }
}
new ElNaut();
