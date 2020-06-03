@extends('index.mobile.public')
@section('css')
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>区块链+外贸供应链智能平台</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8,IE=9,IE=8">
    <link rel="icon" type="image/x-icon" href="../image/seacamels.ico" />  
    <link rel="shortcut icon" type="image/x-icon" href="../image/seacamels.ico" />  
    <link rel="bookmark" type="image/x-icon" href="../image/seacamels.ico" /> 
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="baidu-site-verification" content="2EXq7MPPBN" />
    
    <meta name="shenma-site-verification" content="a8722fb449652378d8fca4b5f5bd6db8_1548384753"/><!-- 神马搜索验证 -->
    <script type="text/javascript" src="../res/m/js/jquery-1.8.0.min.js"></script>
    <script src="../res/m/js/functions.js"></script>
    <script type="text/javascript" src="../res/m/js/jquery.lazyload.min.js"></script>
    <script src="../res/m/js/commin.js.html"></script>
    <script src="../res/m/js/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="../res/m/js/respond.min.js"></script>
    <script type="text/javascript" src="../res/m/js/html5shiv.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000738/10100617.js"></script><!-- 乐语 -->
    <link rel="stylesheet" href="../res/m/css/common.css">
    <link rel="stylesheet" type="text/css" href="../res/m/js/swiper/css/swiper.min.css">
    <script>
    function resize() {
       var docEl = document.documentElement;
       var clientWidth = docEl.clientWidth;
       if (!clientWidth) {
            return
        } else if (clientWidth > 768) {
            docEl.style.fontSize = '47px';
        } else if (320 < clientWidth < 768) {
            docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
        } else {
            docEl.style.fontSize = '12px';
        }
       
    }
    resize();
    </script>
    <!-- 百度统计 -->
   <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?fd7a03a704461fb8ae6f30c1c7094860";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>

    <script>
    $(function() {
              $("img").lazyload({ 
            //   placeholder : "images/loading.gif",
                     effect: "fadeIn"
               });  
        });
    </script>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" type="text/css" href="../res/m/css/exportNew.css">
@endsection
@section('body')
<body ontouchstart="">
    <main class="page_main"
       <!--head-->
   
        <!--head-->
         <div class="service overHide">
            
            <div class="ser2 bg-f wrap overHide">
               <h2 class="ser2_h2">一站式出口，省成本，更省心！</h2>
               <p class="p1 "></p>
               <p class="ser2_p">蓝海骆驼专注出口服务20年，为您提供更加专业、快捷的通
               关、外汇、退税、货款垫付、信用证、信保、物流等一站式
               服务，费率低至4.5分人民币/美元，让您的外贸出口安全、省心、更省钱！</p>
               <div class="ser2_img">
                    <img src="/res/m/image/exportNew/2_Image.png" data-original="/res/m/image/exportNew/2_Image.png" style="display: inline;">
               </div>
            </div>
            
            <div class="ser3  wrap overHide">
                <h2 class="ser2_h2">更低费率，超高服务性价比</h2>
               <p class="p1 "></p>
               <ul class="ser3_ul">
                       <li>
                           <img src="/res/m/image/exportNew/3_Image1.png" data-original="/res/m/image/exportNew/3_Image1.png" style="display: inline;">
                           <div class="li_div">
                               <h2>普通出口</h2>
                               <p class="p2">通关+外汇+退税</p>
                               <p class="p3">4.5分人民币/美元</p>
                           </div>
                       </li>
                       <li>
                           <img src="/res/m/image/exportNew/3_Image2.png" data-original="/res/m/image/exportNew/3_Image2.png" style="display: inline;">
                           <div class="li_div">
                               <h2>信保出口</h2>
                               <p class="p2">通关+外汇+退税+信保</p>
                               <p class="p3">4.5分人民币/美元</p>
                           </div>
                       </li>
                       <li>
                           <img src="/res/m/image/exportNew/3_Image3.png" data-original="/res/m/image/exportNew/3_Image3.png" style="display: inline;">
                           <div class="li_div">
                               <h2>信用证出口</h2>
                               <p class="p2">通关+外汇+退税+信用证 </p>
                               <p class="p3">6分人民币/美元</p>
                           </div>
                       </li>
               </ul>
               <p class="p2">
                       温馨提示：如需安排订舱（物流）、拖车、买家资信调查等增值服务，
