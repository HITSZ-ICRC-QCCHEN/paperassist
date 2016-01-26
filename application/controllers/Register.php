<?php

/**
 * Created by PhpStorm.
 * User: Chenjing
 * Date: 2015/8/28
 * Time: 15:49
 */
class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/register');
    }

    // 用户注册
    public function checkRegister(){
        $data['username'] = 'Register';
        $data['password'] = '123';

        if(!empty($_SESSION['username'])){
            $data['username'] = $_SESSION['username'];
            //$data['password'] = $_SESSION['password'];
        }else if(!empty($_COOKIE['username'])&&!empty($_COOKIE['password'])){
            $data['username'] = $_COOKIE['username'];
            $data['password'] = $_COOKIE['password'];
        }
        $this->load->view('login',$data);

        if(isset($_POST['btnRegister'])){
            $email = $_POST['txtREmail'];
            $username = $_POST['txtRUsername'];
            $password = $_POST['txtRPassword'];
            $this->load->model("User_model");
            if($email==""){
                echo "<script language=\"javascript\">alert('请输入邮箱！')</script>";
            }else if($this->User_model->user_select($email)){
                echo "<script language=\"javascript\">alert('该邮箱已注册！')</script>";
            }else if($username==""){
                echo "<script language=\"javascript\">alert('请输入用户名！')</script>";
            }else if($this->User_model->user_select($username)){
                echo "<script language=\"javascript\">alert('该用户名已存在！')</script>";
            }else if($password==""){
                echo "<script language=\"javascript\">alert('请输入密码！')</script>";
            }else if($_POST['txtRRePassword']=="") {
                echo "<script language=\"javascript\">alert('请再次输入密码！')</script>";
            }else if($password!=$_POST['txtRRePassword']){
                echo "<script language=\"javascript\">alert('两次输入密码不一致，请重新输入！')</script>";
            }else if(!isset($_POST['chkAgreement'])){
                echo "<script language=\"javascript\">alert('请勾选用户协议')</script>";
            }else{
                $user = array("user_name"=>$username,"email"=>$email,"password"=>md5($password),"role_id"=>1);
                $id = $this->User_model->user_insert($user);
                if($id > 0){
                    $temp =  $this->User_model->user_select($username);
                    $_SESSION['id'] = $temp[0]->id;
                    $_SESSION['username'] = $username;
                    //$_SESSION['password'] = $password;
                }
                redirect('LoginAfter');
            }
        }
    }
}