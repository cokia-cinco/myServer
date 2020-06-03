<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米账号-注册</title>
     <link href="<?=HOME_CSS?>reg.css" rel="stylesheet"> <!-- 链接到css -->



    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <style>
        body,ul,ol,dl,h1,h2,h3,h4,h5,h6,div,p,fieldset,input{ margin: 0; padding: 0; }
        body{ font: 14px arial 微软雅黑; background-color: #f5f5f5;}
        li{list-style:none;}
        a{text-decoration: none;}
        table{border-collapse: collapse;}
        em{font-style:normal;}
        input{outline: none}

        select{
            width: 100%;
            height: 40px;
            border: none;
        }
        a{text-decoration:none;} 
    
    </style>
 
</head>
<body>
    <div class="wrap">
        <div class="reg-frame">
            <div class="external_logo_area">
                <img src="<?=HOME_IMG?>reg/milogo.png" alt="">
            </div>

            <div class="title-item"> 
                <h4 class="text-1">注册小米账户</h4>
            </div>
            <form action="./index.php?c=reg&a=regdo" method="post">
                <div class="regbox">
                    <div class="phone_step1">
                        <h4 class="tit_normal">国家/地区</h4>
                        <div class="listwrap">
                            <div class="listtit">
                                <div class="display_box">
                                    <select style="outline: none;" name="state" id="">
                                        <option value="1">美国</option>
                                        <option value="2">韩国</option>
                                        <option value="3">新加坡</option>
                                        <option value="4">日本</option>
                                        <option value="5" selected="">中国</option>
                                    </select>
                                    
                                </div>
                                
                            </div>
                             
                        </div>
                        <div class="region_tip_text">
                            成功注册账号后，国家/地区将不能被修改
                        </div>
                      <!--   <h4 class="tit_normal">手机号码</h4> -->
                        <div class="listwrap_inside_panel">
                            <div class="listwrap1">
                                <select style="outline: none;" name="hm" id="" class="select2">
                                    <option value="1" selected="selected">+86</option>
                                    <option value="2">+93</option>
                                    <option value="3">+120</option>
                                    <option value="4">+119</option>
                                    <option value="5">+110</option>
                                </select>
                            </div>
                            <div class="inputbg">
                                <input maxlength="11" name='tel' class="inputbg_tit"  type="text" placeholder="请输入手机号码">
                            </div>
                            
                            
                        </div>
                        <div style='width: 330px' class="inputbg">
                            <input name='pwd' class="inputbg_tit"  type="password" placeholder="请输入密码">
                        </div>
                        <div style='width: 330px' class="inputbg">
                            <input  name='repwd' class="inputbg_tit"  type="password" placeholder="请再次输入密码">
                        </div>
                        <div style='width: 170px;float: left' class="inputbg">
                                <input style='height: 40px;width: 130px;float: left;display: block;' class="inputbg_tit" type="text" name="vcode" maxlength="4">

                        </div>
                        <div style='float: left;margin-left: 10px'>
                            <img  src="index.php?c=Reg&a=getYZM" title="点击刷新" onclick="this.src='index.php?c=Reg&a=getYZM&rand='+Math.random();">
                        </div>
                            
                            
                        <div class="fixed_bot">
                            <input type="submit" value="立即注册">
                            
                        </div>
                    </form>
                    
                    </div>
                    <div class="privacy_box">
                        <span>已同意并阅读：小米
                        <a href="https://static.account.xiaomi.com/html/agreement/user/zh_CN.html"><b style="color: black">用户协议</b></a>和
                        <a href="https://privacy.mi.com/all/zh_CN/"><b style="color: black">隐私政策</b></a>
                        </span>
                
                    </div>
                
                </div>
            
        </div>
        

        

   

        
            



     
        
    </div>
    
</body>
</html>