产生费用实报实销，更多服务及费率详情请直接咨询客服。
               </p>
            </div>
            
            <div class="ser4  wrap overHide">
                <div class="ser4_txt">
                <p class="p2"></p>
                <p class="p3">出口产品<span>10000+</span>, 满足您的出口需求</p>
                    
                </div>
                <ul class="ser4_ul">
                    <li>
                        <img src="../res/m/image/exportNew/4_Image1.jpg" data-original="/res/m/image/exportNew/4_Image1.jpg">
                        <p class="p3">
                        电子产品
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image2.jpg" data-original="/res/m/image/exportNew/4_Image2.jpg">
                        <p class="p3">
                        纺织服装
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image3.jpg" data-original="/res/m/image/exportNew/4_Image3.jpg">
                        <p class="p3">
                        机械设备
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image4.jpg" data-original="/res/m/image/exportNew/4_Image4.jpg">
                        <p class="p3">
                        家居建材
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image5.jpg" data-original="/res/m/image/exportNew/4_Image5.jpg">
                        <p class="p3">
                        机械配件
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image6.jpg" data-original="/res/m/image/exportNew/4_Image6.jpg">
                        <p class="p3">
                        玻璃制品
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image7.jpg" data-original="/res/m/image/exportNew/4_Image7.jpg">
                        <p class="p3">
                        陶瓷制品
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image8.jpg" data-original="/res/m/image/exportNew/4_Image8.jpg">
                        <p class="p3">
                        生活用品
                        </p>
                    </li>
                    <li>
                        <img src="../res/m/image/exportNew/4_Image9.jpg" data-original="/res/m/image/exportNew/4_Image9.jpg">
                        <p class="p3">
                        纺织原料
                        </p>
                    </li>
                </ul>
                <p class="p4">
                    <span>更多产品出口咨询</span>
                    <img src="../res/m/image/exportNew/4_Icon_gengduo.png" data-original="/res/m/image/exportNew/4_Icon_gengduo.png">
                </p>
            </div>
            
            <div class="ser5  wrap overHide">
                <h2 class="ser2_h2">8大出口优势</h2>
               <p class="p1 "></p>
               <ul class="ser5_ul">
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_1.png" data-original="/res/m/image/exportNew/5_Icon_1.png">
                           <div class="li_right">
                               <h2>高效通关</h2>
                               <p>最快24小时高效通关</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_2.png" data-original="/res/m/image/exportNew/5_Icon_2.png">
                           <div class="li_right">
                               <h2>自助结汇</h2>
                               <p>外汇到账，一键结汇</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_3.png" data-original="/res/m/image/exportNew/5_Icon_3.png">
                           <div class="li_right">
                               <h2>极速退税</h2>
                               <p>最快3天垫付退税款</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_4.png" data-original="/res/m/image/exportNew/5_Icon_4.png">
                           <div class="li_right">
                               <h2>垫付货款</h2>
                               <p>最高可提前垫付100%货款</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_5.png" data-original="/res/m/image/exportNew/5_Icon_5.png">
                           <div class="li_right">
                               <h2>代办信保</h2>
                               <p>代办中信保保险, 出口更安全</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_6.png" data-original="/res/m/image/exportNew/5_Icon_6.png">
                           <div class="li_right">
                               <h2>信用证专家</h2>
                               <p>专业审证、制单、交单</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_7.png" data-original="/res/m/image/exportNew/5_Icon_7.png">
                           <div class="li_right">
                               <h2>更低费率</h2>
                               <p>出口服务费低至4.5分人民币/美元</p>
                           </div>
                       </li>
                       <li>
                           <img src="../res/m/image/exportNew/5_Icon_8.png" data-original="/res/m/image/exportNew/5_Icon_8.png">
                           <div class="li_right">
                               <h2>一对一服务</h2>
                               <p>专业跟单全程一对一服务</p>
                           </div>
                       </li>
               </ul>
            </div>
            
            <div class="ser6  wrap overHide">
                <div class="ser6_o ser6_os">
                    <div class="ser6_o_left">
                        <img src="../res/m/image/exportNew/6_Image1.png" data-original="/res/m/image/exportNew/6_Image1.png">
                    </div>
                    <div class="ser6_o_right">
                      <h2 class="h2">24小时高效通关</h2>
                      <p class="p2">专业跟单团队，为您提供全国各大口岸的海关申报，查验、缴税、通关放行服务。海关高信用资质，平均24小时内完成通关。</p>
                      <p class="p3">
                        <span>马上咨询，享受专业出口服务</span>
                        <img src="../res/m/image/exportNew/6_Icon_fangxiang.png" data-original="/res/m/image/exportNew/6_Icon_fangxiang.png">
                    </p>
                    <ul class="ser6_o_ul ser6_o_ul1">
                        <li>
                            <img src="../res/m/image/exportNew/6_Icon_1.png" data-original="/res/m/image/exportNew/6_Icon_1.png">
                            <p>24小时通关</p>
                        </li>
                        <li>
                            <img src="../res/m/image/exportNew/6_icon_2.png" data-original="/res/m/image/exportNew/6_icon_2.png">
                            <p>专业跟单团队</p>
                        </li>
                        <li>
                            <img src="../res/m/image/exportNew/6_Icon_3.png" data-original="/res/m/image/exportNew/6_Icon_3.png">
                            <p>品质服务</p>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="ser6_o ser6_t">
                    
                    <div class="ser6_o_right">
                      <h2 class="h2">最快3天退税</h2>
                      <p class="p2">多年财税经验专家团队，为企业合规申报、代办出口退税。单据齐全最快3个工作日垫付退税款，加速企业资金周转。</p>
                      <p class="p3">
                        <span>马上咨询，享受专业出口服务</span>
                        <img src="../res/m/image/exportNew/6_Icon_fangxiang.png" data-original="/res/m/image/exportNew/6_Icon_fangxiang.png">
                    </p>
                    <ul class="ser6_o_ul  ser6_o_ul2">
                        <li>
                            <img src="../res/m/image/exportNew/6_Icon_4.png" data-original="/res/m/image/exportNew/6_Icon_4.png">
                            <p>最快3天退税</p>
                        </li>
                        <li>
                            <img src="../res/m/image/exportNew/6_icon_5.png" data-original="/res/m/image/exportNew/6_icon_5.png">
                            <p>专业财税团队</p>
                        </li>
                        <li>
                            <img src="../res/m/image/exportNew/6_icon_6.png" data-original="/res/m/image/exportNew/6_icon_6.png">
                            <p>资金周转更快</p>
                        </li>
                    </ul>
                    </div>
                    <div class="ser6_o_left">
                        <img src="../res/m/image/exportNew/6_Image2.png" data-original="/res/m/image/exportNew/6_Image2.png">
                    </div>
                </div>
                <div class="ser6_o ser6_os">
                    <div class="ser6_o_left">
                        <img src="../res/m/image/exportNew/6_Image3.png" data-original="/res/m/image/exportNew/6_Image3.png">
                    </div>
                    <div class="ser6_o_right">
                      <h2 class="h2">一键自助结汇，抢先体验！</h2>
                      <p class="p2">外汇到账提醒，用户在电脑或手机APP上即可实时查看最新汇率，选择最佳时间点，一键结汇、秒到账，外贸收汇结汇更轻松！</p>
                      <p class="p3">
                        <span>马上咨询，享受专业出口服务</span>
                        <img src="../res/m/image/exportNew/6_Icon_fangxiang.png" data-original="/res/m/image/exportNew/6_Icon_fangxiang.png">
                    </p>
                    <ul class="ser6_o_ul ser6_o_ul3">
                        <li>
                            <img src="../res/m/image/exportNew/6_Icon_7.png" data-original="/res/m/image/exportNew/6_Icon_7.png">
                            <p>秒结汇</p>
                        </li>
                        <li>
                            <img src="../res/m/image/exportNew/6_Icon_8.png" data-original="/res/m/image/exportNew/6_Icon_8.png">
                            <p>秒提现</p>
                        </li>
                        <li>
                            <img src="../res/m/image/exportNew/6_Icon_9.png" data-original="/res/m/image/exportNew/6_Icon_9.png">
                            <p>更快捷</p>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            
            <div class="ser7  overHide">
                <img src="../res/m/image/exportNew/7_Image1.jpg" data-original="/res/m/image/exportNew/7_Image1.jpg">
                <div class="wrap">
                    <div class="ser7_div wrap">
                        <ul class="ser7_ul">
                            <li>
                                <p class="p2">10000<span>+</span></p>
                                <p class="p3">成功服务客户</p>
                            </li>
                            <li>
                                <p class="p2">10000<span>+</span></p>
                                <p class="p3">出口商品种类</p>
                            </li>
                            <li>
                                <p class="p2">20<span>年</span></p>
                                <p class="p3">出口经验</p>
                            </li>
                            <li>
                                <p class="p2">160<span>+</span></p>
                                <p class="p3">多个行业</p>
                            </li>
                        </ul>
                        <div class="ser7_b">
                        <img src="../res/m/image/exportNew/7_Image2.png" data-original="/res/m/image/exportNew/7_Image2.png">
                        <p>我们已累计成功服务全国各类外贸企业超10000家（含线下），
