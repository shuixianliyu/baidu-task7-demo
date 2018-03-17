<?php
header('content-type:text/html; charset=utf-8');
//echo header("Access-Control-Allow-Origin:*"); 
echo file_get_contents('data/sec.json');
?>