<?php 

//  用户模型类
class RegModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        // 实例化DB
        $this->db = DB::table($table);
    }

    public function regUser()
    {
        // 手机号 格式是否正确
        $tel = $_POST['tel'];
        $preg = '/^1[3456789]\d{9}$/';
        if (!preg_match($preg, $tel)) {
            echo "<script>alert('请输入有效的11位手机号码！');history.go(-1);</script>";
            die ();
        }

        // 手机号 是否已被注册
        $row = $this->db
            ->field(['id','tel'])
            ->where('tel = '.$tel)
            ->select();
        // var_dump($row);
        if (!empty($row)) {
            echo "<script>alert('该手机号已被注册，请确认手机号码是否正确！');history.go(-1);</script>";
            die ();
        }
 
        // 密码验证
        $pass = $_POST['pwd'];
        $repass = $_POST['repwd'];

        // 两次密码是否一致
        if ($pass !== $repass) {
            echo "<script>alert('两次密码验证不一致！');history.go(-1);</script>";
            die ();
            // redirect('两次密码不一致');
            // return false;
        } else {
            // 如果密码一致,则删除掉重复输入的密码 repwd
            unset($_POST['repwd']);

            // 密码格式
            $preg = '/^[\S]{4,32}$/';
            if (!preg_match($preg, $pass)) {
                redirect('密码格式不合法');
                return false;
            }
            // 加密密码 (安全法规定)
            $_POST['pwd'] = md5($pass);
        }


        
        // 执行插入
        $data = $this->db->insert();
        return $data;
    }


   




}

