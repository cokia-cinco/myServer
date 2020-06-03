<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米CC9-小米商城</title>
    <link href="<?=HOME_CSS?>product.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <script src="/home/static/font/iconfont.js"></script>
    <style>
        body,ul,ol,dl,h1,h2,h3,h4,h5,h6,div,p,fieldset{ margin: 0; padding: 0; }
        body{ font: 14px arial 微软雅黑; background: #fff; }
        li{list-style:none;}
        a{text-decoration: none;}
        table{border-collapse: collapse;}
        em{font-style:normal;}
        input{outline: none}
        li{
            list-style-type:none;
        }

        a{
            text-decoration:none;
        } 
        a:hover{
            color: #ff6700;
        }
    </style> 
</head>
<body style="overflow-x:hidden"><!--style="overflow-x:hidden"可以隐藏网页的水平滚动条    style="overflow-y:hidden"可以隐藏网页的垂直滚动条-->

<!--head页首开始-->
<?php $this->header() ?>

<div class="xm-product-box">
    

    <div class="nav-bar-container">
        <h2>小米CC9</h2> 

        <div class="nav-bar-container-left">
            <span>丨</span>
             <a href="">小米CC9e</a>
            <span>丨</span>
             <a href="">小米CC9 美图定制版</a>
        </div>

        <div class="bar-container-right">
             <a href="">概述</a>
            <span>|</span>
             <a href="">参数</a>
            <span>|</span>
             <a href="">F码通道</a>
            <span>|</span>
             <a href="index.php?c=goods&a=comment&id=<?=$gid?>">用户评价</a>
            <a class="btn-small" href="index.php?c=cart&a=shop&id=<?=$gid?>">立即购买</a>
        </div>
        
    </div><!--nav-bar-container结束-->
</div>

<div class="micc9-index">
    

    <div class="micc9-index-container">
        <div class="section-intro">
            <img src="<?=HOME_IMG?>gg/intro-1.jpg" alt="">
        </div>

        <div class="section-specs">
            <ul>
                <li>
                    <img  src="<?=HOME_IMG?>gg/specs-01.png" alt="">
                    <span>&nbsp;&nbsp;3200万真我质感</span>
                </li>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-02.png" alt="">
                    <span>&nbsp;&nbsp;索尼4800万超清三摄</span>
                </li>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-03.png" alt="">
                    <span>&nbsp;&nbsp;三星AMOLED屏幕</span>
                </li>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-04.png" alt="">
                    <span>&nbsp;&nbsp;第七代光感屏幕指纹</span>
                </li>
            </ul>

            <ul>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-05.png" alt="">
                    <span>&nbsp;&nbsp;3D全曲面玻璃机身金属中框</span>
                </li>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-06.png" alt="">
                    <span>&nbsp;&nbsp;4030mAh大电量</span>
                </li>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-07.png" alt="">
                    <span>&nbsp;&nbsp;骁龙710处理器</span>
                </li>
                <li>
                    <img src="<?=HOME_IMG?>gg/specs-08.png" alt="">
                    <span>&nbsp;&nbsp;多功能NFC</span>
                </li>
            </ul>
        </div> <!--section-specs结束-->


        <div class="section-video">
            <img src="<?=HOME_IMG?>gg/poster.jpg" alt="">
        </div>


        <div class="section-title">
           <h2>
               焕然一新的设计<br>
               注入温柔与浪漫的新配色
           </h2>
        </div>

        <div class="section-color">
            <h2>白色恋人</h2>
            <p>
                白色恋人的设计灵感来自洁白纯净的雪。<br>
                雪，总让人于无色中想象有色，于无形中揣测有形。就像白色恋人配色，<br>
                纯洁的机身中，漾动着七彩浪漫，让人产生太多浪漫的想法。
            </p>
            
        </div>

        <div class="btn-wrap">
            <span class="btn-wrap1">白色恋人</span>
            <span class="btn-wrap2">深蓝星球</span>
            <span class="btn-wrap3">暗夜王子</span>
            
        </div>

        <div class="section-weight">
            <h2>179g 超轻手感<br>
            4030mAh 超大电量</h2>

            <p>
                轻薄的机身同时做到了轻盈和持久续航，4030mAh
                <br>
                的大电池足够应对一天的日常使用，18w快充也能
                <br>
                为手机快速恢复电量。
            </p>
            
        </div>

        <div class="section-screen">
            <h2>与小米9相同的<br>
                6.39"三星AMOLED屏幕<br>
                德国VDE低蓝光护眼认证
            </h2>
            <p>
                三星AMOLED屏幕，拥有出众的广色域，高达60000：1的<br>
                对比度，支持智能环境适应，根据环境智能调整显示效果，为你<br>
                带来更自然的观看体验。
            </p>

            <ul style="margin-left: 365px;margin-top: 75px">
                <li>
                    <span class="name">91%</span><br><br>
                    <span class="txt">超高屏占比</span>
                </li>
                <li>
                    <span class="name">硬件DC调光</span><br><br>
                    <span class="txt">低屏闪更护眼</span>
                </li>
                <li>
                    <span class="name">护眼模式</span><br><br>
                    <span class="txt">降低屏幕蓝光</span>
                </li>
                <li>
                    <span class="name">阳光屏</span><br><br>
                    <span class="txt">阳光下清晰可见</span>
                </li>
            </ul>
        </div>

        <div class="section-touch">
            <h2>
                第七代<br>
                光感屏幕指纹识别
            </h2>
            <p>进一步优化低温、强光、干手指情况下的解锁速度，相比上一代提升10%</p>
        </div>

        <div class="section-title-photo">
           <h2>
               双旗舰相机，拍出C位美<br>
               Be Myself.Be CC.
           </h2>
        </div>

        <div class="bg-1">
            <div class="section-phone-is-visible">
                <h2>
                    3200万自拍旗舰<br>
                    超高解析、超高像素<br>
                    拍出写真质感
                </h2>
                <p>
                    像素越高，清晰度越好。可拍摄6560*4928超高分辨率的高清图片，每根睫毛、发丝都格外清<br>
                    晰。无论后期美颜、修图、裁切，都会让你游刃有余，更好保留照片画质。
                </p>
                
            </div>

             <div class="section-photo-img">
            
            </div>


            <div class="section-phone-is-visible-preload">
                <h2>
                    真我美颜<br>
                    C位自拍，展现你的自信美
                </h2>
                <p>
                    自拍时聚焦最美的你，虚化杂乱背景，让你成为每张照片焦点。同时支持AI美颜、多种风格滤镜，<br>
                    一键轻松拍出潮流自拍照。
                </p>
                
            </div>

            <div class="section-photo-pic">
               
            </div>

            <div class="section-photo-mimoji">
                <h2>
                    Mimoji 萌拍<br>
                    实时创作一个卡通版的你<br>
                    学你说话做表情
                </h2>
                <p>
                    你的自拍就是你的Mimoji形象。打开萌拍实时模仿你的一举一动，<br>
                    不仅能制作卡通自拍照，还能根据上百种创作素材，制作充满创意<br>
                    的短视频。
                </p>
                <img  src="<?=HOME_IMG?>gg/mimoji.png" alt="">
            </div><!--section-photo-mimoji结束-->
            
        </div><!--bg-1结束-->


        <div class="bg-2">
            <div class="section-photo-ai">
                <h2>索尼4800万超高清AI三摄<br>
                年度旗舰主摄</h2>
                <p>
                    4800万超高清镜头，让每张创作细节完美地保留并呈现。118°（畸变矫正前）超广角相机让画面更宽更广。<br>
                    景深镜头聚焦人像，虚化背景，让你成为每张照片的焦点。
                </p>
                
            </div>

            <div class="section-photo-slider">
                
            </div>

            
        </div><!--bg-2结束-->

        <div class="section-night">
            <h2>手持超级夜景</h2>
            <p>
                用手持拍夜景？没错。利用感光度更灵敏的相机感光元件，融合先进的图像处理<br>
                器以及多帧降噪等算法优化，让你无需三脚架，手持就能抓拍出色的夜景大片
            </p>
            
        </div>
        

        <div class="section-photo-preload">
            <div class="section-photo-preload-con" >
                    <h2>
                        修图魔法秀<br>
                        内置6种天空滤镜，一键换天
                    </h2>
                    <p>
                        6种天空滤镜内置于你的相册滤镜中，无论手机或相机拍摄的照片，在你<br>
                        手中秒变奇妙景观，成为众人赞叹的佳作。
                    </p>     
            </div>
        </div>


        <div class="section-title-exp">
           <h2>
               旗舰体验<br>
               更实用的生活助手<br>
               更便捷的智能体验
           </h2>
        </div>

        <div class="section-game">
            <h2>八核性能双重加速<br>
                骁龙710，搭载双引擎Turbo<br>
                玩游戏、日常使用，尽享畅快
            </h2>
            <p>骁龙710处理器，搭载Game Turbo 2.0及Mi Turbo 双引擎算法，<br>既不拘泥于日常使用，也不妥协游戏的高光时刻，让你在游戏中<br>游刃有余的扮演“五杀”王者。
            </p>
            <ul>
                <li>
                    <span class="section-game-name">Game Turbo 2.0</span>
                    <span class="section-game-txt">游戏加速</span>
                </li>
                <li>
                    <span class="section-game-name">Mi Turbo</span>
                    <span class="section-game-txt">应用启动加速</span>
                </li>
                <li>
                    <span class="section-game-name">UFS 2.1</span>
                    <span class="section-game-txt">闪存标准</span>
                </li>
                <li>
                    <span class="section-game-name">LPDDR4X</span>
                    <span class="section-game-txt">内存标准</span>
                </li>
            </ul>
        </div><!-- section-game结束-->


        <div class="section-config">
            <div class="item-txt">
                <h2>多功能 NFC<br>
                手机刷公交、乘地铁</h2>
            </div>
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/nfc.jpg" alt="">
                
            </div>
            
        </div>

        <div class="section-config">
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/control.jpg" alt="">
                
            </div>
            <div class="item-txt">
                <h2>红外遥控<br>
                手机也能操控电视、空调、机顶盒</h2>
            </div>
            
            
        </div>

        <div class="section-config">
            <div class="item-txt">
                <h2>炫彩呼吸灯<br>
                充电、来电、听音乐、玩游戏<br>
                各有色彩为你点亮
                </h2>
            </div>
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/phone.jpg" alt="">
            </div>
            
        </div>

        <div class="section-config">
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/earphone.jpg" alt="">
            </div>
            <div class="item-txt">
                <h2>3.5mm耳机插孔<br>
                获得Hi-Res Audio 认证<br>
                原汁原味还原音质
                </h2>
            </div>
            
            
        </div>

        <div class="section-config">
            <div class="item-txt">
                <h2>AI语音助理“小爱同学”<br>
                    打电话、播音乐，动动嘴就行
                </h2>
            </div>
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/xiaoai.jpg" alt="">
            </div>
            
        </div>

        <div class="section-config">
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/smart.jpg" alt="">
            </div>
            <div class="item-txt">
                <h2>Smart PA + 超线程扬声器<br>
                好音乐，好大声</h2>
            </div>
           
        </div>

        <div class="section-config">
            <div class="item-txt">
                <h2>全局深色模式<br>
                暗夜看手机更护眼</h2>
            </div>
            <div class="item-pic">
                <img src="<?=HOME_IMG?>gg/mode.jpg" alt="">
            </div>
            
        </div>

        <div class="section-config">
            <div class="item-pic">  
                <img src="<?=HOME_IMG?>gg/sleep.jpg" alt=""> 
            </div>
            <div class="item-txt">
                <h2>AOD息屏显示<br>
                瞄一眼看时间，瞄一眼看通知</h2>
            </div>
        
        </div>

        <div class="section-phoneshell">
            
        </div>

        <div class="section-bag">
            <h2>CC果冻包</h2>
            <p>手拎、斜挎、单肩，怎么背都很美！</p>
            
        </div>

        <div class="section-specsgroup">
                <img src="<?=HOME_IMG?>gg/title-1.png" alt="">
                <p>3200万+4800万 前后双旗舰相机</p>
                <ul>
                    <li>
                        <span class="section-specsgroup-name">3200万旗舰自拍</span>
                        <span class="section-specsgroup-txt2">真我质感美颜</span>
                    </li>
                    <li>
                        <span class="section-specsgroup-name">4800万旗舰相机</span>
                        <span class="section-specsgroup-txt">超高清AI三摄</span>
                    </li>
                    <li>
                        <span class="section-specsgroup-name">6.39英寸</span>
                        <span class="section-specsgroup-txt">三星AMOLED屏幕</span>
                    </li>
                    <li>
                        <span class="section-specsgroup-name">屏幕指纹识别</span>
                        <span class="section-specsgroup-txt2">第七代光感技术</span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span class="section-specsgroup-name">3D全曲面玻璃机身</span>
                        <span class="dsection-specsgroup-txt">179g超轻握感</span>
                    </li>
                    <li>
                        <span class="section-specsgroup-name">4030mAh大电量</span>
                        <span class="section-specsgroup-txt">超长续航</span>
                    </li>
                    <li>
                        <span class="section-specsgroup-name">骁龙710处理器</span>
                        <span class="dsection-specsgroup-txt">双Turbo引擎加速</span>
                    </li>
                    <li>
                        <span class="section-specsgroup-name">多功能NFC</span>
                        <span class="section-specsgroup-txt"></span>
                    </li>
                </ul>
        </div><!--section-specsgroup结束-->

        <a href="">   
            <div class="section-next">
                <span>查看参数&nbsp;&gt;</span>    
            </div>
        </a>
</div><!--micc9-index结束-->

<!--################################main结束######################################################################-->


<div class="section-mp-qrcode">
    <div class="section-mp-qrcode-container">
        <div class="mp-qrcode-item">
            <img src="<?=HOME_IMG?>gg/ewm1.png" alt="">
            <div class="mp-qrcode-text-top">
                扫码关注【
                <span>小米商城</span>
                】公众号
            </div>
            <div class="mp-qrcode-text-bottom">
                回复“开学季”，抽送小米米家液晶小黑板！
            </div>
            
        </div>

        <div class="mp-qrcode-item">
            <img src="<?=HOME_IMG?>gg/ewm2.png" alt="">
            <div style="width: 434px;" class="mp-qrcode-text-top">
                扫码关注【
                <span>小米美图手机</span>
                】公众号
            </div>
            <div class="mp-qrcode-text-bottom">
                赢小米CC9 美图定制版！
            </div>
            
        </div>
        
    </div>
</div><!--section-mp-qrcode结束-->


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