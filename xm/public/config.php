<?php 
// 设置时间戳时区
date_default_timezone_set('PRC');
// 开启session
session_start();
// 设置错误开关,生产环境一定要关掉!!
ini_set('display_errors','On');

// 连接 PDO 的参数
define('DSN', 'mysql:host=localhost;dbname=xm;charset=utf8');
define('USER', 'root');
define('PASS', '970222');


// 前台样式的 目录路径
define('HOME_CSS', '/home/static/css/');
define('HOME_IMG', '/home/static/img/');
define('HOME_JS', '/home/static/js/');

// 后台样式的 目录路径
define('ADMIN_CSS', '/admin/static/css/');
define('ADMIN_IMG', '/admin/static/images/');
define('ADMIN_JS', '/admin/static/js/');

// 上传目录
define('UPLOAD', '../uploads/');

// 导入自定义函数库
include '../public/functions.php';



?>