@extends('index.pc.public')
@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/index/dy3.css')}}">
<script src="https://minjun.wang/js/index/opp/functions.js"></script>
@endsection
@section('body')
<div class="sup_nav2 logistics_sup_nav">
    <div class="wrap row2">
        <ul class="list_box">
            <li class="left sp_item sp_1 row2">
                <div class="left i_m door">
                    <!--<img src="image/index/nav/guan.png" alt="">-->
                </div>
                <div class="text">
                    <h5>门到门</h5>
                    <p>从工厂至买家仓库，定制化LDP/DDP/DDU</p>
                </div>
            </li>
            <li class="left sp_item sp_2 row2">
                <div class="left i_m unit">
                    <!--<img src="image/index/nav/days.png" alt="">-->
                </div>
                <div class="text">
                    <h5>国际货运</h5>
                    <p>覆盖全球主要航线、港口，整柜、拼箱灵活选择</p>
                </div>
            </li>
            <li class="left sp_item sp_3 row2">
                <div class="left i_m car">
                    <!--<img src="image/index/nav/rong.png" alt="">-->
                </div>
                <div class="text">
                    <h5>拖车</h5>
                    <p>内陆、中港、冷藏拖车，专业，安全，快捷</p>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection