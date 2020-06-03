<?php
header("content-type:text/html;charset=utf-8");
//设置时区
date_default_timezone_set("PRC");
define("HOST","localhost");
define("USERNAME","root");
define("USERPASS","root");
define("DB","ds");
$con=mysqli_connect(HOST,USERNAME,USERPASS,DB);
if(!$con){
    die("连接失败" . mysqli_connect_error());
}
//
include 'function.php';
?>