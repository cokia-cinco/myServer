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
    .label{
        width: 200px;
        text-align: center;
        float: left;
        margin: 10px;
    }
</style>
<body>
    <div class="img_list">
        @foreach($imgList as $item)
            <label class="label">
                <img width="200px" height="100px" src="{{url($item->file_name)}}" alt=""><br>
                <input class="radio" type="radio" name="img" onchange="change()" value="{{$item->file_name}}" id="">
            </label>
        @endforeach
    </div>
</body>
<script>
    function change() {
        if($('input:radio:checked').val()!=''){
            parent.changeImgFromImgList($('input:radio:checked').val());
        }
    }
</script>
</html>
