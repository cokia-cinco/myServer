@extends('index.mobile.public')
@section('body')
    <div class="main trade_main">
        <div class="wrap  mainBox1">
            <ul class=" verticalNav">
                @for($i=0;$i<count($list);$i++)
                    <li class="vi "><h4>服务详情</h4> <i class="bu"></i></li>
                @endfor
            </ul>
            <ul class="choseBox">
                <li class="ci cServer ">
                    <div class="group1 s_pro">
                        <h6 class="title">服务详情</h6>
                        <div class="txt">蓝海骆驼联合中国出口信用保险公司（中信保）、银行机构，为您提供买家资信调查、信保出口保险、信保垫付货款在内的一站式信保服务，为您规避贸易风险、保障回款安全，快速拿到信保出口订单垫付货款。</div>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                    <div class="group1 g1">
                        <h6 class="g_head">基础服务</h6>
                        <div class="g_content">
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>买家资信调查
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>信保出口保险
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>信保垫付货款
                            </p>
                        </div>
                    </div>
                    <div class="group1 g2">
                        <h6 class="g_head">准入条件</h6>
                        <div class="g_content">
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>属于外贸生产型企业，且具备一定的生产能力。
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>企业为一般纳税人，且成立时间在半年以上。
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>贸易背景真实。
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>在蓝海骆驼出口。
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>国外买家在中信保有额度。
                            </p>
                        </div>
                    </div>
                    <div class="group1 g2">
                        <h6 class="g_head">费用说明</h6>
                        <div class="g_content">
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>1.资信调查费：800元/单
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>2.中信保保费：出口报关单金额×投保费率
                            </p>
                            <p class="check_txt">
                                <i class="falseCheckBox iconfont icon-fuxuankuangxuanzhong"></i>3.信保垫付服务费：垫付货款金额×1.45%×月
                            </p>
                        </div>
                    </div>
                    <div class="group1 g4">
                        <h6 class="g_head">合作流程</h6>
                        <ul class="g_content process row2">
                            <li class="presI left" data-tip-msg="接单前，提供买家资信调查">
                                <div class="step">1</div>
                                <p class="sup">买家资信调查</p>
                                <div class="line"></div>
                            </li>
                            <li class="presI left" data-tip-msg="出口后，代投信保出口保险">
                                <div class="step">2</div>
                                <p class="sup">信保投保</p>
                                <div class="line"></div>
                            </li>
                            <li class="presI left active" data-tip-msg="投保后，提供信保出口订单垫付货款">
                                <div class="step ">3</div>
                                <p class="sup">信保垫付货款</p>
                                <div class="line"></div>
                            </li>
                        </ul>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                </li>
                <li class="ci cExport ">
                    <div class="s_pro">
                        <h6 class="title">服务介绍</h6>
                        <p class="txt">为降低您的国际贸易风险，蓝海骆驼联合中国出口信用保险公司（中信保）为您提供买家资信调查服务，助您提前了解买家资信背景（及买家可授信额度），规避贸易风险，放心接单。</p>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                    <div class="problem">
                        <h6 class="title">常见问题</h6>
                        <ul class="problem_lis">
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>在什么情况下，我需要调查买家资信？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>
    针对以下情况，我们建议您调查买家资信：<br> ①新客户首次下单且采用赊销形式付款的；<br>②老客户下单，但订单账期较长（赊销）；<br> ③其他有账期且担心货款回款风险的情况。
                                    </span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>申请买家资信调查需提供哪些资料？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>买家公司名称、公司地址、联系人、联系电话、邮箱、预计年交易额、与买家签订的订单等。 </span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>资信调查报告多久可以出来？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>
    ①若在您申请调查之前，该海外买家资信情况已经由中国大陆其他企业通过中信保调查过，且已出具报告或已批复额度的，一般7个工作日内即可出具调查报告。<br>②若在您申请调查之前，中信保没有调查过该海外买家的资信情况，或虽调查过但调查报告已过期或批复额度已过期，则需重新调查，一般15个工作日内出具调查报告。
                                    </span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>买家资信调查如何收费？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>800元/单。</span>
                                </p>
                            </li>
                        </ul>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                </li>
                <li class="ci cExchange ">
                    <div class="s_pro">
                        <h6 class="title">服务介绍</h6>
                        <p class="txt">蓝海骆驼联合中国出口信用保险公司（中信保）为您提供出口信用保险服务，覆盖最长120天赊销（OA）账期，保障企业的货款回款安全。一旦出险，蓝海骆驼将全程协助申报理赔，企业根据投保金额最高可获得90%的货款赔付。</p>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                    <div class="problem">
                        <h6 class="title">常见问题</h6>
                        <ul class="problem_lis">
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>中信保承保范围？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>
    中信保承保范围：<br>①商业风险——买方破产或无力偿付债务；买方拖欠货款；买方拒绝接受货物。<br>②政治风险——买方所在国家、地区禁止或限制买方向被保险人支付货款；禁止买方购买的货物进口或撤销已颁发给买方的进口许可证；发生战争、内战或者暴动，导致买方无法履行合同；买方付款须经过的第三国颁布延期付款令。
                                    </span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>中信保的最高赔付额度是多少？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>企业购买中信保出口保险后，一旦出险，根据企业投保金额，中信保最高可赔付企业投保金额的90%。（投保金额须在买家授信额度范围内）</span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>中信保保费如何收取？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>根据不同国别、地区及账期，中信保保费费率有别。保费计算公式：投保费=报关出口金额*投保费率。例如：美国属于A2类国家，OA60天，对应的投保费率为1.39%，出口10万美元货物，则收取的投保费为：100000*1.39%=1390美元。详询客服或拨打服务热线4008-518-448。</span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>赊销账期到期后，买家不付款怎么办？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>
    ①追索货款：正常情况下，海外买家会按照PO上签订的付款方式付款。超过赊销账期仍不付款的，蓝海骆驼与企业沟通确认后可以通过中信保向海外买家追索货款。 <br>②中信保赔付：蓝海骆驼将出具相关的贸易单据协助中信保调查。如调查贸易背景属实，且不存在卖方违约的情况下，中信保将根据工厂投保金额，最高赔付90%的货款。
                                        <br>③买家信用记录：对海外买家而言，如不按照订单履约付款，中信保索赔后，该买家的失信记录会永远记录在买家的信用体系中，国内任何一家公司均可通过中信保查询到该买家的失信记录，且中信保对于此类有过纠纷的海外买家很难再批复额度，直接影响该买家的后续交易。
                                    </span>
                                </p>
                            </li>
                        </ul>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                </li>
                <li class="ci cRebate active">
                    <div class="s_pro">
                        <h6 class="title">服务介绍</h6>
                        <p class="txt">针对海外买家的付款账期较长的外贸订单，蓝海骆驼联合深圳市中小企业信用融资担保集团有限公司（中小保），共同推出“信保出口订单在线服务”。外贸中小企业客户凭借中信保保单、出运记录即可获得垫付货款支持，单笔业务最高垫付信保投保金额的50%-80%，最快3个工作日内垫付货款资金到账。</p>
                        <p></p>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                    <div class="problem">
                        <h6 class="title">常见问题</h6>
                        <ul class="problem_lis">
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>申请信保垫付货款有没有限额？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>申请信保垫付货款，须在中信保批复的买家授信额度内，最高可垫付信保投保金额的80%。垫付货款额度可循环使用，已回款的部分可进行核销。</span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>申请信保垫付货款需要什么条件？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>
    ①企业注册地在中国大陆境内，且不能和买方互为关联公司。<br>②买方经过中信保调查，并获得一定授信额度。<br>③以蓝海骆驼名义出口。<br>④赊销账期不超过120天。<br>⑤买卖双方需在蓝海骆驼平台下单，企业根据系统提示上传生产进度。
                                    </span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>中信保投保需要提供什么单据？信保垫付货款最快多长时间到账？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>提供单据：报关单、提单、验货报告、PO。信保垫付货款在投保成功后一般3个工作日安排。</span>
                                </p>
                            </li>
                            <li class="item">
                                <p class="q">
                                    <span class="person">Q：</span>
                                    <span>申请信保垫付货款的对应订单，由谁来验货？</span>
                                </p>
                                <p class="a">
                                    <span class="person">A：</span>
                                    <span>
    申请信保垫付货款的订单，一般有以下几种验货方式：<br>①买家直接验货，签订验货报告；<br>②如买家在中国有指定的验货部门或机构，则以其出具的验货报告为准；<br>③如买家在中国没有指定的验货部门或机构，企业可与买家协商，指定一家国际认可的验货机构进行验货。<br>（蓝海骆驼可代办第三方验货服务，详询客服或拨打服务热线4008-518-448）
                                    </span>
                                </p>
                            </li>
                        </ul>
                        <div class="call_kh row2">
                            <a href="javascript:;" onclick="openWin();" class="btn left">立即咨询</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section('list')
@endsection
