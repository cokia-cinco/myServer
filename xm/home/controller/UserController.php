<?php  
class UserController extends Controller
{
    private $userModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct();
        $this->CKS();
        $this->userModel = new UserModel('user');
    }

    //我的个人中心
    public function personal_center()
    {
        $uid = $_SESSION['home']['id'];
        $list = $this->userModel->getOne($uid);
        // var_dump($list);
        // die();
        // 
        $sql1 = "select count(id) as total from `order` where status='0' and user_id='$uid'";
        $row1 = DB::table('order')->query($sql1);
        $row1 = $row1['0']['total'];
        $sql2 = "select count(id) as total from `order` where status='2' and user_id='$uid'";
        $row2 = DB::table('order')->query($sql2);
        $row2 = $row2['0']['total'];
        $sql3 = "select count(id) as total from `order` where status='3' and user_id='$uid'";
        $row3 = DB::table('order')->query($sql3);
        $row3 = $row3['0']['total'];
        // var_dump($row1);
        // die;
        include './view/user/personal-center.php';
    }

    //我的订单##########################################################################################################################
    public function order()
    {
        // 获取当前登录用户的id
        $uid = $_SESSION['home']['id'];
    
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "nickname like '%{$_GET['n']}%'";
        }

        // 获取当前用户所有订单记录数
        $sql = "select id,count(id) as total from `order` where user_id='$uid'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
 
        
        // 获取分页信息
        $page = new Page($total, 15,'User','order');
        $limit = $page->limit();

        // 获取待支付订单总数
        $sql0 = "select count(id) as total from `order` where status = '0' and user_id='$uid'";
        $list0 = DB::table('order')->query($sql0);
      
        // 获取待发货订单总数
        $sql1 = "select count(id) as total from `order` where status = '1' and user_id='$uid'";
        $list1 = DB::table('order')->query($sql1);

        // 获取待收货订单总数
        $sql2 = "select count(id) as total from `order` where status = '2' and user_id='$uid'";
        $list2 = DB::table('order')->query($sql2);

        // 获取当前用户的所有订单信息
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE b.user_id = '$uid' and a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status!='4' and b.status!='5' order by  b.status limit {$limit}
        ";
        $row3 = DB::table('ordergoods')->query($sql3);
        foreach ($row3 as $key => $value) {
            $k=$value['ordernum'];
            $arrayName[$k][key($value)]= array_shift($value);
            $arrayName[$k][key($value)]= array_shift($value);
            $arrayName[$k][key($value)]= array_shift($value);
            $arrayName[$k][key($value)]= array_shift($value);
            $arrayName[$k][key($value)]= array_shift($value);
            $arrayName[$k][key($value)]= array_shift($value);
            $arrayName[$k]['goods'][] = $value;
        }

        //加载全部订单页面视图
        include './view/user/order.php';
    }

    //我的订单->订单回收站###############################################################################################################
    public function recycle()
    {
        //获取当前登录用户的id
        $uid = $_SESSION['home']['id'];

        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "nickname like '%{$_GET['n']}%'";
        }

        // 获取当前用户所有订单记录数
        $sql = "select id,count(id) as total from `order` where status = '5' and user_id='$uid'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        
        
        // 获取分页信息
        $page = new Page($total, 15,'User','recyle');
        $limit = $page->limit();

        // 获取待支付订单总数
        $sql0 = "select count(id) as total from `order` where status = '0' and user_id='$uid'";
        $list0 = DB::table('order')->query($sql0);

        // 获取待发货订单总数
        $sql1 = "select count(id) as total from `order` where status = '1' and user_id='$uid'";
        $list1 = DB::table('order')->query($sql1);

        // 获取待收货订单总数
        $sql2 = "select count(id) as total from `order` where status = '2' and user_id='$uid'";
        $list2 = DB::table('order')->query($sql2);

        // 获取当前用户的所有订单信息
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE b.user_id = '$uid' and a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='3'
        ";
        $row3 = DB::table('ordergoods')->query($sql3);
        // echo "<pre>";
        // var_dump($row3); 
        foreach ($row3 as $key => $value) {
          $k=$value['ordernum'];
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k]['goods'][] = $value;
        }


        include './view/user/recycle.php';
    }

    //我的订单->待支付
    public function unpaid()
    {

        $uid = $_SESSION['home']['id'];
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "nickname like '%{$_GET['n']}%'";
        }

        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '0' and user_id='$uid'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 15,'User','unpaid');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

      // $this->userModel->getall();
      // die();
        $sql = "delete from `cart`;";

        $result = DB::table('cart')->execute($sql);

        unset($_SESSION['CART']);
        // var_dump($result);
        // die();
        $sql = "select * from `order` where status = '0'";
        $list = DB::table('order')->query($sql);
        // var_dump($list);
        $sql0 = "select count(id) as total from `order` where status = '0' and user_id='$uid'";
        $list0 = DB::table('order')->query($sql0);
        // var_dump($list0['0']);
        // die();
        $sql1 = "select count(id) as total from `order` where status = '1' and user_id='$uid'";
        $list1 = DB::table('order')->query($sql1);

        $sql2 = "select count(id) as total from `order` where status = '2' and user_id='$uid'";
        $list2 = DB::table('order')->query($sql2);

        // echo "<pre>";
        // var_dump($list2['0']);
        // die();
        // $list2 = $list2['0'];
        // echo "<pre>";
        // var_dump($list);
        // die();

        
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE b.user_id = '$uid' and a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='0'
        ";
        $row3 = DB::table('ordergoods')->query($sql3);
        // echo "<pre>";
        // var_dump($row3); 
        foreach ($row3 as $key => $value) {
          $k=$value['ordernum'];
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k]['goods'][] = $value;
        }

        // echo "<pre>";
        // var_dump($arrayName);
        // echo "</pre>";
        // die();

        include './view/user/unpaid.php';
    }

    //我的订单->待发货
    public function waitgoods()
    {
        $uid = $_SESSION['home']['id'];
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "nickname like '%{$_GET['n']}%'";
        }

        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '1' and user_id='$uid'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 15,'User','waitgoods');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql = "select * from `order` where status = '1'";
        $list = DB::table('order')->query($sql);
        // var_dump($list);
        // $sql2 = "select count(id) as total from `order` where status = '1' ";
        // $list2 = DB::table('order')->query($sql2);
        // // echo "<pre>";
        // // var_dump($list2['0']);
        // // die();
        // $list2 = $list2['0'];

         $sql0 = "select count(id) as total from `order` where status = '0' and user_id='$uid'";
        $list0 = DB::table('order')->query($sql0);
        // var_dump($list0['0']);
        // die();
        $sql1 = "select count(id) as total from `order` where status = '1' and user_id='$uid'";
        $list1 = DB::table('order')->query($sql1);

        $sql2 = "select count(id) as total from `order` where status = '2' and user_id='$uid'";
        $list2 = DB::table('order')->query($sql2);

        // foreach ($_SESSION['CART'] as $key => $value) {
        //     // var_dump($key);

        //    //  echo "<pre>";
        //    // var_dump($value);
        //    $id = $key;
        //    // var_dump($id);
        //    $sql1 = "select * from goods where id ='$id'";
        //    // var_dump($sql1);
        //    $row1 = DB::table('cart')->query($sql1);
        //    // echo "<pre>";
        //    // var_dump($row1);
        //    $data[$key] = $row1;
           
        // }
        // foreach ($data as $key => $value) {
        //     // echo "<pre>";
        //     // var_dump($key,$value['0']);

        //     // echo "<pre>";
        //     $value['0']['num'] = $_SESSION['CART'][$key]['num'];
        //     $value['0']['iname'] = $_SESSION['CART'][$key]['iname'];
        //     $data1[$key] = $value;
        //    // var_dump($key,$value['0']);
        // }
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE b.user_id = '$uid' and a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='1'
        ";
        $row3 = DB::table('ordergoods')->query($sql3);
        // echo "<pre>";
        // var_dump($row3); 
        foreach ($row3 as $key => $value) {
          $k=$value['ordernum'];
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k]['goods'][] = $value;
        }
        include './view/user/waitgoods.php';
    }

    //我的订单->待收货
    public function waiting()
    {
        $uid = $_SESSION['home']['id'];
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "nickname like '%{$_GET['n']}%'";
        }

        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '2' and user_id='$uid'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 15,'User','waitgoods');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql = "select * from `order` where status = '2'";
        $list = DB::table('order')->query($sql);
        // var_dump($list);
        // $sql2 = "select count(id) as total from `order` where status = '1' ";
        // $list2 = DB::table('order')->query($sql2);
        // // echo "<pre>";
        // // var_dump($list2['0']);
        // // die();
        // $list2 = $list2['0'];

         $sql0 = "select count(id) as total from `order` where status = '0' and user_id='$uid'";
        $list0 = DB::table('order')->query($sql0);
        // var_dump($list0['0']);
        // die();
        $sql1 = "select count(id) as total from `order` where status = '1' and user_id='$uid'";
        $list1 = DB::table('order')->query($sql1);

        $sql2 = "select count(id) as total from `order` where status = '2' and user_id='$uid'";
        $list2 = DB::table('order')->query($sql2);

        // foreach ($_SESSION['CART'] as $key => $value) {
        //     // var_dump($key);

        //    //  echo "<pre>";
        //    // var_dump($value);
        //    $id = $key;
        //    // var_dump($id);
        //    $sql1 = "select * from goods where id ='$id'";
        //    // var_dump($sql1);
        //    $row1 = DB::table('cart')->query($sql1);
        //    // echo "<pre>";
        //    // var_dump($row1);
        //    $data[$key] = $row1;
           
        // }
        // foreach ($data as $key => $value) {
        //     // echo "<pre>";
        //     // var_dump($key,$value['0']);

        //     // echo "<pre>";
        //     $value['0']['num'] = $_SESSION['CART'][$key]['num'];
        //     $value['0']['iname'] = $_SESSION['CART'][$key]['iname'];
        //     $data1[$key] = $value;
        //    // var_dump($key,$value['0']);
        // }
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE b.user_id = '$uid' and a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='2'
        ";
        $row3 = DB::table('ordergoods')->query($sql3);
        // echo "<pre>";
        // var_dump($row3); 
        foreach ($row3 as $key => $value) {
          $k=$value['ordernum'];
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k]['goods'][] = $value;
        }
        include './view/user/waiting.php';
    }



    // //收货地址
    // public function address()
    // {
    //     include './view/user/address.php';
    // }

    //个人信息
    public function account()
    {
        include './view/user/account.php';
    }

    // //添加地址
    // public function doaddress()
    // {
        
    // }
    public function editaccount()
    {
        $id = $_SESSION['home']['id'];
        $list = $this->userModel->getOne($id);
        include "view/user/editpersonal.php";
    }


    public function edituser()
    {
        // var_dump($_POST);
        // die();
         
        $result = $this->userModel->edituser();
        // var_dump($result);
        // die();
        if ($result) {
            echo "<script>alert('修改信息成功!');location.href='index.php?c=user&a=personal_center';</script>";
            die();
        } else {
            echo "<script>alert('修改信息失败!');history.go(-1);</script>";
        }
        
    }







    public function comment()
    {   
        $uid = $_SESSION['home']['id'];
        $sql = "select id,count(id) as total from `order` where status ='3' and `user_id`='$uid'";
        // var_dump($sql);
        // die();
        $result1 = DB::table('order')->query($sql);
        // var_dump($result1);
        // die();
        $total = $result1[0]['total'];
        // var_dump($result1,$total);
        // die();

        // $result1 = DB::table('order')
        if (empty($result1[0]['id'])) {
            include "view/user/comment.php";
            # code...
        } else {
            $sql3 = "
                SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty,c.id as gid
                FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
                WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='3' and b.user_id='$uid'
                ";
                $row3 = DB::table('ordergoods')->query($sql3);
                // echo "<pre>";
                // var_dump($row3); 
                // die();
                foreach ($row3 as $key => $value) {
                  $k=$value['ordernum'];
                  $arrayName[$k][key($value)]= array_shift($value);
                  $arrayName[$k][key($value)]= array_shift($value);
                  $arrayName[$k][key($value)]= array_shift($value);
                  $arrayName[$k][key($value)]= array_shift($value);
                  $arrayName[$k][key($value)]= array_shift($value);
                  $arrayName[$k][key($value)]= array_shift($value);
                  $arrayName[$k]['goods'][] = $value;
                }
            include "view/user/comment1.php";
            # code...
        }
        
    }


    public function changepwd()
    {
        include "view/user/changepwd.php";
    }

    public function changepass()
    {
        // var_dump($_POST);
        // die();
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        $pwd = md5($pwd);

        $sql = "select pwd from user where id='$id'";
        $row = DB::table('user')->query($sql);
        $row = $row[0]['pwd'];
        // var_dump($row[0]['pwd']);
        // die();
        

        //判断原密码是否正确
        if ($pwd!=$row) {
           echo "<script>alert('请输入正确密码！');history.go(-1);</script>";
           die();
        } 

        //判断两次新密码输入是否一致
        if ($pass!==$repass) {
           echo "<script>alert('两次密码验证不一致！');history.go(-1);</script>";
           die();
        } 
        $pass = md5($pass);

        // var_dump($pwd,$pass);
        // die();

        if ($pwd==$pass) {
           echo "<script>alert('不能与原密码一致！');history.go(-1);</script>";
           die();
        } 


        $sql2 = "update user set pwd='$pass' where id='$id'";
        // var_dump($sql2);
        // die();
        $row2 = DB::table('user')->execute($sql2);
        // var_dump($row2);
        // die();
        if ($row2) {
            unset($_SESSION['home']);
            echo "<script>alert('修改密码成功！');location.href='index.php?c=Login&a=login';</script>";
        } else {
           echo "<script>alert('修改密码失败！');history.go(-1);</script>";
            # code...
        }
        
        

        
    }




 





















}
    









?>