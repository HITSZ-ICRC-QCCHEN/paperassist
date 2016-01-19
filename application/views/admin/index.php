
        <div class="main-content">
          <div class="page-content">
            <div class="page-header">
              <h1>
                控制台
                <small>
                  <i class="icon-double-angle-right"></i>
                  查看
                </small>
              </h1>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

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

                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div><!-- /.main-content -->
