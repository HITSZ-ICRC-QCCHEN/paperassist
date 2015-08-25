<?php

class Audit extends MY_Controller
{
    var $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('template_model');
        $this->load->model('sentence_model');
        $this->load->model('word_model');
    }

    public function index()
    {
        // 1.读取未审核内容的详细信息
        // 2.读取第一条待审核的模板

        $data['template'] = json_encode($this->template_model->get_template(0));
//        var_dump($data['template']);exit;
        $data['sentence'] = json_encode($this->sentence_model->get_sentence(0));
        $data['word']     = json_encode($this->word_model->get_word(0));

        $this->load->view('admin/include/header', $data);
        $this->load->view('admin/audit', $data);
        $this->load->view('admin/include/footer', $data);
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

    function add_template()
    {
        $topic = $this->input->post('topic');
        $content = $this->input->post('content');
        $this->template_model->set_template($topic, $content, 1);
        $this->response_data("添加完成");
    }

    function add_sentence()
    {
        $english = $this->input->post('english');
        $chinese = $this->input->post('chinese');
        $this->sentence_model->set_sentence($english, $chinese, 1);
        $this->response_data("添加完成");
    }

    function add_word()
    {
        $word1 = $this->input->post('word1');
        $word2 = $this->input->post('word2');
        $this->word_model->set_word($word1, $word2, 1);
        $this->response_data("添加完成");
    }

    function response_data($data){
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
}