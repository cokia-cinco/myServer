<?php 

// 导入配置文件
require '../public/config.php';

// 自动加载所需类
spl_autoload_register('mvc_autoload');
function mvc_autoload($Cname)
{
    if (file_exists('./controller/'.$Cname.'.php')) {
        require './controller/'.$Cname.'.php';
    } elseif (file_exists('./model/'.$Cname.'.php')) {
        require './model/'.$Cname.'.php';
    } elseif (file_exists('../public/'.$Cname.'.php')) {
        require '../public/'.$Cname.'.php';
    } else {
        header('HTTP/2.0 404 not found');
        exit('<h1>404 Not Found - 控制器不存在</h1>');
    }
}

// 获取用户的 访问参数
// 获取 控制器名
$controllerName = empty($_GET['c'])?'Index':$_GET['c'];
// 获取 操作名
$actionName = empty($_GET['a'])?'index':$_GET['a'];

// 使用对应参数的类的方法了
// 拼装类名
$className = $controllerName . 'Controller';

// 实例化控制器
$controller = new $className();
// var_dump($controller);
// 调用控制器里的方法
$controller->$actionName();





