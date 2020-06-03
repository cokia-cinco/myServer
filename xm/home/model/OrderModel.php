<?php  
class OrderModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    { 
        // 实例化DB
        $this->db = DB::table($table);
    }

    //待支付订单
    public function unpaid1()
    {   
    //订单总价
        $uid = $_SESSION['home']['id'];
        $sql = "select subtotal from cart where user_id ='$uid' ";
        $row = DB::table('cart')->query($sql);
        // var_dump($row);
        // die();
        $subtotal = 0;
        foreach ($row as $key => $value) {
           // var_dump($value);
           foreach ($value as $key1 => $value1) {
               // var_dump($value1);
               $subtotal += $value1;

           }
        }
        $_SESSION['order']['allprice'] = $subtotal;

    //订单号不唯一
        $str = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        $_SESSION['order']['ordernum'] = $str;

    //订单状态
        $_SESSION['order']['status'] = 0;

    //联系电话
        $sql = "select * from address where user_id='$uid'";
        $row = DB::table('address')->query($sql);
        // echo "<pre>";
        // var_dump($row);
        // die();
        if (empty($row)) {
            echo "<script>alert('请填写收货地址');history.go(-1);</script>";
            die ();
        } 
        
        $_SESSION['order']['phone'] = $row['0']['phone'];

    //收货地址
        $_SESSION['order']['address'] = $row['0']['province'].' '.$row['0']['city'].' '.$row['0']['county'].' '.$row['0']['street'].' ' .$row['0']['address'];

    //邮编
        $_SESSION['order']['postcode'] = $row['0']['postcode'];

    //收货人姓名
        $_SESSION['order']['oname'] = $row['0']['name'];

    //创建时间
        $createtime = time();
        // $_SESSION['order']['createtime'] = date("Y-m-d h:i:s",$createtime);
        $_SESSION['order']['createtime'] = $createtime;
    
    //用户id
        $_SESSION['order']['user_id'] = $_SESSION['home']['id'];




    //商品id
        // foreach ($_SESSION['CART'] as $key => $value) {
        //    $_SESSION['order']['goods_id'][] = $key;
        //    // var_dump($_SESSION['order']['goods_id']);
        // }
        // echo "<pre>";
        // var_dump($_SESSION['order']);
        // die();

       
        // echo "<pre>";
        // var_dump($_SESSION['order']);
        // die();



    //将数据上传数据库
        $data = $_SESSION['order'];
        // echo "<pre>";
        // var_dump($data);
        // die();

        $result = $this->db->insert($data);
        // var_dump($result);
        // die();
        unset($_SESSION['order']);

        foreach ($_SESSION['CART'] as $key => $value) {
            // var_dump($key);
            $arr = array('goods_id'=>$key,'price'=>$value['price'],'qty' =>$value['num'],'order_id'=>$result);
            $a = DB::table('ordergoods')->insert($arr);
        }

    }

   















}
