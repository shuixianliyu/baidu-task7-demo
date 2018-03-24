<?php
    header('content-type:text/html; charset=utf-8');
    $json_string = file_get_contents('data/sec.json');
    $arr = json_decode($json_string, true);
    $obj=$arr[$_GET['index']];
    echo json_encode($obj);
?>