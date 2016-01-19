<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: chenjing
 * Date: 2015/9/5
 * Time: 13:24
 */

class Reset extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index(){
        $token = stripslashes(trim($_GET['token']));
        $email = stripslashes(trim($_GET['email']));

        /*$sql = "select * from user where email='$email'";
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query);*/

        $this->load->model('User_m');
        $user = $this->User_m->user_select($email);

        if(count($user) > 0){
            //$mt = md5($row['id'].$row['username'].$row['password']);
            $mt = md5($user[0]->id.$user[0]->user_name.$user[0]->password);
            if($mt==$token){
                date_default_timezone_set("Asia/Shanghai");
                if((time()-$user[0]->getpasstime) < 24*3600){
                    $msg = '该链接已过期！';
                    echo $msg;
                }else{
                    //重置密码...
                    //$msg = '请重新设置密码，显示重置密码表单。<br/>略过。';
                    $this->load->view('reset');
                }
            }else{
                $msg =  '无效的链接<br/>'.$mt.'<br/>'.$token;
                echo $msg;
            }
        }else{
            $msg =  '错误的链接！';
            echo $msg;
        }
        //echo $msg;
    }

}
