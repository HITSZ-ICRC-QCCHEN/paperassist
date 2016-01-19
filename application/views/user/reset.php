<?php
/**
 * Created by PhpStorm.
 * User: ljx-lab
 * Date: 2015/9/7
 * Time: 20:56
 */
?><!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PaperAssist重置密码</title>
    <meta name="keywords" content="PaperAssist,写作助手" />
    <meta name="description" content="PaperAssist,写作助手" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--  设置js和css访问图片路径 -->

    <base href="<?php  echo base_url();?>"/>

    <!--  设置js和css访问图片路径  end -->

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
</head>
<body>
<div id="forgot-box" class=" widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header red lighter bigger">
                <i class="icon-key"></i>
                重置密码
            </h4>

            <div class="space-6"></div>
            <p>
                请输入您的新密码并确认：
            </p>

            <?php /*echo validation_errors();*/?><!--
            --><?php /*echo form_open('Welcome/resetPassword');*/?>
            <!--<form>-->
            <fieldset>
                <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                        <input id="newpass" name="newpass" type="text" class="form-control" placeholder="新密码" />
                        <i class="icon-envelope"></i>
                    </span>
                    <span id="chkmsgNP" style="color: red;"></span>
                </label>
                <label class="block clearfix">
                    <span class="block input-icon input-icon-right">
                        <input id="confirmpass" name="confirmpass" type="text" class="form-control" placeholder="确认密码" />
                        <i class="icon-envelope"></i>
                    </span>
                    <span id="chkmsgCP" style="color: red;"></span>
                </label>

                <div class="clearfix">
                    <button type="submit" class="width-35 pull-right btn btn-sm btn-danger" name="btnSend" id="btnSend">
                        <!--<button type="button" class="width-35 pull-right btn btn-sm btn-danger" name="btnSend">-->
                        <i class="icon-lightbulb"></i>
                        确定
                    </button>
                </div>
            </fieldset>
            <!--</form>-->
            <?php /*echo form_close();*/?>
        </div><!-- /widget-main -->

        <!--<div class="toolbar center">
            <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                返回至登录页
                <i class="icon-arrow-right"></i>
            </a>
        </div>-->
    </div><!-- /widget-body -->
</div><!-- /forgot-box -->
</body>
</html>