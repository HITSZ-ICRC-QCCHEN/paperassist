
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

                        <div class="row">
                          <div class="col-xs-12">
                            <div class="widget-box">
                              <div class="widget-header widget-header-flat">
                                <h4 class="smaller">系统信息</h4>
                              </div>

                              <div class="widget-body">
                                <div class="widget-main">
                                  <dl class="dl-horizontal" id="dt-list-1">
                                    <dt>操作系统</dt>
                                    <dd><?php echo $systeminfo['system_os'] ?></dd>
                                    <dt>运行环境</dt>
                                    <dd><?php echo $systeminfo['environment'] ?></dd>
                                    <dt>PHP运行方式</dt>
                                    <dd><?php echo $systeminfo['phpapi'] ?></dd>
                                    <dt>MySQL版本</dt>
                                    <dd><?php echo $systeminfo['mysqlver'] ?></dd>
                                    <dt>浏览器版本</dt>
                                    <dd><?php echo $systeminfo['browser'][0] . "&nbsp;" . $systeminfo['browser'][1] ?></dd>
                                    <dt>上传附件限制</dt>
                                    <dd><?php echo $systeminfo['filelimit'] ?></dd>
                                    <dt>执行时间限制</dt>
                                    <dd><?php echo $systeminfo['execlimit'] ?></dd>
                                  </dl>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="space-6"></div>

                        <div class="row">
                          <div class="col-xs-12">
                            <div class="widget-box">
                              <div class="widget-header widget-header-flat">
                                <h4 class="smaller">
                                  个人信息
                                </h4>
                              </div>

                              <div class="widget-body">
                                <div class="widget-main">
                                  <dl class="dl-horizontal" id="dt-list-1">
                                    <dt>上次登录时间</dt>
                                    <dd>2014-06-06 06:06:06</dd>
                                    <dt>上次登录ip</dt>
                                    <dd>127.0.0.1</dd>
                                  </dl>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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
