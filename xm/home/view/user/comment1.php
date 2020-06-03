<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品评价</title>
    <link href="<?=HOME_CSS?>comment1.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
</head>
<body>
<!--############################################################head页首开始#############################################################-->
<?php $this->header() ?>

<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <span><a href="">首页</a> &gt; 商品评价 </span>
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
                                    <a href="index.php?c=user&a=comment">评价晒单
                                        <?php
                                                if (!empty($total)) {
                                                    echo '('.$total.')';
                                                }
                                            ?>

                                    </a>
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
                                    <a href="index.php?c=user&a=personal_center">我的个人中心</a>
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
                        <div class="box-hd">
                            <h1 class="title">订单评价</h1>
                        </div> 
                        
                        <!-- <div class="box-bd">
                            <p class="empty">暂时没有符合条件的商品</p>
                        </div> -->

                        <div class="box-bd">
                            <div class="goods-list-detail">
                                <ul class="goods-list-ul">
                                    <?php foreach ($arrayName as $key => $value): ?>
                                         <li class="goods-list-li">
                                        <div class="goods-top">
                                            <div class="time">
                                                下单时间：<?=date("Y年m月d日 H:i:s",$value['createtime'])?>
                                            </div>
                                            <div class="id">
                                                订单号:<?=$value['ordernum']?>
                                            </div>
                                            <div class="pay">
                                                实付金额:
                                                <span><?=$value['allprice']?></span>
                                                元
                                            </div>
                                        </div>
                                        <?php foreach ($value['goods'] as $key => $value1): ?>
                                            <div class="goods-content">
                                            <div class="cont-1">
                                                <a href="">
                                                    <img src="<?= imgPath(UPLOAD, $value1['iname'])?>" alt="">
                                                </a>
                                                <div class="text">
                                                   <p class="name">
                                                        <a href=""><?=$value1['gname']?></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="cont-r">
                                                <!-- <a class="btn1" href="">订单详情</a> -->
                                                <a class="btn2" href="index.php?c=order&a=com&id=<?=$value1['gid']?>&ordernum=<?=$value['ordernum']?>&status=<?=$value['status']?>">去评价</a>
                                            </div>
                                            
                                        </div>
                                        <?php endforeach ?>
                                        
                                    </li>
                                    <?php endforeach ?>
                                  
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