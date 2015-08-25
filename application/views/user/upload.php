<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>贡献句型</title>
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

    <!-- ace settings handler -->
    <script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- basic scripts -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="uploadBox">
        <a class='pull-right' href="<?php echo base_url() ?>index.php" style="z-index:10;">&lt;&lt;返回首页</a>
        <div class="tabbable">
          <ul class="nav nav-tabs" id="uploadTab">
            <li class="active">
              <a data-toggle="tab" href="#template">
                模板
              </a>
            </li>

            <li class="">
              <a data-toggle="tab" href="#sentence">
                句子
              </a>
            </li>

            <li class="">
              <a data-toggle="tab" href="#word">
                单词
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <?php
            //根据提示显示相应选项卡
            if(isset($tab)) {
              echo "<script>$(document).ready(function(){";
              switch ($tab) {
                case 'template':
                  echo "$('#uploadTab a[href=\'#template\']').tab('show');"; break;
                case 'sentence':
                  echo "$('#uploadTab a[href=\'#sentence\']').tab('show');"; break;
                case 'word':
                  echo "$('#uploadTab a[href=\'#word\']').tab('show');"; break;
                default: break;
              }
              echo "})</script>";
            }

//            if (true) {
//              echo "<script>
//$(document).ready(function(){
////$('#uploadTab a[href=\'#sentence\']').tab('show');
//});
//</script>";
//            }

            // 显示错误或者其他信息
            if (isset($error)) {
              echo "<div class='alert alert-block alert-danger'>
                      <button type='button' class='close' data-dismiss='alert'>
                        <i class='icon-remove'></i>
                      </button>" . $error . "</div>";
            }elseif (isset($info)) {
              echo "<div class='alert alert-block alert-info'>
                      <button type='button' class='close' data-dismiss='alert'>
                        <i class='icon-remove'></i>
                      </button>" . $info . "</div>";
            }
            ?>

            <div id="template" class="tab-pane active">
              <div class="widget-body">
                <div class="widget-main">
                  <?php echo form_open_multipart('upload/create_template') ?>
                    <div>
                      <label for="topic">主题</label>
                      <input type="text" class="form-control" id="topic" name="topic">
                    </div>
                    <div>
                      <label for="content">内容</label>
                      <textarea rows="24" class="form-control" id="content" name="content"></textarea>
                    </div>
                    <div>
                      <label>您也可以直接上传附件</label>
                      <input class="input-file" id="fileInput" type="file" name="userfile">
                    </div>
                    <div>
                      <label for="submit"> </label>
                      <div class="controls">
                        <input type="submit" value="提交" class="btn btn-inverse">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div id="sentence" class="tab-pane">
              <div class="widget-body">
                <div class="widget-main">
                  <?php echo form_open_multipart('upload/create_sentence') ?>
                    <div>
                      <label for="english">英文</label>
                      <textarea rows="4" class="form-control" id="english" name="english"></textarea>
                    </div>
                    <div>
                      <label for="chinese">对应中文</label>
                      <textarea rows="4" class="form-control" id="chinese" name="chinese"></textarea>
                    </div>
                    <div>
                      <label>您也可以直接上传附件</label>
                      <input class="input-file" id="fileInput" type="file" name="userfile">
                    </div>
                    <div>
                      <label for="submit"> </label>
                      <div class="controls">
                        <input type="submit" value="提交" class="btn btn-inverse">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div id="word" class="tab-pane">
              <div class="widget-body">
                <div class="widget-main">
                  <?php echo form_open_multipart('upload/create_word') ?>
                    <div>
                      <textarea rows="4" class="form-control" id="word1" name="word1"></textarea>
                    </div>
                    <label>替换</label>
                    <div>
                      <textarea rows="4" class="form-control" id="word2" name="word2"></textarea>
                    </div>
                    <div>
                      <label>您也可以直接上传附件</label>
                      <input class="input-file" id="fileInput" type="file" name="userfile">
                    </div>
                    <div>
                      <label for="submit"> </label>
                      <div class="controls">
                        <input type="submit" value="提交" class="btn btn-inverse">
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


      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
      </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->
<!--    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>-->
<!--    <script src="--><?php //echo base_url() ?><!--assets/js/bootstrap.min.js"></script>-->

    <!-- ace scripts -->
    <script src="<?php echo base_url() ?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ace.min.js"></script>

</body>
</html>