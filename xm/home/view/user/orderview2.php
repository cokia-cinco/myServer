<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单详情</title>
    <link href="<?=HOME_CSS?>orderview2.css" rel="stylesheet">
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
                            <h1 class="title">订单详情
                                <small>请谨防钓鱼链接或诈骗电话，
                                    <a href="https://www.mi.com/service/buy/antifraud" target="_blank">了解更多></a>
                                </small>
                            </h1>
                            <div class="more">
                                <h2 class="subtitle">订单号：5190927737410087</h2>
                                <div class="actions">
                                    <a class="btn-small btn" href="">申请售后</a>
                                    <!-- <a style="color: #fff;background-color: #ff6700;" class="btn-small btn" href="">立即付款</a> -->
                                </div>
                            </div>
                            
                        </div>

                        <div class="box-bd">
                            <div class="uc-order-item">
                                <div class="order-detail">
                                    <?php foreach ($arrayName as $key => $value): ?>
                                        <div class="order-summary">
                                        <div class="order-status">
                                            已收货
                                            <!-- <span class="tag">包裹1</span> -->
                                        </div>
                                        <!-- <div class="order-desc">46小时56分后订单将被关闭</div> -->
                                        <div class="order-progress">
                                            <ol class="progress-list">
                                                <li class="step step-first step-done">
                                                    <div class="progress">
                                                        <span>下单</span>
                                                    </div>
                                                    <div class="info"><?=date("Y年m月d日 H:i:s",$value['createtime'])?></div>
                                                </li>
                                                <li class="step step-done">
                                                    <div class="progress">
                                                        <span>付款</span>
                                                    </div>
                                                    <div class="info">09月27日 15:39</div>
                                                </li>
                                                <li class="step step-done">
                                                    <div class="progress">
                                                        <span>配货</span>
                                                    </div>
                                                    <div class="info">09月27日 15:39</div>
                                                </li>
                                                <li class="step step-done">
                                                    <div class="progress">
                                                        <span>出库</span>
                                                    </div>
                                                    <div class="info">09月27日 15:39</div>
                                                </li>
                                                <li class="step step-active">
                                                    <div class="progress">
                                                        <span>交易成功</span>
                                                    </div>
                                                    <div class="info">09月27日 15:39</div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="order-delivery">
                                            <p class="delivery-num">
                                                物流公司：
                                                <a href="">EMS(杭州FDC)
                                                   <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-you1"></use>
                                                    </svg> 

                                                </a>
                                                运单号：<?=$value['ordernum']?>
                                            </p>
                                        </div>

                                        <table class="order-item-table">
                                            <tbody>
                                                <!--一个商品订单-->
                                                    <?php foreach ($value['goods'] as $key => $value1): ?>
                                                <tr>
                                                    <td class="col col-thumb">
                                                        <div class="figure-thumb">
                                                            <a href="">
                                                                <img src="<?= imgPath(UPLOAD, $value1['iname'])?>" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="col col-name">
                                                        <p class="name">
                                                            <a href=""><?=$value1['gname']?></a>
                                                        </p>
                                                        
                                                    </td>
                                                        <td class="col col-price">
                                                            <p class="price"><?=$value1['price']?>元 x <?=$value1['qty']?></p>
                                                        </td>
                                                    <td class="col col-actions">
                                                        
                                                    </td>
                                                </tr>
                                                    <?php endforeach ?>
                                                    
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    
                                </div>
                                

                                <div class="order-detail-info">
                                    <h3>收货信息</h3>
                                    <table class="info-table">
                                        <tbody>
                                            <tr>
                                                <th>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</th>
                                                <td><?=$value['oname']?></td>
                                            </tr>
                                            <tr>
                                                <th>联系电话：</th>
                                                <td><?=$value['phone']?></td>
                                            </tr>
                                            <tr>
                                               <th>收货地址：</th> 
                                               <td><?=$value['address']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                </div>
                                <div class="order-detail-info">
                                    <h3>收货信息</h3>
                                    <table class="info-table">
                                        <tbody>
                                            <tr>
                                                <th>支付方式：</th>
                                                <td>在线支付</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <div class="order-detail-info">
                                    <h3>发票信息</h3>
                                    <table class="info-table">
                                        <tbody>
                                            <tr>
                                                <th>发票类型：</th>
                                                <td>电子发票</td>
                                            </tr>
                                            <tr>
                                                <th>发票内容：</th>
                                                <td>购买商品明细</td>
                                            </tr>
                                            <tr>
                                               <th>发票抬头：</th> 
                                               <td>个人</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="actions">
                                        <a href="">查看发票</a>
                                        <a href="">发票查验</a>
                                    </div>
                                </div>
                                <div class="order-detail-total">
                                    <table class="total-table">
                                        <tbody>
                                            <tr>
                                                <th>商品总价：</th>
                                                <td>
                                                    <span class="num"><?=$value['allprice']?></span>
                                                    元
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>运费：</th>
                                                <td>
                                                    <span class="num">0</span>
                                                    元
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="total">应付金额：</th>
                                                <td class="total">
                                                    <span class="num"><?=$value['allprice']?></span>
                                                    元
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                    <?php endforeach ?>
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