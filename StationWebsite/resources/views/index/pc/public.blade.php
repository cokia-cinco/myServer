<!DOCTYPE html>
<html>
<!-- head start-->
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <title>{{$config->website_name}}</title>
    <meta name="keywords" content="关键字"/>
    <meta name="description" content="描述"/>
    <link rel="icon" type="image/x-icon" href="{{URL::asset('image/home/seacamels.ico')}}"/>
    <script src="{{URL::asset('/js/index//jquery-1.8.0.min.js')}}"></script>
    <script src="{{URL::asset('/js/index//jquery.carouFredSel-6.0.4-packed.js')}}"></script>
    <!-- //网站导航-->
    <link rel="stylesheet" href="{{URL::asset('/css/index/global.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/index/dy.css')}}">
    @section('css')
    
    @show
    <script>
        function isTel(obj) {
            var str = /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/;
            var test1 = str.test(navigator.userAgent);
            var isMb = /AppleWebKit.*Mobile/i.test(navigator.userAgent) || test1;
            if (isMb) {
                window.location.href = obj;
            }
        }
    </script>
    <script>
        isTel("http://www.iz.net.cn/m");
    </script>
    
    <style>
       .media_main .cMsg .medias .news_title{
               margin-top:30px;
        }
        
    </style>
</head>
<!-- head end-->
<body style="min-width: 1200px;">
<!--head页start-->
<div class="head hidden_xs">
    <div class="wrap">

        <div class="right head_right">
            <div class="left">
                <div class="left">
                        <span class="c_phone">
                            <i class="head_fo toolC left"></i>热线电话：{{$info['tel']}}
                        </span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="edge ">
    <div class="wrap row2">
        <div class="e_1 left row2">
            <button type="button" class="toggle_down" data-target="#down1"></button>
            <a class="edge-logo" href="index.blade.php">
                <img src="{{$config->logo}}" alt="">
            </a>
        </div>
        <ul class="e_2  right row2 hidden-xs mar_top20">
            <li class="e_item curr e_list"><a href="/?name=index" class="e_i_1">首页</a></li>
            <li class="e_item  downList ">
                <div class="list_up packup">
                    <a href="javascript:;" class="e_i_1">
                        外贸服务<i class="menuUp head_fo right"></i>
                    </a>
                </div>
                <div class="dropdown list_down">
                    <div class="wrap">
                        <ul class="nav_list">
                            <li class="left nav_ser">
                                <ul class="nav_li_1">
                                    <li class="nav_li_span nav_li_a"><span><a href="/?name=export" class="bles">出口服务</a></span>
                                    </li>
                                    <li class="nav_li_img nav_li_a">
                                        <a href="/?name=export" class="bles">
                                            <img src="/image/home/global/head/Editmenu_1.jpg" alt="">
                                        </a>
                                    </li>
                                    <li class="nav_li_a nav_li_at"><a href="/?name=export" class="bles">出口通关</a></li>
                                    <li class="nav_li_a"><a href="/?name=export" class="bles">银行结汇</a></li>
                                    <li class="nav_li_a"><a href="/?name=export" class="bles">垫付退税</a></li>
                                    <li class="nav_li_a"><a href="/?name=export" class="bles">资信调查</a></li>
                                    <li class="nav_li_a"><a href="/?name=export" class="bles">信保投保</a></li>
                                </ul>
                            </li>
                            <li class="left nav_ser">
                                <ul class="nav_li_1">
                                    <li class="nav_li_span nav_li_a"><span><a href="/?name=import" class="bles">进口服务</a></span>
                                    </li>
                                    <li class="nav_li_img nav_li_a"><a href="?name=import" class="bles"><img
                                                src="/image/home/global/head/Editmenu_2.jpg" alt=""></a></li>
                                    <li class="nav_li_a nav_li_at"><a href="/?name=import" class="bles">进口清关</a></li>
                                    <li class="nav_li_a"><a href="/?name=import" class="bles">代开证</a></li>
                                    <li class="nav_li_a"><a href="/?name=import" class="bles">代付汇</a></li>
                                    <li class="nav_li_a"><a href="/?name=import" class="bles">主打产品</a></li>
                                </ul>
                            </li>
                            <li class="left nav_ser">
                                <ul class="nav_li_1">
                                    <li class="nav_li_span nav_li_a">
                                    <span><a href="/?name=financial" class="bles">金融服务</a></span>
                                    </li>
                                    <li class="nav_li_img nav_li_a"><a href="/?id=8" class="bles"><img
                                                src="/image/home/global/head/Editmenu_3.jpg" alt="" class="bles"></a>
                                    </li>
                                    <li class="nav_li_a nav_li_at"><a href="/?name=financial&show=1" class="bles">服务详情</a></li>
                                    <li class="nav_li_a"><a href="/?name=financial&show=2" class="bles">资信调查</a></li>
                                    <li class="nav_li_a"><a href="/?name=financial&show=3" class="bles">信保投保</a></li>
                                    <li  class="nav_li_a"><a href="/?name=financial&show=4"  class="bles">信保垫付货款</a></li>

                                </ul>
                            </li>
                            <li class="left nav_ser">
                                <ul class="nav_li_1">
                                    <li class="nav_li_span nav_li_a"><span><a href="/?name=freight" class="bles">国际货运</a></span>
                                    </li>
                                    <li class="nav_li_img nav_li_a">
                                        <a href="/?name=freight&type=1" class="bles">
                                            <img    src="/image/home/global/head/Editmenu_4.jpg" alt="">
                                         </a>
                                    </li>
                                    <li class="nav_li_a nav_li_at"><a href="/?name=freight&show=1" class="bles">服务详情</a></li>
                                    <li class="nav_li_a"><a href="/?name=freight&show=2" class="bles">门到门</a></li>
                                    <li class="nav_li_a"><a href="/?name=freight&show=3" class="bles">国际货运</a></li>
                                    <!-- <li class="nav_li_a"><a href="/?name=freight&show=4" class="bles" >拖车服务</a></li> -->
                                </ul>
                            </li>
                            <li class="left nav_ser">
                                <ul class="nav_li_1">
                                    <li class="nav_li_span nav_li_a"><span><a href="/?name=export" class="bles">跨镜电商</a></span>
                                    </li>

                                    <li class="nav_li_img nav_li_a"><a href="/?name=export" class="bles"><img
                                                src="/image/home/global/head/Editmenu_5.jpg" alt=""></a></li>

                                    <li class="nav_li_a nav_li_at"><a href="/?name=export" class="bles">亚马逊极速开店</a></li>

                                    <li class="nav_li_a"><a href="/?name=export" class="bles">货品分销</a></li>

                                    <li class="nav_li_a"><a href="/?name=export" class="bles">跨境电汇</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="e_item e_list downList ">
                <div class="list_up">
                    <a class="list_a e_i_1" href="/?name=export">
                        出口服务</i>
                    </a>
                </div>
            </li>
            <li class="e_item e_list downList ">
                <div class="list_up">
                    <a class="list_a e_i_1" href="/?name=import">
                        进口服务</i>
                    </a>
                </div>
            </li>
            <li class="e_item e_list downList ">
                <div class="list_up">
                    <a class="list_a e_i_1" href="/?name=financial">
                        金融服务<i class="menuUp head_fo right"></i>
                    </a>
                </div>
                <ul class="dropdown overHide list_about">
                    <li><a href="/?name=financial&show=1" class="list_a">服务详情</a></li>
                    <li><a href="/?name=financial&show=2" class="list_a">资信调查</a></li>
                    <li><a href="/?name=financial&show=3" class="list_a">信保投保</a></li>
                    <li><a href="/?name=financial&show=4" class="list_a">信用证垫付</a></li>
                </ul>
            </li>
            <li class="e_item downList e_list ">
                <div class="list_up">
                    <a class="list_a e_i_1" href="/?name=freight&type=1">
                        国际货运<i class="menuUp head_fo right"></i>
                    </a>
                </div>
                <ul class="dropdown overHide list_about">
                <li><a href="/?name=freight&show=1" class="list_a">服务详情</a></li>
                    <li><a href="/?name=freight&show=2" class="list_a">门到门</a></li>
                    <li><a href="/?name=freight&show=3" class="list_a">国际货运</a></li>
                    <li><a href="/?name=freight&show=4" class="list_a">拖车服务</a></li>
                  
                </ul>
            </li>
            <li class="e_item e_list downList ">
                <div class="list_up">
                    <a class="list_a e_i_1" href="/?name=export">
                        跨境电商</i>
                    </a>
                </div>
            </li> 
            <li class="e_item e_list downList ">
                <div class="list_up">
                    <a class="list_a e_i_1" href="/?name=about">
                        关于我们<i class="menuUp head_fo right"></i>
                    </a>
                </div>
                <ul class="dropdown overHide list_about">
                    <li><a href="/?name=about&show=1" class="list_a">公司简介</a></li>
                    <li><a href="/?name=about&show=2" class="list_a">发展历程</a></li>
                    <li><a href="/?name=about&show=3" class="list_a">人才招聘</a></li>
                    <li><a href="/?name=about&show=4" class="list_a">联系我们</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script>
    $(".downup").hover(function () {
        $(this).find(".dropdown").toggle();
    });
    $(".downList").hover(function () {
        $(this).find(".dropdown").slideDown(200);
    }, function () {
        $(this).find(".dropdown").hide();
    });
    $(function(){
    
       var str = window.location.href
       var url = str.split('&')[0]
       var all_a = document.getElementsByClassName('e_i_1')
       for(i = 0;i<all_a.length;i++){
           if(all_a[i].href.indexOf(url)>=0){
               all_a[i].style.color = '#1890ff'
           }else{
               all_a[i].style.color = '#333'
           }
       }
    })
