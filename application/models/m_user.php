<?php

class M_user extends CI_Model {

    var $table = 'user';

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function get_by_username( $username )
    {
        $query = $this->db->get_where($this->table, array('user_name' => $username), 1);
        if( $query->num_rows() > 0 ) return $query->row_array();
        return false;
    }

    // set login session
    function allow_pass( $user_data )
    {
        $this->session->set_userdata( array( 'last_activity' => time(), 'logged_in' => 'yes', 'user' => $user_data ) );
    }

    // Check if user is logged in and update session
    function is_logged_in()
    {
    }

    // Generate hashed password
    function hash_password( $password )
    {
        $salt = $this->generate_salt();
        return $salt.'.'.md5( $salt.$password);
    }

    function check_password( $password, $hashed_password )
    {
//        list($salt, $hash) = explode('.', $hashed_password);
//        $hashed2 = $salt.'.'.md5( $salt.$password);
//        var_dump($hashed2);
//        return ($hashed_password == $hashed2);
        return ($password == $hashed_password);
    }

    public function get_all_auditors()
    {
        $this->load->model('m_role');
        $auditor_id = $this->m_role->get_role_id('内容审核员');
        $query = $this->db->get_where($this->table, array('role_id' => $auditor_id));
        return $query->row_array();
    }
}