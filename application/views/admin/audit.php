
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

                  <div id="auditContent" class="tree-folder" style="display: block;">
                    <div class="tree-folder-header">
                      <!-- <i class="icon-plus"></i> -->
                      <div class="tree-folder-name">未审核内容(<span class="red"></span>)</div>
                    </div>
                    <div style="display: block;" class="tree-folder-content">
                      <div class="tree-item tree-selected" style="display: block;" data-toggle="tab" href="#template">
                        <div class="tree-item-name tree-item-template">模板(<span class="red"></span>)
                        </div>
                      </div>
                      <div class="tree-item" style="display: block;" data-toggle="tab" href="#sentence">
                        <div class="tree-item-name tree-item-sentence">句子(<span class="red"></span>)</div>
                      </div>
                      <div class="tree-item" style="display: block;" data-toggle="tab" href="#word">
                        <div class="tree-item-name tree-item-word">单词(<span class="red"></span>)</div>
                      </div>
                    </div>
                    <div class="tree-loader" style="display: none;">
                      <div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>
                    </div>
                  </div>

                  <div id="auditDoc" class="tree-folder" style="display: block;">
                    <div class="tree-folder-header">
                      <div class="tree-folder-name">未审核文档(<span class="red">10</span>)</div>
                    </div>
                    <div style="display: block;" class="tree-folder-content">
                      <div class="tree-item" style="display: block;" data-toggle="tab" href="#template">
                        <div class="tree-item-name tree-item-template">模板(<span class="red">2</span>)
                          <a href="javascript:;" title="打开文件所在目录">
                            <i class="icon-folder-open"></i>
                          </a>
                        </div>
                      </div>
                      <div class="tree-item" style="display: block;" data-toggle="tab" href="#sentence">
                        <div class="tree-item-name tree-item-sentence">句子(<span class="red">3</span>)
                          <a href="javascript:;" title="打开文件所在目录">
                            <i class="icon-folder-open"></i>
                          </a>
                        </div>
                      </div>
                      <div class="tree-item" style="display: block;" data-toggle="tab" href="#word">
                        <div class="tree-item-name tree-item-word">单词(<span class="red">5</span>)
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
                              <form method="post" action="">
                                <div>
                                  <label for="topic">主题</label>
                                  <input type="text" class="form-control" id="topic" name="topic">
                                </div>
                                <div>
                                  <label for="content">内容</label>
                                  <textarea rows="18" class="form-control" id="content" name="content"></textarea>
                                </div>
                                <div class="btn-cont-group">
                                  <label for="submit"> </label>
                                  <div class="controls">
                                    <input type="button" value="通过" class="btn btn-inverse btn-pass">
                                    <input type="button" value="不通过" class="btn btn-inverse btn-unpass">
                                  </div>
                                </div>
                                <div class="btn-doc-group" style="display: none;">
                                  <label for="submit"> </label>
                                  <div class="controls">
                                    <input type="button" value="添加" class="btn btn-inverse btn-add">
                                    <input type="button" value="重置" class="btn btn-inverse btn-reset">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="sentence" class="tab-pane">
                        <div class="widget-box">
                          <div class="widget-header"><h4>审核句子</h4></div>
                          <div class="widget-body">
                            <div class="widget-main">
                              <form method="post" action="">
                                <div>
                                  <label for="english">英文</label>
                                  <textarea class="form-control" id="english" name="english"></textarea>
                                </div>
                                <div>
                                  <label for="chinese">对应中文</label>
                                  <textarea class="form-control" id="chinese" name="chinese"></textarea>
                                </div>
                                <div class="btn-cont-group">
                                  <label for="submit"> </label>
                                  <div class="controls">
                                    <input type="button" value="通过" class="btn btn-inverse btn-pass">
                                    <input type="button" value="不通过" class="btn btn-inverse btn-unpass">
                                  </div>
                                </div>
                                <div class="btn-doc-group" style="display: none;">
                                  <label for="submit"> </label>
                                  <div class="controls">
                                    <input type="button" value="添加" class="btn btn-inverse btn-add">
                                    <input type="button" value="重置" class="btn btn-inverse btn-reset">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="word" class="tab-pane">
                        <div class="widget-box">
                          <div class="widget-header"><h4>审核单词</h4></div>
                          <div class="widget-body">
                            <div class="widget-main">
                              <form method="post" action="">
                                <div>
                                  <!-- <label for="word1">单词</label> -->
                                  <textarea class="form-control" id="word1" name="word1"></textarea>
                                </div>
                                <label>替换</label>
                                <div>
                                  <!-- <label for="word2">单词</label> -->
                                  <textarea class="form-control" id="word2" name="word2"></textarea>
                                </div>
                                <div class="btn-cont-group">
                                  <label for="submit"> </label>
                                  <div class="controls">
                                    <input type="button" value="通过" class="btn btn-inverse btn-pass">
                                    <input type="button" value="不通过" class="btn btn-inverse btn-unpass">
                                  </div>
                                </div>
                                <div class="btn-doc-group" style="display: none;">
                                  <label for="submit"> </label>
                                  <div class="controls">
                                    <input type="button" value="添加" class="btn btn-inverse btn-add">
                                    <input type="button" value="重置" class="btn btn-inverse btn-reset">
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

    <script>
    $(document).ready(function(){
      // 全局变量
      var ti = 0, si = 0, wi = 0;
      var template = <?php echo $template ?>;
      var sentence = <?php echo $sentence ?>;
      var word     = <?php echo $word ?>;
      var tCount = <?php echo count(json_decode($template)) ?>;
      var sCount = <?php echo count(json_decode($sentence)) / 2 ?>;
      var wCount = <?php echo count(json_decode($word)) / 2 ?>;
      var totalCount = tCount + sCount + wCount;

      // 加载页面数据
      loadTree();
      loadForm();

      // 切换表单
      $(".tree-item").click(function(){
        $(".tree-selected").removeClass("tree-selected");
        $(this).addClass("tree-selected");
      });

      // 显示相应的按钮组
      $("#auditContent .tree-item").click(function(){
        loadForm();
        $('.btn-cont-group').css('display', "block");
        $('.btn-doc-group').css('display', "none");
      });
      $("#auditDoc .tree-item").click(function(){
        clearForm();
        $('.btn-cont-group').css('display', "none");
        $('.btn-doc-group').css('display', "block");
      });

      // 打开相应文档目录
      $(".tree-item-name>a").click(function(){
        alert("打开目录");
        return false;// 屏蔽其他事件
      });

      function loadTree() {
        $('#auditContent .tree-folder-name span').text(totalCount);
        $('#auditContent .tree-item-template span').text(tCount);
        $('#auditContent .tree-item-sentence span').text(sCount);
        $('#auditContent .tree-item-word span').text(wCount);
      }

      function loadForm() {
        if(ti < tCount) {
          $('#topic').val(template[ti].topic);
          $('#content').val(template[ti].statement);
        }else {
          disable_audit("template");// 设置按钮不可用
        }
        if(si < sCount) { // 只有中英文一起才显示审核
          $('#english').val(sentence[si].statement);
          $('#chinese').val(sentence[si+1].statement);
        }else {
          disable_audit("sentence");
        }
        if(wi < wCount) {
          $('#word1').val(word[wi].statement);
          $('#word2').val(word[wi+1].statement);
        }else {
          disable_audit("word");
        }
      }

      function clearForm() {
        $('#topic').val("");
        $('#content').val("");
        $('#english').val("");
        $('#chinese').val("");
        $('#word1').val("");
        $('#word2').val("");
      }

      function disable_audit( typeId ) {
        $("#"+typeId+" .btn-pass").attr("disabled", true);
        $("#"+typeId+" .btn-unpass").attr("disabled", true);
      }

      function enable_audit( typeId ) {
        $("#"+typeId+" .btn-pass").attr("disabled", false);
        $("#"+typeId+" .btn-unpass").attr("disabled", false);
      }

      $("#template .btn-cont-group .btn").click(function(){
        var data = {
          pass: 1, // 默认审核通过
          id: template[ti].id,
          topic: $('#topic').val(),
          content: $('#content').val()
        };
        if($(this).hasClass('btn-unpass')) {
          data['pass'] = 0;
        }
        $.ajax({
          type: 'POST',
          url: "<?=site_url('/admin/audit/doaudit_template')?>",
          data: data,
          dataType: "json",
          success: function(data, status){
            alert(data);
            totalCount--;tCount--;ti++;
            $('#auditContent .tree-folder-name span').val(totalCount);
            $('#auditContent .tree-item-template span').val(tCount);
            var topic = "", content = "";
            if(tCount > 0) {
              topic = template[ti].topic;
              content = template[ti].statement;
            }
            $('#topic').val(topic);
            $('#content').val(content);
            return true;
          },
          error: function(){
            alert("系统出错，无法审核！");// Ajax failed
            return false;
          }
        });
      });
      $("#template .btn-doc-group .btn-add").click(function(){
        var topic = $('#topic').val();
        var content = $('#content').val();
        if(topic == "" || content == "") {
          alert("主题和内容输入框都不能为空");
          return;
        }
        var data = {
          topic: topic,
          content: content
        };
        $.ajax({
          type: 'POST',
          url: "<?=site_url('/admin/audit/add_template')?>",
          data: data,
          dataType: "json",
          success: function(data, status){
            alert("添加成功");
            $('#topic').val("");
            $('#content').val("");
            return true;
          },
          error: function(){
            alert("系统出错，无法添加！");// Ajax failed
            return false;
          }
        });
      });
      $("#template .btn-doc-group .btn-reset").click(function() {
        $('#topic').val("");
        $('#content').val("");
      });

      $("#sentence .btn-cont-group .btn").click(function(){
        var data = {
          pass: 1, // 默认审核通过
          id1: sentence[si].id,
          id2: sentence[si+1].id,
          english: $('#english').val(),
          chinese: $('#chinese').val()
        };
        if($(this).hasClass('btn-unpass')) {
          data['pass'] = 0;
        }
        $.ajax({
          type: 'POST',
          url: "<?=site_url('/admin/audit/doaudit_sentence')?>",
          data: data,
          dataType: "json",
          success: function(data, status){
            alert(data);
            totalCount--;sCount--;si = si + 2;
            $('#auditContent .tree-folder-name span').val(totalCount);
            $('#auditContent .tree-item-sentence span').val(sCount);
            var english = "", chinese = "";
            if(sCount > 0) {
              english = sentence[si].statement;
              chinese = sentence[si+1].statement;
            }
            $('#english').val(english);
            $('#chinese').val(chinese);
            return true;
          },
          error: function(){
            alert("系统出错，无法审核！");// Ajax failed
            return false;
          }
        });
      });
      $("#sentence .btn-doc-group .btn-add").click(function(){
        var english = $('#english').val();
        var chinese = $('#chinese').val();
        if(english == "" || chinese == "") {
          alert("英文及其对应中文输入框都不能为空");
          return;
        }
        var data = {
          english: english,
          chinese: chinese
        };
        $.ajax({
          type: 'POST',
          url: "<?=site_url('/admin/audit/add_sentence')?>",
          data: data,
          dataType: "json",
          success: function(data, status){
            alert("添加成功");
            $('#english').val("");
            $('#chinese').val("");
            return true;
          },
          error: function(){
            alert("系统出错，无法添加！");// Ajax failed
            return false;
          }
        });
      });
      $("#sentence .btn-doc-group .btn-reset").click(function() {
        $('#english').val("");
        $('#chinese').val("");
      });

      $("#word .btn-cont-group .btn").click(function(){
        var data = {
          pass: 1, // 默认审核通过
          id1: word[wi].id,
          id2: word[wi+1].id,
          word1: $('#word1').val(),
          word2: $('#word2').val()
        };
        if($(this).hasClass('btn-unpass')) {
          data['pass'] = 0;
        }
        $.ajax({
          type: 'POST',
          url: "<?=site_url('/admin/audit/doaudit_word')?>",
          data: data,
          dataType: "json",
          success: function(data, status){
            alert(data);
            totalCount--;wCount--;wi = wi + 2;
            $('#auditContent .tree-folder-name span').val(totalCount);
            $('#auditContent .tree-item-word span').val(wCount);
            var word1 = "", word2 = "";
            if(wCount > 0) {
              word1 = word[wi].statement;
              word2 = word[wi+1].statement;
            }
            $('#word1').val(word1);
            $('#word2').val(word2);
            return true;
          },
          error: function(){
            alert("系统出错，无法审核！");// Ajax failed
            return false;
          }
        });
      });
      $("#word .btn-doc-group .btn-add").click(function(){
        var word1 = $('#word1').val();
        var word2 = $('#word2').val();
        if(word1 == "" || word2 == ""){
          alert("两个单词输入框都不能为空");
          return;
        }
        var data = {
          word1: word1,
          word2: word2
        };
        $.ajax({
          type: 'POST',
          url: "<?=site_url('/admin/audit/add_word')?>",
          data: data,
          dataType: "json",
          success: function(data, status){
            alert("添加成功");
            $('#word1').val("");
            $('#word2').val("");
            return true;
          },
          error: function(){
            alert("系统出错，无法添加！");// Ajax failed
            return false;
          }
        });
      });
      $("#word .btn-doc-group .btn-reset").click(function() {
        $('#word1').val("");
        $('#word2').val("");
      });

    });
    </script>
