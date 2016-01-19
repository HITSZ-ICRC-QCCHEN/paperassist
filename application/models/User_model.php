<?php

class User_model extends CI_Model {

    var $table = 'user';

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function get_all_user()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_by_username( $username )
    {
        $query = $this->db->get_where($this->table, array('user_name' => $username), 1);
        if( $query->num_rows() > 0 ) return $query->row_array();
        return false;
    }

    // set login session
    function save_user_session( $user_data )
    {
        $this->session->set_userdata(
            array( 'last_activity' => time(), 'logged_in' => 'yes', 'user' => $user_data ) );
    }

    // Check if user is logged in and update session
    function is_logged_in()
    {
        $user_data = $this->session->userdata('user');
        if (empty($user_data)) {
            return false;
        } else {
            return array( 'last_activity' => time(), 'logged_in' => 'yes', 'user' => $user_data );
        }
    }

    // Generate hashed password
    function hash_password( $password )
    {
//        $salt = $this->generate_salt();
//        return $salt.'.'.md5( $salt.$password);
        return md5($password);
    }

    function check_password( $password, $hashed_password )
    {
//        list($salt, $hash) = explode('.', $hashed_password);
//        $hashed2 = $salt.'.'.md5( $salt.$password);
//        var_dump($hashed2);
//        return ($hashed_password == $hashed2);
        return (md5($password) == $hashed_password);
    }

    public function get_all_auditors()
    {
        $this->load->model('Role_model');
        $auditor_id = $this->role_model->get_role_id('内容审核员');
        $query = $this->db->get_where($this->table, array('role_id' => $auditor_id));
        return $query->row_array();
    }
    function user_select($user_name)
    {
        $this->db->where('user_name',$user_name);
        $this->db->or_where('email',$user_name);
        $this->db->select('*');
        $query = $this->db->get('user');
        return $query->result();
    }
    function user_insert($arr_user)
    {
        return $this->db->insert("user",$arr_user);
    }
    function  updatePasstime($id,$getpasstime)
    {
        $data = array(
            'getpasstime'=>$getpasstime
        );
        $this->db->where('id',$id);
        $this->db->update('user',$data);
        return $this->db->affected_rows();
    }
}