@extends('index.pc.public')
@section('css')
    <link rel="stylesheet" href="{{URL::asset('/css/index/dy.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/index/importNew.css')}}">
@endsection
@section('body')
<div class="mSer1">
    <div class="wrap mSer_t">
        <div class="mSer1_left left" img_id="79"
             style="background-image: url(&quot;http://website.com/uploads/images/15861398148323.png&quot;);">
            <img src="/uploads/images/15869319147619.png"
                 data-original="image/importNew/2_Image_peitu.png" style="display: block;">
        </div>
        <div class="mSer1_right right">
            <h2 class="h2">0经验轻松进口</h2>
            <p class="pLine1"></p>
            <p class="p2">
                浙江东園拥有平均200年以上进口操作经验的专业进口团队，致力于为<br>
                江浙沪地区客户提供各类产品的进口清关（报检、报关、代缴税、查验、<br>
                放行）、代开证、代付汇、物流运输、配送到门的一站式进口供应链服务，<br>
                覆盖全国各大口岸、机场，所有普货、电子产品、棉纱、红酒、机械设备、<br>
                香港进口等，助您足不出户进口全球.<br>

            </p>
            <ul class="mSer1_ul">
                <li class="left">
                    <div class="mSer1_li_img">
                        <img src="/uploads/images/15869319027296.png"
                             data-original="image/importNew/2_icon_1.png" alt="图片不能加载">
                    </div>
                    <p>专业进口团队</p>
                </li>
                <li class="left">
                    <div class="mSer1_li_img">
                        <img src="/uploads/images/15869319061193.png"
                             data-original="image/importNew/2_icon_2.png" alt="图片不能加载">
                    </div>
                    <p>一站式服务</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="mSer2">
    <div class="wrap mSer2_t">
        <div class="mSer2_top">
            <h2 class="h2">所有普货，全国进口代理</h2>
            <p class="pLine1"></p>
        </div>
        <ul class="mSer2_main">
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319275670.png"
                         data-original="image/importNew/3_Image1.png" alt="图片不能加载">
                </div>
                <p>机械设备进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319313752.png"
                         data-original="image/importNew/3_Image2.png" alt="图片不能加载">
                </div>
                <p>机械配件进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319349247.png"
                         data-original="image/importNew/3_Image3.png" alt="图片不能加载">
                </div>
                <p>电子产品进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869331689870.png"
                         data-original="image/importNew/3_Image4.png" alt="图片不能加载">
                </div>
                <p>纺织原料进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319387246.png"
                         data-original="image/importNew/3_Image5.png" alt="图片不能加载">
                </div>
                <p>纺织制品进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319428690.png"
                         data-original="image/importNew/3_Image6.png" alt="图片不能加载">
                </div>
                <p>橡胶制品进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319456332.png"
                         data-original="image/importNew/3_Image7.png" alt="图片不能加载">
                </div>
                <p>家具/配件进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319493104.png"
                         data-original="image/importNew/3_Image8.png" alt="图片不能加载">
                </div>
                <p>玻璃制品进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="image/home/serIntroduction/3_Image9.png" data-original="image/importNew/3_Image9.png" alt="图片不能加载">
                </div>
                <p>生活用品进口</p>
            </li>
            <li class="mSer2_main_li left">
                <div class="mSer2_main_div">
                    <img src="/uploads/images/15869319585148.png"
                         data-original="image/importNew/3_Image10.png" alt="图片不能加载">
                </div>
                <p>陶瓷制品进口</p>
            </li>
        </ul>
        <div class="mSer2_bottom">

            <p class="p3" onclick="doyoo.util.openChat('g=10064715');return false;">
                <span>更多普货进口，咨询电话:{{$buss->service_tel}}</span>

            </p>
        </div>
    </div>
</div>

<div class="mSer5">
    <div class="wrap mSer5_t">
        <div class="mSer5_top">
            <h2 class="h2">进口优势，专业进口代理</h2>
            <p class="pLine1"></p>
        </div>
        <ul class="mSer5_main">
            <li class="left">
                <img src="/uploads/images/15869319715033.png" data-original="image/importNew/6_icon_1.png"
                     alt="图片不能加载">
                <p class="p3">所有普货</p>
            </li>
            <li class="left">
                <img src="/uploads/images/15869319758119.png" data-original="image/importNew/6_icon_2.png"
                     alt="图片不能加载">
                <p class="p3">全国港口</p>
            </li>
            <li class="left">
                <img src="/uploads/images/15869319811182.png" data-original="image/importNew/6_icon_3.png"
                     alt="图片不能加载">
                <p class="p3">海运进口</p>
            </li>
            <li class="left">
                <img src="/uploads/images/15869319855734.png" data-original="image/importNew/6_icon_4.png"
                     alt="图片不能加载">
                <p class="p3">空运进口</p>
            </li>
            <li class="left">
                <img src="/uploads/images/15869319898459.png" data-original="image/importNew/6_icon_5.png"
                     alt="图片不能加载">
                <p class="p3">香港进口</p>
            </li>
            <li class="left">
                <img src="/uploads/images/15869319936769.png" data-original="image/importNew/6_icon_6.png"
                     alt="图片不能加载">
                <p class="p3">快递进口</p>
            </li>
            <li class="left">
                <img src="/uploads/images/15869319982966.png" data-original="image/importNew/6_icon_7.png"
                     alt="图片不能加载">
                <p class="p3">派送到门</p>
            </li>

        </ul>
    </div>
