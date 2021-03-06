<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>审核 - 模板&amp;句子&amp;单词</title>
    <!-- basic styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-skins.min.css" />

    <!-- extra styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
    <![endif]-->
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
                    <i class="icon-leaf"></i>
                    后台管理
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

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
                            还有4个任务完成
                        </li>

                        <li>
                            <a href="#">
                                查看任务详情
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
                            8条通知
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
                            5条消息
                        </li>

                        <li>
                            <a href="inbox.html">
                                查看所有消息
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo base_url() ?>assets/avatars/user.jpg" alt="Jason's Photo" />
                <span class="user-info">
                  <small>欢迎光临,</small>
                  Jason
                </span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                个人资料
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="widget-box" style="margin-top:0px;">
                <div class="widget-header header-color-blue2">
                    <h4 class="lighter smaller">审核通知：</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main padding-8">
                        <div id="auditTree" class="tree tree-selectable">
                            <div class="tree-folder" style="display: block;">
                                <div class="tree-folder-header">
                                    <!-- <i class="icon-plus"></i> -->
                                    <div class="tree-folder-name">未审核内容(<span class="red"></span>)</div>
                                </div>
                                <div style="display: block;" class="tree-folder-content">
                                    <div class="tree-item tree-selected" style="display: block;" data-toggle="tab" href="#template">
                                        <div class="tree-item-name">模板(<span class="red"></span>)
                                        </div>
                                    </div>
                                    <div class="tree-item" style="display: block;" data-toggle="tab" href="#sentence">
                                        <div class="tree-item-name">句子(<span class="red"></span>)</div>
                                    </div>
                                    <div class="tree-item" style="display: block;" data-toggle="tab" href="#word">
                                        <div class="tree-item-name">单词(<span class="red"></span>)</div>
                                    </div>
                                </div>
                                <div class="tree-loader" style="display: none;">
                                    <div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>
                                </div>
                            </div>
                            <div class="tree-folder" style="display: block;">
                                <div class="tree-folder-header">
                                    <div class="tree-folder-name">未审核文档(<span class="red">10</span>)</div>
                                </div>
                                <div style="display: block;" class="tree-folder-content">
                                    <div class="tree-item" style="display: block;" data-toggle="tab" href="#template">
                                        <div class="tree-item-name">模板(<span class="red">2</span>)
                                            <a href="javascript:;" title="打开文件所在目录">
                                                <i class="icon-folder-open"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tree-item" style="display: block;" data-toggle="tab" href="#sentence">
                                        <div class="tree-item-name">句子(<span class="red">3</span>)
                                            <a href="javascript:;" title="打开文件所在目录">
                                                <i class="icon-folder-open"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tree-item" style="display: block;" data-toggle="tab" href="#word">
                                        <div class="tree-item-name">单词(<span class="red">5</span>)
                                            <a href="javascript:;" title="打开文件所在目录">
                                                <i class="icon-folder-open"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tree-folder" style="display: block;">
                              <div class="tree-folder-header">
                                <div class="tree-folder-name">未审核文档(<span class="red">10</span>)</div>
                              </div>
                              <ul style="display: block;" class="tree-folder-content">
                                <li class="tree-item" style="display: block;" data-toggle="tab" href="#template">
                                  <a class="tree-item-name" >模板(<span class="red">2</span>)</a>
                                </li>
                                <li class="tree-item" style="display: block;" data-toggle="tab" href="#sentence">
                                  <a class="tree-item-name" data-toggle="tab" href="#sentence">句子(<span class="red">3</span>)</a>
                                </li>
                                <li class="tree-item" style="display: block;" data-toggle="tab" href="#word">
                                  <a class="tree-item-name" data-toggle="tab" href="#word">单词(<span class="red">5</span>)</a>
                                </li>
                              </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="row">
                            <div class="tabbable">
                                <div class="tab-content">

                                    <div id="template" class="tab-pane active">
                                        <div class="widget-box">
                                            <div class="widget-header"><h4>审核模板</h4></div>
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <?php echo form_open('test/doaudit_template') ?>
<!--                                                        <div style="display: none; ">-->
<!--                                                            <input type="text" name="template_id">-->
<!--                                                        </div>-->
                                                        <div>
                                                            <label for="topic">主题</label>
                                                            <input type="text" class="form-control" id="topic" name="topic">
                                                        </div>
                                                        <div>
                                                            <label for="content">内容</label>
                                                            <textarea rows="18" class="form-control" id="content" name="content"></textarea>
                                                        </div>
                                                        <div>
                                                            <label for="submit"> </label>
                                                            <div class="controls">
                                                                <input id="btn_template_pass" type="button" value="通过" class="btn btn-inverse">
                                                                <input id="btn_template_unpass" type="button" value="不通过" class="btn btn-inverse">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<!-- ace scripts -->
<script src="<?php echo base_url() ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/ace.min.js"></script>

<!-- page specific plugin scripts -->

<!-- <script src="<?php echo base_url() ?>assets/js/fuelux/data/fuelux.tree-sampledata.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/js/fuelux/fuelux.tree.min.js"></script> -->

<script>
    $(document).ready(function(){
        $(".tree-item").click(function(){
            $(".tree-selected").removeClass("tree-selected");
            $(this).addClass("tree-selected");
        });
        $(".tree-item-name>a").click(function(){
            alert("1");
            return false;// 屏蔽其他事件
        });
    });
</script>
<script>
$(document).ready(function(){
    var ti = 0;
    var template = <?php echo $template ?>;

    $('#template #topic').attr("value", template[ti].topic);
    $('#template #content').text(template[ti].statement);
    $("#btn_template_pass").click(function(){
//        $.post("<?php //site_url("/test/doaudit_template") ?>",
//            {
//                name:"Donald Duck",
//                city:"Duckburg"
//            },
//            function(data,status){
//                alert("数据：" + data + "\n状态：" + status);
//            });
        $.ajax({
            type: 'POST',
            url: "<?=site_url('/test/doaudit_template')?>",
            data: {
                id: template[ti].id,
                topic: template[ti].topic,
                content: template[ti].statement
            },
            dataType: "json",
            success: function(data, status){
//                alert("数据：" + data + "\n状态：" + status);
//                alert(<?php //echo ++$ti; ?>//);
                ++ti;
                $('#template #topic').attr("value", template[ti].topic);
                $('#template #content').text(template[ti].statement);
                return true;
            },
            error: function(){
                alert('Ajax failed');
                return false;
            }
        });
    });
    
//    $("#btn_template_unpass").click(function () {
//        <?php //Header("Location: " . site_url('test/audit')); ?>
//    });
});
</script>
</body>
</html>