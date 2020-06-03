<?php 

// 后台首页的控制器
class IndexController extends Controller
{
    // 主要结构
    public function index()
    {
        include 'view/index/index.html';
    }

    // main.html 管理首页
    public function main()
    {
        //获取注册人数
        $sql = "select count(id) as total from user";
        $result = DB::table('user')->query($sql);
        // var_dump($result);
        // die();
        
        //获取商品数
        $sql1 = "select count(id) as total from goods";
        $result1 = DB::table('goods')->query($sql1);
        // var_dump($result1);
        // die();
        
        //获取有效订单数
        $sql2 = "select count(id) as total from `order` where status!='4'";
        $result2 = DB::table('goods')->query($sql2);
        // var_dump($result2);
        // die();
        
        //获取待支付订单数
        $sql3 = "select count(id) as total from `order` where status='0'";
        $result3 = DB::table('goods')->query($sql3);
        // var_dump($result3);
        // die();
        
        //获取待发货订单数
        $sql4 = "select count(id) as total from `order` where status='1'";
        $result4 = DB::table('goods')->query($sql4);
        // var_dump($result4);
        // die();
        
        //获取待收货订单数
        $sql5 = "select count(id) as total from `order` where status='2'";
        $result5 = DB::table('goods')->query($sql5);
        // var_dump($result5);
        // die();
        include 'view/index/main.html';
    }

    //adminlist.html 网站管理员
    public function adminlist()
    {
        include 'view/admin/adminlist.html';
    }

    //adminlist.html 用户管理
    public function userlist()
    {
        include 'view/user/userlist.html';
    }

}


