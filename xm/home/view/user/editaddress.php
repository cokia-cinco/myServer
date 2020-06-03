<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>收货地址</title>
    <link href="<?=HOME_CSS?>addaddress.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
</head>
<body>
<!--############################################################head页首开始#############################################################-->
<?php $this->header() ?>


<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <span><a href="">首页</a> &gt; 收货地址 </span>
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
                            <h1 class="title">添加收货地址</h1>
                        </div> 
                        <div class="box-bd">
                            <form action="index.php?c=address&a=editaddress" method="post">
                                <input type="hidden" name="id" value="<?= $list['id'] ?>">
                                <div class="form-section">
                                    <input class='input1' type="text" name='name' value="<?=$list['name']?>" placeholder="收货人姓名">
                                </div>
                                <div class="form-section">
                                    <input class='input1' type="text" name='phone' value="<?=$list['phone']?>" placeholder="手机号">
                                </div>
                                <div class="form-section">
                                    <input class='input2' type="text" name='province' value="<?=$list['province']?>" placeholder="省份">
                                </div>
                                <div class="form-section">
                                    <input class='input2' type="text" name='city' value="<?=$list['city']?>" placeholder="市区">
                                </div>
                                <div class="form-section">
                                    <input class='input2' type="text" name='county' value="<?=$list['county']?>" placeholder="区县">
                                </div>
                                <div class="form-section">
                                    <input class='input2' type="text" name='street' value="<?=$list['street']?>" placeholder="街道">
                                </div>
                                <div class="form-section">
                                    <input class='input3' type="text" name='address' value="<?=$list['address']?>" placeholder="详细地址">
                                </div>

                                <div class="form-section">
                                    <input class='input1' type="text" name='postcode' value="<?=$list['postcode']?>" placeholder="邮政">
                                </div>
                                <div class="form-section">
                                    <input class='input1' type="text" name='label' value="<?=$list['label']?>" placeholder="地址标签">
                                </div>

                                <div class="modal-footer">
                                    <div>
                                        <input type="submit" value="保存">
                                    </div>
                                    <a style='color: #fff' href="index.php?c=user&a=address">
                                    <div>
                                        取消
                                    </div>
                                    </a>
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