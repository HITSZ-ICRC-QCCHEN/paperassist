<?php

/**
 * Created by PhpStorm.
 * User: Chenjing
 * Date: 2015/8/28
 * Time: 15:49
 */
class Login extends CI_Controller
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
        $data['username'] = '';
        $data['password'] = '';
        if(!empty($_COOKIE['username'])&&!empty($_COOKIE['password'])){
            $data['username'] = $_COOKIE['username'];
            $data['password'] = $_COOKIE['password'];
        }
        $this->load->view('user/login',$data);
    }

    // 用户登录
    public function checkLogin(){
//        $data['username'] = '';
//        $data['password'] = '';
//        if(!empty($_COOKIE['username'])&&!empty($_COOKIE['password'])){
//            $data['username'] = $_COOKIE['username'];
//            $data['password'] = $_COOKIE['password'];
//        }
//
//        $this->load->view('user/login',$data);

        $this->load->model("User_model");
        if(isset($_POST['btnLogin'])){
            $username = trim($_POST['txtUsername']);
            $password = trim($_POST['txtPassword']);
            $remember = "";
            //是否自动登录
            if(isset($_POST['chkRemember'])){
                $remember = $_POST['chkRemember'];
            }
            //$ref_url=$_GET['req_url'];

            /*if($username == ''||$password == ''){
                echo "<script language=\"javascript\">alert('用户名和密码均不能为空！')</script>";
            }*/

            $user = $this->User_model->user_select($username);
            if($user){
                if($user[0]->password == md5($password)){
                    //echo "<script language=\"javascript\">alert('密码正确!')</script>";
                    //将用户信息存入session以便其他页面访问
                    $_SESSION['id'] = $user[0]->id;
                    $_SESSION['username'] = $user[0]->user_name;

                    if($remember=='Remember'){//如果用户选择了，记录登录状态就把用户名和加了密的密码放到cookie里面
                        setcookie("username",$username,time()+3600*24*365);
                        setcookie("password",$password,time()+3600*24*365);
                    }
                    else if(!empty($_COOKIE['username'])||!empty($_COOKIE['password'])){
                        setcookie("username","",time()-1);
                        setcookie("password","",time()-1);
                    }
                    redirect('welcome');
                    /*if(strpos($ref_url,"Login.php")==false){
                        header("location:".$ref_url);
                    }else{
                        header("location:loginafter.php");
                    }*/
                }
                else{
                    echo "<script language=\"javascript\">alert('密码不正确!')</script>";
                    //$data['tips'] = '密码不正确!';
                    //$this->load->view('login2');
                }
            }
            else{
                echo "<script language=\"javascript\">alert('用户名不存在!')</script>";
            }

        }
    }

    //退出，注销session
    public function logout(){
        //$this->load->library('session');
        //$this->session->unset_userdata('id');
        session_unset();
        session_destroy();
    }

    //发送邮件
    public function sendMail(){
        if(isset($_POST['btnSend'])){
            $email = stripslashes(trim($_POST['email']));
            //$email = stripslashes(trim($_GET['mail']));
            //$email = injectChk($email);//防止注入
            $this->load->model("User_model");
            $user = $this->User_model->user_select($email);

            if(count($user)<=0){//该邮箱尚未注册！
                echo '未注册！';
                //$msg = "noreg";
                //exit;
            }else{
                date_default_timezone_set("Asia/Shanghai"); //设定时区东八区
                $getpasstime = time();
                $uid = $user[0]->id;
                $token = md5($uid.$user[0]->user_name.$user[0]->password);
                $url = "http://localhost/paperassist/index.php/reset?email=".$email."&token=".$token;
                $time = date('Y-m-d H:i');
                //$result = sendmail($time,$email,$url);

                include_once("Smtp.php");
                $smtpserver = "smtp.qq.com"; //SMTP服务器
                $smtpserverport = 25; //SMTP服务器端口
                $smtpusermail = "2448672460@qq.com"; //SMTP服务器的用户邮箱
                $smtpuser = "2448672460@qq.com"; //SMTP服务器的用户帐号
                //$smtpuser = ""; //SMTP服务器的用户帐号
                $smtppass = "c971026j"; //SMTP服务器的用户密码
                $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
                $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
                $smtpemailto = $email;
                $smtpemailfrom = $smtpusermail;
                $emailsubject = "PaperAssist.com - 找回密码(请不要回复此邮件)";
                $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码（按钮24小时内有效）。<br/><a href='".$url."' target='_blank'>".$url."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问。<br/>如果您没有提交找回密码请求，请忽略此邮件。";
                $result = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);

                if($result==1){//邮件发送成功
                    $msg = '系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！';
                    //更新数据发送时间
                    //mysql_query("update user set getpasstime ='$getpasstime' where id='$uid '");
                    $this->User_model->updatePasstime($uid,$getpasstime);
                }else{
                    //$msg = $result;
                    $msg = '邮件发送失败！';
                }
                echo $msg;
            }
        }
    }

    //检查用户是否登录
    public function isLoginAndRemember(){
        if(empty($_SESSION['id'])){//检查一下session是不是为空
            if(empty($_COOKIE['username'])||empty($_COOKIE['password'])){//如果session为空，并且用户没有选择记录登录状态
                header("location:Login.php?req_url=".$_SERVER['REQUEST_URI']);//转到登录页面，记录请求的url，登录后跳转过去，用户体验好。
            }else{//用户选择了记住登录状态
                $user = $this->User_model->user_select($_COOKIE['username']);//去取用户的个人资料
                if(empty($user)||$user[0]->password != $_COOKIE['password']){//用户名密码不对没到取到信息，转到登录页面
                    header("location:Login.php?req_url=".$_SERVER['REQUEST_URI']);
                }else{
                    $_SESSION['id'] = $user[0]->id;//用户名和密码对了，把用户的个人资料放到session里面
                    $_SESSION['username'] = $user[0]->user_name;
                }
            }
        }
    }

    //记住密码
    public function rememberPassword(){
        $username=trim($_POST['username']);
        $password=md5(trim($_POST['password']));
        $ref_url=$_GET['req_url'];
        $remember=$_POST['remember'];//是否自动登录标示
        $err_msg='';
        if($username==''||$password==''){
            $err_msg="用户名和密码都不能为空";
        }else{
            $row=getUserInfo($username,$password);
            if(empty($row)){
                $err_msg="用户名和密码都不正确";
            }else{
                $_SESSION['user_info']=$row;
                if(!empty($remember)){//如果用户选择了，记录登录状态就把用户名和加了密的密码放到cookie里面
                    setcookie("username",$username,time()+3600*24*365);
                    setcookie("password",$password,time()+3600*24*365);
                }
                if(strpos($ref_url,"Login.php")===false){
                    header("location:".$ref_url);
                }else{
                    header("location:main_user.php");
                }
            }
        }
    }
}