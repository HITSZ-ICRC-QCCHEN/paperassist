

<div class="main-content">
  <div class="page-content">
    <div class="page-header">
      <h1>
        系统管理
        <small>
          <i class="icon-double-angle-right"></i>
          角色管理
        </small>
      </h1>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

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
                <?php
                if(isset($roles)) {
                  $index = 1;
                  foreach($roles as $role) {
                    ?>
                    <tr>
                      <td class="center">
                        <label>
                          <input class="ace" type="checkbox">
                          <span class="lbl"></span>
                        </label>
                      </td>

                      <td><?php echo $index?></td>
                      <td>
                       <span class="label label-sm label-warning"><?php echo $role->name ?></span>
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
                  <?php
                   $index++;
                 }
                }
                ?>
                </tbody>
              </table>
              <button class="btn btn-primary">添加角色</button>
            </div>
          </div>
        </div><!-- /row -->

        <!-- PAGE CONTENT ENDS -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.page-content -->
</div><!-- /.main-content -->

