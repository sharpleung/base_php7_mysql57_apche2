<?php
date_default_timezone_set('Asia/Shanghai');//设置时区
header("Content-Type: text/html;charset=utf-8");//设置当前文本编码
session_start();
$server = "127.0.0.1";
$username = "root";
$passwd = "root";
$dbname = "ctf";
$conn = new mysqli($server,$username,$passwd,$dbname);
if ($conn->connect_error<>0){
	die("Error".$conn->connect_error);
}
$conn->set_charset('utf8')or die("set charset fail");
?>