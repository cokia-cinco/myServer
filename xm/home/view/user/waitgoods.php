<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的订单-小米商城</title>
    <link href="<?=HOME_CSS?>waitgoods.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
</head>
<body>
<!--############################################################head页首开始#############################################################-->
<?php $this->header() ?>


<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <span><a href="">首页</a> &gt; 交易订单 </span>
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
                                    <a style="color: #ff6700 !important" href="index.php?c=user&a=order">我的订单</a>
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
                                    <a href="index.php?c=user&a=account" target="_blank">个人信息</a>
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
                            <h1 class="title">我的订单
                                <small>请谨防钓鱼链接或诈骗电话，
                                    <a href="https://www.mi.com/service/buy/antifraud" target="_blank">了解更多></a>
                                </small>
                            </h1>
                            <div class="more">
                                <ul class="filter-list">
                                    <li style="padding-left: 0;border-left: none">
                                        <a href="index.php?c=user&a=order">全部有效订单</a>
                                    </li> 
                                    <li>
                                        <a  href="index.php?c=user&a=unpaid">待支付
                                            <?php
                                                if (!empty($list0['0']['total'])) {
                                                    echo '('.$list0['0']['total'].')';
                                                }
                                            ?>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a style="color: #ff6700;" href="index.php?c=user&a=waitgoods">待发货
                                        <?php
                                                if (!empty($list1['0']['total'])) {
                                                    echo '('.$list1['0']['total'].')';
                                                }
                                            ?></a>
                                    </li>  
                                    <li>
                                        <a href="index.php?c=user&a=waiting">待收货
                                            <?php
                                                if (!empty($list2['0']['total'])) {
                                                    echo '('.$list2['0']['total'].')';
                                                }
                                            ?>

                                        </a>
                                    </li>  
                                    <li>
                                        <a  href="index.php?c=user&a=recycle">订单回收站</a>
                                    </li>  

                                </ul>
                            </div>
                            
                        </div>

                        <div class="box-bd">
                            <div class="order-List">
                                <ul class="order-list">
                                    <?php if (empty($arrayName)): ?>
                                        <div>
                                            <p style="margin:40px 0 ;text-align: center;color:#b0b0b0;font-size: 18px;">当前没有待收货订单</p>
                                        </div>
                                    <?php else: ?>
                                    <?php foreach ($arrayName as $key => $value): ?>
                                        <!--一个订单开始-->
                                    <li class="uc-order-item">
                                        <!-- <div class="order-remove">
                                            <img src="<?=HOME_IMG?>order/trash.png" alt="">
                                        </div> -->
                                        <div class="order-detail">
                                            <div class="order-summary">
                                                <div class="order-status">
                                                    已支付
                                                    <!-- <span class="tag">包裹1</span> -->
                                                </div>
                                            </div>

                                            <table class="order-detail-table">
                                                <thead>
                                                    <tr>
                                                        <th class="col-main">
                                                            <p class="caption-info">
                                                                <?=date("Y年m月d日 h:i:s",$value['createtime'])?>
                                                                <!-- 2019年02月23日 00:29 -->
                                                                <span class="sep">|</span>
                                                                <?=$value['oname']?>
                                                                <span class="sep">|</span>
                                                                订单号:
                                                                <a href=""><?=$value['ordernum']?></a>
                                                                <span class="sep">|</span>
                                                                在线支付（支付宝快捷支付）
                                                            </p>
                                                        </th>
                                                        <th class="col-sub">
                                                            <p class="caption-price">
                                                                实付金额:
                                                                <span class="num"><?=$value['allprice']?></span>
                                                                元
                                                            </p>
                                                            
                                                        </th>
                                                        
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                    <tr>
                                                        <td class="order-item">
                                                            <ul class="goods-list">
                                                                <?php foreach ($value['goods'] as $key => $value1): ?>
                                                                     <li>
                                                                    <div class="figure-thumb">
                                                                        <a href="">
                                                                            <img src="<?= imgPath(UPLOAD, $value1['iname'])?>" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <p class="name">
                                                                        <a href=""><?=$value1['gname']?></a>
                                                                    </p>
                                                                    <p class="price"><?=$value1['price']?>元 x <?=$value1['qty']?></p>
                                                                </li>
                                                                <?php endforeach ?>
                                                               
                                                                
                                                            </ul>
                                                        </td>
                                                        <td class="order-actions">
                                                            <a class="btn-small" href="index.php?c=order&a=orderview1&id=<?=$value['id']?>&status=<?=$value['status']?>">订单详情</a>
                                                           <!--  <a class="btn-small" href="">还原订单</a> -->
                                                           
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <!--一个订单结束-->
                                    <?php endforeach ?>
                                    <?php endif ?>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($arrayName)): ?>
                        <div style="text-align: center;">
                        <?php echo $page->show() ?> 
                    </div>
                    <?php endif ?>
                    
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