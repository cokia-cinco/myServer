<?php 
 
// 收货地址的控制器
class AddressController extends Controller
{
    private $addressModel; // 保存自定义模型对象

    public function __construct()
    {
        parent::__construct();
        $this->CKS();
        $this->addressModel = new AddressModel('address');
    }

    public function index()
    {
        $list = $this->addressModel->getAll();
        // echo "<pre>";
        // var_dump($list); 
        // die();
        include './view/user/address.php';
    }

    public function doaddress()
    {
        include './view/user/addaddress.php';
    }

    public function addaddress()
    {
        $data = $_POST;
        // echo '<pre>';
        // var_dump($data);
        // die();
        $result = $this->addressModel->addaddress();
        if ($result) {
            if (!empty($_SESSION['CART'])) {
                header("location:index.php?c=cart&a=buy");
            } else {
               echo "<script>alert('添加收货地址成功！');location.href='index.php?c=address';</script>";
            }
            
            
        } else {
            echo "<script>alert('添加收货地址失败！');history.go(-1);</script>";
        }
        
    }

    

    public function edit()
    {
        $list = $this->addressModel->getOne();
        // var_dump($list);
        // die;
        include "view/user/editaddress.php";
    }

    public function editaddress()
    {
        $data = $this->addressModel->editaddress();

        if ($data) {
            redirect('修改成功!','index.php?c=address',0);
            exit;
        }
        redirect('修改失败,请重试!','',0);
    }

    public function del()
    {
        $id = $_GET['id'];
        

        $result = $this->addressModel->del($id);
        if ($result) {
            echo "<script>alert('删除收货地址成功');history.go(-1);</script>";
        } else {
            echo "<script>alert('删除收货地址失败');history.go(-1);</script>";
        }
    }













}