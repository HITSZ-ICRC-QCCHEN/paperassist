<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理</title>
    <!-- basic styles -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="../../assets/css/ace.min.css" />
    <link rel="stylesheet" href="../../assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="../../assets/css/ace-skins.min.css" />

    <!-- extra styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="../../assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="../../assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
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
                <img class="nav-user-photo" src="../../assets/avatars/user.jpg" alt="Jason's Photo" />
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

          <ul class="nav nav-list">
            <li class="active">
              <a href="#">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 管理员操作 </span>
              </a>
            </li>

            <li>
              <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> 用户管理 </span>

                <b class="arrow icon-angle-down"></b>
              </a>

              <ul class="submenu">
                <li>
                  <a href="#">
                    <i class="icon-double-angle-right"></i>
                    用户列表
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="icon-double-angle-right"></i>
                    角色管理
                  </a>
                </li>

              </ul>
            </li>
          </ul><!-- /.nav-list -->

          <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
          </div>

          <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
          </script>
        </div>

        <div class="main-content">
          <div class="page-content">
            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <div class="row">
                  <div class="tabbable">
                    <ul class="nav nav-tabs" id="myTab">
                      <li class="active">
                        <a data-toggle="tab" href="#home">
                          <i class="green icon-home bigger-110"></i>
                          我的主页
                        </a>
                      </li>

                      <li class="">
                        <a data-toggle="tab" href="#userlist">
                          用户列表
                          <i class="icon-remove"></i>
                        </a>
                      </li>

                      <li class="">
                        <a data-toggle="tab" href="#rolelist">
                          角色管理
                          <i class="icon-remove"></i>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div id="home" class="tab-pane active">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                      </div>

                      <div id="userlist" class="tab-pane">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="table-responsive">
                              <div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="dataTables_length" id="sample-table-2_length">
                                      <label>
                                        Display 
                                        <select aria-controls="sample-table-2" size="1" name="sample-table-2_length">
                                          <option selected="selected" value="10">10</option>
                                          <option value="25">25</option>
                                          <option value="50">50</option>
                                          <option value="100">100</option>
                                        </select>
                                         records
                                        </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div id="sample-table-2_filter" class="dataTables_filter">
                                      <label>Search: <input aria-controls="sample-table-2" type="text"></label>
                                    </div>
                                  </div>
                                </div>
                                <table aria-describedby="sample-table-2_info" id="sample-table-2" class="table table-striped table-bordered table-hover dataTable">
                                  <thead>
                                    <tr role="row">
                                      <th aria-label=" " style="width: 72px;" colspan="1" rowspan="1" role="columnheader" class="center sorting_disabled">
                                        <label>
                                          <input class="ace" type="checkbox">
                                          <span class="lbl"></span>
                                        </label>
                                      </th>
                                      <th aria-label="Domain: activate to sort column ascending" style="width: 196px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="sorting_asc">编号</th>
                                      <th aria-label="Price: activate to sort column ascending" style="width: 135px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="sorting">用户名</th>
                                      <th aria-label="Clicks: activate to sort column ascending" style="width: 147px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="hidden-480 sorting">注册时间</th>
                                      <th aria-label="Update : activate to sort column descending" aria-sort="ascending" style="width: 218px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="hidden-480 sorting">最后登录时间</th>
                                      <th aria-label="Status: activate to sort column ascending" style="width: 188px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="hidden-480 sorting">角色</th>
                                      <th aria-label="" style="width: 201px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled"></th>
                                    </tr>
                                  </thead>
                                </table>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <button  class="btn btn-primary">添加用户</button>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="dataTables_paginate paging_bootstrap">
                                      <ul class="pagination">
                                        <li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li><li><a href="#">3</a></li>
                                        <li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /row -->
                      </div>

                      <div id="rolelist" class="tab-pane">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="table-responsive">
                              <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th class="center">
                                      <label>
                                        <input class="ace" type="checkbox">
                                        <span class="lbl"></span>
                                      </label>
                                    </th>
                                    <th>编号</th>
                                    <th>角色名称</th>
                                    <th></th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td class="center">
                                      <label>
                                        <input class="ace" type="checkbox">
                                        <span class="lbl"></span>
                                      </label>
                                    </td>

                                    <td>1</td>
                                    <td>
                                      <span class="label label-sm label-warning">管理员</span>
                                    </td>

                                    <td>
                                      <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-info">
                                          <i class="icon-edit bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-danger">
                                          <i class="icon-trash bigger-120"></i>
                                        </button>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <button class="btn btn-primary">添加角色</button>
                            </div>
                          </div>
                        </div><!-- /row -->
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
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- ace scripts -->
    <script src="../../assets/js/ace-elements.min.js"></script>
    <script src="../../assets/js/ace.min.js"></script>

</body>
</html>