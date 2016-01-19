<?php

define('AUDITOR_ID', 2);
define('ADMIN_ID', 3);

class Login extends CI_Controller
{
    var $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('role_model');
    }

    /**
     * 后台登陆
     */
    public function index()
    {
        // 检查是否登录
        $user_data = $this->user_model->is_logged_in();
        if ($user_data !== false) {
            if ($user_data['user']['role_id'] == AUDITOR_ID) { // 内容审核员
                Header("Location: " . site_url('admin/audit'));
            }
            else {                       // 管理员
                Header("Location: " . site_url('admin/index'));
//                $this->load->view('admin/index');
            }
        }
        else {
            $this->load->view('admin/login');
        }
    }

    public function dologin()
    {
        if($this->check_loginform() === false) {
            $this->login();
        }
        else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $rolename = $this->input->post('rolename');

            if ($user = $this->user_model->get_by_username($username)) {
                if ($this->role_model->check_role($rolename, $user['role_id'])) {
                    if ($this->user_model->check_password($password, $user['password'])) {
                        $this->user_model->save_user_session($user);
                        if(!strcmp($rolename, "内容审核员")) redirect('admin/audit');
                        else redirect('admin/index');
                    } else {
                        $this->data['login_error'] = '用户名或者密码不正确';
                    }
                } else {
                    $this->data['login_error'] = '角色不符合';
                }
            } else {
                $this->data['login_error'] = '用户名没找到';
            }
            $this->load->view('admin/login', $this->data);
        }
    }

    public function check_loginform()
    {
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required');
//        $this->form_validation->set_rules('rolename', "角色名", 'required');

        return $this->form_validation->run();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        if (empty($this->user)) {
            redirect('admin/login');
        } else {
            echo '注销失败!';
        }
    }

}