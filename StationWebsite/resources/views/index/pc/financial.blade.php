@extends('index.pc.public')
@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/index/dy3.css')}}">
<script src="https://minjun.wang/js/index/opp/functions.js"></script>
@endsection
@section('body')
<div class="sup_nav2 trade_sup_nav">
    <div class="wrap row2">
        <ul class="list_box">
            <li class="left sp_item sp_1 row2">
                <div class="left i_m zi">
                    <!--<img src="image/index/nav/guan.png" alt="">-->
                </div>
                <div class="text">
                    <h5>资信调查</h5>
                    <p>掌握买家资信，出具授信<br class="hidden-xs">额度，让交易更安全</p>
                </div>
            </li>
            <li class="left sp_item sp_2 row2">
                <div class="left i_m pei">
                    <!--<img src="image/index/nav/days.png" alt="">-->
                </div>
                <div class="text">
                    <h5>信保投保</h5>
                    <p>保障收汇安全，一旦出险<br class="hidden-xs">最高可获得90%货款赔付</p>
                </div>
            </li>
            <li class="left sp_item sp_3 row2">
                <div class="left i_m she">
                    <!--<img src="image/index/nav/rong.png" alt="">-->
                </div>
                <div class="text">
                    <h5>信保垫付货款</h5>
                    <p>直接针对赊销订单，<br class="hidden-xs">最高可提前回笼80%货款</p>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection