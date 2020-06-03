<?php 

// 用户的控制器
class LoginController extends Controller
{
    private $LoginModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct();
        $this->LoginModel = new LoginModel('user');
    }

    public function login()
    {
        include './view/login/login.php';
    }

    public function logindo()
    {
        // 处理注册
        // // 验证码判断, 需要统一格式
        // $SV = strtoupper($_SESSION['vcode']);
        // $PV = strtoupper($_POST['vcode']);
        // if (empty($PV)) {
        //     redirect('请填写验证码!');
        //     exit;
        // }
        // if ($SV !== $PV) {
        //     redirect('验证码输入错误!!!');
        //     exit;
        // }
        // // 通过了验证码的验证,则验证码就无用,则应该被删除
        // unset($_POST['vcode']);

        // 处理登录
        $data = $this->LoginModel->logindo();

        if ($data) {
            redirect("",'index.php', 0);
        } else {
            redirect('登录失败,请检查登录信息!');
        }
    }

    

    public function logout()
    {
        unset($_SESSION['home']);
        unset($_SESSION['CART']);
        redirect('已退出账户', 'index.php');
    }

    

}