</script>
<!--head页end-->
<div class="main_banner">
@section('banner')
@if(count($banner)>0)
    <a href="{{$banner[0]->url_status==1?$banner[0]->url:'#'}}">
        <div class="banner" style="background:url({{$banner[0]->img}}) 0px 0px/100% no-repeat;background-size: 100% 100%; ">
              <div class="wrap selfSer_b" style="cursor:pointer;height: 460px;"></div>
        </div>
    </a>
@endif
@show
 </div>
@section('body')
    
    
    
@show

@section('cms')
    
    
    
@show
@if(count($list)>0)
  <div class="main about_main" style="margin-top:40px;">
    <div class="wrap  mainBox1">
       <ul class=" verticalNav" id="nav" style = "border-left: 1px solid #e5e5e5;">
         @for($i=1;$i<count($list)+1;$i++)
           <li class="vi" id="color_change{{$i}}" onclick="change({{$i}})">
             <h4><span class="list_a">{{$list[$i-1]->name}}</span></h4>
             <i class="bu"></i>
           </li>
         @endfor
       </ul>
       <input type="hidden" class="page_type" value="{{$show}}">
       <ul class="choseBox" style="min-height: 1000px">
            @for($i=1;$i<count($list)+1;$i++)
            <li class="ci profile active" id="change{{$i}}">
                 <pre>
                     {!!$list[$i-1]->context!!}
                 </pre>
            </li>
            @endfor
       </ul>
    </div>
    <script>
       function change(num) {
                    for(let i=1;i<{{count($list)+1}};i++){
                        if(num===i){
                            document.getElementById('change'+i).style.display='block'
                            let colorChange = document.getElementById('color_change'+i)
                              colorChange.style.color='#2199ee'
                              colorChange.style.backgroundColor='rgb(250,251,252)'
                      
                        }else{
                            document.getElementById('change'+i).style.display='none'
                            let colorChange = document.getElementById('color_change'+i)
                            colorChange.style.color='#666'
                            colorChange.style.backgroundColor='#fff'
                         
                        }
                    }
                }
                $(function () {
                    if($('.page_type').val()!==''){
                        change(parseInt($('.page_type').val()))
                    }else{
                        change(1)
                    }
                })
         </script>
    </div>
