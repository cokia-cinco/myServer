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

    public function getOne($id)
    {
        return $this->db->find($id);
    }

    public function edituser()
    {
        $data = $_POST;
        $data['age'] = (int)$_POST['age'];
        // var_dump($data);
        // die();
         
        //判断手机号的正确性
        $tel = $_POST['tel'];
        $preg = '/^1[3456789]\d{9}$/';
        if (!preg_match($preg, $tel)) {
            echo "<script>alert('请输有效的十一位手机号码！');history.go(-1);</script>";
            die ();
        }

        //判断该手机号是否已被注册
        $user_id = $data['id']; //用户id
        $sql = "select id from `user` where id!='$user_id' and `tel`='$tel'";
        $row = DB::table('user')->query($sql);
        if ($row) {
            echo "<script>alert('该手机号已被注册，请确认手机号码是否正确！');history.go(-1);</script>";
            die ();
        } 

        //判断该昵称是否已被注册
        $nickname = $data['nickname'];
        $sql1 = "select id from `user` where id!='$user_id' and `nickname`='$nickname'";
        $row1 = DB::table('user')->query($sql1);
        if ($row1) {
            echo "<script>alert('该昵称已被注册，请重新输入！');history.go(-1);</script>";
            die ();
        } 
        
        //判断年龄的合理性
        $age = $data['age'];
        if($age>=120||$age<0){
            echo "<script>alert('请输入合理的年龄，0~120之间');history.go(-1);</script>";
            die ();
        }

        // 判断邮箱格式的正确性
        $preg = '/^[\w\.-]+@\w+(\.\w+){1,3}$/i';
        if (! preg_match($preg, $data['email'])) {
            echo "<script>alert('邮箱输入格式有误，请重新输入!');history.go(-1);</script>";
            die ();
        }

        //如果没做任何修改
        $sql2 = "select * from `user` where id='$user_id'";
        $result2 = DB::table('user')->query($sql2);
        $result2 = $result2[0];
        // echo "<pre>";
        // var_dump($result2);
        // die();
        if ($result2['tel']==$tel&&$result2['nickname']==$nickname&&$result2['age']==$age&&$result2['sex']==$_POST['sex']&&$result2['email']==$_POST['email']) {
            echo "<script>alert('未做任何修改!');location.href='index.php?c=user&a=personal_center';</script>";
            die();
        } 



        return $this->db->update($data);
    }
   
     
    




}

