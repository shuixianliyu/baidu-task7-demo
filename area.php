<?php
header('content-type:text/html; charset=utf-8');
//读取json文件
$str = file_get_contents('data/sec.json');
// 转化为 php中的数组
$arr = json_decode($str);
$obj=$arr[$_POST['index']];
echo json_encode($obj);
?>