</div>

<div class="mSer6">
    <div class="wrap mSer6_t">
        <div class="mSer6_top">
            <h2 class="h2">服务流程</h2>
            <p class="pLine1"></p>
        </div>
        <ul class="mSer6_main">
            <li class="left mSer6_main_li1">
                <h1 class="h1">01</h1>
                <h2 class="h2">下单</h2>
                <p class="p3">客户与外商签订采购合同</p>
            </li>
            <li class="left mSer6_main_li2">
                <h1 class="h1">02</h1>
                <h2 class="h2">代付汇</h2>
                <p class="p3">客户委托浙江东園通过银行代付汇货款</p>
            </li>
            <li class="left mSer6_main_li3">
                <h1 class="h1">03</h1>
                <h2 class="h2">运输</h2>
                <p class="p3">FOB贸易：浙江东園提供运输CIF贸易：外商负责运输</p>
            </li>
            <li class="left mSer6_main_li4">
                <h1 class="h1">04</h1>
                <h2 class="h2">货物到港</h2>
                <p class="p3">货物到达中国各大港口/机场</p>
            </li>
            <li class="left mSer6_main_li5">
                <h1 class="h1">05</h1>
                <h2 class="h2">进口清关+派送</h2>
                <p class="p3">浙江东園操作海关申报、清关、派送到门</p>
            </li>
        </ul>
    </div>
</div>

<div class="mSer8">
    <div class="wrap mSer8_t">
        <div class="mSer8_top">
            <h2 class="h2">客户评价</h2>
            <p class="pLine2"></p>
        </div>
        <div class="mSer8_main1">
            <img src="/uploads/images/15869321123835.png" data-original="image/importNew/9_kehu1.png"
                 alt="图片不能加载">
            <div class="mSer8_main1_text">
                <h2 class="h2">进口清关专业放心，代理费优惠</h2>
                <p class="p3">深圳市XXXXX有限公司&nbsp;&nbsp; XX总</p>
                <p class="p4">我公司主营电脑及周边产品的技术开发与销售，需长年进口<br>
                    电子配件。在网上了解到浙江东園可以提供进口清关、代付汇<br>
                    等一站式服务，而且在全国各个口岸都能操作，2016年在蓝<br>
                    海骆驼进口第一单，货值3万多美金。全程服务下来，感觉服<br>
                    务很专业，很放心，代理费也优惠一些。现在公司已经把蓝海<br>
                    骆驼作为非常信赖的合作伙伴。</p>
            </div>
        </div>
        <div class="mSer8_main2">
            <img src="/uploads/images/15869321248056.png" data-original="image/importNew/9_kehu2.png"
                 alt="图片不能加载">
            <div class="mSer8_main1_text">
                <h2 class="h2">服务热情周到，进口成本省更多</h2>
                <p class="p3">广州市XXXXX纺织品有限公司&nbsp;&nbsp; XXX总</p>
                <p class="p4">广州市精保锋纺织品有限公司经营范围主要包括纺织品、<br>
                    针织品及原料批发贸易，对优质棉纱的进口需求量较大。<br>
                    2017年经同行朋友推荐，开始在浙江东園进口棉纱，一直<br>
                    到现在，服务热情周到，而且蓝海的一手品牌棉纱和较低<br>
                    的服务费率也为公司节省了很多成本。</p>
            </div>
        </div>
    </div>
</div>

<div class="mSer9">
    <div class="wrap mSer9_t">
        <h2 class="h2">准入条件</h2>
        <p class="pLine2"></p>
        <p class="p3">
            <img src="/uploads/images/15869304052445.png"
                 data-original="image/importNew/10_icon_duihao.png" alt="图片不能加载">
            <span>企业须为国内注册企业（暂不受理个人进口）。</span>
        </p>
        <p class="p3">
            <img src="/uploads/images/15869304052445.png"
                 data-original="image/importNew/10_icon_duihao.png" alt="图片不能加载">
            <span>商品为企业在国外采购的商品（不含个人邮购物品）。</span>
        </p>
        <p class="p3">
            <img src="/uploads/images/15869304052445.png"
                 data-original="image/importNew/10_icon_duihao.png" alt="图片不能加载">
            <span>须通过浙江东園代付汇货款给外商。</span>
        </p>
        <p class="p4">温馨提示：</p>
        <p class="p5">1、目前我司仅为企业客户提供进口清关，暂不受理个人物品进口清关。</p>
        <p class="p5">2、我司仅提供一般贸易进口清关服务，暂不受理海关扣货清关服务。</p>

    </div>
@endsection