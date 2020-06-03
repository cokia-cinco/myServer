@extends('index.pc.public')
@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/index/dy.css')}}">
<script src="https://minjun.wang/js/index/opp/functions.js"></script>
@endsection 
@section('banner')
    <div id="carouselBox" style="overflow: hidden;">
         <div class="index_focus">
             <div class="caroufredsel_wrapper" style="min-width:1800px;display: block; text-align: left; float:
                  none; position: relative;width:100%; inset: 0px; z-index: auto; height: 560px; margin: 0px;
                   overflow: hidden;">
             <div class="carousel " id="carousel" style="width:100%;text-align: left; float: none; 
                 position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 18480px; height: 560px; 
                 opacity: 1; z-index: auto;">
                  @foreach($banner as $item)
                   <div class="listes lis1">
                      <a href="#">
                         <div class="list_imgs" style="background:url({{$item->img}}) 0px 0px/100% no-repeat;height:100%;">
                         </div>
                      </a>
                   </div>
                   @endforeach
            </div>
        </div>
    </div>
    <div class="list">
                <ul class="hd" id="hd" style="display: block;">
                @foreach($banner as $item)
                    <li class="on"><div class="hd_on" style="width: 0px;"></div></li>
                @endforeach
                </ul>
            </div>
</div> 
<div class="search">
        <div class="wrap search_d">
            <div class="intro">
                <div class="left intro_1 ritem">
                    <p class="rt1">新三板创新层公司</p>
                    <p class="rt2">实力企业，品质服务</p>

                </div>
                <div class="left intro_2 ritem">
                    <p class="rt1">20年<span>+</span></p>
                    <p class="rt2">进出口经验</p>
                </div>
                <div class="left intro_3 ritem">
                    <p class="rt1"><span id="customerNum">8801+</span></p>
                    <p class="rt2">累计服务客户</p>
                </div>
                <div class="left intro_4 ritem">
                    <p class="rt1">$<span id="amtSum">791,289,382.13</span></p>
                    <p class="rt2">累计出口金额</p>
                </div>
            </div>
        </div>
    </div>
        <script>
            //banner轮播
            $('#carousel').carouFredSel({
                items: 1,
                auto: {
                    pauseOnHover: 'resume',
                    progress: {
                        bar: '#hd li:first div'
                    }
                },
                scroll: {
                    fx: 'fade',
                    duration: 300,
                    timeoutDuration: 5*1000,
                    onAfter: function() {
                        allTimers().stop().width(0);
                        /*prevTimers().width( 140 );*/
                        $(this).trigger('configuration', [ 'auto.progress.bar', '#hd li.selected div' ]);
                    }
                },
                pagination: {
                    container: '#hd',
                    anchorBuilder: false
                }
            });

            function allTimers() {
                return $('#hd li div');
            }
        </script>
