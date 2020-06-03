<?php  
class RegController extends Controller
{
    private $RegModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct();
        $this->RegModel = new RegModel('user');
    }

    public function reg()
    {
        include './view/reg/reg.php';
    }

    public function regdo()
    {
        // var_dump($_SESSION, $_POST);
        // exit();
        // 处理注册
        // 验证码判断, 需要统一格式
        $SV = strtoupper($_SESSION['vcode']);
        $PV = strtoupper($_POST['vcode']);
        if (empty($PV)) {
            redirect('请填写验证码!');
            exit;
        }
        if ($SV !== $PV) {
            redirect('验证码输入错误!!!');
            exit;
        }
        // 通过了验证码的验证,则验证码就无用,则应该被删除
        unset($_POST['vcode']);

        // 表单不为空
        foreach ($_POST as $key => $val) {
            if ($val == '') {
                redirect('请完善表单信息!!!');
                exit;
            }
        }

        // user模型 处理注册数据
        $data = $this->RegModel->regUser();
        
        if ($data) {
            // 注册成功
            redirect('注册成功!即将跳转到登录页面','index.php?c=Login&a=login');
            exit;
        }

        redirect('注册失败!');
    }

    // 获取生成验证码
    public function getYZM()
    {
        yzm(150,42,1,1);
    }
}









?>