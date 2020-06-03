<?php 

// 用户的控制器
class UserController extends Controller
{
    private $userModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct(); // 调用检测SESSION 
        $this->userModel = new UserModel('user');
    }

    public function index()
    {   
        // 生成搜索条件
        $where = null;
        if (!empty($_GET['n'])) {
            $where = "nickname like '%{$_GET['n']}%'";
        }

        // 从模型中 获取总记录数
        $total = $this->userModel->getCount($where);
        // var_dump($total);exit;
        
        // 获取分页信息
        $page = new Page($total, 10);
        $limit = $page->limit();
        // var_dump($page, $limit);

        // var_dump($this->userModel);
        $list = $this->userModel->getAll($limit, $where);
        // var_dump($list);
        // exit;




 // 加载视图
        include './view/user/userlist.html';
    }

    public function del()
    {
        // var_dump($this->userModel);
        // 执行删除用户
        $data = $this->userModel->doDel();

        // 判断删除情况
        if (!$data) {
            redirect('删除失败!');
            exit;
        }

        // 操作成功
        // echo "<script>alert('删除用户信息成功!')</script>";
        redirect("删除用户信息成功!",'index.php?c=user');
    }


    public function edituser()
    {
        $list = $this->userModel->getOne();
        // var_dump($list);
        // die;
        include './view/user/edituser.html';
    }

    public function doEdit()
    {
        $data = $this->userModel->doEdit();

        if ($data) {
            echo "<script>alert('修改用户信息成功!');location.href='index.php?c=user';</script>";
            die ();
        } else {
            echo "<script>alert('修改用户信息失败!');history.go(-1);</script>";
            die ();
        }
         
    }


    public function state()
    {
        $v=$_GET['v'];
        $id=$_GET['id'];
        $data = $this->userModel->state();
        // var_dump($data);
        // die();
        if ($data) {
            redirect('','',0);
            // echo "<script>alert('设置成功');location.href='index.php?c=user';</script>";
        } else {
            echo "<script>alert('设置失败');location.href='index.php?c=user';</script>";
            // header('location:'.$_SERVER['HTTP_REFERER']);
        }
    }

    public function details()
    {
        $list = $this->userModel->getOne();
        // var_dump($list);
        // die;
        include './view/user/detailsuser.html';
    }

 
}