@endsection
@section('body')
    <!--sup start-->
    <div class="sups"> 
        <div class="wrap">
            <!--一站式 start-->
            <h1 class="hs">一站式外贸服务</h1>
            <p class="ps">20年外贸服务经验，覆盖全国多省市，支持跨地区合作及特殊<br>产品，全国港口进出口，专业服务为您节省每一分钱！</p>
            <!--一站式 end-->
            <!--服务 start-->
            <div class="ser_1">
                <a href="/export">
                    <div class="left ser_sec ser_sec_1 hover_img" img_id="95"
                         style="background-image: url(&quot;/uploads/images/15869286099683.png&quot;);">
                        <div class="txt">
                            <h3>出口服务</h3>
                            <p>通关、物流、外汇、退税、信保、信用证、一站式出口服务</p>
                        </div>
                    </div>
                </a>
                <a href="/import">
                    <div class="left ser_sec ser_sec_2 hover_img">
                        <div class="txt">
                            <h3>进口服务</h3>
                            <p>提供所有普货、全国主要城市港口、机场进口清关服务</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="ser_2">
                <a href="/export">
                    <div class="left ser_sec ser_sec_1 hover_img">
                        <div class="txt">
                            <h3>退税服务</h3>
                            <p>合规代办退税，为您提前垫付退税款</p>
                        </div>
                    </div>
                </a>
                <a href="/trade">
                    <div class="left ser_sec ser_sec_2">
                        <div class="txt">
                            <h3>跨境电商</h3>
                            <p>亚马逊极速开店,货品分锁,跨境电汇</p>
                        </div>
                    </div>
                </a>
                <a href="/trade">
                    <div class="left ser_sec ser_sec_3">
                        <div class="txt">
                            <h3>信保服务</h3>
                            <p>帮您调查买家资信、代办信保保险、高额陪付</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="ser_2">
                <div class="left ser_sec ser_sec_1">
                    <a href="/credit">
                        <div class="txt">
                            <div class="txt_img"><img src="/uploads/images/15869286293597.png"
                                                      data-original="image/index/sup/ser3_1.png" alt="图片不能加载"></div>
                            <h3>信用证服务</h3>
                            <p>专业审证/制单/交单</p>
                        </div>
                    </a>
                </div>
                <div class="left ser_sec ser_sec_2" img_id="98"
                     style="background-image: url(&quot;/uploads/images/15869286229279.png&quot;);">
                    <a href="/logistics/2" class="list_a">
                        <div class="txt">
                            <div class="txt_img"><img src="/uploads/images/15869286334323.png"
                                                      data-original="image/index/sup/ser3_2.png" alt="图片不能加载"></div>
                            <h3>国际货运</h3>
                            <p>覆盖全球多国家</p>
                        </div>
                    </a>
                </div>
                <div class="left ser_sec ser_sec_3">
                    <a href="/mService">
                        <div class="txt">
                            <div class="txt_img"><img src="/uploads/images/15869286406467.png"
                                                      data-original="image/index/sup/ser3_3.png" alt="图片不能加载"></div>
                            <h3>金融服务</h3>
                            <p>快速结汇、超快捷</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--服务 end-->
        </div>
    </div>
    <!--sup end-->


    <!--出口 satart-->
    <div class="export_ser overHide">
        <div class="wrap">
            <div class="exp_ser_1">
                <h1 class="hs">出口服务</h1>
                <p class="ps">轻松出口，少花钱，更省心！</p>
            </div>
            <div class="exp_ser_2">
                <!--左 start-->
                <div class="exp_ser_left left">
                    <h3 class="ex_1">一站式出口，快速退税</h3>
                    <p class="ex_2">服务已覆盖全国多省，一站式出口，<br class="addr">快速退税</p>
                    <div class="nd_1">
                        <p class="p_l">服务亮点</p>
                        <ul class="nd_u overHide">
                            <li class="left nd_li">
                                <img src="/uploads/images/15869287536592.png"
                                     data-original="image/index/exp/1icon_yiduiyi.png" alt="未加载"
                                     style="display: inline;">
                                <p>一对一</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869287579504.png"
                                     data-original="image/index/exp/2icon_gxtg.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>高效通关</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869287607634.png"
                                     data-original="image/index/exp/3icon_zzjh.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>快速结汇</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869287682528.png"
                                     data-original="image/index/exp/4iocn_zk3tdz.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>快速到账</p>
                            </li>
                            <li class="left nd_li">

                                <img src="/uploads/images/15869287827639.png"
                                     data-original="image/index/exp/6icon_dbxb.png" alt="图片不能加载">
                                <p>代办信保</p>

                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288283941.png"
                                     data-original="image/index/exp/7icon_xyz.png" alt="图片不能加载">
                                <p>信用证</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869287896723.png"
                                     data-original="image/index/exp/8icon_cdfl.png" alt="图片不能加载">
                                <p>超低费率</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--左 end-->
                <!--右 start-->
                <div class="exp_ser_right left">
                    <div class="exp_top overHide">
                        <div class="left e_1">
                            <a href="/trade/3">
                                <img src="/uploads/images/15869287141585.png"
                                     data-original="image/index/exp/exp2_1.jpg" alt="图片不能加载" class="hover_img">
                                <div class="export_det hover_img">
                                    <h3>跨境电商服务</h3>
                                    <p>海量优质货源，货通全球</p>
                                    <b>亚马逊极速开店<br class="addr">一个平台<span>卖全球</span></b>
                                </div>
                            </a>
                        </div>
                        <div class="left e_2">
                            <a href="/export">
                                <img src="/uploads/images/15869287177896.png"
                                     data-original="image/index/exp/exp2_2.jpg" alt="图片不能加载" class="hover_img">
                                <div class="export_det hover_img">
                                    <h3>快速退税</h3>
                                    <p>合规代办退税，为您提前垫付退税款</p>
                                    <b>退税还要等？<br class="addr"><span>快速到账</span></b>
                                </div>
                            </a>
                        </div>
                        <div class="left e_3">
                            <a href="/mService">
                                <img src="/uploads/images/15869287278753.png"
                                     data-original="image/index/exp/exp2_3.jpg" alt="图片不能加载" class="hover_img">
                                <div class="export_det hover_img">
                                    <h3>金融服务</h3>
                                    <p>享受快速结汇、提现、转账</p>
                                    <b>汇率透明，<br class="addr"><span>快速结汇</span></b>
                                </div>
                            </a>
                        </div>
                        <div class="left e_4">
                            <a href="/trade">
                                <img src="/uploads/images/15869287312994.png"
                                     data-original="image/index/exp/exp2_4.jpg" alt="图片不能加载" class="hover_img">
                                <div class="export_det hover_img">
                                    <h3>中信保服务</h3>
                                    <p>帮您调查买家资信、代办信保保险</p>
                                    <b>万一出险，<br class="addr"><span>高额陪付</span></b>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--右 end-->
            </div>
        </div>
    </div>
    <!--出口 end-->


    <!--进口 start-->
    <div class="import_ser overHide">
        <div class="wrap">
            <div class="exp_ser_1">
                <h1 class="hs">进口服务</h1>
                <p class="ps">足不出户进口全球，我们帮您搞定所有进口环节！</p>
            </div>
            <div class="import_part1 overHide">
                <div class="left im_p1">
                    <h3 class="ex_1">一站式进口，管家式服务</h3>
                    <div class="nd_1">
                        <p class="p_l">服务亮点</p>
                        <ul class="nd_u overHide">
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288124228.png"
                                     data-original="image/index/imp/1icon_qggk.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>全国港口</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288169496.png"
                                     data-original="image/index/imp/2icon_syph.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>所有普货</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288209798.png"
                                     data-original="image/index/imp/3icon_hyjk.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>海运进口</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288239782.png"
                                     data-original="image/index/imp/4icon_kyjk.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>空运进口</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288318438.png"
                                     data-original="image/index/imp/6icon_xgjk.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>香港进口</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288394227.png"
                                     data-original="image/index/imp/7icon_ksjk.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>快递进口</p>
                            </li>
                            <li class="left nd_li">
                                <img src="/uploads/images/15869288432134.png"
                                     data-original="image/index/imp/8icon_psdm.png" alt="图片不能加载"
                                     style="display: inline;">
                                <p>派送到门</p>
                            </li>
                        </ul>
                    </div>
                    <div class="nd_3">
                        <a href="/import"> <img src="/uploads/images/15869288471214.png"
                                                data-original="image/index/imp/import1.jpg" alt="图片不能加载"
                                                style="display: inline;"></a>
                    </div>
                </div>
                <div class="left im_p2 im_p">
                    <a href="/import">
                        <img src="/uploads/images/15869288513123.png"
                             data-original="image/index/imp/import2.jpg" alt="图片不能加载" class="hover_img"
                             style="display: inline;">
                        <div class="i_p hover_img">
                            <h3>一站进口</h3>
                            <p class="p1">想进口，却没经验？我们为<br class="addr">您提供一站式进口服务</p>
                            <p class="p2">轻松进口，一次搞定!</p>
                        </div>
                    </a>
                </div>
                <div class="left im_p3 im_p">

                    <img src="/uploads/images/15869288555824.png"
                         data-original="image/index/imp/import3.jpg" alt="图片不能加载" class="hover_img"
                         style="display: inline;">
                    <div class="i_p hover_img">
                        <h3>海外直采</h3>
                        <p class="p1">自营商品，如棉纱、红木，为您<br class="addr">提供一站式采购+进口服务</p>
                        <p class="p2">一手货源，进了就赚钱！</p>
                    </div>

                </div>
                <div class="left im_p4 im_p">
                    <a href="/import">
                        <img src="/uploads/images/15869288587254.png" alt="图片不能加载"
                             data-original="image/index/imp/import4.jpg" class="hover_img" style="display: inline;">
                        <div class="i_p hover_img">
                            <h3>一对一服务</h3>
                            <p class="p1">享受进口全程“管家式”服务<br class="addr"></p>
                            <p class="p2 p2s">超低费率，更省成本</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--进口 end-->


    <!--选择我们 start-->
    <div class="choice overHide self_color">
        <div class="wrap">
            <div class="exp_ser_1">
                <h1 class="hs">为什么选择我们</h1>
                <p class="ps">正规企业，高品质服务，省心又省钱</p>
            </div>
            <ul class="overHide">
                <li class="choice_li">
                    <div class="choice_li_t">
                        <img src="/uploads/images/15869289429484.png"
                             data-original="image/index/choice/choice2.jpg" alt="图片不能加载" class="hover_img"
                             style="display: inline;">
                        <div class="choice_t_logo ">
                            <div class="ch_2 choi"></div>
                        </div>
                    </div>
                    <div class="choice_li_b hover_img">
                        <h3>20年专注外贸服务</h3>
                        <p>核心团队拥有20年专业进出口<br class="addr">经验，服务覆盖全国27个省，就在您身边</p>
                    </div>
                </li>
                <li class="choice_li">
                    <div class="choice_li_t">
                        <img src="/uploads/images/15869289494841.png"
                             data-original="image/index/choice/choice4.jpg" alt="图片不能加载" class="hover_img"
                             style="display: inline;">
                        <div class="choice_t_logo">
                            <div class="ch_4 choi"></div>
                        </div>
                    </div>
                    <div class="choice_li_b hover_img">
                        <h3>1000+用户见证</h3>
                        <p>专注服务中小微企业，1000+用户<br class="addr">见证的一站式进出口服务，更值得您信赖！</p>
                    </div>
                </li>
                <li class="choice_li">
                    <div class="choice_li_t">
                        <img src="/uploads/images/15869289625033.png"
                             data-original="image/index/choice/choice6.jpg" alt="图片不能加载" class="hover_img"
                             style="display: inline;">
                        <div class="choice_t_logo">
                            <div class="ch_6 choi"></div>
                        </div>
                    </div>
                    <div class="choice_li_b hover_img">
                        <h3>快速退税，合规办理</h3>
                        <p>合规代办退税，单据齐全<br class="addr">快速拿到退税款</p>
                    </div>
                </li>
                <li class="choice_li">
                    <div class="choice_li_t">
                        <img src="/uploads/images/15869289708145.png"
                             data-original="image/index/choice/choice8.jpg" alt="图片不能加载" class="hover_img"
                             style="display: inline;">
                        <div class="choice_t_logo">
                            <div class="ch_8 choi"></div>
                        </div>
                    </div>
                    <div class="choice_li_b hover_img">
                        <h3>一对一，更专业</h3>
                        <p>专属跟单，全程一对一<br class="addr">跟踪服务，让您的外贸更加省心</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--选择我们 end-->
    <!--服务资质 start-->
    <div class="company_ser self_color">
        <div class="wrap">
            <div class="exp_ser_1">
                <h1 class="hs">服务资质 <span id="enterpriseNum"></span></h1>
            </div>
            <div class="overHide company_img">
                <img src="image/index/company/Image_LOGO.png" data-original="image/index/company/Image_LOGO.png" alt=""
                     style="display: inline;">
            </div>
        </div>
    </div>
    <!--服务资质 end-->


    <!--合作流程 start-->
    <div class="cooperate overHide">
        <div class="wrap">
            <div class="exp_ser_1">
                <h1 class="hs">合作流程</h1>
                <p class="ps">繁琐流程交给我，更多利润带给您！</p>
            </div>
            <div class="coop_detail overHide">
                <div class="coo_detail_t coo_detail overHide">
                    <div class="left coo_list1">
                        <h3>出口流程</h3>
                        <div class="coo_l_1 overHide">
                            <img src="/uploads/images/15869289277306.png"
                                 data-original="image/index/cooperate/tip1.png" class="left" style="display: block;">
                            <p>您只需要负责接单、生产，我们帮您搞定所有环节！</p>
                            <img class="imgC" src="/uploads/images/15869289136310.png"
                                 data-original="image/index/cooperate/icon_chuko.png" alt="图片不能加载"
                                 style="display: inline;">
                        </div>
                    </div>
                    <div class="left coo_list2">
                        <div class="coo_bottom">
                            <!--  <ul class="overHide">
                                <li class="cooI left">
                                    <div class="cooI_img">
                                        <img src="image/index/cooperate/coo1.png" alt="">
                                    </div>
                                    <p class="cooI_p">1.签订协议</p>
                                    <div class="line"></div>
                                </li>

                            </ul> -->
                            <img src="/uploads/images/15869289194506.png"
                                 data-original="image/index/cooperate/liucheng_chuko.png" alt="图片不能加载"
                                 style="display: inline;">
                        </div>
                        <div class="coo_top">
                            <a href="" class="hover_img">咨询电话: {{$info['tel']}}</a>
                        </div>
                    </div>
                </div>
                <div class="coo_detail_b coo_detail overHide">
                    <div class="left coo_list1">
                        <h3>进口流程</h3>
                        <div class="coo_l_1 overHide">
                            <img src="/uploads/images/15869289277306.png"
                                 data-original="image/index/cooperate/tip1.png" class="left" alt="图片不能加载">
                            <p>您只需要向海外卖家下单，我们帮您搞定所有进口环节！</p>
                            <img class="imgC" src="/uploads/images/15869289161853.png"
                                 data-original="image/index/cooperate/icon_jingko.png" alt="图片不能加载">
                        </div>
                    </div>
                    <div class="left coo_list2">
                        <div class="coo_bottom">
                            <!--   <ul class="overHide">
                                <li class="cooI left">
                                    <div class="cooI_img">
                                        <img src="image/index/cooperate/coo6.png" alt="">
                                    </div>
                                    <p class="cooI_p">1.签订协议</p>
                                    <div class="line"></div>
                                </li>
                            </ul> -->
                            <img src="/uploads/images/15869289221439.png"
                                 data-original="image/index/cooperate/liucheng_jingko.png" alt="图片不能加载">
                        </div>
                        <div class="coo_top">
                            <a href="">咨询电话: {{$info['tel']}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--合作流程 end-->
    </div>
@endsection
@section('cms')
    <div class="information overHide">
            <div class="wrap">
                <div class="overHide infor_top">
                    <div class="left infor_tip">
                        <div class="infor_tip_d">
                            <div class="left">
                                <img src="/image/home/index/platform/voice.png" data-original="image/index/platform/voice.png" alt="" style="display: inline;">
                                <span class="infor_span1">公告信息</span>
                            </div>
                            <p class="right infor_p1"><a href="/?name=announcement" rel="nofollow">查看更多</a></p>
                        </div>
                        <ul class="infor_detail">
                        @foreach($announcement as $item)
                            <li>
                                <p>
                                    <a href="/?name=announcement&id={{$item->id}}" target="_blank">{{$item->title}}
                                    </a>
                                </p>
                                <p class="i_time">{{$item->time}}</p>
                            </li>
                        @endforeach
                        </ul>
            </div>
            <div class="left infor_company">
                <div class="infor_company1">
                    <div class="infor_tip_d">
                        <div class="left">
                            <img src="/image/home/index/platform/pany.png" data-original="image/index/platform/pany.png" alt="" style="display: inline;">
                            <span class="infor_span1">公司新闻</span>
                        </div>
                        <p class="right infor_p1"><a href="/?name=news" class="learn_more" rel="nofollow">查看更多</a></p>
                    </div>
                </div>
                <div class="infor_company2">
                <div class="left infor_list1">
                @if($haveImgNews[0]->img!='')
                    @foreach($haveImgNews as $item)
                        <a href="/?name=news&id={{$item->id}}" target="_blank">
                            <img src="{{$item->img}}" class="hover_img" style="display: inline;"> 
                            <p class="ellipse">{{$item->title}}</p>
                            <p class="i_time">{{$item->time}}</p>
                        </a>
                    @endforeach
                @else
                    @foreach($haveImgNews as $item)
                            <li>
                               <p>
                                  <a href="/?name=news&id={{$item->id}}" target="_blank">{{$item->title}}</a>
                               </p>
                               <p class="i_time">{{$item->time}}</p>
                            </li>
                     @endforeach
                @endif
                </div>
                <ul class="infor_detail">
                  <div class="right infor_list2">
                      @foreach($news as $item)
                        <li>
                           <p>
                              <a href="/?name=news&id={{$item->id}}" target="_blank">{{$item->title}}</a></p>
                               <p class="i_time">{{$item->time}}</p>
                        </li>
                      @endforeach
                   </div>
                 </ul>
               </div>
             </div>
          </div>
        </div>
    </div>
@endsection