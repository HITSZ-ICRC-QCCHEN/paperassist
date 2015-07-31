<?php

class M_role extends CI_Model {

    var $table = 'role';

    function __construct()
    {
        parent::__construct();
    }

    function get_role($name = '')
    {
        $query = $this->db->get_where($this->table, array('name'=> $name));
        return $query->row_array();
    }

    function check_role( $role_name, $role_id )
    {
        $role = $this->get_role($role_name);
        return ($role['id'] == $role_id);
    }
}