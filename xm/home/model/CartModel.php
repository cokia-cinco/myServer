<?php  
class CartModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        // 实例化DB
        $this->db = DB::table($table);
    }

 

    public function docart()
    {
        $id = $_GET['id'];
        if ($id!=0) {
           $sql1 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale,G.stock, G.msg, U.email FROM goods G, image I, user U WHERE I.goods_id = G.id AND I.cover = 1  AND G.id = '{$id}'";
            $list1 = DB::table('goods')->query($sql1);
            
        } 
        $data = $list1['0'];
            foreach ($list1 as $key => $value) {
                $data['goods_id'] = $list1['0']['id'];
            }
        
         $_SESSION['CART'][$id] = $data;
         $_SESSION['CART'][$id]['num'] = 1;
         $_SESSION['CART'][$id]['subtotal'] = $data['price'];

        
         foreach ($_SESSION['CART'] as $key => $value) {
            // echo '<pre>';
            // var_dump($key,$value);
            $good_id = $key;
            $gname = $value['gname'];
            $iname = $value['iname'];
            $price = $value['price'];
            $user_id = $_SESSION['home']['id'];
            $subtotal =  $value['subtotal'];
            
            $sql2 = "select * from cart where goods_id=$good_id";
            // echo "<pre>";
            // var_dump($sql2);
            $result2 = DB::table('cart')->query($sql2);
            // echo "<pre>";
            // var_dump($result2);
            // die();

            if (!$result2) {
               $sql = "insert into cart(goods_id,gname,price,num,user_id,iname,subtotal) values ('$good_id','$gname','$price','1','$user_id','$iname', $subtotal)";
               $result = DB::table('cart')->execute($sql);
            } 
            
            

            // var_dump($sql2);
            // die();
            
            // var_dump($sql);
            // die();
            
        
        }
        // return ture;
    
    }


    public function del($id)
    {
        
        unset($_SESSION['CART'][$id]);
        return DB::table('cart')->delete($id,'goods_id'); 

    }

    public function getCount()
    {
        
            $row = DB::table('cart')
                ->field(['id'],['count(id) AS total'])
                ->select();
        
   
        
        return $row[0]['total'];
    }



























































}
















