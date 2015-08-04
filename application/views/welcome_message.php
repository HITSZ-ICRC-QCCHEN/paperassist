<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>英语论文写作助手 - 让你的论文瞬间变得高大上</title>

	<!-- Bootstrap -->
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<script language="javascript">
	function check(){
		if(form1.querytext.value=="") {
			alert("查询内容不能为空！");
			form1.querytext.focus();
			return false;
		}
	}
</script>
<body>
<h1 align="center">欢迎来到英语论文写作助手</h1>
<h3 align="center"><a href="<?php echo site_url('contribute');?>">贡献句型</a></h3>

<form name="form1" action="<?php echo site_url('ctrl_querysentence/query');?>" method="post">
<table align="center">
	<tr>
		<td><h3 align="center">查询</h3></td>
		<td><input type="text" name="querytext"></td>
		<td><input type="submit" value="提交" onclick="return check();"></td>
	</tr>
</table>
</form>

<?php if(@$arren || @$arrcn):?>
<?php if(@$arren):?>
<h4 align="center">英文搜索结果</h4>
<table border="1" align="center" width="1000">
	<tr>
		<th align="center">句型</th>
		<th align="center">所属用户</th>
		<th align="center">评分</th>
	</tr>
	<?php
	foreach($arren as $item): ?>
		<tr>
			<td align="center"><?=$item->statement?></td>;
			<td align="center"><?=$item->user_name?></td>;
			<td align="center"><?=$item->points?></td>;
		</tr>
	<?php endforeach;?>
</table>
<?php else:?>
<h4 align="center">无英文搜索结果</h4>
<?php endif;
if(@$arrcn):?>
<br><br><h4 align="center">中文搜索结果</h4>
<table border="1" align="center" width="1000">
	<tr>
		<th align="center">句型</th>
		<th align="center">所属用户</th>
		<th align="center">评分</th>
	</tr>
	<?php foreach($arrcn as $item): ?>
		<tr align="center">
			<td align="center"><?=$item->statement?></td>;
			<td align="center"><?=$item->user_name?></td>;
			<td align="center"><?=$item->points?></td>;
		</tr>
	<?php endforeach; ?>
</table>
<?php else:?>
<br><br><h4 align="center">无中文搜索结果</h4>
<?php endif;
endif;?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
</body>
</html>