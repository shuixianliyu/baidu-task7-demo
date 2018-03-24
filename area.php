<?php
header('content-type:text/html; charset=utf-8');
$txt="Hello world!";
$x=5;
$y=10.5;
$json_string=fil_get_contents('data/sec.json');
$arr=json_decode($json_string);
$obj=$arr[$_GET['index']];
echo json_encode($obj);
?>