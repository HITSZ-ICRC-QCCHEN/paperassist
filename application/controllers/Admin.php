<?php

class Admin extends CI_Controller {

    var $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_role');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // 先判断是否有session
        $this->load->view('admin/v_admin_login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required');
//        $this->form_validation->set_rules('rolename', "角色名", 'required');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $rolename = $this->input->post('rolename');

            if ($user = $this->m_user->get_by_username($username)) {
                if ($this->m_role->check_role($rolename, $user['role_id'])) {
                    if ($this->m_user->check_password($password, $user['password'])) {
                        $this->m_user->allow_pass($user);
//                    redirect('admin');
                        redirect('admin/audit');
                    } else {
                        $this->data['login_error'] = 'Invalid username or password';
                    }
                } else {
                    $this->data['login_error'] = 'You are not that role';
                }
            } else {
                $this->data['login_error'] = 'Username not found';
            }
        } else {
            echo 'form_validation_error';
        }
        $this->load->view('admin/v_admin_login', $this->data);
    }

    public function audit()
    {
        $this->load->view('admin/v_audit');
    }

}