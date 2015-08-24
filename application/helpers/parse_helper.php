<?php

// 正则表达式(单词替换的每一项)
//$pattern = '/[\d+][\.、]+[ ,()\[\]A-Za-z\xe0-\xef\x80-\xbf]+/';

function word_parse( $filename ) {
//    $item_pattern = "/[\d]+[\.、]+[ ,.'\/()\[\]A-Za-z\xe0-\xef\x80-\xbf]+/";
    $item_pattern = "/[\d]+[\.、]+[^0-9]+/";
    $lbrac_pattern = "/（/";
    $rbrac_pattern = "/）/";
    $mode_pattern1 = '/[\w ]+替?换[成|为][\w ]+/';
    $mode_pattern2 = '/[\w ]+替?换[\w ]+/';
    $token_pattern = '/[\A-Za-z() ]+/'; // 提取的包括词组（但是可能前后会有空格，需要使用trim函数去掉）

    $subject = file_get_contents($filename);
    // 取出每一项
    preg_match_all($item_pattern, $subject, $item_matches);

    foreach ($item_matches[0] as $item) {
        $item = trim($item);// 去掉字符串前后的空格
        // 将中文括号替换成英文括号，方便处理
        header("content-type:text/html;charset=utf-8");
        mb_regex_encoding('utf-8');//设置正则替换所用到的编码
//        preg_replace($lbrac_pattern, "(", $item);
//        preg_replace($rbrac_pattern, ")", $item);
        mb_ereg_replace('（', '(', $item);
        mb_ereg_replace('）', '>', $item);
        echo $item.'<br>'; // 输出整句

        // 去掉每一项后面的括号备注说明
        $len = strlen($item);
//        $a = $item[$len-1];
//        echo "$len "."$a"."<br>";
        $pos = $len;
        if($item[$len-1] == ')') {
            $pos = strrchr($item, '(');
        }else if($item[$len-1] == '）') {
            $pos = strrchr($item, '（');
        }
        $item = substr($item, 0, $pos);
        echo $item;

        //检查语句格式
        if (preg_match($mode_pattern1, $item)) {
            echo '替换成(为)<br>';
        }elseif (preg_match($mode_pattern2, $item)) {
            // 分别提取出"替换"前后的单词
            $pieces = explode('换', $item);
            $token_matches = array();
            for($i = 0; $i< 2; $i++) {
                preg_match_all($token_pattern, $pieces[$i], $token_matches[$i]);
            }
//            var_dump($token_matches[0]);
            foreach($token_matches[0][0] as $token) {
                $trimmed = trim($token);
                var_dump($trimmed);
            }
            echo '替换<br>';
            foreach($token_matches[1][0] as $token) {
                $trimmed = trim($token);
                var_dump($trimmed);
            }
        }else {
            echo '无法识别的语句格式.<br>';
        }
    }
}

function template_parse( $filename ) {
    $item_pattern = "/[\d一二三四五六七八九十]+[\.、]+[^0-9]+/";
    $subject = file_get_contents($filename);
    // 取出每一项
    preg_match_all($item_pattern, $subject, $item_matches);

    foreach ($item_matches[0] as $item) {
        $item = trim($item);// 去掉字符串前后的空格
        echo "$item<br>";
    }
}