</div>
@endif
<div id="foot" class="fo_foot overHide">
    <div class="wrap">
        <div class="foot_top overHide">
            <div class="left foot_l">
                <div class="infor_tell overHide">
                    <div class="left infor_tell_img"><img src="/image/home/global/tell.png" alt=""></div>
                    <div class="left infor_tell_p"><p>热线电话: {{$info['tel']}}</p></div>
                </div>
                <div class="infor_time overHide"><p class="left p1">服务时间：</p>
                    <p class="left p2"> {{$buss->service_time_week}}  {{$buss->service_time_day}} <br> （其他时段可留言，我们将及时回复您） </p></div>
                <div class="infor_addr overHide"><p class="p3">浙江总部：浙江省东阳市汉宁路158号</p>
                    <p>Copyright © {{$info['info']}}</p></div>
            </div>
            <div class="left foot_r overHide">
                <dl class="foot_ul left">
                    <dt><h5 class="f_11_h">关于我们</h5></dt>
                    <dd><a href="/?name=about&type=1" class="f_11_a f_hover" rel="nofollow">公司简介</a></dd>
                    <dd><a href="/?name=about&type=2" class="f_11_a f_hover" rel="nofollow">人才招聘</a></dd>
                    <dd><a href="/?name=about&type=3" class="f_11_a f_hover" rel="nofollow">联系我们</a></dd>
                    <dd><a href="/?name=about&type=1" class="f_11_a f_hover" rel="nofollow">更多>></a></dd>
                </dl>
                <dl class="foot_ul left">
                    <dt><h5 class="f_11_h">公司业务</h5></dt>
                    <dd><a href="/?name=export" class="f_11_a f_hover" rel="nofollow">出口服务</a></dd>
                    <dd><a href="/?name=import" class="f_11_a f_hover" rel="nofollow">进口服务</a></dd>
                    <dd><a href="/?name=financial&type=4" class="f_11_a f_hover" rel="nofollow">垫付货款</a></dd>
                    <dd><a class="f_11_a">更多>></a></dd>
                </dl>
                <dl class="foot_ul left">
                    <dt><h5 class="f_11_h">跨镜电商</h5></dt>
                    <dd><a href="/?name=import" class="f_11_a f_hover" rel="nofollow">亚马逊开店</a></dd>
                    <dd><a href="/?name=import" class="f_11_a f_hover" rel="nofollow">XXX开店</a></dd>
                    <dd><a href="/?name=import" class="f_11_a f_hover" rel="nofollow">开店技巧</a></dd>
                    <dd><a class="f_11_a">更多>></a></dd>
                </dl>
                <dl class="foot_ul left">
                    <dt><h5 class="f_11_h">帮助中心</h5></dt>
                    <dd><a href="#" class="f_11_a f_hover" rel="nofollow">常见问题</a></dd>
                    <dd><a href="#" class="f_11_a f_hover" rel="nofollow">合作流程</a></dd>
                    <dd><a href="javascript:void(0);" class="f_11_a f_hover" rel="nofollow">联系客服 </a></dd>
                </dl> 
                <dl class="foot_ul left">
                    <dt><h5 class="f_11_h">平台导航</h5></dt>
                    <dd><a class="f_11_a">网站导航</a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>