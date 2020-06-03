<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米商城 - 小米CC9、小米MIX 3、RedmiK20，小米电视官方网站</title>
    <link href="<?=HOME_CSS?>index.css" rel="stylesheet">
     <!-- 网页标题logo制作 -->
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
    <style>
/*css样式初始化*/
    html, body,ul,li{
        margin: 0;
        padding: 0;
    }
    ul,ol{
        list-style-type:none;
    }
    a{
        text-decoration:none;
    }
    
</style>
    
</head>
<body>

<!--右浮动条-->
<div class="home-tool-bar">
    <a class="item" href="">
        <div>
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-shoujiapp"></use>
            </svg>
        </div>
        <span>手机APP</span>
        <div class="pop-content">
            <img src="<?=HOME_IMG?>tb/xz.png" alt="">
            <span class="desc">手机扫一扫一分赢好礼</span>
        </div>
    </a>
    <a class="item" href="">
        <div>
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-zhanghu"></use>
            </svg>
        </div>
        <span>个人中心</span>
    </a>
    <a class="item" href="">
        <div>
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-buoumaotubiao46"></use>
            </svg>
        </div>
        <span>售后服务</span>
    </a>
    <a class="item" href="">
        <div>
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-rengongkefu"></use>
            </svg>
        </div>
        <span>人工客服</span>
    </a>
    <a class="item" href="">
        <div>
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-gouwuche-kongxin"></use>
            </svg>
        </div>
        <span>购物车</span>
    </a>
</div>

<!--############################################################head页首开始#############################################################-->


<?php $this->header() ?>

 


<!--main内容开始-->
<div class="home-hero">
    <div class="swiper-container">

        <!--广告轮播-->
        
    
			<img class="shuffling-figure" src="<?=HOME_IMG?>lb/2.jpg" alt="">


        <!-- 左侧导航栏 -->
        <div class="site-category">
            <ul style="padding-top:15px;" >
                <?php foreach ($list1 as $key => $value1): ?>

                    <li>
                        <?=$value1['cname']?>
                        <img src="<?=HOME_IMG?>right.png" alt="">
                        <div class="children">
                            
                            <?php foreach ($list2 as $key => $value2): ?>
                                <?php if ($value1['id']==$value2['pid']): ?>
                                    <ul>

                                    <li><a href="index.php?c=goods&a=index&id=<?=$value2['id']?>">
                                        <img src="<?=HOME_IMG?>cp/hm.png" alt="">
                                        <span><?=$value2['cname']?></span>
                                    </a></li>
                                    </ul>
                                 <?php endif ?>
                            <?php endforeach ?>
                                
                                
                                
                            
                            
                        </div>
                    </li>
                <?php endforeach ?>
                    
    
                
                
                
                
               
                
            </ul>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <div class="swiper-pagination">
            <div class="swiper-pagination-bullet">
                
            </div>
            <div class="swiper-pagination-bullet">
                
            </div>
            <div class="swiper-pagination-bullet">
                
            </div>
            <div class="swiper-pagination-bullet">
                
            </div>
            <div class="swiper-pagination-bullet">
                
            </div>
            
        </div>

    </div>


    <div class="home-hero-sub-row">
        <div class="home-hero-sub-span4">
            <ul class="home-channel-list">
                <li>
                    <img src="<?=HOME_IMG?>tb/xmms.png" alt="">
                    小米秒杀
                </li>
                <li>
                    <img src="<?=HOME_IMG?>tb/qytg.png" alt="">
                    企业团购
                </li>
                <li>
                    <img src="<?=HOME_IMG?>tb/fmtd.png" alt="">
                    F码通道
                </li>
                <li>
                    <img src="<?=HOME_IMG?>tb/mfk.png" alt="">
                    米粉卡
                </li>
                <li>
                    <img src="<?=HOME_IMG?>tb/yjhx.png" alt="">
                    以旧换新
                </li>
                <li>
                    <img src="<?=HOME_IMG?>tb/hfcz.png" alt="">
                    话费充值
                </li>
            </ul>
        </div>
        <div class="home-hero-sub-span16">
            <img src="<?=HOME_IMG?>gg/gg1.jpg" alt="">
        </div>
        <div class="home-hero-sub-span16">
            <img src="<?=HOME_IMG?>gg/gg2.jpg" alt="">
        </div>
        <div class="home-hero-sub-span16">
            <img src="<?=HOME_IMG?>gg/gg3.jpg" alt="">
        </div>
    </div>
