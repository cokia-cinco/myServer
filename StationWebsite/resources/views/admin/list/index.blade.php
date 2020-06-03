
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
    .add_banner{
        padding: 100px 10% 40px;
    }
    .add_banner a{
        background-color: #e5e5e5;
        color: #666;
        padding: 5px 10px;
        font-size: 16px;
        float: right;
        border-radius: 5px;
    }
    .add_banner select{
        width: 150px;
        height: 30px;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        margin: 0 auto;
        text-align: center;
    }

    td,th {
        padding: 0;
    }

    .pure-table {
        border-collapse: collapse;
        border-spacing: 0;
        empty-cells: show;
        border: 1px solid #cbcbcb;
    }

    .pure-table caption {
        color: #000;
        font: italic 85%/1 arial,sans-serif;
        padding: 1em 0;
        text-align: center;
    }

    .pure-table td,.pure-table th {
        border-left: 1px solid #cbcbcb;
        border-width: 0 0 0 1px;
        font-size: inherit;
        margin: 0;
        overflow: visible;
        padding: .5em 1em;
    }

    .pure-table thead {
        background-color: #e0e0e0;
        color: #000;
        text-align: left;
        vertical-align: bottom;
    }

    .pure-table td {
        background-color: transparent;
    }

    .pure-table-bordered td {
        border-bottom: 1px solid #cbcbcb;
    }

    .pure-table-bordered tbody>tr:last-child>td {
        border-bottom-width: 0;
    }
</style>
<body class="index">

<div class="add_banner">
    <a href="/admin/list/edit?table={{$table}}&type={{$type}}">添加 ></a>
</div>

<table width="80%" class="pure-table pure-table-bordered">
    <thead>
    <tr>
        <th>名称</th>
        <th>所属模板</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>
                @foreach($template as $vo)
                    @if($vo->id == $item->template_id)
                        {{$vo->nickname}}
                    @endif
                @endforeach
            </td>
            <td>
                <a href="/admin/action/delete?id={{$item->id}}&table={{$table}}&url=/admin/list/info?table={{$table}}&type={{$type}}">删除</a>
                <a href="/admin/list/view?id={{$item->template_id}}&type={{$type}}">查看</a>
                <a href="/admin/list/edit?id={{$item->id}}&table={{$table}}&type={{$type}}">修改</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="module_manage">
    <div class="module_close">×</div>
    <iframe width="100%" height="100%" id="iframe" src="" frameborder="0"></iframe>
</div>
</body>
<script>
    $('#submit').click(function(){
        $('#form').submit
    })
</script>
</html>
