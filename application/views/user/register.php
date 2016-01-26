<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>PaperAssist登录页面</title>

    <!--  设置js和css访问图片路径 -->

    <base href="<?php echo base_url();?>" />

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>

    <!--[if IE 7]-->
    <!--<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />-->
    <!--[endif]-->

    <!-- page specific plugin styles -->

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 8]-->
    <!--<link rel="stylesheet" href="assets/css/ace-ie.min.css" />-->
    <!--[endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]-->
    <!--<script src="assets/js/html5shiv.js"></script>
     <script src="assets/js/respond.min.js"></script>-->
    <!--[endif]-->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <!--<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>-->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js" rel="stylesheet"></script>

    <script src="assets/js/jquery-2.0.3.min.js"></script>

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
    </script>

    <script type="text/javascript">
        if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>

</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="center">
                        <h1>
                            <i class="icon-leaf green"></i>
                            <span class="red">PaperAssist</span>
                            <span class="white">Application</span>
                        </h1>
                        <h4 class="blue">&copy; ICRC</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">

                        <div id="signup-box" class="signup-box widget-box no-border visible">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="icon-group blue"></i>
                                        新用户注册
                                    </h4>

                                    <div class="space-6"></div>
                                    <p> 请输入您的注册信息： </p>

                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('register/checkRegister'); ?>
                                    <!--<form id="fRegister" name="fRegister" action="" method="post">-->
                                    <fieldset>
                                        <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="邮箱" name="txtREmail"/>
															<i class="icon-envelope"></i>
														</span>
                                            <span id="chkREmail"></span>
                                        </label>

                                        <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" name="txtRUsername"/>
															<i class="icon-user"></i>
														</span>
                                            <span id="chkRUsername"></span>
                                        </label>

                                        <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" name="txtRPassword"/>
															<i class="icon-lock"></i>
														</span>
                                            <span id="chkRPassword"></span>
                                        </label>

                                        <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="重复密码" name="txtRRePassword"/>
															<i class="icon-retweet"></i>
														</span>
                                            <span id="chkRRePassword"></span>
                                        </label>

                                        <label class="block">
                                            <input type="checkbox" class="ace" name="chkAgreement" id="chkAgree" />
														<span class="lbl">
															我接受此
															<a href="#">用户协议</a>
														</span>
                                            <span id="chkRAgree"></span>
                                        </label>

                                        <div class="space-24"></div>

                                        <div class="clearfix">
                                            <button type="reset" class="width-30 pull-left btn btn-sm">
                                                <i class="icon-refresh"></i>
                                                重置
                                            </button>

                                            <button type="submit" class="width-65 pull-right btn btn-sm btn-success" id="btnR" name="btnRegister" value="Register" onclick="">
                                                注册
                                                <i class="icon-arrow-right icon-on-right"></i>
                                            </button>
                                        </div>
                                    </fieldset>
                                    <!--</form>-->
                                    <?php echo form_close();?>
                                </div>

                                <div class="toolbar center">
                                    <a href="<?php echo site_url("/login")?>" class="back-to-login-link">
                                        <i class="icon-arrow-left"></i>
                                        返回至登录页
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /signup-box -->
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->


<!-- inline scripts related to this page -->
<script type="text/javascript">
    function checkUserInfo(){
        if(fLogin.txtUsername.value==""){
            alert("用户名不能为空！");
            fLogin.txtUsername.focus();
            return false;
        }
        if(fLogin.txtPassword.value==""){
            alert("密码不能为空！");
            fLogin.txtPassword.focus();
            return false;
        }
    }
</script>

<script type="text/javascript">
    function isAgree(){
        if($("#chkAgree").attr("checked") == true){
            $("#btnR").attr("disabled",true);
        }else{
            //document.getElementById("btnR").disabled = true;
            $("#btnR").removeAttr("disabled");
        }
    }

    //chkREmail chkRUsername chkRPassword chkRRePassword chkRAgree
    function check(){
        if(fRegister.txtREmail.value == "") {
            //alert("邮箱不能为空！");
            //fRegister.txtREmail.value = "请输入邮箱!";
            $("#chkREmail").html("输入邮箱！");
            fRegister.txtREmail.focus();
            return false;
        }
        if(fRegister.txtRUsername.value == "") {
            alert("请输入用户名！");
            fRegister.txtRUsername.focus();
            return false;
        }
        if(fRegister.txtRPassword.value == ""){
            alert("请输入密码！");
            fRegister.txtRPassword.focus();
            return false;
        }
        if(fRegister.txtRRePassword.value == ""){
            alert("请再次输入密码确认！");
            fRegister.txtRRePassword.focus();
            return false;
        }
        if(document.getElementById("chkAgree").checked == false){
            alert("请勾选我们的用户协议");
            return false;
        }
        if(fRegister.txtRPassword.value != fRegister.txtRRePassword.value){
            alert("两次密码输入不一致，请重新输入！");
            return false;
        }
    }