</div><!--home-hero结束-->
<!-----------------------------------------------------------------------------------------------------------------------------                                               home-hero-container到此结束 ------------------------------------------------------------------------------------------------------------------------------>
<div class="main-background">
    <div class="main-container">

        <!-- 小米闪购 -->
        <div class="box-hd">
            <text class="title">小米闪购</text>
            <div class="head_hot_goods_change">
                 <span class="head_hot_goods_prave"><</span>
                 <span class="head_hot_goods_next">></span>
             </div>
            <!-- <a href=""><img class="title-img" src="<?=HOME_IMG?>tb/right.png" alt=""></a>
            <a href=""><img style="margin-right: -13px" class="title-img" src="<?=HOME_IMG?>tb/left.png" alt=""></a> -->
        </div>

        <div class="box-bd-clearfix">
            <div class="flashsale-countdown">
                <div class="flashsale-countdown-round">02:22场</div>
                <img style="margin-top: 25px;margin-bottom: 25px" src="<?=HOME_IMG?>tb/sd.jpg" alt="">
                <div class="desc" >距离结束还有</div>
                <div class="countdown">
                    <span class="countdown-span">02</span>
                    <span>:</span>
                    <span class="countdown-span">22</span>
                    <span>:</span>
                    <span class="countdown-span">22</span>
                </div>
            </div>
            <div class="span16" >
                <ul style="margin-top: -1px;">
                        <?php foreach ($list as $key => $value): ?>
                            <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="goods-list-li" style="border-top: 1px solid red">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?>
                            <?php if ($value['original_cost']!=0): ?>
                                 <del class="original-price"><?=$value['original_cost']?></del>
                             <?php endif ?> 
                            
                        </span>
                    </li></a>
                        <?php endforeach ?>

                        
               
                    

                    <!-- <a href=""><li class="goods-list-li" style="border-top: 1px solid rgb(173,255,47)">
                        <img class="goods-img" src="<?=HOME_IMG?>cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href=""><li class="goods-list-li" style="border-top: 1px solid rgb(100,149,237)">
                        <img class="goods-img" src="<?=HOME_IMG?>cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href=""><li class="goods-list-li" style="border-top: 1px solid rgb(106,90,205)">
                        <img class="goods-img" src="<?=HOME_IMG?>cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>    -->
                </ul> 
            </div>   <!--span16结束-->  
        </div><!--box-bd-clearfix-->
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    小米闪购到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg4.jpg" alt="">
        </div>


        <!-- 手机 -->
        <div class="box-hd">
            <text class="title">手机</text>
            <a href=""><text class="more">查看全部 <img style="width: 20px;height: 20px;" src="<?=HOME_IMG?>tb/r.png" alt=""></text></a>
        </div>

        <div class="row">
            <div class="row-span4">
            
            </div>
            <div class="span16" >
                <ul style="margin-top: -1px;">
                    <?php foreach ($lista as $key => $value): ?>
                        <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="brick-list-li">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?> <del class="original-price"><?=$value['original_cost']?></del></span>
                    </li></a>
                    <?php endforeach ?>
                </ul>
            </div><!--span16结束-->
        </div><!--row结束-->
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    手机到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg6.jpg" alt="">
        </div>


        <!-- 家电 -->
        <div class="box-hd">
            <text class="title">家电</text>
            <a href=""><text  class="more">电视影音</text></a>
            <a href=""><text class="more" style="margin-right: 30px">热门</text></a>
        </div>      

        <div class="row">
            <div class="span4">
                <ul  style="margin-top: -1px;">
                    <a href="#"><li style="margin-bottom: 14px;"><img src="<?=HOME_IMG?>gg/gg7.jpg" alt=""></li></a>
                    <a href="#"><li><img src="<?=HOME_IMG?>gg/gg8.jpg" alt=""></li></a>
                </ul>  
            </div>

            <div class="span16" >
                <ul style="margin-top: -1px;">
                    <?php foreach ($lista as $key => $value): ?>
                        <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="brick-list-li">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?> <del class="original-price"><?=$value['original_cost']?></del></span>
                    </li></a>
                    <?php endforeach ?>
                </ul>
            </div><!--span16结束-->
        </div><!--row结束-->
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    家电到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg9.jpg" alt="">
        </div>


        <!-- 智能 -->
        <div class="box-hd">
            <text class="title">智能</text>
            <a href=""><text  class="more">出行</text></a>
            <a href=""><text class="more" style="margin-right: 30px">热门</text></a>
        </div>
    
        <div class="row">
            <div class="span4">
                <ul  style="margin-top: -1px;">
                    <a href=""><li style="margin-bottom: 14px;"><img src="<?=HOME_IMG?>gg/gg10.jpg" alt=""></li></a>
                    <a href=""><li><img src="<?=HOME_IMG?>gg/gg11.jpg" alt=""></li></a>
                </ul>
            </div>

            <div class="span16" >
                <ul style="margin-top: -1px;">
                    <?php foreach ($lista as $key => $value): ?>
                        <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="brick-list-li">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?> <del class="original-price"><?=$value['original_cost']?></del></span>
                    </li></a>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    智能到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg12.jpg" alt="">
        </div>


        <!-- 搭配 -->
        <div class="box-hd">
            <text class="title">搭配</text>
            <a href=""><text  class="more">耳机音箱</text></a>
            <a href=""><text class="more" style="margin-right: 30px">热门</text></a>
        </div>
        
        <div class="row">
            <div class="span4">
                <ul  style="margin-top: -1px;">
                    <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li style="margin-bottom: 14px;"><img src="<?=HOME_IMG?>gg/gg13.jpg" alt=""></li></a>
                    <a href="#"><li><img src="<?=HOME_IMG?>gg/gg14.jpg" alt=""></li></a>
                </ul>
 
            </div>
            <div class="span16" >
                <ul style="margin-top: -1px;">
                    <?php foreach ($lista as $key => $value): ?>
                        <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="brick-list-li">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?> <del class="original-price"><?=$value['original_cost']?></del></span>
                    </li></a>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    搭配到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg15.jpg" alt="">
        </div>


        <!-- 配件 -->
        <div class="box-hd">
            <text class="title">配件</text>
            <a href=""><text  class="more">保护套</text></a>
            <a href=""><text class="more" style="margin-right: 30px">热门</text></a>
        </div>
        
        <div class="row">
            <div class="span4">
                <ul  style="margin-top: -1px;">
                    <a href="#"><li style="margin-bottom: 14px;"><img src="<?=HOME_IMG?>gg/gg16.jpg" alt=""></li></a>
                    <a href="#"><li><img src="<?=HOME_IMG?>gg/gg17.jpg" alt=""></li></a>
                </ul>
    
            </div>
            <div class="span16" >
                <ul style="margin-top: -1px;">
                    <?php foreach ($lista as $key => $value): ?>
                        <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="brick-list-li">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?> <del class="original-price"><?=$value['original_cost']?></del></span>
                    </li></a>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    配件到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg18.jpg" alt="">
        </div>


        <!-- 周边 -->
        <div class="box-hd">
            <text class="title">周边</text>
            <a href=""><text  class="more">出行</text></a>
            <a href=""><text class="more" style="margin-right: 30px">热门</text></a>
        </div>
        
        <div class="row">
            <div class="span4">
                <ul  style="margin-top: -1px;">
                    <a href="#"><li style="margin-bottom: 14px;"><img src="<?=HOME_IMG?>gg/gg19.jpg" alt=""></li></a>
                    <a href="#"><li><img src="<?=HOME_IMG?>gg/gg20.jpg" alt=""></li></a>
                </ul>   
            </div>
            <div class="span16" >
                <ul style="margin-top: -1px;">
                    <?php foreach ($lista as $key => $value): ?>
                        <a href="index.php?c=goods&a=index&id=<?=$value['id']?>"><li class="brick-list-li">
                        <img class="goods-img" src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt=""><br>
                        <span class="goods-name"><?=$value['gname']?></span><br>
                        <span class="goods-slogan"><?=$value['slogan']?></span><br><br>
                        <span class="price"><?=$value['price']?> <del class="original-price"><?=$value['original_cost']?></del></span>
                    </li></a>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <!-----------------------------------------------------------------------------------------------------------------------------                                                    周边到此结束 ------------------------------------------------------------------------------------------------------------------------------>
        <div class="home-banner-box">
            <img src="<?=HOME_IMG?>gg/gg21.jpg" alt="">
        </div>


        <!-- 视频 -->
        <div class="box-hd">
            <text class="title">视频</text>
            <a href=""><text class="more">查看全部 <img style="width: 20px;height: 20px;" src="<?=HOME_IMG?>tb/r.png" alt=""></text></a>
        </div>
    
        <div class="video">
            <ul style="margin-top: -1px;margin-left: -14px;">
                <li class="video-item">
                    <img src="<?=HOME_IMG?>sp/s1.jpg" alt="" style="margin-bottom: 28px;">
                    <span class="video-title">小米CC9</span><br>
                    <span class="video-theme">深蓝星球</span>
                </li>
                <li class="video-item">
                    <img src="<?=HOME_IMG?>sp/s2.jpg" alt="" style="margin-bottom: 28px;">
                    <span class="video-title">Redmi Note 7 系列</span><br>
                    <span class="video-theme">镜花水月</span>
                </li>
                <li class="video-item">
                    <img src="<?=HOME_IMG?>sp/s3.jpg" alt="" style="margin-bottom: 28px;">
                    <span class="video-title">黑鲨游戏手机2 Pro</span><br>
                    <span class="video-theme">指间主宰 发布会</span>
                </li>
                <li class="video-item">
                    <img src="<?=HOME_IMG?>sp/s4.jpg" alt="" style="margin-bottom: 28px;">
                    <span class="video-title">小米手环4</span><br>
                    <span class="video-theme">改变从今开始</span>
                </li>
            </ul>  
        </div>
        <!-----------------------------------------------------------------------------------------------------------------------------                                                   视频到此结束 ------------------------------------------------------------------------------------------------------------------------------>

    </div><!--main-container结束-->
</div><!--main-background结束-->
<!-----------------------------------------------------------------------------------------------------------------------------                                                    main内容到此结束 ------------------------------------------------------------------------------------------------------------------------------>



<?php $this->footer() ?>
    
    


















</body>
</html>