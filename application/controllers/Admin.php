<?php

class Admin extends CI_Controller {

    var $data = array();

    function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('role_model');
        $this->load->model('template_model');
        $this->load->model('sentence_model');
        $this->load->model('word_model');
    }

    public function index()
    {
        // 检查是否登录
        $user_data = $this->user_model->is_logged_in();
        if ($user_data !== false) {
            if ($user_data['user']['role_id'] == 2) { // 内容审核员
                Header("Location: " . site_url('admin/audit'));
            }
            else {                       // 管理员
//                Header("Location: " . site_url('admin/index'));
                $this->load->view('admin/index');
            }
        }
        else {
            redirect('admin/login');
        }
    }

    public function login() {
        $this->load->view('admin/login');
    }

    public function dologin()
    {
        if($this->check_loginform() == FALSE) {
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
                        redirect('admin');
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

    public function audit()
    {
        // 1.读取未审核内容的详细信息
        // 2.读取第一条待审核的模板

        $data['template'] = json_encode($this->template_model->get_template(0));
//        var_dump($data['template']);exit;
        $data['sentence'] = json_encode($this->sentence_model->get_sentence(0));
        $data['word']     = json_encode($this->word_model->get_word(0));

        $this->load->view('admin/audit', $data);
    }

    function doaudit_template()
    {
        $pass = $this->input->post('pass');
        $id = $this->input->post('id');
        $topic = $this->input->post('topic');
        $content = $this->input->post('content');

        // 检查该条记录是否已经审核
        $is_checked = $this->template_model->is_template_checked($id);
        if( !$is_checked ) {
            // 考虑审核员修改过内容的情况
            $this->template_model->check_template($id, $topic, $content, $pass);
            $this->response_data("审核完成");
        }
        else {
            $this->response_data("该模板已经审核过，此次审核无效。");
        }
    }

    function doaudit_sentence()
    {
        $pass = $this->input->post('pass');
        $id1 = $this->input->post('id1'); // 英文句子的id
        $id2 = $this->input->post('id2'); // 中文句子的id
        $english = $this->input->post('english');
        $chinese = $this->input->post('chinese');

        // 检查这两条记录是否已经审核
        $is_checked1 = $this->sentence_model->is_sentence_checked($id1);
        $is_checked2 = $this->sentence_model->is_sentence_checked($id2);

        if($is_checked1 && $is_checked2) {
            $this->response_data("该句子已经审核过，此次审核无效。");
        }elseif(!$is_checked1 && !$is_checked2) {
            $this->sentence_model->check_sentence($id1, $english, $pass);
            $this->sentence_model->check_sentence($id2, $chinese, $pass);
            $this->response_data("审核完成");
        }else {
            $this->response_data("系统出错");
        }
    }

    function doaudit_word()
    {
        $pass = $this->input->post('pass');
        $id1 = $this->input->post('id1'); // 英文句子的id
        $id2 = $this->input->post('id2'); // 中文句子的id
        $word1 = $this->input->post('word1');
        $word2 = $this->input->post('word2');

        // 检查这两条记录是否已经审核
        $is_checked1 = $this->word_model->is_word_checked($id1);
        $is_checked2 = $this->word_model->is_word_checked($id2);

        if($is_checked1 && $is_checked2) {
            $this->response_data("该单词已经审核过，此次审核无效。");
        }elseif(!$is_checked1 && !$is_checked2) {
            $this->word_model->check_word($id1, $word1, $pass);
            $this->word_model->check_word($id2, $word2, $pass);
            $this->response_data("审核完成");
        }else {
            $this->response_data("系统出错");
        }
    }

    function response_data($data){
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

}