</script>

<script language="javascript">
    var  http_request = false;
    function createRequest(url){         //初始化对象并发出XMLHttpRequest请求
        if(window.XMLHttpRequest) {
            http_request = new XMLHttpRequest();
            if (http_request.overrideMimeType) {
                http_request.overrideMimeType("text/xml");
            }
        }else if(window.ActiveXObject){          //IE浏览器
            try{
                http_request = new ActiveXObject("Msxml2.XMLHTTP");
            }catch(e){
                try{
                    http_request = new ActiveXObject("Microsoft.XMLHTTP");
                }catch(e){}
            }
        }
        if(!http_request){
            alert("不能创建XMLHTTP实例!");
            return false;
        }
        http_request.onreadystatechange = alertContents;//指定响应方法
        //发出HTTP请求
        http_request.open("GET",url,true);
        http_request.send(null);
    }
    function alertContents(){   //处理服务器返回的信息
        if(http_request.readyState == 4){
            if(http_request.state == 200){
                alert(http_request.responseText);
            }else{
                alert('您请求的页面发现错误');
            }
        }
    }
</script>

<script type="text/javascript">
    $(function(){
        $("#btnSend").click(function() {
            var email = $("#email").val();
            var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
            if (email == '' || !preg.test(email)) {
                $("#chkmsg").html("请填写正确的邮箱！");
            }
            /* else{
             createRequest('index.php/Welcome/sendMail?mail='+email+'&nocache='+new Data().getTime());
             //createRequest('index.php/Welcome/sendMail?mail='+email);
             }*/
        });
    })
</script>

<!--使用Ajax样例-->
<!--<script language="javascript">
    function checkName(){
        var username = form1.username.value;
        if(username == ""){
            window.alert("请填写用户名！");
            form1.username.focus();
            return false;
        }
        else{
            createRequest('checkname.php?username='+username+'&nocache='+new Date().getTime());
        }
    }
</script>-->

<!--<script type="text/javascript">
    $(function () {
        // Initialize progress dialog ...
        $("#ProgressDialog").dialog({
            autoOpen: false,
            draggable: false,
            modal: true,
            resizable: false,
            title: "Loading",
            closeOnEscape: false,
            open: function () { $(".ui-dialog-titlebar-close").hide(); } // Hide close button
        });

        // Handle form submit ...
        $("form").live("submit", function (event) {
            event.preventDefault();
            var form = $(fRegister);
            $("#ProgressDialog").dialog("open");
            $.ajax({
                url: form.attr('action'),
                type: "POST",
                data: form.serialize(),
                success: function (data) {
                    $("#FormContainer").html(data);
                    $.validator.unobtrusive.parse("form");
                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert("Error '" + jqXhr.status + "' (textStatus: '" + textStatus + "', errorThrown: '" + errorThrown + "')");
                },
                complete: function () {
                    $("#ProgressDialog").dialog("close");
                }
            });
        });
    });
</script>-->

<!--<script type="text/javascript" src="../js/jquery.js"></script>-->
<!--<script type="text/javascript">
    $(function(){
        $("#btnSend").click(function(){
            var email = $("#email").val();
            var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
            if(email=='' || !preg.test(email)){
                $("#chkmsg").html("请填写正确的邮箱！");
            }else{
                //$("#btnSend").val('提交中..');
                $("#btnSend").attr("disabled","disabled").val('提交中..').css("cursor","default");
                $.post("Index.php/sendMail",{mail:email},function(msg){
                    if(msg=="noreg"){
                        $("#chkmsg").html("该邮箱尚未注册！");
                        $("#btnSend").removeAttr("disabled").val('提 交').css("cursor","pointer");
                    }else{
                        $(".widget-main").html("<h3>"+msg+"</h3>");
                    }
                });
            }
        });
    })
</script>-->


</body>
</html>
