<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $title ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <style type="text/css">
    .upload{width: 650px; margin: auto;}
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div id="body">
    <div class="container">
      <div class="row">
        <div class="upload">
          <p><a class='pull-right' href="<?php echo base_url() ?>">返回首页</a></p>
          <div data-example-id="togglable-tabs">
            <label>提交<?php 
            if (isset($file)) {
              echo "成功";
            }
            elseif (isset($error)) {
              echo "失败";
            } ?></label>
            <ul id="myTabs" class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sentence" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">句型</a></li>
              <!-- <li role="presentation" class=""><a href="#template" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">模板</a></li> -->
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="sentence" aria-labelledby="sentence-tab">
                <!-- <form class="navbar-form navbar-left" method="post" action="<?php echo site_url('upload/create_sentence'); ?>"> -->
                <?php echo form_open_multipart('upload/create_sentence');?>
                  <fieldset>
                    <div class="control-group">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default">英</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">英</a></li>
                          <li><a href="#">中</a></li>
                        </ul>
                      </div>
                        <textarea class="form-control statement" id="foreign" name="foreign"></textarea>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="chinese">中</label>
                        <textarea class="form-control statement" id="chinese" name="chinese"></textarea>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="reference">参考文献</label>
                      <!-- <div class="controls"> -->
                        <input type="text" class="form-control" id="reference" name="reference">
                      <!-- </div> -->
                    </div>
                    <div class="control-group">
                      <label class="control-label">如果句型太多请提交附件，仅支持txt、word格式</label>
                      <!-- File Upload -->
                      <div class="controls">
                        <!-- <input class="input-file" id="fileInput" type="file"> -->
                        <input class="input-file" type="file" name="userfile" size="20" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="submit"> </label>
                      <div class="controls">
                        <input type="submit" value="提交" class="btn btn-inverse">
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
              <!-- <div role="tabpanel" class="tab-pane fade" id="template" aria-labelledby="template-tab">
                <form class="navbar-form navbar-left" method="post" action="<?php echo site_url('upload/create_template'); ?>">
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label" for="theme">名称</label>
                      <input type="text" class="input-xlarge" id="theme" name="theme">
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="content">内容</label>
                      <input type="text" class="input-xlarge" id="content" name="content">
                    </div>
                    <div class="control-group">
                      <label class="control-label">可以直接提交附件，仅支持txt、word格式</label>
                      <div class="controls">
                        <input class="input-file" id="fileInput" type="file">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="submit"> </label>
                      <div class="controls">
                        <input type="submit" value="提交" class="btn btn-inverse">
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div> -->
            </div>
            <!-- <div><a href="<?php echo site_url('upload/send_email') ?>">测试发送邮件</a></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>