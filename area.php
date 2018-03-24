<?php
header('content-type:text/html;charset=utf-8');
    // 从文件中读取数据到PHP变量
   $json_string = file_get_contents('data/sec.json');
   // 用参数true把JSON字符串强制转成PHP数组
   $arr = json_decode($json_string, true);
   $obj=$arr[$_GET['index']];
   echo json_encode($obj);
?>