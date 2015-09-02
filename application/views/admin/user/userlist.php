<?php
function get_rolename($roles, $role_id) {
  foreach($roles as $role) {
    if($role->id == $role_id) return $role->name;
  }
  return "unknown role";
}
?>
<div class="main-content">
  <div class="page-content">
    <div class="page-header">
      <h1>
        系统管理
        <small>
          <i class="icon-double-angle-right"></i>
          用户列表
        </small>
      </h1>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

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
                    <th aria-label="ID: activate to sort column ascending" style="width: 196px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="sorting_asc">编号</th>
                    <th aria-label="Username: activate to sort column ascending" style="width: 135px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="sorting">用户名</th>
                    <th aria-label="Regtime: activate to sort column ascending" style="width: 147px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="hidden-480 sorting">注册时间</th>
                    <th aria-label="Lasttime: activate to sort column descending" aria-sort="ascending" style="width: 218px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="hidden-480 sorting">最后登录时间</th>
                    <th aria-label="Role: activate to sort column ascending" style="width: 188px;" colspan="1" rowspan="1" aria-controls="sample-table-2" tabindex="0" role="columnheader" class="hidden-480 sorting">角色</th>
                    <th aria-label="" style="width: 201px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled">操作</th>
                  </tr>
                  </thead>
                  <tbody aria-relevant="all" aria-live="polite" role="alert">
                  <?php if(isset($users)) {
                    $index = 1;
                    foreach ($users as $user) {
                      $clazz = $index % 2 == 1 ? "odd" : "even";
                    ?>
                    <tr class="<?php echo $clazz ?>">
                      <td class="center">
                        <label>
                          <input class="ace" type="checkbox">
                          <span class="lbl"></span>
                        </label>
                      </td>

                      <td class=" "><?php echo $index ?></td>
                      <td class=" "><?php echo $user->user_name ?></td>
                      <td class="hidden-480"><?php echo $user->reg_time ?></td>
                      <td class=" sorting_1"><?php echo $user->last_login_time ?></td>

                      <td class="hidden-480">
                        <span class="label label-sm label-warning">
                          <?php echo get_rolename($roles, $user->role_id) ?>
                        </span>
                      </td>

                      <td class=" ">
                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                          <a class="green" href="#">
                            <i class="icon-pencil bigger-130"></i>
                          </a>

                          <a class="red" href="#">
                            <i class="icon-trash bigger-130"></i>
                          </a>
                        </div>

                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                          <div class="inline position-relative">
                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                              <i class="icon-caret-down icon-only bigger-120"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                              <li>
                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                            <span class="blue">
                              <i class="icon-zoom-in bigger-120"></i>
                            </span>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                            <span class="green">
                              <i class="icon-edit bigger-120"></i>
                            </span>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                            <span class="red">
                              <i class="icon-trash bigger-120"></i>
                            </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php
                    $index++;
                    }
                  } ?>
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-sm-6">
                    <button class="btn btn-primary">添加用户</button>
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

        <!-- PAGE CONTENT ENDS -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.page-content -->
</div><!-- /.main-content -->
