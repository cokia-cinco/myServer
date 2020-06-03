
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
        position: relative;
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
    #submit,.back{
        font-size: 18px;
        color: #fff;
        display: inline-block;
        background-color: #00affe;
        border-radius: 10px ;
        padding: 5px 20px;
        width: 80px;
        cursor: pointer;
        margin: 0 20px 30px;
    }
    #submit:hover{
        color: #e5e5e5;
    }
    .back:hover{
        color: #e5e5e5;
    }
    .local_img{
        width: 150px;
        margin: 0 10px 0 80px;
        border: 1px solid #999;
        cursor: pointer;
    }
    .select_from_imgList{
        padding: 5px 10px;
        border: 1px solid #999;
        background-color: #eee;
        cursor: pointer;
    }
    .imgList_border{
        width: 80%;
        margin: 0 auto;
        position: fixed;
        top: 10%;
        left: 50%;
        height: 500px;
        z-index: 9999;
        transform: translateX(-50%);
        border: 1px solid #999;
        box-shadow: 1px 2px 3px #666;
        display: none;
    }
    .img_border{
        position: absolute;
        right: 30px;
        top: 10%;
        width: 300px;
        height: 100px;
        overflow: hidden;
    }
    .imgFromImgList{
        height: 100%;
        display: block;
    }
    .iframe_close{
        background-color: deepskyblue;
        width: 200px;
        height: 30px;
        position: absolute;
        bottom: 30px;
        left: 50%;
        text-align: center;
        font-size: 20px;
        color: #fff;
        transform: translateX(-50%);
        cursor: pointer;
    }
</style>
<body class="index">

<form action="{{url('admin/action/config')}}" method="post" id="form" enctype="multipart/form-data">
    @csrf
    <ul class="index_ul">
        <li class="index_line">
            <span class="index_name">网站名称</span> :
            <input class="index_value" type="text" value="{{$config->website_name}}" name="website_name">
        </li>
        <li class="index_line">
            <span class="index_name">网址</span> :
            <input class="index_value" type="text" value="{{$config->url}}" name="url">
        </li>
        <li class="index_line">
            <span class="index_name">备案</span> :
            <input class="index_value" type="text" value="{{$config->info}}" name="info">
        </li>
        <li class="index_line">
            <span class="index_name">logo</span> :
            @if(is_null($config->logo))
                <input type="file" class="local_img" name="logo">
            @else
                <input type="file" class="local_img" name="logo">
                <img style="margin-left: 30px;width: 150px;height: 50px" src="{{url($config->logo)}}" alt="">
            @endif
        </li>


    <div class="config-bottom">
        <input id="submit"  type="submit" class="submit" value="修改">
    </div>
    </ul>
</form>
</body>
<script>
    $('#submit').click(function(){
        $('#form').submit
    })
</script>
</html>
