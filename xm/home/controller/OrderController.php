<?php 
 
// 订单的控制器
class OrderController extends Controller
{
    private $orderModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct();
        $this->orderModel = new OrderModel('order');
    }



    //待支付订单
    public function unpaid1()
    {
        $list=$this->orderModel->unpaid1();
        header("location:index.php?c=user&a=unpaid");
    }
    
    public function orderview()
    {
        $id = $_GET['id'];
        $sql = "select status from `order` where id = '$id'";
        $result = DB::table('order')->query($sql);
        // var_dump($result['0']);
        // die();
        if ($result['0']['status']==0) {
            $this->orderview0();
        } elseif ($result['0']['status']==1) {
            $this->orderview1();
        } elseif ($result['0']['status']==2) {
            $this->orderview2();
        } elseif ($result['0']['status']==3) {
            $this->orderview3();
        }
        
    }

    public function orderview0()
    {
        if (!empty($_GET['status'])) {
         $status = $_GET['status'];
        } 
        
        $status = $_GET['status'];
        $id1 = $_GET['id'];
        // var_dump($id,$status);
        $sql = "select * from `order` where id = '$id1'";
        $list = DB::table('order')->query($sql);
        // echo "<pre>";
        // var_dump($list['0']);
        $list = $list['0'];

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.id='$id1'
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

        include "view/user/orderview0.php";
    }

    public function orderview1()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
        $sql = "select * from `order` where id = '$id'";
        $list = DB::table('order')->query($sql);
        // echo "<pre>";
        // var_dump($list['0']);
        $list = $list['0'];
        
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.id='$id'
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
        include "view/user/orderview1.php";
    }

    public function orderview3()
    {
      $id = $_GET['id'];
        $sql = "select * from `order` where id = '$id'";
        $list = DB::table('order')->query($sql);
        // echo "<pre>";
        // var_dump($list['0']);
        $list = $list['0'];
        
        $sql3 = "
        SELECT b.id,b.status,b.oname,b.address,b.phone,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.id='$id'
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
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k][key($value)]= array_shift($value);
          $arrayName[$k]['goods'][] = $value;
        }
        include "view/user/orderview2.php";
    }

//这是支付功能。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。
    public function wait()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
        if ($status==0) {
            $status=1;
        }

        $sql = "update `order` set `status`='$status' where id = '$id'";
        $result = DB::table('order')->execute($sql);
        if ($result) {
           echo "<script>alert('支付成功!');location.href='index.php?c=user&a=waitgoods';</script>";
        } else {
           echo "<script>alert('支付失败，请重试!');history.go(-1);</script>";
            # code...
        }
        
        
    }

//这是确认收货功能。。。。。。。。。。。。。。。。
    public function receipt()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
        // var_dump($id,$status);
        // die();
        if ($status==2) {
            $status=3;
        }

        $sql = "update `order` set `status`='$status' where id = '$id'";
        $result = DB::table('order')->execute($sql);
        if ($result) {
           echo "<script>alert('确认收货成功!');location.href='index.php?c=user&a=order';</script>";
        } else {
           echo "<script>alert('确认收货失败，请重试!');history.go(-1);</script>";
            # code...
        }
    }


//这是删除订单的。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。
    public function del()
    {
      $id = $_GET['id'];
      $status = $_GET['status'];
      if ($status!=3) {
          $status=5;
        }
      $sql = "update `order` set `status`='$status' where id = '$id'";
        $result = DB::table('order')->execute($sql);
        if ($result) {
           echo "<script>alert('删除成功!');history.go(-1);</script>";
        } else {
           echo "<script>alert('删除失败，请重试!');history.go(-1);</script>";
            # code...
        }

    }

//这是还原订单的。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。
    public function restore()
    {
        $id = $_GET['id'];
        $status = 3;

        $sql = "update `order` set `status`='$status' where id = '$id'";
        $result = DB::table('order')->execute($sql);
        if ($result) {
           echo "<script>alert('还原订单成功!');location.href='index.php?c=user&a=order';</script>";
        } else {
           echo "<script>alert('还原订单失败，请重试!');history.go(-1);</script>";
            # code...
        }
    }



    public function com()
    {
        $goods_id= $_GET['id'];
        // var_dump($goods_id);
        // die();
        $ordernum = $_GET['ordernum'];
        $status = $_GET['status'];
        $sql = "
            SELECT I.iname, G.id, G.gname, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.id = '$goods_id'
        ";

        $list = DB::table('goods')->query($sql);
        // var_dump($list);
        // die();

        include "view/user/Service-evaluation.php";
    }


    public function addcom()
    {
        // var_dump($_POST);
        // die();
        $data = $_POST;

        $result = DB::table('comment')->insert($data);
        // var_dump($result);
        // die();
        $status = $_POST['status'];
        $ordernum = $_POST['ordernum'];
        $status = 6;

        $sql = "update `order` set  status='$status' where `ordernum`='$ordernum'";
        // var_dump($sql);
        // die();
        $row = DB::table('order')->execute($sql);
        echo "<script>alert('评论成功成功!');location.href='index.php?c=user&a=personal_center';</script>";

    }


    public function cancel()
    {
        $status = $_GET['status'];
        $id = $_GET['id'];
        $status = 4;
        // var_dump($id,$status);
        // die();
        // 
        // 
        $sql = "update `order` set  status='$status' where `id`='$id'";
        // var_dump($sql);
        // die();
        $row = DB::table('order')->execute($sql);
        if ( $row) {
            echo "<script>alert('取消订单成功!');location.href='index.php?c=user&a=order';</script>";
        } else {
            echo "<script>alert('取消订单失败!');history.go(-1);</script>";
        }
        
         
    }











}

