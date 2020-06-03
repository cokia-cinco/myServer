<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米账号-账号安全</title>
    <link rel="stylesheet" href="<?=HOME_CSS?>account.css">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
</head>
<body>
    <div class="wrap">
        <div class="layout">
            <div class="n-logo-area">
                <a class="fl-1" href="">
                    <img src="<?=HOME_IMG?>account/n-logo.png" alt="">
                </a>
                <a class="fl-r" href="">退出</a>
            </div>
            <div class="n-account-area-box">
                <div class="n-account-area">
                    <div class="na-info">
                        <?php if (!empty($_SESSION['home']['name'])): ?>
                        <p class="na-name"><?=$_SESSION['home']['name']?></p>
                            
                        <?php endif ?>
                        <p class="na-num"><?=$_SESSION['home']['tel']?></p>
                    </div>
                    <div class="na-img-area">
                        <div class="na-img-bg-area">
                            <img src="<?=HOME_IMG?>account/s2tDnVRBY8EqaL.jpg" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>

        <div class="layout">
            <div class="n-main-nav">
                <ul class="c_b">
                    <li><a  href="">账号安全</a></li>
                    <li><a style="color: #ff6700" href="">个人信息</a></li>
                    <li><a href="">绑定授权</a></li>
                    <li><a href="">小米服务</a></li>
                    <li><a href="">设备管理</a></li>
                </ul>
                
            </div>

            <div class="n-frame">
                <div class="title-item">
                    <h4 class="title-big">编辑个人信息</h4>
                    
                    
                </div>

                <!-- <ul class="device-detail-area">
                    <li class="click-row">
                        <div class="font-img-item"> 
                            <em class="fi-ico"></em>
                            <p class="title-normal">账号密码</p>
                            <p class="font-default">用于保护账号信息和登录安全</p>
                        </div>
                        <div class="ada-btn-area">
                            <a class="n-btn" href="">修改</a>
                        </div>
                        
                    </li>
                    <li class="click-row">
                        <div class="font-img-item"> 
                            <em class="fi-ico fi-ico-email"></em>
                            <p class="title-normal">安全邮箱 25*******4@q*.com </p>
                            <p class="font-default">安全邮箱可以用于登录小米帐号，重置密码或其他安全验证</p>
                        </div>
                        <div class="ada-btn-area">
                            <a class="n-btn" href="">修改</a>
                        </div>
                        
                    </li>
                    <li class="click-row">
                        <div class="font-img-item"> 
                            <em class="fi-ico fi-ico-phone"></em>
                            <p class="title-normal">安全手机 153******85</p>
                            <p class="font-default">安全手机可以用于登录小米帐号，重置密码或其他安全验证</p>
                        </div>
                        <div class="ada-btn-area">
                            <a class="n-btn" href="">修改</a>
                        </div>
                        
                    </li>
                    <li class="click-row">
                        <div class="font-img-item"> 
                            <em class="fi-ico fi-ico-secret"></em>
                            <p class="title-normal">密保问题</p>
                            <p class="font-default">密保问题可用于重置密码和其他安全验证</p>
                        </div>
                        <div class="ada-btn-area">
                            <a class="n-btn" href="">修改</a>
                        </div>
                        
                    </li>
                </ul> -->
                <form action="index.php?c=user&a=edituser" method="post">
                    <input type="hidden" name="id" value="<?=$_SESSION['home']['id']?>" >
                    昵称：<input type="text" name="nickname" id="username" class="inpFlie w300" value="<?=$list['nickname'] ?>" /><br>
                    手机号：<input type="text" name="tel" id="tel" class="inpFlie w300" value="<?=$list['tel'] ?>"/><br>
                    年龄：<input value="<?=$list['age'] ?>" style='width: 50px' type="text" name="age" id="age" class="inpFlie w300" /><br>
                    邮箱：<input value="<?=$list['email'] ?>" type="text" name="email" id="email" class="inpFlie w300" /><br>
                    性别：<select name="sex">
                             <option value="1" <?php if($list['sex']==1){echo "selected";}?> >女</option>
                             <option value="2" <?php if($list['sex']==2){echo "selected";}?> >男</option>
                          </select>
                    <input type="submit" value="保存">
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>