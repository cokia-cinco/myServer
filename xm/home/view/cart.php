<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的购物车-小米商城</title>
    <link href="css/cart.css" rel="stylesheet">
    <link rel="icon" href="/logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./font/iconfont.css">
    <script src="font/iconfont.js"></script>


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
            <h2>我的购物车</h2>
            <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
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

<div class="page-main">
    <div class="page-main-container">
        <div>
            <div class="cart-goods-list">
                <div class="list-head">
                    <div class="col-check">
                        
                        <input id="check1" class="col-checkbox" type="checkbox">
                        <label for="check1" class="label-check"></label>
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
                        <li>
                            <div class="item-box">
                                <div class="item-table">
                                    <div class="item-row">
                                        <div class="col-check">
                                          
                                            <input id="check2" class="col-checkbox" type="checkbox">
                                            <label for="check2" class="label-check"></label>
                                       
                                        </div>
                                        <div class="col-img">
                                            <a target="_blank" href="">
                                                <img src="img/cart/ssfs.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-name">
                                            <h3 class="name">
                                                <a target="_blank" href="">米家随身风扇 蓝色</a>
                                            </h3>
                                        </div>
                                        <div class="col-price">
                                            9.9元 
                                        </div>
                                        <div class="col-num">
                                            <div class="change-goods-num">
                                                <a id="minus" class="minus" href="">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-plus-minus"></use>
                                                    </svg>
                                                </a>
                                                <input id="num" class="goods-num" type="number" value="1" min="1" max="5">
                                                <a id="plus" class="plus" href="">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-jia1"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-total">
                                            9.9元
                                        </div>
                                        <div class="col-action">
                                            <a class="del" href="" title="删除">
                                                <svg class="icon" aria-hidden="true">
                                                    <use xlink:href="#icon-x"></use>
                                                </svg>
                                            </a>
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item-box">
                                <div class="item-table">
                                    <div class="item-row">
                                        <div class="col-check">
                                          
                                            <input id="check2" class="col-checkbox" type="checkbox">
                                            <label for="check2" class="label-check"></label>
                                       
                                        </div>
                                        <div class="col-img">
                                            <a target="_blank" href="">
                                                <img src="img/cart/ssfs.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-name">
                                            <h3 class="name">
                                                <a target="_blank" href="">米家随身风扇 蓝色</a>
                                            </h3>
                                        </div>
                                        <div class="col-price">
                                            9.9元
                                        </div>
                                        <div class="col-num">
                                            <div class="change-goods-num">
                                                <a id="minus" class="minus" href="">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-plus-minus"></use>
                                                    </svg>
                                                </a>
                                                <input id="num" class="goods-num" type="number" value="1" min="1" max="5">
                                                <a id="plus" class="plus" href="">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-jia1"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-total">
                                            9.9元
                                        </div>
                                        <div class="col-action">
                                            <a class="del" href="" title="删除">
                                                <svg class="icon" aria-hidden="true">
                                                    <use xlink:href="#icon-x"></use>
                                                </svg>
                                            </a>
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item-box">
                                <div class="item-table">
                                    <div class="item-row">
                                        <div class="col-check">
                                          
                                            <input id="check2" class="col-checkbox" type="checkbox">
                                            <label for="check2" class="label-check"></label>
                                       
                                        </div>
                                        <div class="col-img">
                                            <a target="_blank" href="">
                                                <img src="img/cart/ssfs.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-name">
                                            <h3 class="name">
                                                <a target="_blank" href="">米家随身风扇 蓝色</a>
                                            </h3>
                                        </div>
                                        <div class="col-price">
                                            9.9元
                                        </div>
                                        <div class="col-num">
                                            <div class="change-goods-num">
                                                <a id="minus" class="minus" href="">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-plus-minus"></use>
                                                    </svg>
                                                </a>
                                                <input id="num" class="goods-num" type="number" value="1" min="1" max="5">
                                                <a id="plus" class="plus" href="">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-jia1"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-total">
                                            9.9元
                                        </div>
                                        <div class="col-action">
                                            <a class="del" href="" title="删除">
                                                <svg class="icon" aria-hidden="true">
                                                    <use xlink:href="#icon-x"></use>
                                                </svg>
                                            </a>
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>

            <div class="raise-buy-box">
                
            </div>

            <div class="cart-bar">
                <div class="section-left">
                    <a class="back-shopping" href="">继续购物</a>
                    <span class="cart-total">
                        共
                        <i>3</i>
                        件商品，已选择
                        <i>0</i>
                        件
                    </span>
                </div>
                <span class="total-price">
                    合计：
                    <em>0</em>
                    元
 
                </span>
                <a class="btn" href="">去结算</a>
            </div>
        </div>

        <div class="cart-recommend">
            <h2 class="xm-recommend-title">
                <span>买购物车中商品的人还买了</span>
            </h2>
            <div class="xm-recommend">
                <ul style="margin-left: -14px;">
                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>

                    <a href="#"><li class="brick-list-li">
                        <img class="goods-img" src="img/cp/drh.png" alt=""><br>
                        <span class="goods-name">米家电水壶 白色</span><br>
                        <span class="goods-slogan">一杯水，是一家人的安心</span><br><br>
                        <span class="price">89元 <del class="original-price">99元</del></span>
                    </li></a>
                </ul>
            </div>
        </div>
    </div><!--page-main-container结束-->
    
</div><!--page-main结束-->

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