<?php 

// 登录类
class LoginController
{
    public function index()
    {
        // 登录页面
        include './view/login/index.html';
    }

    public function doLogin()
    {
        //var_dump($_POST);
        
        $user=trim($_REQUEST['user']);//去掉左右两侧的空格  trim()
        //echo $user;
        //echo "<br>";
        
        //获得密码
        $pass=trim($_POST['pass']);
        //echo $pass;
        //echo "<br>";
        
        //获得验证码
        // $code=trim($_POST['code']);
        //echo $code;
        
        //判断用户名是否输入
        if($user==""){
            echo "<script>alert('账号不能为空');history.go(-1);</script>";
            die ();
        }
        //判断密码是否输入
        if($pass==""){
            echo "<script>alert('密码不能为空');history.go(-1);</script>";
            die ();
        }
        // //判断验证码是否输入
        // if($code==""){
        //     echo "<script>alert('验证码不能为空');history.go(-1);</script>";
        //     die ();
        // }
        // //比对验证码  注意启用session
        // if($code!=$_SESSION['codenum']){
        //     echo "<script>alert('验证码错误');history.go(-1);</script>";
        //     die ();
        // }

        // 执行登录
        $loginModel = new loginModel('admin_user');
        // var_dump($loginModel);
        if ($loginModel->doLogin()) {
            echo "<script>alert('登录成功,正在跳转!');location.href='index.php';</script>";
        } else {
            echo "<script>alert('登陆失败,请重新登录!');location.href='index.php?c=Login';</script>";
        }
    }


    // 登出
    public function logout()
    {
        // 删除SESSION中的对应数据
        unset($_SESSION['id']);
        // unset($_SESSION['user']);
        // unset($_SESSION['level']);
        // unset($_SESSION['manage']);
        echo "<script>alert('退出成功，正在跳转!');location.href='index.php?c=Login';</script>";
    }

    
}


