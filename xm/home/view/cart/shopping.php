<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>小米CC9立即购买-小米商城</title>
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?=HOME_CSS?>shopping.css">
    <script src="/home/static/font/iconfont.js"></script>
    <script>
    function changesrc(obj){
        // 获取大图对象
        var big = document.getElementById('big');
        // 修改大图src
        big.src = obj.src;
    }
    

</script>
    <style>
        body,ul,ol,dl,h1,h2,h3,h4,h5,h6,div,p,fieldset{ margin: 0; padding: 0; }
        body{ font: 14px "Helvetica Neue",Helvetica,Arial,"Microsoft Yahei","Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif; background: #fff; }
        li{list-style:none;}
        a{text-decoration: none;}
        table{border-collapse: collapse;}
        em{font-style:normal;}
        input{outline: none}
        li{list-style-type:none;}
        a{text-decoration:none;} 
        a:hover{
            color: #ff6700;
        }
    </style> 
</head>
<body>
<!--############################################################head页首开始###############################################################-->
<?php $this->header() ?>
<!--############################################################head页首结束###############################################################-->

<!--##############################################################导航#####################################################################-->
<div class="xm-product-box">
    <div class="nav-bar-container">
        <h2><?=$list['gname']?></h2>
        <div class="nav-bar-container-left">
            <span>丨</span>
             <a href="">小米CC9e</a>
            <span>丨</span>
             <a href="">小米CC9 美图定制版</a>
        </div>

        <div class="bar-container-right">
             <a href="index.php?c=goods&a=index&id=<?=$gid?>">概述</a>
            <span>|</span>
             <a href="">参数</a>
            <span>|</span>
             <a href="">F码通道</a>
            <span>|</span>
             <a href="index.php?c=goods&a=comment&id=<?=$gid?>">用户评价</a>
            <!-- <a class="btn-small" href="">立即购买</a> -->
        </div>
        
    </div><!--nav-bar-container结束-->
</div>
<!--###########################################################导航结束####################################################################-->

<!--###########################################################主要内容####################################################################-->
<div class="xm-buyBox">
    <!--main内容开始-->
    <div class="pro-choose-main">
        <!--这是左边轮播图-->
        <div class="pro-view">
            <div class="img-con">
                <div class="ui-wrapper">
                    <div class="ui-viewport">
                        <div class="sliderwrap">
                            <img class="slider" src="<?= imgPath(UPLOAD, $list['iname'])?>" alt="">
                            
                        </div>
                        
                    </div>
                    <div class="ui-controls">
                        <div class="ui-pager">
                            <ul>
                                <li class="smallpic">
                                    <img src="<?= imgPath(UPLOAD, $list['iname'])?>" onmouseover="changesrc(this)" width="30">
                                    <?php if (!empty($imglist)): ?>
                                    <?php foreach ($imglist as $val): ?>
                                        <img src="<?= imgPath(UPLOAD, $val['iname'])?>" onmouseover="changesrc(this)" width="30">
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </li>
                            </ul>
                            <!-- div class="ui-pager-item"></div>
                            <div class="ui-pager-item"></div>
                            <div class="ui-pager-item"></div>
                            <div class="ui-pager-item"></div> -->
                            
                        </div>
                        <div class="ui-controls-direction">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <!--这是右边文字介绍-->
        <div class="pro-info">
            <h1 class="pro-title"><?=$list['gname']?></h1>
            <p class="sale-desc">
                <!-- <font color="#ff4a00">「6GB+128GB领券减100到手价1899元，赠果冻包，499元星芒奢华水晶壳套餐加价只需299元」</font> -->
                <?=$list['msg']?>
            </p>
            <div class="main">
                <!--经营主体-->
                <p class="aftersale-company">小米自营</p>
                <!--价格-->
                <div class="pro-price">
                    <span><?=$list['price']?>元</span>
                </div>
                <!--优惠券-->
                <div class="sale-wrap">
                    <div class="coupon-wrap">
                        <span class="coupon-tag">优惠券</span>
                        <span class="coupon-name"><?=$list['gname']?> 专属100元优惠券</span>
                        <a href="">立即领取</a>
                        
                    </div>
                    <div class="flow-wrap">
                        <ul>
                            <li>
                                <span class="flow-tag">赠完即止</span>
                                <span class="flow-name">赠<?=$list['gname']?>标准高透贴膜</span>
                            </li>
                            <li>
                                <span class="flow-tag">赠完即止</span>
                                <span class="flow-name">赠<?=$list['gname']?>高透保护壳</span>
                            </li>
                        </ul>
                        
                    </div>
                
                </div>
                <!--地址-->
                <div class="address-wrap">
                    <div class="user-default-address">
                        <div>
                            <div class="adderss-info">
                                <!-- <span class="item"><?=$list['province']?></span>
                                <span class="item"><?=$list['city']?></span>
                                <span class="item"><?=$list['county']?></span>
                                <span class="item"><?=$list['street']?></span> -->
                            </div>
                            <span class="switch-choose-regions">这里是版本介绍</span>
                        </div>
                        <!-- <div class="product-status">
                            <span class="over">该地区暂时缺货</span>
                        </div> -->
                        
                    </div>
                    
                </div>
                <!--产品版本-->
                <div class="list-wrap">
                    <!--一级选择模板-->
                    <!-- <div class="pro-choose-col1">
                        <div class="step-title">选择版本</div>
                        <ul class="step-list">
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    <span class="name">6GB+64GB</span>
                                    <span class="price">1799元</span>
                                </a>
                            </li>
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    <span class="name">6GB+128GB</span>
                                    <span class="price">1999元</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!--二级选择模板-->
                    <!-- <div class="pro-choose-col2">
                        <div class="step-title">选择颜色</div>
                        <ul class="step-list">
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    <img class="icon-done" src="<?=HOME_IMG?>shopping/bs.jpg" alt="">
                                    白色恋人（白色）
                                </a>
                            </li>
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    <img class="icon-done" src="<?=HOME_IMG?>shopping/sl.jpg" alt="">
                                    深蓝星球（蓝色）
                                </a>
                            </li>
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    <img class="icon-done" src="<?=HOME_IMG?>shopping/ay.jpg" alt="">
                                    暗夜王子（深空灰）
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-choose-col2">
                        <div class="step-title">选择套餐</div>
                        <ul class="step-list">
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    
                                    标配
                                </a>
                            </li>
                            <li class="btn-biglarge">
                                <a class="step-name" href="">
                                    
                                    +299得星芒钻幕壳
                                </a>
                            </li>
                            
                        </ul>
                    </div> -->
                    <!-- <div class="list-choose-small">
                        <div style="margin-bottom: 15px" class="step-title">选择小米提供的意外保护
                            <a href="https://api.jr.mi.com/activity/accidentIns/?from=mishop&insuranceSku=25168" target="_blank">了解意外保护></a>
                        </div>
                        <ul>
                            <li class="clearfix">
                                <div class="clearfix-square">
                                    <div class="circular">
                                        
                                    </div>
                                </div>
                                <img src="<?=HOME_IMG?>shopping/bao.png" alt="">
                                <div>
                                    <span class="name">意外保障服务</span>
                                    <p class="desc">手机意外碎屏/进水/碾压等损坏</p>
                                    
                                    <div class="square"></div>
                                    <p class="agreement">
                                        我已阅读
                                        <a href="https://api.jr.mi.com/insurance/document/phone_accidentIns.html?insuranceSku=25168&couponFrom=rule" target="_blank">服务条款
                                            <span>|</span>
                                        </a>
                                        <a href="https://api.jr.mi.com/insurance/document/phone_accidentIns.html?insuranceSku=25168&couponFrom=question" target="_blank">常见问题
                                            
                                        </a>
                                    </p>
                                    <span class="price">179元</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="clearfix-square">
                                    <div class="circular">
                                        
                                    </div>
                                </div>
                                <img src="<?=HOME_IMG?>shopping/bao.png" alt="">
                                <div>
                                    <span class="name">碎屏保障服务</span>
                                    <p class="desc">手机意外碎屏</p>
                                    
                                    <div class="square"></div>
                                    <p class="agreement">
                                        我已阅读
                                        <a href="https://api.jr.mi.com/insurance/document/phone_accidentIns.html?insuranceSku=25168&couponFrom=rule" target="_blank">服务条款
                                            <span>|</span>
                                        </a>
                                        <a href="https://api.jr.mi.com/insurance/document/phone_accidentIns.html?insuranceSku=25168&couponFrom=question" target="_blank">常见问题
                                            
                                        </a>
                                    </p>
                                    <span class="price">99元</span>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <!--意外保护结束-->
                    <!-- <div class="list-choose-small">
                        <div style="margin-bottom: 15px" class="step-title">选择小米提供的延长保修
                                <a href="https://api.jr.mi.com/activity/accidentIns/?from=mishop&insuranceSku=25170" target="_blank">了解延长保修></a>
                            </div>
                            <ul>
                                <li class="clearfix">
                                    <div class="clearfix-square">
                                        <div class="circular">
                                            
                                        </div>
                                    </div>
                                    <img src="<?=HOME_IMG?>shopping/bao.png" alt="">
                                    <div>
                                        <span class="name">意外保障服务</span>
                                        <p class="desc">手机意外碎屏/进水/碾压等损坏</p>
                                        
                                        <div class="square"></div>
                                        <p class="agreement">
                                            我已阅读
                                            <a href="https://api.jr.mi.com/insurance/document/phone_accidentIns.html?insuranceSku=25168&couponFrom=rule" target="_blank">服务条款
                                                <span>|</span>
                                            </a>
                                            <a href="https://api.jr.mi.com/insurance/document/phone_accidentIns.html?insuranceSku=25168&couponFrom=question" target="_blank">常见问题
                                                
                                            </a>
                                        </p>
                                        <span class="price">49元</span>
                                    </div>
                                </li>
                            </ul>
                    </div> -->
                    <!--延长保修结束-->

                    <!--总价-->
                    <div class="pro-list">
                        <ul>
                            <li><?=$list['gname']?>
                                <span><?=$list['price']?>元</span>
                            </li>
                            <li class="totlePrice">
                                总计：<?=$list['price']?>元
                            </li>

                        </ul>
                    </div>

                    <ul class="btn-wrap">
                        <li>
                            
                                <?php if ($list['stock'] ==0 ): ?>
                                    到货通知
                                <?php else: ?>
                                    <a class="btn-line-primary" href="index.php?c=cart&a=index&id=<?=$list['id']?>">加入购物车</a>
                                    <li>
                            <a style="float: left" class="btn-line-primary" href="">立即购买</a>
                        </li>
                                <?php endif ?>
                                
                            
                        </li>
                        
                    </ul>
                    <div class="pro-policy">
                        
                            <span>
                                <img src="<?=HOME_IMG?>shopping/gou.png" alt="">
                                <em>小米自营</em>
                            </span>
                            <span>
                                <img src="<?=HOME_IMG?>shopping/gou.png" alt="">
                                <em>小米发货</em>
                            </span>
                            <span>
                                <img src="<?=HOME_IMG?>shopping/gou.png" alt="">
                                <em>7天无理由退货</em>
                            </span>
                            <span>
                                <img src="<?=HOME_IMG?>shopping/gou.png" alt="">
                                <em>运费说明</em>
                            </span>
                       
                        
                    </div>

                    
                </div>
            
            </div><!--main结束-->
        </div><!--pro-info结束（右边文字介绍）-->
    </div><!--pro-choose-main内容结束-->
    
    <!--价格说明-->
    <div class="pro-infomation">
        <div class="infor-con">
            <h3>价格说明</h3>
            <div class="con">
              
                
            </div>
        </div>
        
    </div><!--pro-infomation内容结束-->
</div><!--xm-buyBox结束-->
<!--#########################################################主要内容结束##################################################################-->
<!--foot页脚开始-->
<div class="site-footer">
    <div class="footer-container">
        <div class="footer-service">
            <ul style="margin-left: -40px;margin-top:27.5px">
                <li><a href=""><img src="<?=HOME_IMG?>tb/wx.png" style="width: 20px;height: 20px" alt="">预约维修服务</a></li>
                <li><a href=""><img src="<?=HOME_IMG?>tb/7.png" style="width: 20px;height: 20px" alt="">7天无理由退货</a></li>
                <li><a href=""><img src="<?=HOME_IMG?>tb/15.png" style="width: 20px;height: 20px" alt="">15天免费换货</a></li>
                <li><a href=""><img src="<?=HOME_IMG?>tb/lw.png" style="width: 20px;height: 20px" alt="">满150元包邮</a></li>
                <li><a href=""><img src="<?=HOME_IMG?>tb/dw.png" style="width: 20px;height: 20px" alt="">520余家售后网点</a></li>
            </ul>
        </div><!--footer-service结束-->
        <div class="footer-links">
            <div class="col-links" style="width: 160px;height: 112px">
                <dl>
                    <dt>帮助中心</dt>
                    <a href=""><dd>账户管理</dd></a>
                    <a href=""><dd>购物指南</dd></a>
                    <a href=""><dd>订单操作</dd></a>
                </dl>
            </div>

             <div class="col-links" style="width: 160px;height: 112px">
                <dl>
                    <dt>服务支持</dt>
                    <a href=""><dd>售后政策</dd></a>
                    <a href=""><dd>自助服务</dd></a>
                    <a href=""><dd>相关下载</dd></a>
                </dl>
            </div>

             <div class="col-links" style="width: 160px;height: 112px">
                <dl>
                    <dt>线下门店</dt>
                    <a href=""><dd>小米之家</dd></a>
                    <a href=""><dd>服务网点</dd></a>
                    <a href=""><dd>授权体验店</dd></a>
                </dl>
            </div>

             <div class="col-links" style="width: 160px;height: 112px">
                <dl>
                    <dt>关于小米</dt>
                    <a href=""><dd>了解小米</dd></a>
                    <a href=""><dd>加入小米</dd></a>
                    <a href=""><dd>投资者关系</dd></a>
                </dl>
            </div>

             <div class="col-links" style="width: 160px;height: 112px">
                <dl>
                    <dt>关注我们</dt>
                    <a href=""><dd>新浪微博</dd></a>
                    <a href=""><dd>官方微信</dd></a>
                    <a href=""><dd>联系我们</dd></a>
                </dl>
            </div>

             <div class="col-links" style="width: 160px;height: 112px">
                <dl>
                    <dt>特色服务</dt>
                    <a href=""><dd>F码通道</dd></a>
                    <a href=""><dd>礼物码</dd></a>
                    <a href=""><dd>防伪查询</dd></a>
                </dl>
            </div>

            <div class="col-contact">
                <span class="phone">400-100-5678</span><br>
                <p class="service-time">周一至周日8:00-18:00<br>
                (仅收市话费)</p>
                <a href="">
                    <div class="btn">
                        <div class="btn-img">
                            <img src="<?=HOME_IMG?>tb/xx.png" alt="">
                        </div>
                        <div class="btn-text">
                            人工客服
                        </div>
                    </div>  
                </a>                
            </div><!--col-contact结束-->
        </div><!--footer-links-->
    </div><!--footer-container-->
</div><!--site-footer结束-->
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>

</body>
</html>