<div class="container">
    <div align="center">
        <h4 align="right"><a href="<?php echo site_url('upload');?>">贡献句型</a></h4>
    </div>

    <form name="form1" action="<?php echo site_url('query/query_template');?>" method="get">
        <div class="input-group" id="btn_center">
            <input type="text" name="querytext" class="form-control input-lg" placeholder="Search for..." style="width: 600px;height:47px;">
            <button class="btn btn-primary" type="submit" onclick="return check();" style="width: 100px;height:47px;">&nbsp;&nbsp;查询模板&nbsp;&nbsp;</button>
        </div>
    </form>
    <br><br>
    <div>
        <div class="panel panel-default">
            <div class="panel-collapse collapse in" id="collapseOne">
                <div class="panel-body">

                    <?php
                    @$template=$template?$template:array();
                    $length=count($template);
                    if($length==0)
                        echo "<h4>未查找到您想要的结果！</h4>";
                    for($i=0;$i<$length;$i++): ?>

                        <a class="btn btn-link" style="font-size: large" href="#"><?php echo $template[$i]->topic?></a>
                        <div id="box">
                            <pre id="demoP" style="margin: 0px;font-family: 'Times New Roman';font-size: larger"><?php echo $template[$i]->statement;?></pre>
                            <?php if(strlen($template[$i]->statement)>600):?>
                                <a id="demoBtn" class="btn btn-link pull-right" onclick="showHideCode();">显示全部</a>
                            <?php endif;?>
                        </div>

                        <br><br>

                    <?php endfor;?>

                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->

<script language="javascript">
    function check(){
        if(form1.querytext.value=="") {
            //alert("查询内容不能为空！");
            form1.querytext.focus();
            return false;
        }
    }
    function show(demoP,demoBtn) {
        var oP = document.getElementById(demoP);
        var oBtn = document.getElementById(demoBtn);
        var allContent = oP.innerHTML;
        if (oP.innerHTML < 600) {
            oBtn.innerHTML = "";
        }
        oP.innerHTML = oP.innerHTML.substr(0, 600);
        oBtn.onclick = function () {
            if (oBtn.innerHTML == "显示全部") {
                oP.innerHTML = allContent;
                oBtn.innerHTML = "收起";
            } else {
                oP.innerHTML = oP.innerHTML.substr(0, 600);
                oBtn.innerHTML = "显示全部";
            }
        }
    }
    show('demoP','demoBtn');

</script>
