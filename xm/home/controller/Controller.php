<?php 

// 前台的基类
class Controller
{
    public function __construct()
    {
        // 需要全局使用
    }

    // 判断是否登录前台
    public function CKS()
    {
        // var_dump($_SESSION);
        if (empty($_SESSION['home'])) {
            header("location:index.php?c=Login&a=login");
            exit;
        }
    }


    // 处理 调用不存在的方法
    public function __call($funName, $params)
    {
        header('HTTP/2.0 404 not found');
        exit('<h1>404 Not Found - 方法不存在</h1>');
    }

    public function header()
    {
        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";
        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '20'
        ";

        $list = DB::table('goods')->query($sql);

        $sql1 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '18'
        ";

        $list1 = DB::table('goods')->query($sql1);

        $sql2 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '13'
        ";

        $list2 = DB::table('goods')->query($sql2);

        $sql3 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '16'
        ";

        $list3 = DB::table('goods')->query($sql3);

        $sql4 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '17'
        ";

        $list4 = DB::table('goods')->query($sql4);

        $sql5 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '74'
        ";

        $list5 = DB::table('goods')->query($sql5);

        $sql6 = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 and G.cate_id = '75'
        ";

        $list6 = DB::table('goods')->query($sql6);
        
        include './view/index/header.php';
    }

    public function footer()
    {
        include './view/index/footer.php';
    }
}


