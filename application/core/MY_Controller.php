<?php

class MY_Controller extends CI_Controller {

    public $user;
//    public $trunpage;

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $user_data = $this->user_model->is_logged_in();
        if ($user_data === FALSE) {
            //跳转
            Header("HTTP/1.1 303 See Other");
            Header("Location: " . site_url('admin/login'));
            exit;
        } else {
            $this->user = $user_data['user'];
        }
//        $this->get_trunpage();
    }

//    /**
//     * 获取跳转标示  page+trunpage 唯一确定一个rel
//     */
//    public function get_trunpage() {
//        $segs = $this->uri->uri_to_assoc(4);
//        if (isset($segs['turnpage'])) {
//            setcookie("turnpage", "", time() - config_item("cookie_expire"), config_item("cookie_path"), "/");
//            setcookie("turnpage", $segs['turnpage'], time() + config_item("cookie_expire"), "/");
//            $_COOKIE["turnpage"] = $segs['turnpage'];
//        }
//        $this->trunpage = isset($_COOKIE["turnpage"]) ? $_COOKIE["turnpage"] : '';
//    }

}

?>
