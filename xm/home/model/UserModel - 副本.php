<?php 

//  用户模型类
class UserModel
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
            redirect('请输入有效的手机号码');
            return false;
        }

        // 手机号 是否已被注册
        $row = $this->db
            ->field(['id','tel'])
            ->where('tel = '.$tel)
            ->select();
        // var_dump($row);
        if (!empty($row)) {
            redirect('该手机号已被注册!');
            return false;
        }

        // 密码验证
        $pass = $_POST['pwd'];
        $repass = $_POST['repwd'];

        // 两次密码是否一致
        if ($pass !== $repass) {
            redirect('两次密码不一致');
            return false;
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


        // 邮箱
        $preg = '/^[\w\.-]+@\w+(\.\w+){1,3}$/i';
        if (! preg_match($preg, $_POST['email'])) {
            redirect('邮箱输入格式有误!');
            return false;
        }

        // 昵称 是否已被注册
        $nickname = $_POST['nickname'];
        $row = $this->db
            ->field(['id'])
            ->where("nickname = '{$nickname}'")
            ->select();
        // var_dump($row);
        if (!empty($row)) {
            redirect('该昵称已被占用');
            return false;
        }

        // 如果还有其他字段 自己玩....
        
        // 执行插入
        $data = $this->db->insert();
        return $data;
    }


    public function logindo()
    {
        // 手机号 格式是否正确
        $tel = $_POST['tel'];
        $preg = '/^1[3456789]\d{9}$/';
        if (!preg_match($preg, $tel)) {
            redirect('请输入有效的手机号码');
            return false;
        }

        // 手机号 是否已被注册
        $row = $this->db
            ->field(['id','tel','pwd','nickname','status'])
            ->where('tel = '.$tel)
            ->select();
        // var_dump($row);
        // 检查帐号不存在则,注册
        if (empty($row)) {
            redirect('该手机账户尚未注册, 请先注册!','index.php?c=user&a=reg', 5);
            return false;
        }

        // 密码验证是否一致
        $pass = md5($_POST['pwd']);
        if ($pass !== $row[0]['pwd']) {
            redirect('密码有误!请重新输入');
            return false;
        }

        // 检查该账户 是否被禁用
        if ($row[0]['status'] == 0) {
            redirect('该账户已被禁用,请联系管理员申诉解禁: 13888888888','index.php', 30);
            return false;
        }

        // 如果还有其他数据 自己玩...
        
        // 存储登录信息
        $_SESSION['home']['id'] = $row[0]['id'];
        $_SESSION['home']['name'] = $row[0]['nickname'];
        $_SESSION['home']['tel'] = $row[0]['tel'];

        return true;
    }





}

