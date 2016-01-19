<div class="container">
    <div align="center">
        <h4 align="right"><a href="<?php echo site_url('upload');?>">贡献句型</a></h4>
        <!--        <h2>英语论文写作助手</h2>-->
    </div>

    <form name="form1" action="<?php echo site_url('query/query_sentence');?>" method="get">
        <div class="input-group" id="btn_center">
            <input type="text" name="querytext" class="form-control input-lg" placeholder="Search for..." style="width: 600px;height:47px;">
            <button class="btn btn-primary" type="submit" onclick="return check();" style="width: 100px;height:47px;">&nbsp;&nbsp;查询句子&nbsp;&nbsp;</button>
        </div>
    </form>
    <br><br>
    <div>
        <div class="panel panel-default">
            <div class="panel-collapse collapse in" id="collapseTwo">
                <div class="panel-body">

                    <?php
                    @$sentence=$sentence?$sentence:array();
                    $length=count($sentence);
                    if($length==0)
                        echo "<h4>未查找到您想要的结果！</h4>";
                    for($i=0;$i<$length;$i++): ?>
                        <pre style="margin: 0px;font-family: 'Times New Roman';font-size: larger"><?php
                            for($j=0;$j<count($sentence[$i]);$j++)
                                if ($sentence[$i][$j]->language == "english")
                                    echo "        ".$sentence[$i][$j]->statement;
                            echo "\n";
                            for($j=0;$j<count($sentence[$i]);$j++)
                                if($sentence[$i][$j]->language == "chinese")
                                    echo "        ".$sentence[$i][$j]->statement;
                            ?></pre>
                        <br>
                    <?php endfor;?>

                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    function check(){
        if(form1.querytext.value=="") {
            //alert("查询内容不能为空！");
            form1.querytext.focus();
            return false;
        }
    }
</script>
