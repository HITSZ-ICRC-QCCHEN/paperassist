<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
        $this->load->model('m_sentence');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = '提交句型';

        $this->load->view('template/header.php', $data);
        $this->load->view('upload/v_upload', $data);
//        $this->load->view('template/footer.php', $data);
    }

    public function create_sentence()
    {
        if( ! empty($_FILES['userfile'])) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'txt|doc|docx';
            $config['max_size']             = 100;
            $config['file_name']            = time(); //文件名不使用原始名

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')) {
//                $error = array('error' => $this->upload->display_errors());
//                var_dump($error);
                $data['title'] = '提交句型';
                $data['error'] = $this->upload->display_errors();

                $this->load->view('template/header.php', $data);
                $this->load->view('upload/v_upload', $data);
            }
            else {
                $data['file'] = $this->upload->data();  //文件的一些信息
//            var_dump($data);
                $data['title'] = '提交句型';

                $this->load->view('template/header.php', $data);
                $this->load->view('upload/v_upload', $data);
            }
        }
        else {
            $foreign = $this->input->post('foreign');
            $chinese = $this->input->post('chinese');
            $reference = $this->input->post('reference');

            if( !empty($foreign) ) {
                $data = array(
                    'statement' => $foreign,
                    'language' => 'en'
                );
                $this->m_sentence->set_sentence($data);
            }
            if( !empty($chinese) ) {
                $data = array(
                    'statement' => $chinese,
                    'language' => 'zh'
                );
                $this->m_sentence->set_sentence($data);
            }
            return redirect('upload', $data);
        }
    }
}