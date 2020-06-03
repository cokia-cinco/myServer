<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>填写订单信息</title>
    <link href="<?=HOME_CSS?>buy.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./font/iconfont.css">
    <script src="/home/static/font/iconfont.js"></script>


</head>
<body>
<div class="site-header">
    <div class="site-header-container">
        <div class="header-logo">
            <a href="">
                <img src="<?=HOME_IMG?>cart/logo.png" alt="">
            </a>
        </div>
        <div class="header-title">
            <h2>确认订单</h2>
            <!-- <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p> -->
        </div> 
        <div class="topbar-info">
            <span class="user">
                <a class="user-name" href="">
                    <span class="name">
                        <?php if (!empty($_SESSION['home']['name'])): ?>
                            <?php echo $_SESSION['home']['name'] ?>
                        <?php else: ?>
                            <?php echo $_SESSION['home']['tel'] ?>
                        <?php endif ?>
                    </span>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-xia"></use>
                    </svg>
                </a>

                <ul class="user-menu">
                    <!--  -->
                    <li>
                        <a href="index.php?c=user&a=personal_center" target="_blank">个人中心</a>
                    </li>
                    <li>
                        <a href="" target="_blank">评价晒单</a>
                    </li>
                    <li>
                        <a href="" target="_blank">我的喜欢</a>
                    </li>
                    <li>
                        <a href="" target="_blank">小米账号</a>
                    </li>
                    <li>
                        <a href="index.php?c=Login&a=logout" target="_blank">退出登录</a>
                    </li>
                </ul>
            </span>
            <span class="sep">|</span>
            <a class="link-order" href="" target="_blank">我的订单</a>
        </div>
    </div>
    
</div><!--site-header结束-->

<!--#################################################main###########################-->
<div class="page-main">
    <div class="page-main-container">
        <div class="checkout-box">
            <div class="section-address">
                <div class="section-header">
                    <h3 class="title">收货地址</h3>
                </div>
                <div class="section-body">
                    <?php foreach ($result as $key => $value): ?>
                        <!--已有地址-->
                        <div class="address-item">
                            <dl>
                                <dt><em class="uname"><?=$value['name']?></em></dt>
                                <dd><?=$value['phone']?></dd>
                                <dd class="uaddress">
                                    <?=$value['province']?> <?=$value['city']?> <?=$value['county']?> <?=$value['street']?><br>
                                    <?=$value['address']?>(<?=$value['postcode']?>)
                                </dd>
                            </dl>
                        </div>
                    <?php endforeach ?>
                    
                    
                    <!--添加新的地址-->
                    <a href="index.php?c=address&a=doaddress">
                    <div class="address-item address-item-new">
                        <svg class="icon" aria-hidden="true">
                            <use xlink:href="#icon-jia2"></use>
                        </svg>
                        添加新地址
                    </div>
                    </a>
                </div>
            </div>

            <div class="section-goods">
                <div class="section-header">
                    <h3 class="title">商品及优惠券</h3>
                </div>
                <div class="section-body">
                    <ul class="goods-list">
                        <?php foreach ($_SESSION['CART'] as $key => $value): ?>
                            <li>
                                <div class="col col-img">
                                    <img src="<?= imgPath(UPLOAD, $value['iname'])?>" width="30px" height="30px" alt="">
                                </div>
                                <div class="col col-name">
                                    <a href="">
                                        <?=$value['gname']?>
                                    </a>
                                </div>
                                <div class="col col-price">
                                    <?=$value['price']?>元 x <?=$value['num']?>
                                </div>
                                <div class="col col-status">
                                    
                                </div>
                                <div class="col col-total">
                                    <?php
                                    echo $value['price']*=$value['num'];
                                    ?>元
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <div class="section-options">
                <div class="section-header">
                    <h3 class="title">配送方式</h3>
                </div>
                <div class="section-body">
                    <ul class="options">
                        <li class="selected">
                            包邮
                        </li>
                    </ul>
                </div>
            </div>

            <div style="border:none" class="section-options">
                <div class="section-header">
                    <h3 class="title">发票</h3>
                </div>
                <div class="section-body">
                    <ul class="options">
                        <li class="selected">
                            电子发票
                        </li>
                        <li class="selected">
                            个人
                        </li>
                        <li class="selected">
                            商品明细
                        </li>
                        <li class="selected">
                            修改>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section-count">
                <div class="coupon-trigger">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-jia2"></use>
                    </svg>
                    使用优惠券
                </div>
                <div class="coupon-trigger">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-jia2"></use>
                    </svg>
                    使用小米礼品卡
                </div>
                <div class="money-box">
                    <ul>
                        <li>
                           <label for="">商品件数:</label> 
                           <span class="val"><?=$num?>件</span>
                        </li>
                        <li>
                           <label for="">商品总价:</label> 
                           <span class="val"><?=$subtotal?>元</span>
                        </li>
                        <li>
                           <label for="">活动优惠:</label> 
                           <span class="val">-0元</span>
                        </li>
                        <li>
                           <label for="">优惠券折扣:</label> 
                           <span class="val">-0元</span>
                        </li>
                        <li>
                           <label for="">运费:</label> 
                           <span class="val">0元</span>
                        </li>
                        <li style="margin-top: 10px;">
                           <label for="">应付总额:</label> 
                           <span class="val">
                                <em><?=$subtotal?></em>
                           元</span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="section-bar">
                <div class="fr">
                    <a class="btn-primary" href="index.php?c=order&a=unpaid1">去结算</a>
                    <a class="btn-return" href="index.php?c=cart&a=index1">返回购物车</a>
                </div>
            </div>
        </div>
    </div>
</div>





<!--foot页脚开始-->
<?php $this->footer() ?>
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>
</body>
</html>