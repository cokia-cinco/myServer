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
    <link rel="stylesheet" type="text/css" href="../res/m/css/importNew.css">
    <link rel="stylesheet" href="http://m.lanhailuotuo.com/js/version3/opp/venobox/venobox.css">
@endsection
@section('body')
    <main class="page_main">
            
         <div class="service overHide">
            
            <div class="ser2 bg-f wrap overHide">
                    <h2 class="ser_h2">0经验轻松进口，低至500元/单</h2>
                    <p class="p1"></p>
                    <p class="p2">
                        蓝海骆驼拥有平均10年以上进口操作经验的专业进口团队，致力于为华东、华南、华北及西南等地区客户提供各类产品的进口清关（报检、报关、代缴税、查验、放行）、代开证、代付汇、物流运输、配送到门的一站式进口供应链服务，覆盖全国各大口岸、机场，所有普货、电子产品、预包装食品、棉纱、冻肉、红酒、机械设备、香港进口等，助您
    足不出户进口全球!
                    </p>
                    
                    <ul class="ser2_ul">
                        <li>
                            <img src="/res/m/image/importNew/2_icon_1.png" data-original="/res/m/image/importNew/2_icon_1.png" style="display: inline;">
                            <p class="p3">专业进口团队</p>
                        </li>
                        <li>
                            <img src="/res/m/image/importNew/2_icon_2.png" data-original="/res/m/image/importNew/2_icon_2.png" style="display: inline;">
                            <p class="p3">一站式服务</p>
                        </li>
                        <li>
                            <img src="/res/m/image/importNew/2_icon_3.png" data-original="/res/m/image/importNew/2_icon_3.png" style="display: inline;">
                            <p class="p3">低至500元/单</p>
                        </li>
                    </ul>
            
                <img src="/res/m/image/importNew/1_image.png" data-original="/res/m/image/importNew/1_image.png" style="display: inline;">
            </div>
            
            <div class="ser3  wrap overHide">
        
                    <h2 class="ser_h2">所有普货，全国进口代理</h2>
                    <p class="p1"></p>
                    <ul class="ser3_ul">
                        <li>    
                            <img src="../res/m/image/importNew/3_image_1.png" data-original="/res/m/image/importNew/3_image_1.png">
                            <p class="p2">机械设备进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_2.png" data-original="/res/m/image/importNew/3_image_2.png">
                            <p class="p2">机械配件进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_3.png" data-original="/res/m/image/importNew/3_image_3.png">
                            <p class="p2">电子产品进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_4.png" data-original="/res/m/image/importNew/3_image_4.png">
                            <p class="p2">纺织产品进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_5.png" data-original="/res/m/image/importNew/3_image_5.png">
                            <p class="p2">橡胶制品进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_6.png" data-original="/res/m/image/importNew/3_image_6.png">
                            <p class="p2">玻璃制品进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_7.png" data-original="/res/m/image/importNew/3_image_7.png">
                            <p class="p2">家具/配件进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_8.png" data-original="/res/m/image/importNew/3_image_8.png">
                            <p class="p2">生活用品进口</p>
                        </li>
                        <li>    
                            <img src="../res/m/image/importNew/3_image_9.png" data-original="/res/m/image/importNew/3_image_9.png">
                            <p class="p2">陶瓷制品进口</p>
                        </li>
                    </ul>
                    <a class="ser_btn1" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    更多普货进口，马上咨询<img src="../res/m/image/importNew/3_icon_gengduo.png" data-original="/res/m/image/importNew/3_icon_gengduo.png">
                    </a>
            </div>
            
            <div class="ser4  wrap overHide">
                <div class="ser4_title overHide">
                    <p class="p2"></p>
                    <p class="p3">收费透明，低至500元/单</p>
                </div>
                <ul class="ser4_ul">
                    <li>
                        <p class="p2">进口代理服务费根据<br>
                        具体产品和要求而定，<br>
                        低至<span>500元</span>/单。</p>
                    </li>
                    <li>
                        <p class="p2">进口过程中产生的关税、<br>
                        机场码头费、 增值税、<br>
                        拖车费<span>实报实销</span>。</p>
                    </li>
                </ul>
                <a class="ser_btn" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    马上咨询，进口全球
                    </a>
            </div>
            
            <div class="ser5  wrap overHide">
                <h2 class="ser_h2">全国各大港口/机场进口清关+派送到门</h2>
                    <p class="p1"></p>
                    <p class="p2">根据采购的产品性质及具体需求，可通过海运/空运/快递/香港中转等多种方式，将货物运输至国内各大港口/机场，蓝海骆驼为您完成一般贸易进口清关工作。</p>
                    <div class="ser5_div">
                        <span>北京机场、大连港口/机场、
