<?php  
class OrderController extends Controller
{
    private $orderModel; // 保存 OrderModel 对象

    public function __construct()
    {
        parent::__construct();
        // $this->orderModel = new OrderModel();
    }

    public function index()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order`";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        
        // 获取分页信息
        $page = new Page($total, 10,'order','index');
        $limit = $page->limit();
        // var_dump($page, $limit);


        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' order by  b.status limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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
        include "view/order/orderlist.html";
    }


    public function unpaid()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '0'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10,'order','unpaid');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='0' limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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
        include "view/order/unpaid.html";
    }

    public function waitgoods()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '1'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10,'order','waitgoods');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='1' limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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

        include "view/order/waitgoods.html";
    }

    public function waiting()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '2'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10,'order','waiting');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='2' limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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

        include "view/order/waiting.html";
    }

    public function complete()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '3'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10,'order','comple');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='3' limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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

        include "view/order/complete.html";
    }


    public function cancel()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '4'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10,'order','comple');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='4' limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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

        include "view/order/cancel.html";
    }


    public function comments()
    {
        // 从模型中 获取总记录数
        $sql = "select id,count(id) as total from `order` where status = '6'";
        $total = DB::table('order')->query($sql);
        $total = $total[0]['total'];
        // var_dump($total);
        // die();
        // $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10,'order','comments');
        $limit = $page->limit();
        // var_dump($page, $limit);
        // die();

        // var_dump($this->userModel);
        // $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;

        $sql3 = "
        SELECT b.id,b.status,b.oname,b.ordernum,b.allprice,b.createtime,c.gname,d.iname,a.price,a.qty
        FROM `ordergoods` AS a, `order` AS b,`goods` AS c, `image` AS d 
        WHERE a.order_id = b.id and c.id=d.goods_id and a.goods_id=c.id and d.cover='1' and b.status='6' limit $limit
        ";
        // echo "<pre>";
        // var_dump($sql3); 
        // die();
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

        include "view/order/comments.html";
    }



    public function delivery()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
        // var_dump($id,$status);
        // die();
        if ($status==1) {
            $status=2;
        }

        $sql = "update `order` set `status`='$status' where id = '$id'";
        $result = DB::table('order')->execute($sql);
        if ($result) {
           echo "<script>alert('发货成功!');location.href='index.php?c=order&a=waiting';</script>";
        } else {
           echo "<script>alert('发货失败，请重试!');history.go(-1);</script>";
            # code...
        }
    }
     























































































}














































?>