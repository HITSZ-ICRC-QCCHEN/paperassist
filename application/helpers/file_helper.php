<?php

function detectUTF8($string)
{
    return preg_match('%(?:
        [\xC2-\xDF][\x80-\xBF]        # non-overlong 2-byte
        |\xE0[\xA0-\xBF][\x80-\xBF]               # excluding overlongs
        |[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}      # straight 3-byte
        |\xED[\x80-\x9F][\x80-\xBF]               # excluding surrogates
        |\xF0[\x90-\xBF][\x80-\xBF]{2}    # planes 1-3
        |[\xF1-\xF3][\x80-\xBF]{3}                  # planes 4-15
        |\xF4[\x80-\x8F][\x80-\xBF]{2}    # plane 16
        )+%xs', $string);
}

function detect_encoding( $filename )
{
    $subject = file_get_contents($filename);
    echo "$subject<br>";
    $encoding = mb_detect_encoding($subject, "UTF-8, GBK, ISO-8859-1");
    echo "file $filename is $encoding.<br>";
}

function convert_encoding_to_utf8( $filename )
{
    $subject = file_get_contents($filename);
    $encoding = mb_detect_encoding($subject, "UTF-8, GBK, ISO-8859-1");
    if ($encoding == 'UTF-8') return;

    $sj_encoded = mb_convert_encoding($subject, 'UTF-8', $encoding);// 转换文件编码
    echo "$sj_encoded<br>";
    if (!($fp = fopen($filename, 'w+'))) {
        echo "Converting encoding failed - cannot open file.<br>";
        exit;
    }
    if(fwrite($fp, utf8_encode($sj_encoded)) === FALSE)
    {
        echo $filename."Converting encoding failed - cannot write.<br>";
        exit;
    }
    echo "file $filename Converted to UTF-8！<br>";
    fclose($fp);
}

function readDoc( $filename )
{
//    $word = new com('word.application') or die('无法打开word');
//    $word->Visiable = false;
////    $doc_file = '/path/to/doc';
//    $word->Open($filename);
////    $text = '这段文字将被写到word文档中去';
////    $word->Selection->TypeText($text);
////    //保存
////    $word->ActiveDocument->Save();
//    //读取内容
//    $doc_file_contents = $word->ActiveDocument->Content->Text;
//    //输出word内容
//    $word->PrintOut();
//    $word->Close();

    define('wdPropertyTitle', 1);
    define('wdPropertySubject', 2);
    define('wdPropertyAuthor', 3);
    define('wdPropertyKeywords', 4);
    define('wdPropertyComments', 5);
    define('wdPropertyTemplate', 6);
    define('wdPropertyLastAuthor', 7);

    $word = new COM("word.application") or die ("Could not initialise MS Word object.");
    $word->Documents->Open($filename);
    $Author = $word->ActiveDocument->BuiltInDocumentProperties(wdPropertyAuthor);

    echo $Author;
}

?>

