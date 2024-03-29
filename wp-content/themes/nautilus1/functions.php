<?php

// -- Navigation
// - Enregistrer Navwalker
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

// - Enregistrer
function register_menu()
{
    register_nav_menu(
        'menu-brut',
        __('Brut menu')
    );
}
// - Initialiser
add_action('init', 'register_menu');

// - Designer
class Simple_menu extends Walker_Nav_Menu
{
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $title = $data_object->title;
        $permalink = $data_object->url;

        $output .= "<div class='nav-item'>";
        $output .= "<a class='nav-link custom_a' href='$permalink'>$title</a>";
    }
    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        $output .= "</div>";
    }
}