天津港口/机场、青岛港口/机场、
上海港口/机场、宁波港口/机场、
厦门港口/机场、广州港口/深圳/
香港港口/机场</span>
                    </div>
            </div>
            
            <div class="ser6  wrap overHide">
                <h2 class="ser_h2">8大进口优势，专业进口代理</h2>
                <p class="p1"></p>
                
                <ul class="ser6_ul">
                    <li>
                        <img src="../res/m/image/importNew/6_icon_1.png" data-original="/res/m/image/importNew/6_icon_1.png">
                        <p class="p2">所有普货</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_2.png" data-original="/res/m/image/importNew/6_icon_2.png">
                        <p class="p2">全国港口</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_3.png" data-original="/res/m/image/importNew/6_icon_3.png">
                        <p class="p2">海运进口</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_4.png" data-original="/res/m/image/importNew/6_icon_4.png">
                        <p class="p2">空运进口</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_5.png" data-original="/res/m/image/importNew/6_icon_5.png">
                        <p class="p2">香港进口</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_6.png" data-original="/res/m/image/importNew/6_icon_6.png">
                        <p class="p2">快递进口</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_7.png" data-original="/res/m/image/importNew/6_icon_7.png">
                        <p class="p2">派送到门</p>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/6_icon_8.png" data-original="/res/m/image/importNew/6_icon_8.png">
                        <p class="p2">低至500元/单</p>
                    </li>
                </ul>
                
                <a class="ser_btn1" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    马上咨询，进口全球<img src="../res/m/image/importNew/3_icon_gengduo.png" data-original="/res/m/image/importNew/3_icon_gengduo.png">
                    </a>
            </div>
            
            <div class="ser7 bg-f wrap overHide">
                <h2 class="ser_h2">服务流程</h2>
                <p class="p1"></p>
                <ul class="ser7_ul overHide">
                    <li>
                        <img src="../res/m/image/importNew/7_icon_1.png" data-original="/res/m/image/importNew/7_icon_1.png">
                        <div class="ser7_ul_li">
                            <h2>01<span>下单</span></h2>
                            <p class="p2">客户与外商签订采购合同</p>
                        </div>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/7_icon_2.png" data-original="/res/m/image/importNew/7_icon_2.png">
                        <div class="ser7_ul_li">
                            <h2>02<span>代付汇</span></h2>
                            <p class="p2">客户委托蓝海骆驼通过银行代付汇货款</p>
                        </div>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/7_icon_3.png" data-original="/res/m/image/importNew/7_icon_3.png">
                        <div class="ser7_ul_li">
                            <h2>03<span>运输</span></h2>
                            <p class="p2">FOB贸易：蓝海骆驼提供运输<br>
                            CIF贸易 ：外商负责运输</p>
                        </div>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/7_icon_4.png" data-original="/res/m/image/importNew/7_icon_4.png">
                        <div class="ser7_ul_li">
                            <h2>04<span>货物到港</span></h2>
                            <p class="p2">货物到达中国各大港口/机场</p>
                        </div>
                    </li>
                    <li>
                        <img src="../res/m/image/importNew/7_icon_5.png" data-original="/res/m/image/importNew/7_icon_5.png">
                        <div class="ser7_ul_li">
                            <h2>05<span>进口清关+派送</span></h2>
                            <p class="p2">蓝海骆驼操作海关申报、清关、派送到门</p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="ser8 bg-f wrap overHide">
                <div class="ser8_title">
                    <p class="p2"></p>
                    <p class="p3">收费透明，低至500元/单</p>
                </div>
                <ul class="ser8_ul">
                    <li>
                        <a href="../image/version3/import/example/form/example1_d.png.jpeg" class="venobox ser8_li_a vbox-item">
                        <p class="p2">
                            <span>DHL</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example2_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>FedEx</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example3_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>UPS</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example4_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>北京</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example13_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>天津</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example9_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>南京</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example10_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>宁波</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example11_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>上海</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example6_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>广州</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example12_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>深圳</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example15_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>香港</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example14_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>武汉</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example7_d.png" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>重庆</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example5_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>佛山</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                    <li>
                        <a href="../image/version3/import/example/form/example8_d.png.jpeg" class="venobox ser8_li_a vbox-item">
            
                        <p class="p2">
                            <span>棉纱进口</span>
                            <img src="../res/m/image/importNew/8_icon_1.png" data-original="/res/m/image/importNew/8_icon_1.png">
                        </p>
                        </a>
                    </li>
                </ul>
                <a class="ser_btn" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    马上咨询，进口全球
                    </a>
            </div>
            
            <div class="ser9 bg-f wrap overHide">
                <h2 class="ser_h2">客户评价</h2>
                <p class="p1"></p>
                
                <div class="ser9_main">
                    <img src="../res/m/image/importNew/9_image_1.png" data-original="/res/m/image/importNew/9_image_1.png">
                    <div class="ser9_main_txt top1">
                        <h2>进口清关专业放心，代理费优惠</h2>
                        <p class="p2">深圳市超级花电子有限公司 黎总</p>
                        <p class="p3">我公司主营电脑及周边产品的技术开发与销售，需长年进口电子配件。
                        在网上了解到蓝海骆驼可以提供进口清关、代付汇等一站式服务，而且在全国各个口岸都能操作，
                        2016年在蓝海骆驼进口第一单，货值3万多美金。全程服务下来，感觉服务很专业，
                        很放心，代理费也优惠一些。现在公司已经把蓝海骆驼作为非常信赖的合作伙伴。</p>
                    </div>
                </div>
                
                <div class="ser9_main">
                    <img src="../res/m/image/importNew/9_image_2.png" data-original="/res/m/image/importNew/9_image_2.png">
                    <div class="ser9_main_txt top1">
                        <h2>服务热情周到，进口成本省更多</h2>
                        <p class="p2">广州市精保锋纺织品有限公司 郑总</p>
                        <p class="p3">
                        广州市精保锋纺织品有限公司经营范围主要包括纺织品、针织品及原料批发贸易，
                        对优质棉纱的进口需求量较大。2017年经同行朋友推荐，
                        开始在蓝海骆驼进口棉纱，一直到现在，服务热情周到，
                        而且蓝海的一手品牌棉纱和较低的服务费率也为公司节省了很多成本。</p>
                    </div>
                </div>
            </div>
            
            <div class="ser10 bg-f wrap overHide">
                <h2 class="ser_h2">准入条件</h2>
                <p class="p1"></p>
                
                <p class="p2">
                    
                    <img src="../res/m/image/importNew/10_icon.png" data-original="/res/m/image/importNew/10_icon.png">
                    <span>企业须为国内注册企业（暂不受理个人进口）。</span>
                </p>
                <p class="p2">
                    
                    <img src="../res/m/image/importNew/10_icon.png" data-original="/res/m/image/importNew/10_icon.png">
                    <span>商品为企业在国外采购的商品（不含个人邮购物品）。</span>
                </p>
                <p class="p2">
                    
                    <img src="../res/m/image/importNew/10_icon.png" data-original="/res/m/image/importNew/10_icon.png">
                    <span>须通过蓝海骆驼代付汇货款给外商。</span>
                </p>
                <p class="p3">温馨提示：</p>
                <p class="p4">
                    <span class="span1">1、</span>
                    <span class="span2">目前我司仅为企业客户提供进口清关，暂不受理个人物品进口清关。</span>
                </p>
                <p class="p4 p4s">
                    <span class="span1">2、</span>
                    <span class="span2">我司仅提供一般贸易进口清关服务，暂不受理海关扣货清关服务。</span>
                </p>
                <a class="ser_btn" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    马上咨询
                    </a>
            </div>
                    
            <div class="ser11 bg-f wrap overHide">
                <h2>普货进口？没问题！</h2>
                <p class="p2">所有普货，全国进口清关服务，<br>
                专业、省心、更划算！</p>
            
                <a class="ser_btn" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    立即咨询
                    </a>
                <p class="p3">进口热线：<span>4008-518-338</span></p>
            </div>
            
            <div class="ser12 bg-f wrap overHide">
                <h2>一手货源，海外直采，进了就赚钱！</h2>
                <p class="p2">蓝海骆驼自营棉纱、红酒、冻肉等商品，<br>
海外一手供应商货源，为您提供一站式采购+进口服务
</p>
            
                <a class="ser_btn" href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
                    了解更多
                    </a>
            
            </div>

            
            
            
         </div>
         
        <script src="http://m.lanhailuotuo.com/js/version3/opp/venobox/venobox.js"></script>
        <script>
        $('.venobox').venobox({
            border : '2px',
    
            framewidth : '800px'
        });
        
    </script>
    <style>.vbox-content {
            margin-top: 30px !important;
            margin-bottom: 30px !important;
        }
    </style>
    </main>
@endsection