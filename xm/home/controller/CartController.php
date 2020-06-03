<?php 
 
// 购物车的控制器
class CartController extends Controller
{
    private $cartModel; // 保存自定义模型对象

    public function __construct()
    {

        parent::__construct();
        $this->CKS();
        $this->cartModel = new CartModel('goods');
    }

    public function shop()
    {

        $gid = $_GET['id']; // 商品ID

        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale,G.stock, G.msg,U.email
            FROM goods G, image I, user U
            WHERE I.goods_id = G.id AND I.cover = 1 AND  G.id = '{$gid}'
        ";

        $list = DB::table('goods')->query($sql);
        $list = $list[0];
        // echo "<pre>";
        // var_dump($list);
        // die();
        

        $imglist = DB::table('image')
            ->field(['iname'])
            ->where("goods_id = '{$gid}' AND cover = 0")
            ->select();
        // var_dump($imglist);
        include './view/cart/shopping.php';
        
    }

    public function index()
    {
        $this->CKS();
        $id = $_GET['id'];
        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 LIMIT 10
        ";

        $list = DB::table('goods')->query($sql);

        $num = 0;
        foreach ($_SESSION['CART'] as $key => $value) {
           //  echo "<pre>";
           // var_dump($value['num']);
           
           $num += $value['num'];
           
        }

        $uid = $_SESSION['home']['id'];
        // var_dump($uid);
        // die();
        $sql3 = "select subtotal from cart where `user_id`='$uid'";
        // var_dump($sql3);
        // die();
        $row3 = DB::table('cart')->query($sql3);
        // var_dump($row3);
        // die();
        $subtotal = 0;
        foreach ($row3 as $key => $value) {
           // var_dump($value);
           foreach ($value as $key1 => $value1) {
               // var_dump($value1);
               $subtotal += $value1;

           }
        }


            

            // echo "<pre>";
            // var_dump($list2);
            // die();
            
        
        
        
        $this->docart();

        // $total = $this->cartModel->getCount();
        // var_dump($total);
        // die();
     
        // include './view/cart/cart.php';
        header('location: index.php?c=cart&a=index1');
        
        


    }

    public function docart()
    {
        // echo "<pre>";
        // var_dump($_SESSION);
        // die();
        $cart = $this->cartModel->docart();
        // include './view/cart/cart.php';
        // 
        
    }

    public function index1()
    {

        // var_dump($_POST);
        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 LIMIT 10
        ";

        $list = DB::table('goods')->query($sql);

        // $num = '';
        // foreach ($_SESSION['CART'] as $key => $value) {
        //     //  echo "<pre>";
        //     // var_dump($key,$value);
        //     // die();
        //     $num += $value['num'];
            
        // }
        // var_dump($num);
        if (!empty($_SESSION['CART'])){
            $num = 0;
            foreach ($_SESSION['CART'] as $key => $value) {
           //  echo "<pre>";
           // var_dump($value['num']);
           
           $num += $value['num'];

            }
        } 
        
        
        // $sql2 = "select num from cart";
        // $row = DB::table('cart')->query($sql2);
        // // var_dump($row);
        // $num = 0;
        // foreach ($row as $key => $value) {
        //    // var_dump($value);
        //    foreach ($value as $key1 => $value1) {
        //        // var_dump($value1);
        //        $num += $value1;

        //    }
        // }
         // var_dump($num);
        $user_id = $_SESSION['home']['id'];
        $sql3 = "select subtotal from cart where `user_id`='$user_id'";
        $row3 = DB::table('cart')->query($sql3);
        $subtotal = 0;
        foreach ($row3 as $key => $value) {
           // var_dump($value);
           foreach ($value as $key1 => $value1) {
               // var_dump($value1);
               $subtotal += $value1;

           }
        }

        if (!empty($_SESSION['CART'])) {
            include './view/cart/cart.php';
        } else {
            include './view/cart/cart-empty.php';
        }
    }


    public function del()
    {
        $id = $_GET['goods_id'];
        $result = $this->cartModel->del($id);
        // var_dump($result);
        if ($result) {
            header('location: index.php?c=cart&a=index1');
            // echo "<script>alert('删除购物车商品成功！');history.go(-1);</script>";
            // header('location:'.$_SERVER['HTTP_REFERER']);
        } else {
            echo "<script>alert('删除购物车商品失败！');history.go(-1);</script>";
        }
        
    }


    public function buy()
    {
        // echo "<pre>";
        // var_dump($_SESSION['CART']);
        // echo "</pre>";
        $user_id = $_SESSION['home']['id'];
        // var_dump($user_id);
        $sql = "select * from address where user_id='$user_id'";
        $result =  DB::table('address')->query($sql); 
        // var_dump($result);
        

         $sql2 = "select num from cart where user_id='$user_id'";
        $row = DB::table('cart')->query($sql2);
        // var_dump($row);
        $num = 0;
        foreach ($row as $key => $value) {
           // var_dump($value);
           foreach ($value as $key1 => $value1) {
               // var_dump($value1);
               $num += $value1;
           }
        }

        $sql3 = "select subtotal from cart where user_id='$user_id'";
        $row3 = DB::table('cart')->query($sql3);
        // var_dump($row3);
        // die();
        $subtotal = 0;
        foreach ($row3 as $key => $value) {
           // var_dump($value);
           foreach ($value as $key1 => $value1) {
               // var_dump($value1);
               $subtotal += $value1;

           }
        }


        include "view/cart/buy.php";
    }



    public function jia()
    {
        $id = $_GET['id'];
         $_SESSION['CART'][$id]['num'] ++;
          header('location:index.php?c=cart&a=index1');
    }

    public function jian()
    {
        $id = $_GET['id'];
         $_SESSION['CART'][$id]['num'] --;
          header('location:index.php?c=cart&a=index1');
    }

   public function addnum()
   {
    $user_id = $_SESSION['home']['id'];
    $goods_id = $_POST['id'];
    $num = $_POST['num'];
    $price = $_POST['price'];
    $subtotal = $num * $price;
    // var_dump($goods_id,$num,$price,$subtotal);
    // die();
    $sql = "update cart set `num`='$num',`price`='$price',`subtotal`=$subtotal where goods_id = '$goods_id' and user_id = '$user_id'";
    $row = DB::table('cart')->execute($sql);
    header('location:index.php?c=cart&a=index1');
   }

















}