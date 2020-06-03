<?php 

//  登录模型类
class LoginModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        //  实例化DB
        $this->db = DB::table($table);
    }

    // 查询指定的帐密数据
    public function doLogin()
    {
        // 接收表单数据
        $name = $_POST['user'];
        $pwd = md5($_POST['pass']);

        $sql = "select name,pwd from `admin_user`";
        $result = DB::table('admin_user')->query($sql);
        $result =$result[0];
        // var_dump($result);
        // die();
        
        if ($name!=$result['name']) {
            echo "<script>alert('账号输入错误');history.go(-1);</script>";
           die();
        } 

        if ($pwd!=$result['pwd']) {
            echo "<script>alert('密码输入错误');history.go(-1);</script>";
           die();
        } 
        
        

       
        
       
        
        // 查询该用户
        $result = $this->db
            ->field(['id','name','pwd','type'])
            ->where("name = '{$name}' AND pwd = '{$pwd}'")
            ->select();
        // var_dump($result);
        // die();

        // 判断用户是否存在
        if ($result) {
            // 写入session
            $_SESSION['admin']['id'] = $result[0]['id'];
            $_SESSION['admin']['name'] = $result[0]['name'];
            $_SESSION['admin']['type'] = $result[0]['type'];
            // var_dump($_SESSION['admin']);
            // die();
            return true;
        }
        // 登录失败
        return false;
    }
}

