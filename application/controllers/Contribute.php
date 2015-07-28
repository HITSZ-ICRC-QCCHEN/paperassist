<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contribute extends CI_Controller {

    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
        $this->load->model('m_sentence');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = '贡献句型';

        $this->load->view('template/header.php', $data);
        $this->load->view('contribute/v_contribute', $data);
//        $this->load->view('template/footer.php', $data);
    }

    public function create_sentence()
    {
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

        redirect('contribute');

//        return $this->db->insert('news', $data);

//            if ($user = $this->m_user->get_by_username($username)) {
//                if ($this->m_user->check_password( $password, $user['password'] )) {
//                    $this->m_user->allow_pass( $user );
//                    redirect('admin');
//                } else { $this->data['login_error'] = 'Invalid username or password'; }
//            } else { $this->data['login_error'] = 'Username not found'; }
//        redirect();
    }
}