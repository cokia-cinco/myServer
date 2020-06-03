<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的购物车-小米商城</title>
    <link href="<?=HOME_CSS?>cart.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./font/iconfont.css">
    <script src="/home/static/font/iconfont.js"></script>
    <script> 
    function changesrc(obj){
        // 获取大图对象
        var big = document.getElementById('big');
        // 修改大图src
        big.src = obj.src;
    }
    function minu(){
        if (num.value == '') {
            console.log(num.value);
            num.value = 1;
        }
        num.value = parseInt(num.value) - 1;
        if (num.value < 1) {
            num.value = 1;
        }
    }
    function plus(){
        if (num.value == '') {
            // console.log(num.value);
            num.value = 1;
        }
        num.value = parseInt(num.value) + 1;
    }

</script>


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

<div class="page-main">
    <div class="page-main-container">
        <div>
            <div class="cart-goods-list">
                <div class="list-head">
                    <div class="col-check">
                        
                        <!-- <input id="check1" class="col-checkbox" type="checkbox">
                        <label for="check1" class="label-check"></label> -->
                        <span>全选</span>
                    </div>
                    <div class="col-img"> </div>
                    <div class="col-name">商品名称</div>
                    <div class="col-price">单价</div>
                    <div class="col-num">数量</div>
                    <div class="col-total">小计</div>
                    <div class="col-action">操作</div>
                </div>

                <div class="list-body">
                    <ul>
                        <?php foreach ($_SESSION['CART'] as $key => $value): ?>
                        <form action="index.php?c=cart&a=index"></form>
                        <li>
                            <div class="item-box">
                                <div class="item-table">
                                    <div class="item-row">
                                        <!-- <div class="col-check">
                                          
                                            <input id="check2" class="col-checkbox" type="checkbox">
                                            <label for="check2" class="label-check"></label>
                                       
                                        </div> -->
                                        <div class="col-img">
                                            <a target="_blank" href="">
                                                <img style='width: 80px;height: 80px;' src="<?= imgPath(UPLOAD, $value['iname'])?>" alt="">
                                            </a>
                                        </div>
                                        <div class="col-name">
                                            <h3 class="name">
                                                <a target="_blank" href=""><?=$value['gname']?></a>
                                            </h3>
                                        </div>
                                        <div class="col-price">
                                            <?=$value['price']?>元
                                        </div>
                                        <div class="col-num">
                                            <div class="change-goods-num">
                                                <form action="index.php?c=cart&a=addnum" method="post">
                                                    <!-- <button style="float: left;" type="button" onclick="minu()"> -->
                                                    <a style="width: 38px;height: 38px;display: block;float: left;" href="index.php?c=cart&a=jian&id=<?=$value['goods_id']?>">
                                                    <div class="minus">
                                                        
                                                            <svg class="icon" aria-hidden="true">
                                                                <use xlink:href="#icon-plus-minus"></use>
                                                            </svg>
                                                        
                                                    </div>
                                                    <!-- </button> -->

                                                    </a>
                                                    <input type="hidden" name="price" value="<?=$value['price']?>">
                                                    <input type="hidden" name="id" value="<?=$value['goods_id']?>">
                                                    <input id="num" name='num' class="goods-num" type="number" value="<?=$value['num']?>" min="1" max="5">
                                                    <a style="width: 38px;height: 38px;display: block;float: left;" href="index.php?c=cart&a=jia&id=<?=$value['goods_id']?>">
                                                     <!-- <button type="button" onclick="plus()"> -->
                                                    <div class="minus">
                                                       
                                                            <svg class="icon" aria-hidden="true">
                                                                <use xlink:href="#icon-jia1"></use>
                                                            </svg>
                                                            <input class="jianum" type="submit" value="xx">
                                                    </div>
        
                                                    <!-- </button> -->
                                                    </a>
                                                    
                                                </form>
                                            </div>
                                            
                                        </div>
                                        <div class="col-total">
                                            <?=$value['num']*$value['price']?>
                                            <!-- <?=$row3['subtotal']?>元 -->
                                        </div>
                                        <div class="col-action">
                                            <a class="del" href="index.php?c=cart&a=del&goods_id=<?=$value['goods_id']?>" title="删除">
                                                <svg class="icon" aria-hidden="true">
                                                    <use xlink:href="#icon-x"></use>
                                                </svg>
                                            </a>
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                            
                            
                        <?php endforeach ?>
                        
                    </ul>


                </div>
            </div>

            <div class="raise-buy-box">
                
            </div>

            <div class="cart-bar">
                <div class="section-left">
                    <a class="back-shopping" href="index.php?c=goods&a=allclass">继续购物</a>
                    <span class="cart-total">
                        共
                        <i>
                            <?=$num?>
                        </i>
                        件商品
                       <!--  ，已选择
                        <i>0</i>
                        件 -->
                    </span>
                </div>
                <span class="total-price">
                    合计：
                    <em><?=$subtotal?></em>
                    元
 
                </span>
                <a class="btn" href="index.php?c=cart&a=buy">去结算</a>
            </div>
        </div>

        <div class="cart-recommend">
            <h2 class="xm-recommend-title">
                <span>买购物车中商品的人还买了</span>
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
    </div><!--page-main-container结束-->
    
</div><!--page-main结束-->

<!--foot页脚开始-->
<?php $this->footer() ?>
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>
</body>
</html>