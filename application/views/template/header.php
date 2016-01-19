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
    <title><?php echo $title;?></title>

    <base href="<?php echo base_url();?>" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/user_defined.css" rel="stylesheet">

    <!-- ace -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!-- page specific plugin styles -->
    <!-- fonts -->
<!--    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->
    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>
    <!-- ace end -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand" style="height: 45px;">
                <small>
                    <i class="icon-book"></i>
                    PaperAssist
                </small>
            </a>
        </div>

        <div class="navbar-header" role="navigation">
            <ul class="nav ace-nav">
                <li class="dropdown">
                    <a href="#" style="height: 45px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">网站维护<span class="caret"></span></a>
                    <ul class="user-menu dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li><a href="<?php echo site_url("admin/login");?>">后台登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <?php
        @$isLogin=$isLogin?@$isLogin:false;
        if($isLogin):?>
            <div class="navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="grey">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge badge-grey">4</span>
                        </a>

                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="icon-ok"></i>
                                4 Tasks to complete
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </div>

                                    <div class="progress progress-mini ">
                                        <div style="width:65%" class="progress-bar "></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Hardware Upgrade</span>
                                        <span class="pull-right">35%</span>
                                    </div>

                                    <div class="progress progress-mini ">
                                        <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Unit Testing</span>
                                        <span class="pull-right">15%</span>
                                    </div>

                                    <div class="progress progress-mini ">
                                        <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Bug Fixes</span>
                                        <span class="pull-right">90%</span>
                                    </div>

                                    <div class="progress progress-mini progress-striped active">
                                        <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    See tasks with details
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="purple">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-bell-alt icon-animated-bell"></i>
                            <span class="badge badge-important">8</span>
                        </a>

                        <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="icon-warning-sign"></i>
                                8 Notifications
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                                        <span class="pull-right badge badge-info">+12</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="btn btn-xs btn-primary icon-user"></i>
                                    Bob just signed up as an editor ...
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                                        <span class="pull-right badge badge-success">+8</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                                        <span class="pull-right badge badge-info">+11</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    See all notifications
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="green">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope icon-animated-vertical"></i>
                            <span class="badge badge-success">5</span>
                        </a>

                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="icon-envelope-alt"></i>
                                5 Messages
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
                                </a>
                            </li>

                            <li>
                                <a href="inbox.html">
                                    See all messages
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="icon-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="icon-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php else:?>

            <div class="navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="grey">
                        <a href="<?php echo site_url("Login/login")?>">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>登录</span>
                        </a>
                    </li>

                    <li class="green">
                        <a href="<?php echo site_url("Login/login")?>">
                            <i class="glyphicon glyphicon-pencil"></i>
                            <span>注册</span>
                        </a>
                    </li>
                </ul>
            </div>

        <?php endif;?>
    </div>
</div>
