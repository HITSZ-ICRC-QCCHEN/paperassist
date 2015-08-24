<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_querysentence extends CI_Controller {
    public function query(){
        $this->load->model('m_sentence');
        $arren=$this->m_sentence->query_sentence($this->input->post("querytext"),"english");
        $arrcn=$this->m_sentence->query_sentence($this->input->post("querytext"),"chinese");
        $arr=array("arren"=>$arren,"arrcn"=>$arrcn);
        $this->load->view("welcome_message",$arr);
    }
}
?>