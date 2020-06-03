@extends('index.pc.public')
@section('css')
<link rel="stylesheet" href="{{URL::asset('/css/index/dy.css')}}">
<link rel="stylesheet" href="res/m/css/luotuoss" class="__web-inspector-hide-shortcut__">
<link rel="stylesheet" href="res/m/css/luotuo3.css" class="__web-inspector-hide-shortcut__">
<style>
        .showD h2{line-height:1.6}
        .showD  .news_title{margin-bottom:8px;}
        .showD p{line-height:1.4;margin-bottom:4px;}
    @media (max-width:768px){
        .showD h2 {line-height: 1.6;font-size: 1rem;}
    .showD img{width:100%;}
    .showD p{width:100%;overflow:hidden;line-height:1.4;margin-bottom:.2rem;font-size:.65rem}
    }
    </style></head>
 @if(is_null($id))
 <style>
    .news-list{
        width: 60%;
        margin: 0 auto;
    }
    .news-item{
        height: 200px;
        margin: 30px 0;
        padding: 20px;
        border-radius: 5px;
        border: 1px solid #e5e5e5;
        box-shadow: -1px 1px 1px #999;
    }
    .news-left{
        width: 58%;
        height: 100%;
        float: left;
        overflow:hidden;
        text-overflow:ellipsis;
        margin-right: 30px;
    }
    .news-left .news-title{
        color: #1A1B20;
        line-height: 35px;
        margin: 10px 0;
    }
    .news-left .news-time{
        line-height: 20px;
    }
    .news-left .news-context{
        font-size: 16px;
        line-height: 18px;
    }
    .news-right{
        height: 100%;
    }
</style> 
 @else
<style>
    .news-list{
        position: relative;
        width: 60%;
        margin: 0 auto;
        left: 10%;
    }
    .news-item{
        background-color: #fff;
        margin: 30px 0;
        padding: 40px;
        border-radius: 5px;
        border: 1px solid #999;
        box-shadow: 1px 2px 3px;
    }
    .news-top{
        width: 58%;
        height: 100%;
        overflow:hidden;
        text-overflow:ellipsis;
        margin-right: 30px;
    }
    h1{
        color: #1A1B20;
        line-height: 40px;
        padding: 0 100px;
        text-align: center;
    }
    .news-time{
        margin: 10px;
        text-align: right;
        padding-right: 100px;
    }
    .img_border{
        text-align: center;
        margin: 20px 0;
    }
    .text{
        line-height: 25px;
    }
    .all_anno{
        background-color: #fff;
        width: 25%;
        height: 200px;
        overflow: auto;
        padding:30px 20px;
        line-height: 24px;
        position: fixed;
        left: 20px;
        top: 25%;
    }
    .all_anno li{
        overflow: hidden;
        text-overflow: ellipsis;
        white-space:nowrap
    }
    .text+p span{
        font-size:14px;
        line-height:25px;
    }
</style>
@endif
@endsection
@section('body')
<div class="breadBox">
        <ul class="wrap breadCrumb2">
            <li class="bt active"><a href="/">首页</a>&gt;<a href="/?name=news">媒体中心</a></li>
        </ul>
    </div>
@if(is_null($id))
<div class="main media_main">
        <div class="wrap  mainBox1">
            <ul class=" verticalNav">
                <li class="vii active">
                	<a href="/?name=news">新闻</a>
                </li>
                <li class="vii ">
                  <a href="/?name=announcement">公告</a>
                </li>
            </ul>
    
            <ul class="choseBox">
                <li class="ci cMsg  active">
                    <div class="toggle_a" id="t_msg">                
                            <a href="/?name=news"  class="chose_i  active">新闻</a>        
                            <a href="/?name=announcement" class="chose_i ">公告</a>
                    </div>
                    <div class="medias">
                    <ul>
                        @foreach($all_news as $news)
                        <li class="mLis row2">
        			<p class="left p1" >
        				<i class="iconfont icon-right"> </i> 
        				<a target="_blank" style="font-size:1.2rem;" href="/?name=news&id={{$news->id}}">
        				{{$news->title}}
        				</a>
        			</p>
        			<p class="right time1">
        				{{explode(' ',$news->time)[0]}}
        			</p>
        		</li>
                        @endforeach  
                    </ul>
                    </div>
                </li>
            </ul>
        <ul class="choseBox">
                   
        </ul>
    </div>
</div>
@else
    @foreach($all_news as $item)
        @if($item->id == $id)
        <div class="main media_main">
        <div class="wrap  mainBox1">
              <ul class=" verticalNav">
                <li class="vii active">
                	<a href="/?name=news">新闻</a>
                </li>
                <li class="vii ">
                  <a href="/?name=announcement">公告</a>
                </li>
            </ul>
 
            <ul class="choseBox">
                <li class="ci cMsg  active" >
                    <div class="toggle_a" id="t_msg">                
                            <a href="/?name=news"  class="chose_i  active">新闻</a>        
                            <a href="/?name=announcement" class="chose_i ">公告</a>
                    </div>
                    <div class="news_title" style="margin-top: 30px;">
                         <h2>{{$item->title}}</h2>
                         <br><br>
                        <span>时间：</span>
                        {{explode(' ',$item->time)[0]}}
                    </div>
                    <div class="medias">
                    {!!$item->context!!}
                    </div>
                </li>
            </ul>
        <ul class="choseBox">
                   
        </ul>
    </div>
</div>
        @endif
    @endforeach
@endif
@endsection