<?php

// - Étendre la classe
if (!class_exists("WP_List_Table")) {
    require_once(ABSPATH . "wp-admin/includes/class-wp-list-table.php");
}

class Friends_list extends WP_List_Table
{
    private $dal;

    public function __construct()
    {
        parent::__construct(array(
            'singular' => __('friend'),
            'plural' => __('friends')
        ));

        $this->dal = new Elnaut_Database();
    }

    public function prepare_items()
    {
        $columns = $this->get_columns();
        $sortable = $this->get_sortable_columns();

        $perPage = $this->get_items_per_page('friends_per_page', 20);
        $currentPage = $this->get_pagenum();

        $data = $this->dal->findAll();
        $total_page = count($data);

        usort($data, array(&$this, 'usort_reorder'));

        $paginationData = array_slice($data, (($currentPage - 1) * $perPage), $perPage);

        $this->set_pagination_args(array(
            'total_items' => $total_page,
            'per_page' => $perPage
        ));

        $this->_column_headers = array($columns, $sortable);
        $this->items = $paginationData;
    }

    public function get_columns()
    {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'id' => 'id',
            'prenom' => 'Prénom',
            'nom' => 'Nom',
            'email' => 'Email'
        );

        return $columns;
    }

    public function usort_reorder($a, $b)
    {
        $orderBy = (!empty($_GET['orderby'])) ? $_GET['orderby'] : 'id';
        $order = (!empty($_GET['order'])) ? $_GET['order'] : 'desc';
        $result = strcmp($a->$orderBy, $b->$orderBy);
        return ($order == 'asc') ? $result : -$result;
    }

    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'id':
            case 'prenom':
            case 'nom':
            case 'email':
                return $item->$column_name;
                break;
            default:
                return print_r($item, true);
        }
    }

    public function get_sortable_columns()
    {
        $sortable = array(
            'id' => array('id', true),
            'prenom' => array('prenom', true),
            'nom' => array('nom', true),
            'email' => array('email', true),
        );
        return $sortable;
    }

    public function column_cb($item)
    {
        $item = (array) $item;

        return sprintf(
            '<input type="checkbox" name="delete-friend[]" value="%s" />',
            $item["id"]
        );
    }

    public function get_bulk_actions()
    {
        $actions = array(
            'delete-friend' => __('Delete')
        );
        return $actions;
    }
}
