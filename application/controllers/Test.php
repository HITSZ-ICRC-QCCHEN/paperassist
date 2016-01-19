<?php

class Test extends CI_Controller
{

    var $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('template_model');
    }

    function audit()
    {
        // 1.读取未审核内容的详细信息
        // 2.读取第一条待审核的模板

//        $this->load->model('sentence_model');
//        $this->load->model('word_model');

        $data['template'] = json_encode($this->template_model->get_template(0));
//        var_dump($data['template']);exit;
//        $data['sentence'] = $this->sentence_model->get_sentence(0);
//        $data['word']     = $this->word_model->get_word(0);

        $this->load->view('test', $data);
    }

    function doaudit_template()
    {
        $id = $this->input->post('id');
        $topic = $this->input->post('topic');
        $content = $this->input->post('content');

        // 检查该条记录是否已被审核
        $is_checked = $this->template_model->is_template_checked($id);
        if( !$is_checked ) {
            // 考虑审核员修改过内容的情况

            $this->response_data("审核通过");
        }
        else {
            $this->response_data("该模板已经审核过");
        }
    }

    function response_data($data){
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }

}