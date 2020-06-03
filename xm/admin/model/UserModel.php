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

    public function getAll($limit, $where)
    {
        // return $this->db->select();
        return $this->db
            ->field(['id','nickname','tel','email','status','province','age','state','sex'])
            ->where($where)
            ->limit($limit)
            ->select();
        
    } 

    public function getOne()
    {   
        $id = $_GET['id'];
        return $this->db->find($id);
    }

    public function getCount($where)
    {
        if ($where === null) {
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->select();
        } else {
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->where($where)
                ->select();
        }
        
        return $row[0]['total'];
    }

    public function doDel()
    {
        $id = $_GET['id'];

 
        $data = $this->db->delete($id);
        return $data;
    }

    public function doEdit()
    {
        $data = $_POST;
        // echo "<pre>";
        // var_dump($data);
        // die();
       
        //判断号码格式是否正确
        $tel = $_POST['tel'];
        $preg = '/^1[3456789]\d{9}$/';
        if (!preg_match($preg, $tel)) {
            echo "<script>alert('请输入有效的11位手机号码！');history.go(-1);</script>";
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
        
        // 判断昵称是否为空
        $nickname = $data['nickname'];
        if($nickname==""){
            echo "<script>alert('昵称不能为空');history.go(-1);</script>";
            die ();
        } 
  
        //判断该昵称是否已被注册
        $sql1 = "select id from `user` where id!='$user_id' and `nickname`='$nickname'";
        $row1 = DB::table('user')->query($sql1);
        if ($row1) {
            echo "<script>alert('该昵称已被注册，请重新输入！');history.go(-1);</script>";
            die ();
        } 


        // 判断邮箱格式是否正确
        $preg = '/^[\w\.-]+@\w+(\.\w+){1,3}$/i';
        if (! preg_match($preg, $data['email'])) {
            echo "<script>alert('邮箱输入格式有误!');history.go(-1);</script>";
            die ();
        }

        //判断年龄是否合理
        $age = $data['age'];
        if($age>=120||$age<0){
            echo "<script>alert('请输入合理的年龄，0~120之间');history.go(-1);</script>";
            die ();
        }

        //如果没做任何修改
        $sql2 = "select * from `user` where id='$user_id'";
        $result2 = DB::table('user')->query($sql2);
        $result2 = $result2[0];
        // echo "<pre>";
        // var_dump($result2);
        // die();
        if ($result2['tel']==$tel&&$result2['nickname']==$nickname&&$result2['age']==$age&&$result2['sex']==$_POST['sex']&&$result2['status']==$_POST['status']&&$result2['email']==$_POST['email']) {
            echo "<script>alert('未做任何修改!');location.href='index.php?c=user';</script>";
            die();
        } 
        
        
       
        
        
        // 编辑用户
        $result = $this->db->update($data);
        // var_dump($result);
        // die();
        return $result;
    }

    public function state()
    {
        $v=$_GET['v'];
        $id=$_GET['id'];
        // var_dump($v,$id);
        // die();
        $data=array('state'=>$v,'id'=>$id);
        $result= $this->db->update($data);
        // var_dump($result);
        // die();
        return $result;
    }

}

