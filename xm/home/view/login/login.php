<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米账号-登录</title>

    <link href="<?=HOME_CSS?>login.css" rel="stylesheet"> <!-- 链接到css -->



    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />


    <style>
        body,ul,ol,dl,h1,h2,h3,h4,h5,h6,div,p,fieldset{ margin: 0; padding: 0; }
        body{ font: 14px arial 微软雅黑; background: #fff; }
        li{list-style:none;}
        a{text-decoration: none;}
        table{border-collapse: collapse;}
        em{font-style:normal;}
        input{outline: none}
    </style>
</head>
<body>

    <div class="wrapper">
        
    
        <div class="h_panel">
            <img src="<?=HOME_IMG?>login/1.jpg" alt="">
        </div>

        <div class="login_banner_panel">
            <div class="layout_panel">
                <div class="layout">
                    <div class="nav-tabs-panel">
                        <div class="nav_tabs">
                            <span>账号登录</span>
                            <span style="font-size: 30px;color: #ccc">丨</span>
                            <span>扫码登录</span>
                        </div>
                    </div>
                    <div class="tabs-con">
                        <div class="login_area">
                            <form action="index.php?c=login&a=logindo" method="post">
                                <div class="loginbox">
                                    <div class="lgn_inputbg">
                                        <div class="single_imgarea">
                                            
                                        </div>
                                        <!-- <label class="labelbox" for=""> -->
                                            <input maxlength="11" name='tel' class="item_account" type="text" placeholder="邮箱/手机号码/小米ID">
                                            <input name='pwd' class="item_account" type="password" placeholder="密码">
                                        <!-- </label> -->

                                        <div class="btns_bg">
                                            <input class="btnadpt" type="submit" value="登录">
                                            
                                        </div>
                                    </div>
                                    
                                </div><!--loginbox结束-->
                                <div class="other_panel">
                                     <a href=""><span class="sms_link">手机短信登录/注册</span></a>
                                     <div class="n_links_area">
                                        <a href="index.php?c=Reg&a=reg">立即注册</a>
                                        <span>丨</span>
                                        <a href="">忘记密码?</a>
                                         
                                     </div>
                                     <div class="other_login_type">
                                        <fieldset class="oth_type_tit">
                                            <legend class="oth_type_txt" align="center">其他方式登录</legend>
                                        </fieldset>
                                        <div class="oth_type_liinks">
                                            <a href=""><img style="margin-left: 0" src="<?=HOME_IMG?>login/qq.png" alt=""></a>
                                            <a href=""><img src="<?=HOME_IMG?>login/xl.png" alt=""></a>
                                            <a href=""><img src="<?=HOME_IMG?>login/zfb.png" alt=""></a>
                                            <a href=""><img src="<?=HOME_IMG?>login/wx.png" alt=""></a>

                                            
                                        </div>
                                         
                                     </div>
                                    
                                </div>

                            </form>
                            <!-- <form action="">
                                <input class="input-1" type="text" placeholder="邮箱/手机号码/小米ID">
                                <input class="input-1" type="password" placeholder="密码">
                                <input class="input-2" type="submit" value="登录">
                            </form> -->
                             
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>

        
            <!-- <div class="div-2">

                <div class="div-3">
                    <span>账号登录</span>
                    <span style="font-size: 30px;color: #ccc">丨</span>
                    <span>扫码登录</span>
                </div>


                <div class="div-4">
                    <form action="">
                        <input class="input-1" type="text" placeholder="邮箱/手机号码/小米ID">
                        <input class="input-1" type="password" placeholder="密码">
                        <input class="input-2" type="submit" value="登录">
                    </form>

                    <span style="color: #ff6700;font-size: 14px;margin-left: 32px;margin-bottom: 30px">手机短信登录/注册</span>
                    <span style="color: #999999;font-size: 14px;float:right;margin-right: 28px">忘记密码</span>
                    <span style="color: #999999;font-size: 14px;float:right;">丨</span>
                    <span style="color: #999999;font-size: 14px;float:right;">立即注册</span>




                    <div>
                        <div>
                            <legend style="font-size: 14px;color: #bbb;text-align: center;margin-top: 90px;">其他登录方式</legend>
                        </div>

                        <div class="div-5">
                            <img  class="img-1" src="img/login/qq.png" alt="">
                            <img style="margin-left: 20px" class="img-1" src="img/login/xl.png" alt="">
                            <img style="margin-left: 20px" class="img-1" src="img/login/zfb.png" alt="">
                            <img style="margin-left: 20px" class="img-1" src="img/login/wx.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="div-6">
                    
                </div>

            </div> -->
    </div><!--wrapper结束-->

   
</body>
</html>