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
                <img src="img/cart/logo.png" alt="">
            </a>
        </div>
        <div class="header-title">
            <h2>确认订单</h2>
            <!-- <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p> -->
        </div> 
        <div class="topbar-info">
            <span class="user">
                <a class="user-name" href="">
                    <span class="name">卧槽你大爷</span>
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-xia"></use>
                    </svg>
                </a>
                <ul class="user-menu">
                    <li>
                        <a href="" target="_blank">个人中心</a>
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
                        <a href="" target="_blank">退出登录</a>
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
                    <!--已有地址-->
                    <div class="address-item">
                        <dl>
                            <dt><em class="uname">吴金伟</em></dt>
                            <dd>153****1585</dd>
                            <dd class="uaddress">
                                浙江 绍兴市 越城区 府山街道<br>
                                亭山路526绍兴职业技术学院(312000)
                            </dd>
                        </dl>
                    </div>
                    <!--已有地址-->
                    <div class="address-item">
                        <dl>
                            <dt><em class="uname">吴金伟</em></dt>
                            <dd>153****1585</dd>
                            <dd class="uaddress">
                                浙江 绍兴市 越城区 府山街道<br>
                                亭山路526绍兴职业技术学院(312000)
                            </dd>
                        </dl>
                    </div>
                    <!--已有地址-->
                    <div class="address-item">
                        <dl>
                            <dt><em class="uname">吴金伟</em></dt>
                            <dd>153****1585</dd>
                            <dd class="uaddress">
                                浙江 绍兴市 越城区 府山街道<br>
                                亭山路526绍兴职业技术学院(312000)
                            </dd>
                        </dl>
                    </div>
                    <!--添加新的地址-->
                    <div class="address-item address-item-new">
                        <svg class="icon" aria-hidden="true">
                            <use xlink:href="#icon-jia2"></use>
                        </svg>
                        添加新地址
                    </div>
                </div>
            </div>

            <div class="section-goods">
                <div class="section-header">
                    <h3 class="title">商品及优惠券</h3>
                </div>
                <div class="section-body">
                    <ul class="goods-list">
                        <li>
                            <div class="col col-img">
                                <img src="img/cp/cc9.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="col col-name">
                                <a href="">
                                    小米CC9 6/128+CC星芒钻幕壳(满天星)
                                </a>
                            </div>
                            <div class="col col-price">
                                2198元 x 1
                            </div>
                            <div class="col col-status">
                                
                            </div>
                            <div class="col col-total">
                                2198元
                            </div>
                        </li>
                        <li>
                            <div class="col col-img">
                                <img src="img/cp/cc9.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="col col-name">
                                <a href="">
                                    小米CC9 6/128+CC星芒钻幕壳(满天星)
                                </a>
                            </div>
                            <div class="col col-price">
                                2198元 x 1
                            </div>
                            <div class="col col-status">
                                
                            </div>
                            <div class="col col-total">
                                2198元
                            </div>
                        </li>
                        <li>
                            <div class="col col-img">
                                <img src="img/cp/cc9.png" width="30px" height="30px" alt="">
                            </div>
                            <div class="col col-name">
                                <a href="">
                                    小米CC9 6/128+CC星芒钻幕壳(满天星)
                                </a>
                            </div>
                            <div class="col col-price">
                                2198元 x 1
                            </div>
                            <div class="col col-status">
                                
                            </div>
                            <div class="col col-total">
                                2198元
                            </div>
                        </li>
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
                           <span class="val">4件</span>
                        </li>
                        <li>
                           <label for="">商品总价:</label> 
                           <span class="val">4116.9元</span>
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
                                <em>4116.9</em>
                           元</span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="section-bar">
                <div class="fr">
                    <a class="btn-primary" href="">去结算</a>
                    <a class="btn-return" href="">返回购物车</a>
                </div>
            </div>
        </div>
    </div>
</div>





<!--foot页脚开始-->
<div class="site-footer">
    <div class="footer-container">
        <div class="footer-service">
            <ul style="margin-left: -40px;margin-top:27.5px">
                <li><a href=""><img src="img/tb/wx.png" style="width: 20px;height: 20px" alt="">预约维修服务</a></li>
                <li><a href=""><img src="img/tb/7.png" style="width: 20px;height: 20px" alt="">7天无理由退货</a></li>
                <li><a href=""><img src="img/tb/15.png" style="width: 20px;height: 20px" alt="">15天免费换货</a></li>
                <li><a href=""><img src="img/tb/lw.png" style="width: 20px;height: 20px" alt="">满150元包邮</a></li>
                <li><a href=""><img src="img/tb/dw.png" style="width: 20px;height: 20px" alt="">520余家售后网点</a></li>
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
                            <img src="img/tb/xx.png" alt="">
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