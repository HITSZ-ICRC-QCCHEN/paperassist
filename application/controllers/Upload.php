<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define("UPLOADPATH", APPPATH.'../../uploads/');
define("TEMPLATEPATH", UPLOADPATH.'template');
define("SENTENCEPATH", UPLOADPATH.'sentence');
define("WORDPATH",     UPLOADPATH.'word');

// 创建目录
if (!is_dir(UPLOADPATH))   { mkdir(UPLOADPATH); }
if (!is_dir(TEMPLATEPATH)) { mkdir(TEMPLATEPATH); }
if (!is_dir(SENTENCEPATH)) { mkdir(SENTENCEPATH); }
if (!is_dir(WORDPATH))     { mkdir(WORDPATH); }

class Upload extends CI_Controller {

    // 可以考虑使用静态变量保存上下文信息，然而尝试过效果并不行
//    private static $data;

    function __construct()
    {
        parent::__construct();

//        $this->load->model('semantic_model');
        $this->load->model('template_model');
        $this->load->model('sentence_model');
        $this->load->model('word_model');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['title'] = '贡献句型';

//        $this->load->view('template/header', $data);
        $this->load->view('user/upload', $data);
//        $this->load->view('template/footer', $data);
    }

    function create_template()
    {
        // 1.处理附件
        // 2.处理文本框中的内容
        // 3.对于错误的处理：如果上传文件出错，直接返回出错页面；如果文本框出错（如内容没有填写），也返回出错页面。

        $data['title'] = '贡献句型';
        $data['tab']   = 'template';

        if( !empty($_FILES['userfile']['name'])) {
            $config['upload_path']         = TEMPLATEPATH;
            $config['allowed_types']       = 'txt|doc|docx';
            $config['max_size']             = 100;
            $config['file_name']            = time(); //文件名使用当前时间来重命名

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')) {
                $data['error'] = $this->upload->display_errors();
            }
            else {
                $data['file'] = $this->upload->data();  //文件信息
                $data['info'] = "提交附件成功，等待审核。";
            }
        }
        else {
//            var_dump($this->input);exit;
            $topic = $this->input->post('topic');
            $content = $this->input->post('content');
//            var_dump($topic);
//            echo '<hr>';
//            var_dump($content);
//            exit;

            if (empty($topic)) {
                $data['error'] = "主题不能为空";
            }else if (empty($content)) {
                $data['error'] = "内容不能为空";
            }else {
                $this->template_model->set_template($topic, $content);
                $data['info'] = "提交内容成功，等待审核。";
//                redirect('upload', "refresh");
//                return;
            }
        }
        $this->load->view('user/upload', $data);
    }

    function create_sentence()
    {
        $data['title'] = '贡献句型';
        $data['tab']   = 'sentence';

        if( !empty($_FILES['userfile']['name'])) {
            $config['upload_path']          = SENTENCEPATH;
            $config['allowed_types']        = 'txt|doc|docx';
            $config['max_size']             = 100;
            $config['file_name']            = time();

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')) {
                $data['error'] = $this->upload->display_errors();
            }
            else {
                $data['file'] = $this->upload->data();  //文件信息
                $data['info'] = "提交附件成功，等待审核";
            }
        }
        else {
            $english = $this->input->post('english');
            $chinese = $this->input->post('chinese');

            if( empty($english) || empty($chinese)) {
                $data['error'] = "英文及其对应中文都要填写";
            }else {
                $this->sentence_model->set_sentence($english, $chinese);
                $data['info'] = "提交内容成功，等待审核";
//                redirect('upload', 'location', 303);
//                return;
            }
        }
        $this->load->view('user/upload', $data);
    }

    function create_word()
    {
        $data['title'] = '贡献句型';
        $data['tab']   = 'word';

        if( !empty($_FILES['userfile']['name'])) {
            $config['upload_path']          = SENTENCEPATH;
            $config['allowed_types']        = 'txt|doc|docx';
            $config['max_size']             = 100;
            $config['file_name']            = time();

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')) {
                $data['error'] = $this->upload->display_errors();
            }
            else {
                $data['file'] = $this->upload->data();  //文件信息
                $data['info'] = "提交附件成功，等待审核";
            }
        }
        else {
            $word1 = $this->input->post('word1');
            $word2 = $this->input->post('word2');

            if( empty($word1) || empty($word2)) {
                $data['error'] = "两个单词输入框都要填写";
            }else {
                $this->word_model->set_word($word1, $word2);
                $data['info'] = "提交内容成功，等待审核";
            }
        }
        $this->load->view('user/upload', $data);
    }

    public function send_email()
    {
        $this->load->library('email');

        $this->email->from('mumuli21@163.com', '昵称');
        $this->email->to('');

        $this->email->subject('Email Test');
        $this->email->message('This is a test text.');

        $this->email->send();
    }
}