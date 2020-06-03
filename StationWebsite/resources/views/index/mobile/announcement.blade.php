@extends('index.mobile.public')
@section('css')
<head>
<meta charset="UTF-8">
<title>蓝海骆驼一站式外贸综合服务平台外贸资讯</title>
    <meta name="keywords" content="外贸资讯,蓝海骆驼,资讯中心,外贸视频,">
    <meta name="description" content="深圳蓝海骆驼一站式外贸综合服务平台，这里有专业的外贸资讯、资讯中心，外贸视频等综合类资讯服务,让您获得一手的外贸资讯赢在先机。">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8,IE=9,IE=8">
    <link rel="icon" type="image/x-icon" href="../../image/seacamels.ico">  
<link rel="shortcut icon" type="image/x-icon" href="../../image/seacamels.ico">  
<link rel="bookmark" type="image/x-icon" href="../../image/seacamels.ico"> 
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta name="baidu-site-verification" content="2EXq7MPPBN">
    
    <meta name="shenma-site-verification" content="a8722fb449652378d8fca4b5f5bd6db8_1548384753"><!-- 神马搜索验证 -->
    <script src="https://hm.baidu.com/hm.js?fd7a03a704461fb8ae6f30c1c7094860"></script><script type="text/javascript" src="../../res/m/js/jquery-1.8.0.min.js"></script>
    <script src="../../res/m/js/functions.js"></script>
    <script type="text/javascript" src="../../res/m/js/jquery.lazyload.min.js"></script>
    <script src="../../res/m/js/commin.js.html"></script>
    <script src="../../res/m/js/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="../../res/m/js/respond.min.js"></script>
    <script type="text/javascript" src="../../res/m/js/html5shiv.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000738/10100617.js"></script><link rel="stylesheet" type="text/css" href="//aux.soperson.com/131221/oms.css?190803"><script type="text/javascript" src="//aux.soperson.com/131221/looyu.js?200304" charset="utf-8"></script><!-- 乐语 -->
    <link rel="stylesheet" href="../../res/m/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../res/m/js/swiper/css/swiper.min.css">
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
    <link rel="stylesheet" href="http://m.lanhailuotuo.com/css/version3/path/luotuo3.css">
     <link rel="stylesheet" href="../../res/m/css/credit.css">
<script type="text/javascript" src="http://m.lanhailuotuo.com/js/version3/opp/tip.js"></script>
<script type="text/javascript" src="http://m.lanhailuotuo.com/js/version3/commin.js"></script> 
<style>.showD h2{line-height:1.6}
        .showD  .news_title{margin-bottom:8px;}
        .showD p{line-height:1.4;margin-bottom:4px;}
    @media (max-width:768px){
        .showD h2 {line-height: 1.6;font-size: 1rem;}
    .showD img{width:100%;}
    .showD p{width:100%;overflow:hidden;line-height:1.4;margin-bottom:.2rem;font-size:.65rem}
    }
    .cms-context{
        fontsize:0.5rem;
    }
    </style><script>
function resize() {
    var docEl = document.documentElement;
    var clientWidth = docEl.clientWidth;
    if (!clientWidth) {
         return
     } else if (clientWidth > 768) {
         docEl.style.fontSize = '47px';
     } else if (320 <= clientWidth < 768) {
         docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
     }
 }
 resize();
/*  setTimeout(show,100);
 function show() {
    $("body").css("visibility","visible");
 }  */
</script></head>
@endsection
@section('body')
   @if(is_null($id))
    <div class="main media_main">
        <div class="wrap  mainBox1">
            <ul class="choseBox">
                <li class="ci cMsg  active">
                    <div class="toggle_a" id="t_msg">                        
                        <a href="/?name=news&type=m" class="chose_i">新闻</a>
                        <a href="/?name=announcement&type=m" class="chose_i active">公告</a>
                    </div>
                    <div class="main_a" id="t_msgOf">
                        <br>
                        <div class="ma_item active">
                            <div class="medias" id="comReport">
                <ul>
                   @foreach($all_announcement as $item)
                    <li class="mLis row2">
                        <p class="left p1" >
                            <i class="iconfont icon-right"> </i> 
                            <a target="_blank" href="/?name=announcement&type=m&id={{$item->id}}">
                            {{$item->title}}
                            </a>
                        </p>
                        <p class="right time1">
                            {{explode(' ',$item->time)[0]}}
                        </p>
                    </li>
                    @endforeach 
              </ul>
           </div>
         </div>
       </div>
     </div>
    </li>
  </ul>
</div>
</div>
   @else
   <div class="main media_main">
        <div class="wrap  mainBox1">
            <div class="toggle_a" id="t_msg">                        
                        <a href="/?name=news&type=m" class="chose_i">新闻</a>
                        <a href="/?name=announcement&type=m" class="chose_i active">公告</a>
            </div>
            <ul>
                <li class="ci cMsg active">
                    <div id="t_msgOf">
                        <br>
                        <div class="ma_item active">
                            <div>
                                <br>
                                @foreach($all_announcement as $item)
                                @if($id==$item->id)
                                <div id="{{$item->id}}">
                                    <div style="font-size: 13px;">
                                        <h2 style="font-size: 1rem;text-align:center;font-weight:bold;">{{$item->title}}</h2>
                                        <br>
                                        <span  style="float:right">时间： {{$item->time}}</span>
                                        <br/><br/><br/>
                                    </div>
                                    <div class="cms-context" style="font-size: .7rem;">
                                        {!!$item->context!!}
                                    </div>
                                    <h2 style="font-size: .8rem;text-align:right ">
                                        <b>来源：{{$item->author}}</b><b></b>
                                    </h2>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
   @endif
@endsection