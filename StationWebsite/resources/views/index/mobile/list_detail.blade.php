@extends('index.mobile.public')
@section('css')
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,IE=9,IE=8,IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>蓝海骆驼_提供资信调查、投保、融资、理赔等全流程信保出口服务</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=EmulateIE10,IE=EmulateIE9,IE=EmulateIE8,IE=9,IE=8">
    <link rel="icon" type="image/x-icon" href="../../image/seacamels.ico">  
<link rel="shortcut icon" type="image/x-icon" href="../../image/seacamels.ico">  
<link rel="bookmark" type="image/x-icon" href="../../image/seacamels.ico"> 
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta name="baidu-site-verification" content="2EXq7MPPBN">
    
    <meta name="shenma-site-verification" content="a8722fb449652378d8fca4b5f5bd6db8_1548384753"><!-- 神马搜索验证 -->
    <script src="https://ada.baidu.com/phone-tracker/getjs_bdtj?sid=13036964"></script><script charset="utf-8" src="http://ada.baidu.com/phone-tracker/insert_bdtj?sid=13036964"></script><script src="https://hm.baidu.com/hm.js?fd7a03a704461fb8ae6f30c1c7094860"></script><script type="text/javascript" src="../../res/m/js/jquery-1.8.0.min.js"></script>
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
    <meta name="keywords" content="信保服务, 信保投保, 资信调查, 垫付货款, 中信保，蓝海骆驼">
    <meta name="description" content="蓝海骆驼--专业信保服务, 信保投保, 资信调查, 垫付货款, 中信保、理赔等全流程信保出口服务，安全高效有保障，最高垫付80%货款，是中小型企业的首选合作伙伴">
       <link rel="stylesheet" href="http://m.lanhailuotuo.com/css/version3/path/luotuo3.css">
       <link rel="stylesheet" href="../../res/m/css/credit.css">
<script type="text/javascript" src="http://m.lanhailuotuo.com/js/version3/opp/tip.js"></script>
<script type="text/javascript" src="http://m.lanhailuotuo.com/js/version3/commin.js"></script> 
<script>
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
 
</script>
</head>
@endsection
@section('body')
<div class="main trade_main">
        <div class="wrap  mainBox1">
            <ul class=" verticalNav">
                @for($i=0;$i<count($list);$i++)
                  @if($i==$sort)
                    <li class="vi active" ><h4>{{$list[$i]->name}}</h4> <i class="bu"></i></li>
                    @else
                    <li class="vi "><h4>{{$list[$i]->name}}</h4> <i class="bu"></i></li>
                   @endif
                @endfor
            </ul>
            <ul class="choseBox">
                @for($i=0;$i<count($list);$i++)
                    @if($i==$sort)
                    <li class="ci cServer active">{!!$list[$i]->context!!}</li>
                    @else
                    <li class="ci cServer ">{!!$list[$i]->context!!}</li>
                    @endif
                @endfor
            </ul>
        </div>
    </div>
@endsection
@section('list')
@endsection