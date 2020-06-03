@extends('index.mobile.public')
@section('banner')
    <!--banner start-->
    <div class="bg-f slideBox overHide">
        <div class="bd swiper-container" id="carousel">
            <div class="banner_imgs swiper-wrapper">
            @foreach($banner as $item)
                <div class="swiper-slide b_item ">
                    <a href="{{$item->url_status==0?$item->url:'#'}}"><img src="{{$item->img}}"></a>
                </div>
            @endforeach
            </div>
            <div class="swiper-pagination num_control">
            </div>
        </div>
    </div>
    <!--banner end-->
    <!--新三版 start-->
    <div class="bg-f wrap new_plain overHide">

        <div class="new_plain_m">
            <div class="left intro_1 ritem">
                <h1 class="h1 hs1">20年+</h1>
                <p>进出口经验</p>
            </div>
            <div class="left intro_2 ritem">
                <h1 class="h1 hs2" id="customerNum">8605+</h1>
                <p>累计服务客户</p>
            </div>
            <div class="left intro_3 ritem">
                <h1 class="h1 hs3">$<span id="amtSum">738,581,070.88</span></h1>
                <p>累计进出口金额</p>
            </div>
        </div>
        <ul class="overHide new_plain_tip">
            <li class="plain_item plain_i1 left"><a href="m/export.html">
                    <img src="res/m/image/index/new/icon_1ck.png" data-original="/res/m/image/index/new/icon_1ck.png" alt="">
                    <p>出口服务</p>
                </a></li>
            <li class="plain_item plain_i2 left"><a href="m/import.html">
                    <img src="res/m/image/index/new/icon_2jk.png" data-original="/res/m/image/index/new/icon_2jk.png" alt="">
                    <p>进口服务</p>
                </a></li>
            <li class="plain_item plain_i3 left"><a href="m/exports/3.html">
                    <img src="res/m/image/index/new/icon_3ts.png" data-original="/res/m/image/index/new/icon_3ts.png" alt="">
                    <p>退税服务</p>
                </a></li>
            <li class="plain_item plain_i4 left"><a href="m/pay.html">
                    <img src="res/m/image/index/new/icon_4df.png" data-original="/res/m/image/index/new/icon_4df.png" alt="">
                    <p>垫付货款</p>
                </a></li>
            <li class="plain_item plain_i5 left"><a href="m/trades.html">
                    <img src="res/m/image/index/new/icon_5xb.png" data-original="/res/m/image/index/new/icon_5xb.png" alt="">
                    <p>信保服务</p>
                </a></li>
            <li class="plain_item plain_i6 left"><a href="m/credit.html">
                    <img src="res/m/image/index/new/icon_6xy.png" data-original="/res/m/image/index/new/icon_6xy.png" alt="">
                    <p>信用证服务</p>
                </a></li>
            <li class="plain_item plain_i7 left"><a href="m/logistics/2.html">
                    <img src="res/m/image/index/new/icon_7hy.png" data-original="/res/m/image/index/new/icon_7hy.png" alt="">
                    <p>国际货运</p>
                </a></li>
            <li class="plain_item plain_i8 left"><a href="m/mService.html">
                    <img src="res/m/image/index/new/icon_8zz.png" data-original="/res/m/image/index/new/icon_8zz.png" alt="">
                    <p>自助服务</p>
                </a></li>
            <li class="plain_item plain_i9 left"><a>
                    <img src="res/m/image/index/new/icon_9yh.png" data-original="/res/m/image/index/new/icon_9yh.png" alt="">
                    <p>优惠活动</p>
                </a></li>
            <li class="plain_item plain_i10 left"><a href="m/mServices.html">
                    <img src="res/m/image/index/new/icon_10gd.png" data-original="/res/m/image/index/new/icon_10gd.png" alt="">
                    <p>更多</p>
                </a></li>
        </ul>
    </div>
    <!--新三版 end-->
