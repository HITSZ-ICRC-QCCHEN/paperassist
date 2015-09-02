<?php

class Role_model extends CI_Model {

    var $table = 'role';

    function __construct()
    {
        parent::__construct();
    }

    function get_all_role()
    {
        $query = $this->db->get($this->table);
        return $query->result();
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
