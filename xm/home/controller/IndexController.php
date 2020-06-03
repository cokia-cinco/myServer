<?php 

// 首页的控制器
class IndexController extends Controller
{
    public function index()
    {
        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 LIMIT 4
        ";

        $list = DB::table('goods')->query($sql);
        // var_dump($list);
        
        $sql1 = "select * from category where pid=0";
        $list1 = DB::table('category')->query($sql1);
        // echo "<pre>";
        // var_dump($list1);
        // die();
        // 
        $sql2= "select * from category where pid!=0";
        $list2 = DB::table('category')->query($sql2);
        // echo "<pre>";
        // var_dump($list2);
        // die();
        
        $sqla = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 LIMIT 8
        ";

        $lista = DB::table('goods')->query($sqla);





        
        include './view/index/index.php';
    }

}


