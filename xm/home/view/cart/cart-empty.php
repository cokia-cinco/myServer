<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的购物车-小米商城</title>

    <link rel="stylesheet" href="<?=HOME_CSS?>cart-empty.css">
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
                <h2>我的购物车</h2>
                <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
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
<!--###################################页首结束###################################################################-->
    <div class="page-main">
        <div class="page-main-container">
            <div class="cart-empty">
                <h2>您的购物车还是空的！</h2>
                <a class="btn-primary" href="index.php?">马上去购物</a>
            </div>
            <div class="cart-recommend">
                <h2 class="xm-recommend-title">
                    <span>为您推荐</span>
                </h2>
                <div class="xm-recommend">
                <ul style="margin-left: -14px;">
                    <?php foreach ($list as $key => $value): ?>
                        <li class="brick-list-li">
                            <a href="index.php?c=goods&a=index&id=<?=$value['id']?>">
                                <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                                <span class="goods-name"><?=$value['gname']?></span><br>
                                <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                                <span class="price"><?=$value['price']?>元 
                                    <?php if ($value['original_cost']!=0): ?>
                                         <del class="original-price"><?=$value['original_cost']?>元</del>
                                    <?php endif ?> 
                                </span>
                            </a>
                        </li>
                    <?php endforeach ?>
                    
                </ul>
            </div>
            </div>
            
        </div>
        
    </div>

<!--foot页脚开始-->
<?php $this->footer() ?>
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>
</body>
</html>