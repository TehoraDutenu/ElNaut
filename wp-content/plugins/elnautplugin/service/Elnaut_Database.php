<?php

class Elnaut_Database
{
    public function __construct()
    {
    }

    public static function create_db()
    {
        global $wpdb;

        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}elnaut_friends (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            prenom VARCHAR(255) NOT NULL,
            nom VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
        )");

        $count = $wpdb->get_var("SELECT COUNT (*) FROM {$wpdb->prefix}elnaut_friends");

        if ($count == 0) {
            $wpdb->insert("{$wpdb->prefix}elnaut_friends", array(
                'prenom' => 'Tehora',
                'nom' => 'Dutenu',
                'email' => 'tehoradutenu@gmail.com',
            ));
        }
    }

    public function findAll()
    {
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}elnaut_friends");
        return $result;
    }

    public function save_friend()
    {
        global $wpdb;

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['telephone'])) {

            $data = array(
                'prenom' => sanitize_text_field($_POST['prenom']),
                'nom' => sanitize_text_field($_POST['nom']),
                'email' => sanitize_email($_POST['email']),
            );
            $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}elnaut_friends WHERE email = %s", $data['email']));
            $wpdb->insert("{$wpdb->prefix}elnaut_friends", $data);
        } else {
            echo "Vous êtes déjà inscrit";
        }
    }


    public function delete_friend($ids)
    {
        global $wpdb;
        if (!is_array($ids)) {
            $ids = array($ids);
        }

        $wpdb->query('DELETE FROM {$wpdb->prefix}elnaut_friends WHERE id IN (' . implode(",", $ids) . ')');
    }
}
