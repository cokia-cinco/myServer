<?php 

// 商品的控制器
class GoodsController extends Controller
{
    private $goodsModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct();
        $this->goodsModel = new GoodsModel('goods');
    }

    public function index()
    {
        $gid = $_GET['id']; // 商品ID

        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale,G.stock, G.msg, G.slogan, G.original_cost
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.id = '{$gid}'
        ";

        $list = DB::table('goods')->query($sql);
        $list = $list[0];
        // var_dump($list);
        // die();

        $imglist = DB::table('image')
            ->field(['iname'])
            ->where("goods_id = '{$gid}' AND cover = 0")
            ->select();
        // var_dump($imglist);
        include './view/goods/product.php';
    }


    public function all()
    {
        include './view/goods/productlist.php';
    }

    public function allclass()
    { 
        // var_dump($_GET['n']);
        // die();
        // 生成搜索条件
        $where2 = null;
        if (!empty($_GET['n'])) {
            $n = $_GET['n'];
            $where2 = " AND G.gname like '%{$n}%' ";
        }

        $where1 = null;
        if (!empty($_GET['n'])) {
            $n = $_GET['n'];
            $where1 = " gname like '%{$n}%'";
        }

        // 从模型中 获取总记录数
        $total = $this->goodsModel->getCount($where1);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 8,'goods','allclass');
        $limit = $page->limit();
        // var_dump($page, $limit);

        // var_dump($this->goodsModel);
        $list = $this->goodsModel->getAllclass($limit, $where2);
        // echo "<pre>";
        // var_dump($list);
        // exit;
        // foreach ($list as $key => $value) {
        //     $gid = $value['id'];
        //     $imglist = DB::table('image')
        //         ->field(['iname','goods_id'])
        //         ->where("goods_id = '{$gid}' AND cover = 0")
        //         ->select();
        // echo "<pre>";
        // var_dump($imglist);
        // // die();
        // }
        
        $sqla = "select * from category where `pid`='0'";
        $res = DB::table('category')->query($sqla);
        // var_dump($res);
        // die();

        include './view/goods/goodslist.php';
    }


    public function comment()
    {
        $gid = $_GET['id'];
        $id = $_GET['id'];
        $sql = "select * from comment where goods_id = '$id'";
        $result = DB::table('comment')->query($sql);
        // echo "<pre>";
        // var_dump($result);
        // die();

        $sql1 = "select count(id) as total from comment where goods_id = '$id'";
        $result1 = DB::table('comment')->query($sql1);
        $result1 = $result1['0']['total'];
        // echo "<pre>";
        // var_dump($result1);
        // die();
        if (!empty($result)) {
           include "view/comment/commenta.php";
        } else {
            include "view/comment/commentb.php";
        }
        
        
    }



    public function class()
    {
        $gid = $_GET['pid']; 
        $sqlb = "select id from category where path like '0,$gid,%'";
        $row = DB::table('category')->query($sqlb);
        // var_dump($row);
        // die();
        // var_dump($sqlb);
        // die();
        // 
        $cid = null;
        foreach ($row as $key => $value) {
            $cid .= $value['id'].',';
        }

        $cid.=$gid;

        $sqlc = "select count(id) as total from goods where cate_id in ($cid)";
        $rowc = DB::table('goods')->query($sqlc);
        $rowc = $rowc['0']['total'];
        // var_dump($rowc);
        // die();

        $page = new Page($rowc, 8,'goods','class',$gid);
        $limit = $page->limit();
        // var_dump($cid);
        // die();
        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale,G.stock, G.msg, G.slogan, G.original_cost
            FROM goods G, image I 
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.cate_id in ($cid)  limit $limit
        ";
        // var_dump($sql);
        // die();

        $list = DB::table('goods')->query($sql);
        // echo "<pre>";
        // // $list = $list[0];
        // var_dump($list);
        // die();
        

        $sqla = "select * from category where `pid`='0'";
        $res = DB::table('category')->query($sqla);



         include './view/goods/goodslist1.php';
    }

}