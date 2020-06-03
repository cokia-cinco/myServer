<?php 
// 管理员的控制器
class AdminController extends Controller
{
    private $adminModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct(); // 调用检测SESSION
        $this->adminModel = new AdminModel('admin_user');
    }

    public function index()
    {
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = " name like '%{$_GET['n']}%'";
        }

        // 从模型中 获取总记录数
        $total = $this->adminModel->getCount($where);
        
        // 获取分页信息
        $page = new Page($total, 2,'admin');
        $limit = $page->limit();

        $list = $this->adminModel->getAll($limit, $where);

        
        include './view/admin/adminlist.html';
    }

 
    public function add()
    {
        include './view/admin/addadmin.html';
    }

    public function doAdd()
    {
        // var_dump($_POST);
        // die();

        $data = $this->adminModel->doAdd();

        // var_dump($data);exit;
        if ($data > 0) {
            // redirect('添加成功!','index.php?c=admin');
            echo "<script>alert('添加管理员成功');location.href='index.php?c=admin';</script>";
            exit;
        }
        echo "<script>alert('添加管理员失败');history.go(-1);</script>";
    }

    public function edit()
    {
        $list = $this->adminModel->getOne();
        if($list['manage']=="ALL"){
            $manage="1,2,3,4,5,6,7,8,9,10,11,12";
         }else{
            $manage=$list['manage'];
         }
        $manage=explode(",",$manage);
        include './view/admin/editadmin.html';
    }

    public function doEdit()
    {
        $data = $this->adminModel->doEdit();

        if ($data) {
            echo "<script>alert('修改管理员信息成功!');location.href='index.php?c=admin';</script>";
            // redirect('修改管理员信息成功!','index.php?c=admin',5);
            exit;
        }
        redirect('修改管理员信息失败,请重试!','',5);
    }




    public function doDel()
    {
        $data = $this->adminModel->doDel();
        if ($data) {
            echo "<script>alert('删除管理员成功!');location.href='index.php?c=admin';</script>";
        } 
        
    }


}

