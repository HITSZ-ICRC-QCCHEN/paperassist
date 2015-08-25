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
//        $data['username'] = $this->username;
        $data['systeminfo'] = $this->systeminfo;

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/index', $data);
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