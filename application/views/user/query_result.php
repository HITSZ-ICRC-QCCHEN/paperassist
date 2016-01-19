<div class="container">
    <div align="center">
        <h4 align="right"><a href="<?php echo site_url('upload');?>">贡献句型</a></h4>
    </div>

    <form name="form1" action="<?php echo site_url('query');?>" method="post">
        <div class="input-group" id="btn_center">
            <input type="text" name="querytext" class="form-control input-lg" placeholder="Search for..." style="width: 600px;height:47px;">
            <button class="btn btn-primary" type="submit" onclick="return check();" style="width: 100px;height:47px;">&nbsp;&nbsp;查询&nbsp;&nbsp;</button>
        </div>
    </form>
    <br>
    <div>
        <div id="accordion" class="accordion-style1 panel-group"></div>

        <div id="accordion" class="accordion-style1 panel-group">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div class="row" style="margin: inherit">
                            <div class="col-md-10" style="padding: inherit">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <b class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></b>
                                    <b class="h4">&nbsp;模板</b>
                                </a>
                            </div>
                            <div class="col-md-2" style="padding: inherit">
                                <a class="accordion-toggle text-right" data-parent="#accordion" href="<?php echo site_url("query/query_template?querytext=$querytext");?>">
                                    <b class="h4">查看更多</b>
                                    <b class="icon-angle-right"></b>
                                    <b class="icon-angle-right">&nbsp;&nbsp;</b>
                                </a>
                            </div>
                        </div>
                    </h4>
                </div>

                <div class="panel-collapse collapse in" id="collapseOne">
                    <div class="panel-body">

                        <?php
                        @$template=$template?$template:array();
                        $length=count($template)<3?count($template):3;
                        if($length==0)
                            echo "<h4>未查找到您想要的结果！</h4>";
                        for($i=0;$i<$length;$i++): ?>

                            <a class="btn btn-link" style="font-size: large" href="#"><?php echo $template[$i]->topic?></a>
                            <div id="box">
                                <pre id="demoP" style="margin: 0px;font-family: 'Times New Roman';font-size: larger"><?php echo $template[$i]->statement;?></pre>
                                <?php if(strlen($template[$i]->statement)>600):?>
                                    <a id="demoBtn" class="btn btn-link pull-right">显示全部</a>
                                <?php endif;?>
                            </div>

                            <br><br>

                        <?php endfor;?>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div class="row" style="margin: inherit">
                            <div class="col-md-10" style="padding: inherit">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <b class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></b>
                                    <b class="h4">&nbsp;句子</b>

                                </a>
                            </div>
                            <div class="col-md-2" style="padding: inherit">
                                <a class="accordion-toggle text-right" data-parent="#accordion" href="<?php echo site_url("query/query_sentence?querytext=$querytext");?>">
                                    <b class="h4">查看更多</b>
                                    <b class="icon-angle-right"></b>
                                    <b class="icon-angle-right">&nbsp;&nbsp;</b>
                                </a>
                            </div>
                        </div>
                    </h4>
                </div>

                <div class="panel-collapse collapse in" id="collapseTwo">
                    <div class="panel-body">

                        <?php
                        @$sentence=$sentence?$sentence:array();
                        $length=count($sentence)<3?count($sentence):3;
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

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div class="row" style="margin: inherit">
                            <div class="col-md-10" style="padding: inherit">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <b class="icon-angle-down bigger-110" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></b>
                                    <b class="h4">&nbsp;词语</b>

                                </a>
                            </div>
                            <div class="col-md-2" style="padding: inherit">
                                <a class="accordion-toggle text-right" data-parent="#accordion" href="<?php echo site_url("query/query_word?querytext=$querytext");?>">
                                    <b class="h4">查看更多</b>
                                    <b class="icon-angle-right"></b>
                                    <b class="icon-angle-right">&nbsp;&nbsp;</b>
                                </a>
                            </div>
                        </div>
                    </h4>
                </div>

                <div class="panel-collapse collapse in" id="collapseThree">
                    <div class="panel-body">

                        <?php
                        @$word=$word?$word:array();
                        $length=count($word)<3?count($word):3;
                        if($length==0)
                            echo "<h4>未查找到您想要的结果！</h4>";
                        for($i=0;$i<$length;$i++): ?>
                            <pre style="margin: 0px;font-family: 'Times New Roman';font-size: larger"><?php
                                for($j=0;$j<count($word[$i]);$j++)
                                    if ($word[$i][$j]->rank == 1)
                                        echo $word[$i][$j]->statement . "   ";
                                echo "替换   ";
                                for($j=0;$j<count($word[$i]);$j++)
                                    if($word[$i][$j]->rank==0)
                                        echo $word[$i][$j]->statement."   ";
                                ?></pre>
                            <br>
                        <?php endfor;?>

                    </div>
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
