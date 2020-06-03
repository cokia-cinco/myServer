<?php 

//  管理员模型类
class AdminModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        // 实例化DB
        $this->db = DB::table($table);
    }

    public function getAll($limit, $where)
    {
        return $this->db
            ->field(['id','name','type','lasttime','loginip'])
            ->where($where)
            ->limit($limit)
            ->select();
    }

    public function getOne()
    {   
        $id = $_GET['id'];
        return $this->db->find($id);
    }

    public function doDel()
    {
        // var_dump($_SESSION['admin']['type']);
        // die();
        if((int)$_SESSION['admin']['type']<999){
            echo "<script>alert('权限不够，无权操作');history.go(-1);</script>";
            die();
        }
        $id=$_GET['id'];

        $sql="select id  from admin_user where id='$id' and `type`='999'";
        $result = DB::table('admin_user')->query($sql);
        // var_dump($result);
        // die();
        if($result){
            echo "<script>alert('当前管理员为超级管理员，您无权操作');history.go(-1);</script>";
            die();
        }

        return $this->db->delete($id);
    }

    public function doAdd()
    {
        // $data = $_POST;
        // var_dump($data);
        // die();
        $adminuser=trim($_POST['name']);
        $admintype=trim($_POST['type']);
        $adminpass=trim($_POST['pwd']);
        $readminpass=trim($_POST['repwd']);
        
        //进行验证
        if($adminuser==""){
            echo "<script>alert('账号不能为空');history.go(-1);</script>";
            die ();
        }
        if($adminpass==""){
            echo "<script>alert('密码不能为空');history.go(-1);</script>";
            die ();
        }
        if($readminpass==""){
            echo "<script>alert('确认密码不能为空');history.go(-1);</script>";
            die ();
        }
        //两次密码一致性
        if($readminpass!=$adminpass){
            echo "<script>alert('两次密码输入不一致');history.go(-1);</script>";
            die ();
        }
        //转换管理内容
        if($admintype==999){
            $manage="ALL";
        }else{
            // var_dump($_POST);
            // die;
            $manage=@($_POST['manage']);
            if (!empty($manage)) {
                // var_dump($manage);
                // die();
                $manage=@implode(",",$manage);
               
            } else {
                echo "<script>alert('请分配管理员权限');history.go(-1);</script>";
                die ();
            }

        }
        // var_dump($manage);
        // die();
        
        //密码加密
        $adminpass=md5($adminuser . $adminpass);
        //最后登录时间
        $lasttime=time();
        //管理员账号验证 是否重复
        $yzzh = $this->db->find($adminuser,'name');
        // var_dump($yzzh);
        // die();
        if(!empty($yzzh)){
            echo "<script>alert('该账号已存在');history.go(-1);</script>";
            die ();
        }


        $data = array('manage'=>$manage,'name'=>$adminuser,'pwd'=>$adminpass,'type'=>$admintype,'lasttime'=>$lasttime);
        // var_dump($data);
        // die();
        $ID = $this->db->insert($data);

        return $ID;
    }

    public function doEdit()
    { 
        // echo "<pre>";
        // $data=$_POST;
        // var_dump($data);
        // die();

        $id = $_POST['id'];
        $adminuser=$_POST['adminname'];
        $adminpass=$_POST['adminpwd'];
        $readminpass=$_POST['readminpwd'];

        if($adminuser==""){
            echo "<script>alert('账号不能为空');history.go(-1);</script>";
            die ();
        }
        if($adminpass==""){
            echo "<script>alert('密码不能为空');history.go(-1);</script>";
            die ();
        }

        if($readminpass==""){
            echo "<script>alert('确认密码不能为空');history.go(-1);</script>";
            die ();
        }

        //两次密码一致性
        if($readminpass!=$adminpass){
            echo "<script>alert('两次密码输入不一致');history.go(-1);</script>";
            die ();
        }

        if($_SESSION['admin']['type']==999){
            $admintype=$_POST['type'];
            if($admintype==999){
                $manage="ALL";
            }else{
                $manage=$_POST['manage'];
                // var_dump($manage);
                // die();
                $manage=implode(",",$manage);
            }
        }

        $data = array('id'=>$id,'manage'=>$manage,'name'=>$adminuser,'pwd'=>$adminpass,'type'=>$admintype);
        $result = $this->db
                ->update($data);
        return $result;
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

}

