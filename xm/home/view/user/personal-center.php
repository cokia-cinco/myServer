<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link href="<?=HOME_CSS?>personal-center.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
</head>
<body>
<!--############################################################head页首开始#############################################################-->
<?php $this->header() ?>


<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <span><a href="">首页</a> &gt; 个人中心 </span>
    </div>
</div>
<!--########################################################页首结束#################################################################-->


<!--########################################################主要内容开始#################################################################-->
<div class="page-main">
    <div class="page-main-container">
        <div class="row">
            <div class="span4">
                <div class="uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>                            
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li>
                                    <a href="index.php?c=user&a=order">我的订单</a>
                                </li>
                                <li>
                                    <a href="">团购订单</a>
                                </li>
                                <li>
                                    <a href="index.php?c=user&a=comment">评价晒单</a>
                                </li>
                                <li>
                                    <a href="">话费充值订单</a>
                                </li>
                                <li>
                                    <a href="">以旧换新订单</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>                            
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li>
                                    <a style="color: #ff6700 !important" href="index.php?c=user&a=personal_center">我的个人中心</a>
                                </li>
                                <li>
                                    <a href="">消息通知</a>
                                </li>
                                <li>
                                    <a href="">购买资格</a>
                                </li>
                                <li>
                                    <a href="">现金账户</a>
                                </li>
                                <li>
                                    <a href="">小米礼品卡</a>
                                </li>
                                <li>
                                    <a href="">现金券</a>
                                </li>
                                <li>
                                    <a href="">喜欢的商品</a>
                                </li>
                                <li>
                                    <a href="">优惠券</a>
                                </li>
                                <li>
                                    <a href="index.php?c=address">收货地址</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">售后服务</h3>                            
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li>
                                    <a href="">服务记录</a>
                                </li>
                                <li>
                                    <a href="">申请服务</a>
                                </li>
                                <li>
                                    <a href="">领取快递报销</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>                            
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li>
                                    <a target="_blank" href="index.php?c=user&a=account">个人信息</a>
                                </li>
                                <li>
                                    <a href="index.php?c=user&a=changepwd">修改密码</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    
                </div>

                
            </div><!--span4左侧导航结束-->
            
            <div class="span16">
                <div class="uc-main-box">
                    <div class="uc-content-box">
                        <div class="box-bd">
                            <div class="portal-main">
                                <div class="user-card">
                                    <h2 class="username"><?=$list['nickname']?></h2>
                                    <p class="tip">晚上好</p>
                                    <a class="link" href="index.php?c=user&a=account">修改个人信息></a>
                                    <img class="avatar" src="<?=HOME_IMG?>center/header.jpg" alt="">
                                    
                                </div>
                                <div class="user-actions">
                                    <ul class="action-list">
                                        <li>
                                            账户安全：
                                            <span class="level-3">较高</span>
                                        </li>
                                        <li>
                                            绑定手机：
                                            <span><?=$list['tel']?></span>
                                        </li>
                                        <li>
                                            绑定邮箱：
                                            <span><?=$list['email']?></span>
                                        </li>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                            <div class="portal-sub">
                                <ul class="info-list">
                                    <li>
                                        <h3>
                                            待支付的订单：
                                            <span class="num"><?=$row1?></span>
                                        </h3>
                                        <a href="index.php?c=user&a=unpaid">查看待支付订单
                                            <svg class="icon" aria-hidden="true">
                                                <use xlink:href="#icon-you"></use>
                                            </svg>
                                        </a>
                                        <img src="<?=HOME_IMG?>center/portal-icon-1.png" alt="">
                                    </li>
                                    <li>
                                        <h3>
                                            待收货的订单：
                                            <span class="num"><?=$row2?></span>
                                        </h3>
                                        <a href="index.php?c=user&a=waiting">查看待收货订单
                                            <svg class="icon" aria-hidden="true">
                                                <use xlink:href="#icon-you"></use>
                                            </svg>
                                        </a>
                                        <img src="<?=HOME_IMG?>center/portal-icon-2.png" alt="">
                                    </li>
                                    <li>
                                        <h3>
                                            待评价商品数：
                                            <span class="num"><?=$row3?></span>
                                        </h3>
                                        <a href="">查看待评价商品
                                            <svg class="icon" aria-hidden="true">
                                                <use xlink:href="#icon-you"></use>
                                            </svg>
                                        </a>
                                        <img src="<?=HOME_IMG?>center/portal-icon-3.png" alt="">
                                    </li>
                                    <li>
                                        <h3>
                                            喜欢的商品：
                                            <span class="num">0</span>
                                        </h3>
                                        <a href="">查看喜欢的商品
                                            <svg class="icon" aria-hidden="true">
                                                <use xlink:href="#icon-you"></use>
                                            </svg>
                                        </a>
                                        <img src="<?=HOME_IMG?>center/portal-icon-4.png" alt="">
                                    </li>
                                    
                                </ul>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div><!--spa16右侧导航结束-->
        </div>
        
    </div>
    
</div>
<!--########################################################主要内容结束#################################################################-->    


<!--foot页脚开始-->
<?php $this->footer() ?>
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>
</body>
</html>