@endsection
@section('body')
    <!--公告 start-->
    <div class="bg-f overHide notice wrap">
        <div class="left notice_img">
            <img src="res/m/image/index/new/ggxx.png" data-original="/res/m/image/index/new/ggxx.png">
        </div>
        <div class="left notice_info">
            <div class="left left_img"><img src="res/m/image/index/new/icon_zuixin.png" data-original="/res/m/image/index/new/icon_zuixin.png"></div>
            <div class="notice_info_d left">
                <ul id="newsScroll">
                @foreach($announcement as $item)
                <li class="news_li"><a class="info_a" href="/?name=announcement&id={{$item->id}}&type=m">{{$item->title}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="left notice_more">
            <a href="/?name=announcement&type=m">更多</a>
        </div>
    </div>

    <!--公告 end-->
    <!--出口服务 start-->
    <div class="export bg-f overHide">
        <div class="wrap overHide">
            <div class="export_t overHide lt">
                <div class="left">
                    <p class="left p_line"></p>
                    <p class="left p_f">出口服务</p>
                </div>
                <div class="right p_div">
                    <a href="m/export.html" class="p_a">
                        <span>更多</span>
                        <img src="res/m/image/index/export/icon_Arrow.png" data-original="/res/m/image/index/export/icon_Arrow.png" alt="">
                    </a>
                </div>
            </div>
            <div class="export_c">
                <div class="export_c_de">
                    <a href="m/export.html">
                        <img src="res/m/image/index/export/ckfw_Image_1ck.jpg" data-original="/res/m/image/index/export/ckfw_Image_1ck.jpg" alt="">
                        <div class="e_detail">
                            <h1 class="h1">快捷出口<span>超值服务</span></h1>
                            <p class="ps">通关、物流、外汇、退税、垫付货款、<br>信保、信用证、一站式出口服务</p>
                        </div>
                    </a>
                </div>
                <ul class="export_ul">
                    <li class="left">
                        <a href="m/pay.html">
                            <img src="res/m/image/index/export/ckfw_Image_2dfhk.jpg" data-original="/res/m/image/index/export/ckfw_Image_2dfhk.jpg" alt="">
                            <div class="u_detail">
                                <p class="ps1">垫付货款</p>
                                <p class="ps">最高垫付货款100%</p>
                            </div>
                        </a>
                    </li>
                    <li class="left">
                        <a href="m/exports/3.html">
                            <img src="res/m/image/index/export/ckfw_Image_3ts.jpg" data-original="/res/m/image/index/export/ckfw_Image_3ts.jpg" alt="">
                            <div class="u_detail">
                                <p class="ps1">最快3天退税</p>
                                <p class="ps">退税还要等，<br>最快3天到账</p>
                            </div>
                        </a>
                    </li>
                    <li class="left ">
                        <a href="m/mService.html">
                            <img src="res/m/image/index/export/ckfw_Image_4zzfw.jpg" data-original="/res/m/image/index/export/ckfw_Image_4zzfw.jpg" alt="">
                            <div class="u_detail">
                                <p class="ps1">自助服务</p>
                                <p class="ps">汇率透明，一键结汇</p>
                            </div>
                        </a>
                    </li>
                    <li class="left export_d4">
                        <a href="m/trades/2.html">
                            <img src="res/m/image/index/export/ckfw_Image_5zxbfw.jpg" data-original="/res/m/image/index/export/ckfw_Image_5zxbfw.jpg" alt="">
                            <div class="u_detail">
                                <p class="ps1">中信保服务</p>
                                <p class="ps">万一出险，最高<br>可赔90%</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--出口服务 end-->
    <!--进口服务 start-->
    <div class="import bg-f overHide wrap">
        <div class="import_t overHide lt">
            <div class="left">
                <p class="left p_line"></p>
                <p class="left p_f">进口服务</p>
            </div>
            <div class="right p_div">
                <a  class="p_a" href="m/import.html">
                    <span>更多</span>
                    <img src="res/m/image/index/export/icon_Arrow.png" data-original="/res/m/image/index/export/icon_Arrow.png" alt="">
                </a>
            </div>
        </div>
        <div class="import_b">
            <div class="export_c_de">
                <a href="m/import.html">
                    <img src="res/m/image/index/export/jkfw_Image_1jk.jpg" data-original="/res/m/image/index/export/jkfw_Image_1jk.jpg" alt="">
                    <div class="e_detail">
                        <h1 class="h1">专业进口<span>省事省心</span></h1>
                        <p class="ps">提供所有普货、全国主要城市港口、<br>机场清关服务</p>
                    </div>
                </a>
            </div>
            <ul class="im_ul">
                <li class="left"><a href="m/import.html">
                        <img src="res/m/image/index/export/jkfw_Image_2yzjk.jpg"  data-original="/res/m/image/index/export/jkfw_Image_2yzjk.jpg" alt="">
                        <div class="i_detail">
                            <p class="ps1">一站进口</p>
                            <p class="ps">轻松进口，一次搞定！</p>
                        </div>
                    </a></li>
                <li class="left"><a href="m/import.html">
                        <img src="res/m/image/index/export/jkfw_Image_3hwzc.jpg"  data-original="/res/m/image/index/export/jkfw_Image_3hwzc.jpg" alt="">
                        <div class="i_detail">
                            <p class="ps1">海外直采</p>
                            <p class="ps">一手货源，进了就赚钱！</p>
                        </div>
                    </a></li>
                <li class="left"><a href="m/import.html">
                        <img src="res/m/image/index/export/jkfw_Image_4dz500y.jpg"  data-original="/res/m/image/index/export/jkfw_Image_4dz500y.jpg" alt="">
                        <div class="i_detail">
                            <p class="ps1">低至500元/单</p>
                            <p class="ps">超低费率，更省成本</p>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>
    <!--进口服务 end-->
    <!--垫付货款 start-->
    <div class="pay bg-f overHide">
        <div class="overHide wrap">
            <div class="import_t overHide lt">
                <div class="left">
                    <p class="left p_line"></p>
                    <p class="left p_f">垫付货款</p>
                </div>
                <div class="right p_div">
                    <a class="p_a" href="m/pay.html">
                        <span>更多</span>
                        <img src="res/m/image/index/export/icon_Arrow.png" data-original="/res/m/image/index/export/icon_Arrow.png" alt="">
                    </a>
                </div>
            </div>
            <ul class="pay_ul">
                <li class="left">
                    <a href="m/pay.html">
                        <img src="res/m/image/index/export/dfhk_Image_1dkhk.jpg" data-original="/res/m/image/index/export/dfhk_Image_1dkhk.jpg" alt="">
                        <div class="pay_d">
                            <h1 class="h1">垫付货款</h1>
                            <p class="p_y">最高垫付货款<b>100%</b></p>
                            <p class="p_y">费率低至<b>0.04%/天</b></p>
                        </div>
                    </a>
                </li>
                <li class="left">
                    <a >
                        <img src="res/m/image/index/export/dfhk_Image_2qkl.jpg" data-original="/res/m/image/index/export/dfhk_Image_2qkl.jpg" alt="">
                        <div class="pay_d">
                            <h1 class="h1">区块链垫付</h1>
                            <p class="p_y">货款<b>0账期</b></p>
                            <p class="p_y">费率低至<b>0.04%/天</b></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="pay_b">
            <a href="m/pay.html">
                <img src="res/m/image/index/export/dfhk_Image_3gg.jpg" data-original="/res/m/image/index/export/dfhk_Image_3gg.jpg" alt="">
            </a>
        </div>
    </div>
    <!--垫付货款 end-->
    <!--合作流程 start-->
    <div class="cooperate bg-f overHide wrap">
        <div class="dis_t overHide lt">
            <div class="left">
                <p class="left p_line"></p>
                <p class="left p_f">合作流程</p>
            </div>
            <div class="right p_div">
                <a class="p_a">
                    <span>更多</span>
                    <img src="res/m/image/index/export/icon_Arrow.png" data-original="/res/m/image/index/export/icon_Arrow.png" alt="">
                </a>
            </div>
        </div>
        <div class="coo_t coo">
            <img src="res/m/image/index/coo/Image_cklc.png" data-original="/res/m/image/index/coo/Image_cklc.png" alt="">
            <div class="coo_d">
                <h1 class="h1">出口流程</h1>
                <p class="ps3">您只需要负责接单、生产，我们帮您搞定所有出口环节！</p>
                <a href="javascript:void(0);" class="as" onclick="doyoo.util.openChat('g=10064715');return false;">{{$buss->service_tel}}</a>
            </div>
        </div>
        <div class="coo_b coo">
            <img src="res/m/image/index/coo/Image_jklc.png" data-original="/res/m/image/index/coo/Image_jklc.png" alt="">
            <div class="coo_d">
                <h1 class="h1">进口流程</h1>
                <p class="ps3">您只需向海外卖家下单，我们帮您搞定所有进口环节！</p>
                <a href="javascript:void(0);" class="as" onclick="doyoo.util.openChat('g=10064716');return false;">{{$buss->service_tel}}</a>
            </div>
        </div>
    </div>
    <!--合作流程 end-->
    <!--公司新闻 start-->
    <div class="news bg-f wrap overHide">
        <div class="dis_t overHide lt">
            <div class="left">
                <p class="left p_line"></p>
                <p class="left p_f">公司新闻</p>
            </div>
            <div class="right p_div">
                <a class="p_a" href="/?name=news&type=m">
                    <span>更多</span>
                    <img src="res/m/image/index/export/icon_Arrow.png" data-original="/res/m/image/index/export/icon_Arrow.png" alt="">
                </a>
            </div>
        </div>
        <ul class="news_ul">
            @if(count($haveImgNews)==1)
            <li class="news_li1 news_li">
                        <a href="/?name=news&id={{$haveImgNews[0]->id}}&type=m">
                            <div class="left news_img">
                                <img src="{{$haveImgNews[0]->img}}" data-original="/res/m/image/index/coo/Image_gsjs.png" alt="">
                            </div>
                            <div class="left news_t">
                                <p class="n_p1">{{$haveImgNews[0]->title}}</p>
                                <p class="n_p2">{{$haveImgNews[0]->time}}</p>
                            </div>
                        </a> 
                    </li>
            @endif
            @foreach($news as $item)
                <li class="news_li news_li2">
                     <a  href="/?name=news&id={{$item->id}}&type=m">
                          <p class="n_p1">{{$item->title}}</p>
                          <p class="n_p4">{{$item->time}}</p>
                     </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection