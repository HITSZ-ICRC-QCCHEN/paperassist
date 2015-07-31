<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>用户登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .loginBox{width:420px;padding:0 20px;border:1px solid #fff; color:#000; margin-top:40px; border-radius:8px;background: white;box-shadow:0 0 15px #222; background: -moz-linear-gradient(top, #fff, #efefef 8%);background: -webkit-gradient(linear, 0 0, 0 100%, from(#f6f6f6), to(#f4f4f4));font:11px/1.5em 'Microsoft YaHei' ;position: absolute;left:50%;top:50%;margin-left:-210px;margin-top:-115px;}
    .loginBox h2{font-size:20px;font-weight:normal;}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="loginBox">
        <h2>用户登录</h2>
        <?php echo form_open('admin/login');?>
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">用户名</label> -->
            <input type="username" class="form-control" id="username" name="username" placeholder="用户名">
          </div>
          <div class="form-group">
            <!-- <label for="exampleInputPassword1">密码</label> -->
            <input type="password" class="form-control" id="password" name="password" placeholder="密码">
          </div>
          <div class="form-group">
            <input type="radio" value="内容审核员" name="rolename" checked="checked">内容审核员
            <input type="radio" value="管理员" name="rolename">管理员
          </div>
<!--          <div class="checkbox">-->
<!--            <label>-->
<!--              <input type="checkbox" name="rememberme"> 下次自动登录-->
<!--            </label>-->
<!--          </div>-->
          <button type="submit" class="btn btn-primary">登录</button>
        </form>
        <p class="alert alert-danger"><?php if(isset($login_error)) echo $login_error; ?></p>
      </div>
    </div>
  </body>
</html>