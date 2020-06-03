<!DOCTYPE html>
<html lang="en">
<head>
    @section('css')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>进出口代理-出口/进口代理-清关/报关公司-蓝海骆驼</title>
    <meta name="keywords" content="进出口代理；出口代理；进口代理；进出口代理公司；进出口清关公司；进出口报关公司；进口清关；进口报关；蓝海骆驼；出口退税；">
    <meta name="description" content="蓝海骆驼-专注外贸代理平台，提供出口代理、出口退税、银行结汇、进口代理、进口清关、信用证付款、国际货运代理等服务。专业外贸团队，首选蓝海骆驼">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8,IE=9,IE=8">
    <link rel="icon" type="image/x-icon" href="/image/seacamels.ico">  
<link rel="shortcut icon" type="image/x-icon" href="/image/seacamels.ico">  
<link rel="bookmark" type="image/x-icon" href="/image/seacamels.ico"> 
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta name="baidu-site-verification" content="2EXq7MPPBN">
    <meta name="shenma-site-verification" content="a8722fb449652378d8fca4b5f5bd6db8_1548384753"><!-- 神马搜索验证 -->
    <script src="https://ada.baidu.com/phone-tracker/getjs_bdtj?sid=13036964"></script><script charset="utf-8" src="http://ada.baidu.com/phone-tracker/insert_bdtj?sid=13036964"></script><script src="https://hm.baidu.com/hm.js?fd7a03a704461fb8ae6f30c1c7094860"></script><script type="text/javascript" src="/res/m/js/jquery-1.8.0.min.js"></script>
    <script src="/res/m/js/functions.js"></script>
    <script type="text/javascript" src="/res/m/js/jquery.lazyload.min.js"></script>
    <script src="/res/m/js/commin.js"></script>
    <script src="/res/m/js/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="/res/m/js/respond.min.js"></script>
    <script type="text/javascript" src="/res/m/js/html5shiv.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000738/10100617.js"></script><link rel="stylesheet" type="text/css" href="//aux.soperson.com/131221/oms.css?190803"><script type="text/javascript" src="//aux.soperson.com/131221/looyu.js?200304" charset="utf-8"></script><!-- 乐语 -->
    <link rel="stylesheet" href="/res/m/css/common.css">
    <link rel="stylesheet" type="text/css" href="/res/m/js/swiper/css/swiper.min.css">
    <script>
    function resize() {
       var docEl = document.documentElement;
       var clientWidth = docEl.clientWidth;
       if (!clientWidth) {
            return
        } else if (clientWidth > 749) {
            docEl.style.fontSize = '47px';
        } else if (320 < clientWidth < 768) {
            docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
        } else {
            docEl.style.fontSize = '12px';
        }
       
    }
    resize();
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
    <link href="/res/m/css/video-js.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/res/m/css/index.css">
    <script src="/res/m/js/video.min.js"></script>    
    <script src="/res/m/js/videojs-ie8.min.js"></script>
    @show
</head>
<body>
<main class="page_main">
    <!--head-->
    @section('nav')
    <nav class="edge bg-f">
        <div class=" row2">
            <div>
                <div class="edge_t wrap">
                    <div class="left l_logo">
                        <a href="m/index.html" class="edge_logo">
                            <img src="{{$config->logo}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <ul class="edge_b overHide">
                <li class="item"><a class="item_a" href="/?name=index&type=m">首页</a></li>
                <li class="item"><a class="item_a" href="/?name=export&type=m">出口服务</a></li>
                <li class="item"><a class="item_a" href="/?name=import&type=m">进口服务</a></li>
                <li class="item"><a class="item_a" href="/?name=financial&type=m">金融服务</a></li>
                <li class="item"><a class="item_a" href="/?name=e_commerce&type=m">跨境电商</a></li>
                <li class="item"><a class="item_a" href="/?name=about&type=m">关于我们</a></li>
            </ul>
        </div>
    </nav>
    @show
    @section('banner')
    @if(count($banner)>0)
    <div class="ser1">
         <a href="javascript:void(0)" onclick="doyoo.util.openChat('g=10064716');return false;">
               <img src="{{$banner[0]->img}}" style="display: inline;">
         </a>
     </div>
     @endif
    @show
    @section('body')

    @show
    @if(!is_null($type_of_list))
    @section('list')
        <div class="export bg-f wrap overHide">
            <ul class="export_ul overHide">
            @for($i=0;$i<count($type_of_list);$i++)
                <li>
                <a href="/?name=list_detail&type=m&tid={{$type_of_list[$i]->template_id}}&sort={{$i}}">
                    <div class="left ex_img">
                        <img src="{{$type_of_list[$i]->img}}">
                    </div>
                    <div class="left ex_txt">
                        <h1 class="h1">{{$type_of_list[$i]->name}}</h1>
                        <p class="ex_p">
                        {!!$type_of_list[$i]->context!!}
                        </p>
                    </div>
                    </a>
                </li>
            @endfor             
            </ul>
        </div>
    @show
    @endif
    @section('cms-news')

    @show
    <!--foot start-->
    <div id="footer" class="overHide foot wrap">
        <div class="f_1 overHide">
            <div class="left f_1_item">
                <div class="tell_2 ">
                    <img src="res/m/image/common/foot/icon_dianhua1.png" data-original="/res/m/image/common/foot/icon_dianhua1.png" alt="">
                    <span>服务热线 : {{$buss->service_tel}}</span>
                </div>
            </div>
        </div>
        <div class="f_3 overHide">
            <p class="p_title">服务时间：{{$buss->service_time_week}} {{$buss->service_time_day}}<br>（其他时段可留言，我们将及时回复您）</p>
        </div>

        <div class="f_6 overHide">
            <p class="f_t6">版权所有 ©2009-2019 &nbsp;&nbsp;{{$config->info}}</p>
        </div>
    </div>
    <!--foot end-->
</main>
</body>
<script>
$(document).ready(function(){nav()});
    //平台数据滚动
  
    scrollD({
        mainCell : "#newsScroll",
        itemCell : "#newsScroll .news_li",
        number : "1"
    });

    //tab切换
    tabTo({
        "select_i": ".part_c",
        "select_tab_i": ".part_i",
        "changeClass": "active"
    });

    var myPlayer = videojs("my-video");
    videojs("my-video").ready(function(){
        var myPlayer = this;
        myPlayer.pause();

    });
    function nav(){
       var str = window.location.href
       var url = str.split('&')[0]
       var all_a = document.getElementsByClassName('item_a')
       for(i = 0;i<all_a.length;i++){
           if(all_a[i].href.indexOf(url)>=0){
               all_a[i].style.color = '#1890ff'           
                            all_a[i].style.borderBottom='3px solid #1890FF'
           }else{
               all_a[i].style.color = '#333'
               all_a[i].style.borderBottom='none'
           }
       }
    }
</script>
</html>