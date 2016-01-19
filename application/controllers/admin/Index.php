<?php

class Index extends MY_Controller
{
    public $systeminfo;

    public function __construct()
    {
        parent::__construct();
        $this->systeminfo();
    }

    public function index()
    {
        $data['systeminfo'] = $this->systeminfo;

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/include/footer', $data);
    }

    public function userlist()
    {
        $this->load->model('user_model');
        $this->load->model('role_model');
        $data['users'] = $this->user_model->get_all_user();
        $data['roles'] = $this->role_model->get_all_role();

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar', $data);
        $this->load->view('admin/user/userlist', $data);
        $this->load->view('admin/include/footer', $data);
    }

    public function rolelist()
    {
        $this->load->model('role_model');
        $data['roles'] = $this->role_model->get_all_role();

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/include/sidebar', $data);
        $this->load->view('admin/user/rolelist', $data);
        $this->load->view('admin/include/footer', $data);
    }

    /**
     * 获取系统参数
     */
    public function systeminfo()
    {
        $this->load->library('systeminfo');
        $this->systeminfo = array(
            'system_os' => $this->systeminfo->getOS(),
            'environment' => $this->systeminfo->server_software(),
            'phpapi' => $this->systeminfo->php_handler(),
            'mysqlver' => $this->systeminfo->mysql_version(),
            'browser' => $this->systeminfo->getBrowser(),
            'filelimit' => $this->systeminfo->post_max_size(),
            'execlimit' => $this->systeminfo->max_exec_time(),
        );
    }
}