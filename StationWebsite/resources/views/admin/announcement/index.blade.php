
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
    <link rel="stylesheet" href="{{URL::asset('/css/admin/normal.css')}}">
    <script src="{{URL::asset('lib/admin/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('/js/admin/xadmin.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/admin/jquery.min.js')}}"></script>
</head>
<style>
    .module_manage{
        width: 80%;
        position: fixed;
        left: 50%;
        top: 10%;
        transform: translateX(-50%);
        display: none;
        height: 600px;
    }
    .module_close{
        position: absolute;
        right: 0;
        top: 0;
        background-color: orange;
        color: #fff;
        font-size: 30px;
        padding: 5px;
        cursor: pointer;
    }
    table{
        margin: 0 auto;
        text-align: center;
    }
    table td{
        font-size: 16px;
        padding: 5px 0;
    }
    tr:first-of-type td{
        font-size: 18px;
        font-weight: bold;
    }
    .add_banner{
        padding: 0px 10% 40px;
    }
    .add_banner a{
        background-color: #00FF00;
        color: #fff;
        padding: 5px 10px;
        font-size: 16px;
        float: right;
    }
    .add_banner select{
        width: 150px;
        height: 30px;
    }
</style>
<body class="index">
<div class="nav">
    <span class="nav-title">公告管理 ></span>
</div>
<div class="add_banner"><a href="/admin/view/edit_announcement">添加公告 ></a></div>
<table border="1px" cellspacing="0" width="80%">
    <tr>
        <td>标题</td>
        <td>时间</td>
        <td>作者</td>
        <td>状态</td>
        <td>排序</td>
        <td>操作</td>
    </tr>
    @foreach($announcement as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->author}}</td>
            <td>{{$item->status==0?'启用':'禁用'}}</td>
            <td>{{$item->sort}}</td>
            <td>
                <a href="/admin/action/del_announcement?id={{$item->id}}">删除</a>
                <a href="/admin/view/edit_announcement?id={{$item->id}}">修改</a>
                <a href="/admin/action/change_status?table=announcement&id={{$item->id}}&status={{$item->status}}&url=/admin/view/announcement">
                    {{$item->status==0?'禁用':'启用'}}
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
<script>
    $('#submit').click(function(){
        $('#form').submit
    })
</script>
</html>
