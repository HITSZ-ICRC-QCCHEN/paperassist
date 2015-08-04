<p><a class='pull-right' href="<?php echo base_url() ?>">返回首页</a></p>
<div data-example-id="togglable-tabs">
  <label>提交</label>
  <ul id="myTabs" class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#sentence" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">句型</a></li>
    <li role="presentation" class=""><a href="#template" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">模板</a></li>
  </ul>
  <div id="myTabContent" class="tab-content">
    <div role="tabpanel" class="tab-pane fade active in" id="sentence" aria-labelledby="sentence-tab">
      <form class="navbar-form navbar-left" method="post" action="<?php echo site_url('contribute/create_sentence'); ?>">
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
              <input type="text" class="input-xlarge" id="foreign" name="foreign">
          </div>
          <div class="control-group">
            <label class="control-label" for="chinese">中</label>
              <input type="text" class="input-xlarge" id="chinese" name="chinese">
          </div>
          <div class="control-group">
            <label class="control-label" for="reference">参考文献</label>
            <!-- <div class="controls"> -->
              <input type="text" class="input-xlarge" id="reference" name="reference">
            <!-- </div> -->
          </div>
          <div class="control-group">
            <label class="control-label">如果句型太多请提交附件，仅支持txt、word格式</label>
            <!-- File Upload -->
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
    </div>
    <div role="tabpanel" class="tab-pane fade" id="template" aria-labelledby="template-tab">
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
            <!-- File Upload -->
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
    </div>
  </div>
</div>
