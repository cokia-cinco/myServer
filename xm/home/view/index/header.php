

<div class="herder">
    <!-- 顶端导航栏 -->
    <div class="site-topbar">
        <div class="site-topbar-container" >
            <!--left-->
            <div class="topbar-nav">
                <ul style="margin-left: 10px;margin-top: 0px;">
                    <a href=""><li>小米商城</li></a>
                    <a href=""><li>MIUI</li></a>
                    <a href=""><li>TOT</li></a>
                    <a href=""><li>云服务</li></a>
                    <a href=""><li>金融</li></a>
                    <a href=""><li>有品</li></a>
                    <a href=""><li>小爱开放平台</li></a>
                    <a href=""><li>企业团购</li></a>
                    <a href=""><li>资质证照</li></a>
                    <a href=""><li>协议规则</li></a>
                    <a class="topbar-download" href=""><li>下载app</li>
                        <span class="appcode">
                            <img src="<?=HOME_IMG?>tb/download.png" alt="">
                            小米商城APP
                        </span>
                    </a>
                    <a href=""><li>Select Location</li></a>
                </ul>
            </div>

            <!--right-->
            <div class="topbar-cart">
                <div class="topbar-cart-img">
                         <img style="width: 20px;height: 20px;margin-right: 4px;line-height: 20px;" src="<?=HOME_IMG?>tb/gwc.jpg" alt="">
                </div>
                <a href="index.php?c=cart&a=index1">
                <div style="float: left;">
                        购物车(0)
                </div>
                </a>
            </div>
            <div class="topbar-info">
                <ul style="margin-top: 0px">
                    <?php if (empty($_SESSION['home'])): ?>
                        <li><a href="">消息通知</a></li>
                        <li><a href="index.php?c=Reg&a=reg">注册</a></li>
                        <li><a href="index.php?c=Login&a=login">登录</a></li>

                        <?php else: ?>
                            <li><a href="">我的订单</a></li>
                            <li><a href="">消息通知</a></li>
                            <li>
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
                                        <div style="height: 40px;line-height: 40px;margin-top: -7px">
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
                                        </div>
                                        <li>
                                            <a href="index.php?c=user&a=personal_center" target="_blank">个人中心</a>
                                        </li>
                                        <li>
                                            <a href="index.php?c=user&a=comment" target="_blank">评价晒单</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank">我的喜欢</a>
                                        </li>
                                        <li>
                                            <a href="index.php?c=user&a=account" target="_blank">小米账号</a>
                                        </li>
                                        <li>
                                            <a href="index.php?c=Login&a=logout" target="_blank">退出登录</a>
                                        </li>
                                    </ul>
                                </span>



                            </li>
                          <!--   <li class="fl"><a href="index.php?c=user&a=index">个人中心</a></li> -->
                            
                        <?php endif ?>
                        


                    
                    <!-- <li><a href="">注册</a></li>
                    <li><a href="">登录</a></li> -->
                </ul>   
            </div>  
        </div><!--site-topbar-container结束-->
    </div><!--site-topbar结束-->

    <!-- 导航栏 -->
    <div class="site-header" >
        <div class="site-header-container">
            <div class="header-logo">
                <img src="<?=HOME_IMG?>logo.png" alt="">
            </div>
            <div class="header-nav">
                <ul style="padding-left: 30px">
                    <li><a href="index.php?c=goods&a=allclass">全部商品分类</a></li>
                    <li><a href="#">小米手机</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        <?php foreach ($list as $key => $value): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value['gname']?>
                                                </div>
                                                <p><?=$value['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                        
                                    </ul>
                                    
                                </div>
                                
                            </div>
                    </li>
                    <li><a href="#">Redmi红米</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        
                                            <?php foreach ($list1 as $key => $value1): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value1['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value1['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value1['gname']?>
                                                </div>
                                                <p><?=$value1['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                        
                                        
                                    </ul>
                                    
                                </div>
                                
                            </div>
                    </li>
                    <li><a href="#">电视</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        <?php foreach ($list2 as $key => $value2): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value2['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value2['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value2['gname']?>
                                                </div>
                                                <p><?=$value2['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                    </li>
                    <li><a href="#">笔记本</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        <?php foreach ($list3 as $key => $value3): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value3['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value3['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value3['gname']?>
                                                </div>
                                                <p><?=$value3['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                    </li>
                    <li><a href="#">家电</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        <?php foreach ($list4 as $key => $value4): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value4['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value4['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value4['gname']?>
                                                </div>
                                                <p><?=$value4['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                    </li>
                    <li><a href="#">路由器</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        <?php foreach ($list5 as $key => $value5): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value5['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value5['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value5['gname']?>
                                                </div>
                                                <p><?=$value5['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                    </li>
                    <li><a href="#">智能硬件</a>
                            <div class="herder-nav-container">
                                <div class="header-nav-menu">
                                    <ul>
                                        <?php foreach ($list6 as $key => $value6): ?>
                                            <li>
                                            <a href="index.php?c=goods&a=index&id=<?=$value6['id']?>">
                                                <div class="figure-thumb">
                                                    <img style='width: 110px;height: 110px;' src="<?= imgPath(UPLOAD, $value6['iname']) ?>" alt="">
                                                </div>
                                                <div class="shop-name">
                                                    <?=$value6['gname']?>
                                                </div>
                                                <p><?=$value6['price']?>元起</p>
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                    
                                </div>
                                 
                            </div>
                    </li>
                    <li><a href="#">服务</a></li>
                    <li><a href="#">社区</a></li>
                </ul>
            </div>

            <!--这里是顶部导航的搜索框-->
            <div class="header-search">
                <form style="line-height: 50px;width: 296px;height: 50px;" action="index.php" method="get">
                    <input type="hidden" name="c" value="goods">
                    <input type="hidden" name="a" value="allclass">

                    <input name='n' class="search-text" type="text" placeholder="请输入搜索内容" value="<?php echo empty($_GET['n'])?'':$_GET['n']; ?>">
                    <input class="search-btn" type="submit" value="搜索">
                </form>
                
            </div>
        </div>   
    </div><!--site-header结束-->
</div><!--header结束-->