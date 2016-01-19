<div class="container">
	<div align="center">
		<h3 align="right"><a href="<?php echo site_url('upload');?>">贡献句型</a></h3>
		<br><br><br>
		<h2>英语论文写作助手</h2>
	</div>
	<br><br><br><br>

	<form name="form1" action="<?php echo site_url('query');?>" method="post">
		<div class="input-group" id="btn_center">
			<input type="text" name="querytext" class="form-control input-lg" placeholder="Search for..." style="width: 600px;height:47px;">
			<button class="btn btn-primary" type="submit" onclick="return check();" style="width: 100px;height:47px;">
				&nbsp;&nbsp;查询&nbsp;&nbsp;
			</button>
		</div>
	</form>
</div> <!-- /container -->

<script language="javascript">
	function check(){
		if(form1.querytext.value=="") {
			//alert("查询内容不能为空！");
			form1.querytext.focus();
			return false;
		}
	}
</script>