<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Query extends CI_Controller {
    public function index(){
        $querytext=$this->input->post("querytext");
        $template=$this->query_template_aux($querytext);
        $sentence=$this->query_sentence_aux($querytext);
        $word=$this->query_word_aux($querytext);
        $arr=array("template"=>$template,"sentence"=>$sentence,"word"=>$word,"querytext"=>$querytext);
        $title=array("title"=>"英语论文写作助手");
        $this->load->view("template/header",$title);
        $this->load->view("user/query_result",$arr);
        $this->load->view("template/footer");
    }
    public function query_template(){
        $querytext=$this->input->get("querytext");
        $template=$this->query_template_aux($querytext);
        $arr=array("template"=>$template);
        $title=array("title"=>"英语论文写作助手");
        $this->load->view("template/header",$title);
        $this->load->view("user/query_template",$arr);
        $this->load->view("template/footer");
    }
    public function query_sentence(){
        $querytext=$this->input->get("querytext");
        $sentence=$this->query_sentence_aux($querytext);
        $arr=array("sentence"=>$sentence);
        $title=array("title"=>"英语论文写作助手");
        $this->load->view("template/header",$title);
        $this->load->view("user/query_sentence",$arr);
        $this->load->view("template/footer");
    }
    public function query_word(){
        $querytext=$this->input->get("querytext");
        $word=$this->query_word_aux($querytext);
        $arr=array("word"=>$word);
        $title=array("title"=>"英语论文写作助手");
        $this->load->view("template/header",$title);
        $this->load->view("user/query_word",$arr);
        $this->load->view("template/footer");
    }
    private function query_template_aux($querytext){
        $this->load->model('template_model');
        return $this->template_model->query_template($querytext);
    }
    private function query_sentence_aux($querytext){
        $this->load->model('sentence_model');
        return $this->sentence_model->query_sentence($querytext);
    }
    private function query_word_aux($querytext){
        $this->load->model('word_model');
        return $this->word_model->query_word($querytext);
    }
}
?>