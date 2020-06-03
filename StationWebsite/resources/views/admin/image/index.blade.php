
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
    .img_border{
        height: 150px;
        background-color: #e5e5e5;
        position: relative;
        float: left;
        margin: 10px;
    }
    form p{
        padding-left: 60%;
        margin-bottom: 30px;
    }
    .img_del{
        display: inline-block;
        width: 17px;
        height: 17px;
        font-size: 15px;
        text-align: center;
        color: #fff;
        position: absolute;
        right: -10px;
        top: -10px;
        background-color: red;
        border-radius: 20px;
        padding: 3px;
        cursor: pointer;
    }
    input.file{
        vertical-align:middle;
        position:absolute;
        left:65%;
        filter:alpha(opacity=0);
        opacity:0;
        z-index:1;
        *width:223px;
    }
    form input.viewfile {
        z-index:99;
        border:1px solid #ccc;
        padding:2px;
        width:150px;
        vertical-align:middle;
        color:#999;
    }

    form p span {
        float:left;
    }

    form label.bottom {
        border:1px solid #38597a;
        background:#4e7ba9;
        color:#fff;
        height:19px;
        line-height:19px;
        display:block;
        width:60px;
        text-align:center;
        cursor:pointer;
        float:left;
        position:relative;
        *top:1px;
    }

    form input.submit {
        border:0;
        background:#380;
        width:70px;
        height:22px;
        line-height:22px;
        color:#fff;
        cursor:pointer;
        margin-left: 30px;
    }
</style>
<body class="index">
<div class="nav">
    <span class="nav-title">图库管理 ></span>
</div>
<div>
    <form action="{{url('admin/img/addImg')}}" method="post" id="form" enctype="multipart/form-data">
        @csrf
{{--        <input id="add_file_border" type="file" value="" name="img">--}}
{{--        <input id="submit"  type="submit" class="submit" value="添加">--}}
        <p>
            <span>
                <label for="viewfile">上传文件：</label>
                <input type="text" name="viewfile" id="viewfile" class="viewfile" />
            </span>
            <label for="upload" class="bottom">查找文件</label>
            <input type="file" size="27" name="img" onchange="document.getElementById('viewfile').value=this.value;"
                   class="file" />
            <input class="submit" type="submit" value="确定上传" />
        </p>

    </form>
</div>
<div>
    @foreach($imgList as $item)
        <div class="img_border">
            <a href="/admin/img/del?id={{$item->id}}" class="img_del">×</a>
            <img height="100%" src="{{url($item->file_name)}}" alt="">
        </div>
    @endforeach
</div>
</body>
<script>
    $('#submit').click(function(){
        $('#form').submit
    })
</script>
</html>
