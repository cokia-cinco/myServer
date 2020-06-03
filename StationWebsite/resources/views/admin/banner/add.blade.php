
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
    .from_list{
        background: orange;
        padding: 8px 15px;
        font-size: 18px;
        color: #fff;
        cursor: pointer;
        border-radius: 30px;
    }
    .img_list{
        padding-top: 30px;
        position: fixed;
        left: 50%;
        top: 10%;
        width: 900px;
        height: 500px;
        overflow: auto;
        transform: translateX(-50%);
        z-index: 1;
        background: #999;
        display: none;
    }
    .img_close{
        width: 30px;
        background: orange;
        color: #fff;
        position: absolute;
        right: 0;
        top: 0;
        font-size: 28px;
        text-align: center;
        cursor: pointer;
    }
    .label{
        width: 200px;
        text-align: center;
        float: left;
        margin: 10px;
    }
    .img_from_list{
        display: none;
        margin:0 60px;
    }
    .submit{
        color: #fff;
        font-size: 18px;
    }
    .back{
        height: 21px;
        margin: 2px 20px;
        font-size: 16px;
        color: #fff;
        display: block;
        background-color: #d24848;
        padding: 5px 10px;
        float: right;
    }
</style>
<body class="index">
<div class="nav">
    <span class="nav-title">添加Banner ></span>
    <a href="/admin/view/banner" class="back">返回</a>
</div>

<form action="{{url('admin/action/add_banner')}}" method="post" id="form" enctype="multipart/form-data">
    @csrf
    <div id="img_border" class="config-line">
        <span class="line-key">图片 :</span>
        <input class="img_local" type="file" class="line-input" name="img">
        <img width="200px" height="120px" class="img_from_list" src="" alt="">
        <span class="from_list">图库选择</span>
    </div>

    <div class="img_list">
        <div class="img_close">×</div>
        @foreach($img_list as $item)
            <label class="label">
                <img width="200px" height="100px" src="{{url($item->file_name)}}" alt=""><br>
                <input class="radio" type="radio" name="img" value="{{$item->file_name}}" id="">
            </label>
        @endforeach
    </div>
    <div class="config-line">
        <span class="line-key">网址 :</span>
        <input type="text" class="line-input" name="url">
        <span class="line-tip">浏览器查找的网址 如:https://www.baidu.com</span>
    </div>

    <div class="config-line">
        <span class="line-key">是否开启链接 :</span>
        <input type="number" class="line-input" name="url_status" value="0">
        <span class="line-tip">0为启用默认开启</span>
    </div>

    <div class="config-line">
        <span class="line-key">排序值 :</span>
        <input type="number" class="line-input" name="sort" value="0">
        <span class="line-tip"></span>
    </div>

    <div class="config-line">
        <span class="line-key">选择模板 :</span>
        <select name="module_id">
            @foreach($module as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="config-bottom">
        <input id="submit"  type="submit" class="submit" value="添加">
    </div>

</form>
</body>
<script>
    $('#submit').click(function(){
        $('#form').submit
    })
    $('.from_list').click(()=>{
        $('.img_list').toggle()
    })

    $('.img_close').click(()=>{
        $('.img_list').toggle()
        if($('input:radio:checked').val()!=''){
            $('.img_local').hide()
            $('.img_from_list').attr('src','/'+$('input:radio:checked').val())

            $('#img_border').height(140)
            $('.img_from_list').show()
        }
    })
</script>
</html>