品质服务，有口皆碑。可操作的出口商品涵盖电子产品、纺织服装、机械设备、家居建材、电器设备等160多个行业、10000多种商品，20年出口经验，值得信赖。</p>
                    </div>
                    <a class="ser_btn" href="javascript:void(0)" >马上咨询，享受专业出口服务</a>
                    </div>
                    
                </div>
                
            
            </div>
            
            <div class="ser8 bg-f  overHide">
                <div class="ser8_t wrap">
                 <div>
                    <h2 class="ser2_h2">覆盖全国27省市 出口全球160+国家</h2>
                       <p class="p1 "></p>
                       <p class="p2">出口服务范围以珠三角、长三角为主，同时覆盖湖南、北京、天津、山东、河北、河南、安徽、江西等全国27个省区，
                       蓝海骆驼出口目的国遍及欧洲、亚洲、北美、澳洲、非洲，并基本覆盖“一带一路”沿线65个国家和地区。
                       在中国，有外贸企业的地方就有蓝海骆驼。</p>
                   </div>
                   <img src="../res/m/image/exportNew/8_Image.png" data-original="/res/m/image/exportNew/8_Image.png">
                </div>
                <div class="ser8_b wrap">
                    <ul>
                        <li>
                            <p class="p2">27<span>个</span></p>
                            <p class="p3">覆盖全国省市</p>
                        </li>
                        <li>
                            <p class="p2">160<span>+</span></p>
                            <p class="p3">出口全球国家</p>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="ser9 wrap  overHide">
                <h2 class="ser2_h2">快捷出口流程</h2>
                <p class="p1 "></p>
                <ul class="ser9_ul">
                    <li>
                        <h1>1</h1>
                        <h2>注册</h2>
                        <p>免费注册蓝海骆驼会员</p>
                    </li>
                    <li>
                        <h1>2</h1>
                        <h2>签约</h2>
                        <p>签订《出口合作协议》</p>
                    </li>
                    <li>
                        <h1>3</h1>
                        <h2>下单</h2>
                        <p>在线填写《出口服务申请单》</p>
                    </li>
                    <li>
                        <h1>4</h1>
                        <h2>通关</h2>
                        <p>以蓝海骆驼名义报关（可提供拖车、订舱）</p>
                    </li>
                    <li>
                        <h1>5</h1>
                        <h2>结汇</h2>
                        <p>外汇到账，实时结汇</p>
                    </li>
                    <li>
                        <h1>6</h1>
                        <h2>退税</h2>
                        <p>单据齐全，最快3个工作日垫付退税款</p>
                    </li>
                </ul>
            </div>
            
            <div class="ser11  wrap  overHide">
                <h2 class="ser2_h2">准入条件</h2>
                <p class="p1 "></p>
                <div class="overHide">
                    <div class="ser11_left">
                        <p class="p2">
                            <img src="../res/m/image/exportNew/11_Icon_duihao.png" data-original="/res/m/image/exportNew/11_Icon_duihao.png">
                            
                            <span>服务对象：国内生产型工厂、贸易商、个人</span>
                        </p>
                        <p class="p2">
                            <img src="../res/m/image/exportNew/11_Icon_duihao.png" data-original="/res/m/image/exportNew/11_Icon_duihao.png">
                            
                            <span>通过蓝海骆驼抬头出口、收汇</span>
                        </p>
                        <p class="p2">
                            <img src="../res/m/image/exportNew/11_Icon_duihao.png" data-original="/res/m/image/exportNew/11_Icon_duihao.png">
                            
                            <span>开票企业需为一般纳税人，且成立时间在半年以上
                            （优质企业可酌情准入，详询客服）</span>
                        </p>
                        <p class="p2">
                            <img src="../res/m/image/exportNew/11_Icon_duihao.png" data-original="/res/m/image/exportNew/11_Icon_duihao.png">
                            
                            <span>中间商可为小规模（实际开票工厂需为一般纳税人）</span>
                        </p>
                    </div>
                    <div class="ser11_right">
                        <img src="../res/m/image/exportNew/11_Image.png" data-original="/res/m/image/exportNew/11_Image.png">
                    </div>
                </div>
                
            </div>
            
            <div class="ser12  wrap  overHide">
                <h2>出口全球？没问题！</h2>
                <p class="p2">选择蓝海骆驼，与全国上万家企业<br>
                一起享受VIP出口服务！</p>
                <a class="ser_btn" href="javascript:void(0)" >立即咨询</a>
                <p class="p3">出口热线：<span>4008-518-448</span></p>
            </div>
            
            <div class="ser13  wrap  overHide">
                <h2>创新“区块链+外贸供应链智能”平台</h2>
                <p class="p2">为您积累外贸数据，快速垫付货款</p>
                <p class="p4"></p>
                <p class="p3">科技创造信任，数据创造财富。出口在蓝海骆驼，<br>
                平台还将为企业积累、沉淀历史出口数据，<br>
                并通过领先的区块链技术打通企业与银行之间的信用数据传递，<br>
                帮助企业快速获得垫付货款（最高可达货值100%），<br>
                为资金周转提速！</p>
                <a class="ser_btn" href="javascript:void(0)">了解更多</a>
            </div>     
         </div>
    </main>
</body>
@endsection