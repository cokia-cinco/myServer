<?php 

// 分类管理类
class CategoryController extends Controller
{
    private $CategoryModel; // 保存 CategoryModel 对象

    public function __construct()
    {
        parent::__construct();
        $this->CategoryModel = new CategoryModel('category');
    }
 
    public function index()
    {
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "cname like '%{$_GET['n']}%'";
        }

        // 默认只查出 顶级分类
        // 如果传递了PID,则查询对应的子类
        $pid = empty($_GET['pid'])?0:$_GET['pid'];

        // 从模型中 获取总记录数
        $total = $this->CategoryModel->getCount($where,$pid);
        // var_dump($total);exit;

        // 获取分页信息
        $page = new Page($total, 10 , 'Category','index',$pid);
        $limit = $page->limit();
        // echo "<pre>";
        // var_dump($page, $limit);

        $list = $this->CategoryModel->getAll($pid,$limit,$where);
        // echo "<pre>";
        // var_dump($list);
        // die;
        


        // 获取上上一层的ID (爷爷的ID)
        $ppid = $this->CategoryModel->getPPID($pid);

        // var_dump($list);
        include './view/category/categorylist.html';
    }

    public function getPname($pid)
    {
        if ($pid != 0) {
            $row = $this->CategoryModel->getPname($pid);
            return $row['cname'];
        } else {
            //  顶级分类无父类名称,无需查询
            return null;
        }
    }

    public function addcategory()
    {
        // PID
        // 默认为 0 有传值则使用传值
        $pid = empty($_GET['pid'])?0:$_GET['pid'];
        // $cname = $_GET['cname'];
        // var_dump($_GET['cname']);
        // die;
        
        // 产生自己的 PATH
        // 默认为 0,   如果传值则使用:  PATH值 + PID + 逗号
        $path = empty($_GET['path'])?'0,': $_GET['path'] . $pid .',' ;
        // $path .= $pid.',';
        // var_dump($path);
        // exit;

        include './view/category/addcategory.html';
    }

    public function doAdd()
    {

        // 调用模型 执行新增
        $row = $this->CategoryModel->doAdd();

        if ($row > 0) {
            redirect('添加子目录分类成功!','index.php?c=category&a=index');
        } else {
            redirect('添加子目录分类失败!');
        }
    }

    public function maxadd()
    {

        include 'view/category/maxaddcategory.html';
    }

    public function doMaxadd()
    {
        $row = $this->CategoryModel->doMaxadd();

        if ($row > 0) {
            redirect('添加顶级分类目录成功!','index.php?c=category&a=index');
        } else {
            redirect('添加顶级分类目录失败!');
        }
    }
 
    public function del()
    {
        $id = $_GET['id'];
        $pid = $_GET['pid'];
        $path = $_GET['path'];

        // 可选: 顶级分类不能删除
        if ($pid != 0 && $path != '0,') {
            // 要满徐删除条件:
            // 1. 分类下面没有子类
            // 判断有无子类
            // 子类的path规律是:   自己的path +  自己的id + 逗号
            $cons = $path . $id . ',';
            $row = $this->CategoryModel->getChild($cons);
            // var_dump($row);
            
            // 不为空,则说明有子类,则不能被删除!!
            if (!empty($row)) {
                redirect('分类下面还有子类,请先删除对应的子类!');
                exit;
            }

            // 2. 分类下没有商品 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            //  未来你们自己判断 该分类下有无商品,有则不能删除,无则可删之
            $sql = "select id from goods where cate_id='$id' and state='1' ";
            $row2 = DB::table('goods')->query($sql);
            if ($row2) {
               redirect('分类下面含有商品，请先下架商品!');
               die();
            } 
            
            


            // 以上条件都满足 则删除指定分类
            $result = $this->CategoryModel->doDel($id);

            if ($result) {
                redirect('删除分类成功!!');
            } else {
                redirect('删除分类失败..');
            }
        } else {
            // 顶级分类不得删除!!
            redirect('顶级分类不得删除!!');
            exit;
        }
    }

    // 切换显示分类
    public function display()
    {
        $id = $_GET['id'];
        $display = $_GET['display']==1?0:1;

        // 准备更新的数据
        $arr = [
            'id' => $id,
            'display' => $display
        ];

        // 执行更新
        $result = $this->CategoryModel->doDisplay($arr);
        // 回到原页面
        redirect('','',0);
    }

    public function editcategory()
    {
        $pid = empty($_GET['pid'])?0:$_GET['pid'];
        $ppid = $this->CategoryModel->getPPID($pid);
        $list = $this->CategoryModel->getOne();
        // var_dump($list);
        // die;
        include './view/category/editcategory.html';
    }

    public function doEdit()
    {
        $data = $this->CategoryModel->doEdit();

        if ($data) {
            redirect('修改成功!','index.php?c=category',5);
            exit;
        }
        redirect('修改失败,请重试!','',5);
    }





}



