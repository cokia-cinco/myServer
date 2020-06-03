<?php 

// 后台的基类
class Controller
{
    public function __construct()
    {
        // //验证用户是否正常登录，后台除login.php以外不能进行访问
        // if(!isset($_SESSION['user'])){
        //     echo "<script>alert('请登录后再进行访问');top.location.href='index.php?c=Login';</script>";
        //     die();
        // }
        // var_dump($_SESSION['admin']);
        if (empty($_SESSION['admin'])) {
            // 无SESSION信息,则需要登录
            // echo "<script>alert('请登录后再进行访问');top.location.href='index.php?c=Login';</script>";
            header('location: index.php?c=Login');
            exit;
        }
    }



    // 处理 调用不存在的方法
    public function __call($funName, $params)
    {
        header('HTTP/2.0 404 not found');
        exit('<h1>404 Not Found - 方法不存在</h1>');
    }
}


