<?php
header('content-type:text/html; charset=utf-8');
$str=file_get_contents('data/sec.json');
$arr=json_decode($str);
$obj=$arr[5];
echo json_encode($obj);
?>