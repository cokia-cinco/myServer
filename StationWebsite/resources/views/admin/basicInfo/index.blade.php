
<!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>Build-WebStation</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{URL::asset('/css/admin/font.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/admin/xadmin.css')}}">
    <script src="{{URL::asset('lib/admin/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('/js/admin/xadmin.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/admin/jquery.min.js')}}"></script>
</head>
<style>
    .form {
        padding: 50px;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        position: fixed;
        left: 50%;
        top: 40%;
        transform: translate(-50%,-50%);
        background-color: #fff;
        box-shadow:  1px 2px 3px #999;
        display: none;
    }
    .row { margin-top: 25px;height: 26px;line-height: 26px;border-bottom: 1px solid #e8e8e8;width: 328px; }
    .input { position: relative;width: 328px;height: 26px; }
    .input input {
        display: block;
        width: 100%;
        height: 26px;
        border:none;
        background: none;
        outline:none;
        font-size: 14px;
        color: #333;
    }
    .button input{
        width: 200px;
        height: 30px;
        background-color: #eee;
        border: 1px solid #eee;
        color: #666;
        font-size: 14px
    }
    .button{
        padding: 30px 0 0;
        text-align: center;
    }
    .index_line{
        padding: 8px 15%;
    }
    .index_name{
        display: inline-block;
        width: 80px;
    }
    .index_line input{
        margin: 0 30px 0 80px;
        display: inline-block;
        height: 26px;
        border:none;
        background: none;
        outline:none;
        border-bottom: 1px solid #e5e5e5;
    }
    .index_line:hover{
        background-color: #eee;
    }
    .index_del{
        line-height: 30px;
        padding: 0 10px;
        font-size: 12px;
    }
    .add_config{
        width: 200px;
        height: 30px;
        background-color: #eee;
        border: 1px solid #eee;
        color: #666;
        font-size: 14px;
        margin: 0 20px;
    }
    .button_border{
        padding-left: 25%;
    }
    .close{
        border-radius: 3px;
        text-align: center;
        position: absolute;
        line-height: 30px;
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: #eee;
        right: 0;
        top: 0;
        font-size: 25px;
        cursor: pointer;
    }
    .close:hover{
        color: #999;
        background-color: #ddd;
    }
    .index_ul{
        width: 80%;
        margin: 30px auto;
        border: 1px solid #eee;
    }
    .index_line .submit{
        margin: 0;
        display: inline;
        border: none;
        padding: 0 10px;
        cursor: pointer;
    }
    .index_line .submit:hover{
        color: #999;
    }
</style>
<body class="index">
        <ul class="index_ul">
            @foreach($basicInfo as $item)
                <li class="index_line">
                    <form id="form" action="/admin/website/editConfig" method="get">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <input class="index_name" name="name" value="{{$item->name}}"> :
                        <input class="index_value" type="text" name="value" value="{{$item->value}}">
                        <a class="index_del" href="/admin/action/delete?id={{$item->id}}&table=basic_info&url=/admin/website/websiteBasicInfo">删除</a>|
                        <input class="submit"  type="submit" value="修改">
                        <span style="color: #999">!!调用方式为 $info['{{$item->name}}']</span>
                    </form>
                </li>
            @endforeach
        </ul>

    <div class="button_border">
        <button class="add_config" onclick="addConfig()">添加配置</button>
    </div>
    <div class="form">
        <span class="close" onclick="addConfig()">×</span>
        <form action="/admin/website/addConfig" method="get">
                <div class="row js-input">
                    <div class="input">
                        <input type="text" placeholder="名称" name="name">
                    </div>
                </div>
                <div class="row js-input">
                    <div class="input">
                        <input type="text" name="value" placeholder="内容">
                    </div>
                </div>
                <div class=" js-input">
                    <div class="button">
                        <input type="submit">
                    </div>
                </div>
        </form>
    </div>
</body>
<script>
    function addConfig() {
        $('.form').toggle()
    }
    function editConfig() {
        $('#form').submit()
    }
</script>
</html>
