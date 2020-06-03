<?php  
class GoodsController extends Controller
{
    private $goodsModel; // 保存 GoodsModel 对象

    public function __construct()
    {
        parent::__construct();
        $this->goodsModel = new GoodsModel('goods');
    }

    public function index()
    { 
        // 生成搜索条件
        $where2 = null;
        if (!empty($_GET['n'])) {
            $where2 = "and  g.gname like '%{$_GET['n']}%'";
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
        $page = new Page($total, 8,'goods');
        $limit = $page->limit();
        // var_dump($page, $limit);

        // var_dump($this->goodsModel);
        $list = $this->goodsModel->getAll($limit, $where2);
        // var_dump($list);
        // exit;
        
        // $list = $this->goodsModel->getAll();
        // var_dump($list);
        // die();
        include 'view/product/productlist.html';
    }

    public function add()
    {
        // 查询所有的分类
        $goodsModel = DB::table('category');
        // var_dump($goodsModel); // DB 操作
        $cate = $goodsModel
            ->field(['id','cname','path'],["CONCAT(`path`,`id`,',') AS bpath"])
            ->order('bpath')
            ->select();
        // var_dump($cate);
        include 'view/product/addproduct.html';
    }

    public function doAdd()
    {
        // var_dump($_POST);
        // die();

        $data = $this->goodsModel->doAdd();
        // var_dump($data);
        // exit; 
        
        if ($data > 0) {
            // redirect('添加成功!','index.php?c=admin');
            echo "<script>alert('添加商品成功');location.href='index.php?c=goods';</script>";
            exit;
        }
        echo "<script>alert('添加商品失败');history.go(-1);</script>";
    }

    public function edit()
    {
        // 查询所有的分类
        $goodsModel = DB::table('category');
        // var_dump($goodsModel); // DB 操作
        $cate = $goodsModel
            ->field(['id','cname','path'],["CONCAT(`path`,`id`,',') AS bpath"])
            ->order('bpath')
            ->select();
        //     echo '<pre>';
        // print_r($cate);
        // die();
        $list = $this->goodsModel->getOne();
        include "view/product/editproduct.html";
    }

    public function doEdit()
    {
        $data = $this->goodsModel->doEdit();

        if ($data) {
            redirect('修改商品信息成功!','index.php?c=goods',5);
            exit;
        }
        redirect('修改商品信息失败,请重试!','',5);
    }

    public function istop()
    {
        $v=$_GET['v'];
        $id=$_GET['id'];
        $data = $this->goodsModel->isTop();
        // var_dump($data);
        // die();
        if ($data) {
            echo "<script>alert('设置成功');location.href='index.php?c=goods';</script>";
        } else {
            echo "<script>alert('设置失败');location.href='index.php?c=goods';</script>";
            // header('location:'.$_SERVER['HTTP_REFERER']);
        }
        
    }

    /****************************************************************************************************************************************************************************/
 
    public function editImg()
    {
        $goods_id = $_GET['goods_id'];
        // var_dump($goods_id);
        // die();
        
        // 查出该商品中的所有图片
        $list = $this->goodsModel->editImg();
        // var_dump($list);

        // 查出当前所管理的 商品名
        $gname = $this->goodsModel->getGname($goods_id);
        // var_dump($gname);
        // 
        include 'view/product/editImg.html';
    }

    public function cover()
    {
        // $v=$_GET['v'];
        // $id=$_GET['id'];
        $data = $this->goodsModel->cover();
        // var_dump($data);
        // die();
        // if ($data) {
        //     echo "<script>alert('设置成功');location.href='index.php?c=goods';</script>";
        // } else {
        //     echo "<script>alert('设置失败');location.href='index.php?c=goods';</script>";
        
        // }
        header('location:'.$_SERVER['HTTP_REFERER']);
        
    }

    public function addimg()
    {
        


        $imgID = $this->goodsModel->addimg();

        if ($imgID > 0) {
            echo "<script>alert('增加商品图片成功');history.go(-1);</script>";
            exit;
        } else {
            $savePath = imgPath(UPLOAD, $saveName);
            @unlink($savePath);
            redirect('图片写入失败,请重试!');
            exit;
        }
    
    }

    public function delimg()
    {
        $id = $_GET['id'];
        

        $result = $this->goodsModel->delImg();
        if ($result) {
            echo "<script>alert('删除商品图片成功');history.go(-1);</script>";
        } else {
            echo "<script>alert('删除商品图片失败');history.go(-1);</script>";
        }
        
        
    }

    public function state1()
    {
        
        $result = $this->goodsModel->doState();
        // var_dump($result);
        // die();
        if ($result ) {
            echo "<script>alert('商品设置成功');history.go(-1);</script>";
        } else {
            // echo "<script>alert('商品下架失败，请检查相关操作！');history.go(-1);</script>";
        }
        
        // // 回到原来的页面
        // header('location:'.$_SERVER['HTTP_REFERER']);
    }

    public function detgoods()
    {
        // 查询所有的分类
        $goodsModel = DB::table('category');
        // var_dump($goodsModel); // DB 操作
        $cate = $goodsModel
            ->field(['id','cname','path'],["CONCAT(`path`,`id`,',') AS bpath"])
            ->order('bpath')
            ->select();
        //     echo '<pre>';
        // print_r($cate);
        // die();
        $list = $this->goodsModel->getOne();
        include "view/product/detailsproduct.html";
    }

  























































}















?>