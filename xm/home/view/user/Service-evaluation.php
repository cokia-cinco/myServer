<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品评价</title>
    <link href="<?=HOME_CSS?>Service-evaluation.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
</head>
<body>
<!--############################################################head页首开始#############################################################-->
<?php $this->header() ?>


<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <span><a href="">首页</a> &gt; 商品评价 </span>
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
                                    <a href="index.php?c=user&a=order">我的订单</a>
                                </li>
                                <li>
                                    <a href="">团购订单</a>
                                </li>
                                <li>
                                    <a href="index.php?c=user&a=comment">评价晒单 (1)</a>
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
                <div class="goods-comment-detail">
                    <div class="container">
                        <div class="row">
                            <div class="comment-top">
                                <h2>服务评价</h2>
                            </div>
                            <form action="index.php?c=order&a=addcom" method="post">
                            <div class="comment-content">
                                <div class="cont-top">
                                    <div class="top-1">
                                        <div class="top-common">
                                           <div class="common-1">
                                               物流包装
                                           </div> 
                                           <div class="common-r">
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                           </div>
                                        </div>
                                        <div class="top-common">
                                           <div class="common-1">
                                               物流速度
                                           </div> 
                                           <div class="common-r">
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                           </div>
                                        </div>
                                        <div class="top-common">
                                           <div class="common-1">
                                               售后服务
                                           </div> 
                                           <div class="common-r">
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                           </div>
                                        </div>
                                        <div class="top-common">
                                           <div class="common-1">
                                               客服服务
                                           </div> 
                                           <div class="common-r">
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                               <div class="star chose">
                                                    <svg class="icon" aria-hidden="true">
                                                        <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                    </svg>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="top-r">
                                        <div class="right-text">
                                            <input name="serve" id="" cols="30" rows="10" maxlength="500" placeholder="还有想说的吗？您的意见对我们非常重要" style="height: 137px"></textarea>
                                            <svg class="icon" aria-hidden="true">
                                                <!-- <use xlink:href="#icon-bi"></use> -->
                                            </svg>
                                            <div class="words">
                                                0/500 
                                            </div>
                                        </div>
                                        <!-- <div class="submit">
                                            发表评价
                                        </div> -->
                                    </div>
                                </div>
                                <div class="cont-content">
                                    <div class="comment-common">
                                        <?php foreach ($list as $key => $value): ?>
                                <input type="hidden" name="goods_id" value="<?= $value['id'] ?>">
                                <input type="hidden" name="user_id" value="<?= $_SESSION['home']['id'] ?>">
                                <input type="hidden" name="ordernum" value="<?= $ordernum ?>">
                                <input type="hidden" name="status" value="<?= $status ?>">

                                            <div class="common-left">
                                                <img src="<?= imgPath(UPLOAD, $value['iname'])?>" alt="">
                                                <div class="title">
                                                    <?=$value['gname']?>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                        
                                        <div class="common-right">
                                            <div class="right-top">
                                                <div class="inline">
                                                    评分
                                                </div>
                                                <div class="inline">
                                                    <div class="star chose">
                                                        <svg class="icon" aria-hidden="true">
                                                            <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                        </svg>
                                                   </div>
                                                   <div class="star chose">
                                                        <svg class="icon" aria-hidden="true">
                                                            <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                        </svg>
                                                   </div>
                                                   <div class="star chose">
                                                        <svg class="icon" aria-hidden="true">
                                                            <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                        </svg>
                                                   </div>
                                                   <div class="star chose">
                                                        <svg class="icon" aria-hidden="true">
                                                            <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                        </svg>
                                                   </div>
                                                   <div class="star chose">
                                                        <svg class="icon" aria-hidden="true">
                                                            <use xlink:href="#icon-xingzhuang60kaobei2"></use>
                                                        </svg>
                                                   </div>
                                                </div>
                                            </div>

                                            <div class="right-middle">
                                                <input class="middle-text" maxlength="500" name="msg" id="" cols="30" rows="10" placeholder="外形如何？品质如何？写写你的感受分享给网友吧！"></textarea>
                                                <div class="words">
                                                    0/500
                                                </div>

                                            </div>
                                            <div class="submit">
                                                <input type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
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