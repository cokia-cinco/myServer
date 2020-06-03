
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


    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/ueditor/ueditor.all.min.js')}}"> </script>
    <script type="text/javascript" charset="utf-8" src="{{URL::asset('/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('editor');
    </script>


    <script src="{{URL::asset('lib/admin/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{URL::asset('/js/admin/xadmin.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/admin/jquery.min.js')}}"></script>
</head>
<style>
    input[type="date"]{
        margin:5px 20px;
        width: 340px;
        padding: 0 25px;
        height: 40px;
        border: 1px solid #f2f2f2;
        background: #fff;
        color: #202124;
        font-size: 14px;
        line-height: 48px;
        border-radius: 25px;
    }.back{
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
    <span class="nav-title">公告修改 ></span>
    <a href="/admin/view/announcement" class="back">返回</a>
</div>

<form action="{{url('admin/action/edit_announcement')}}" method="post" id="form" enctype="multipart/form-data">
    @csrf
    <div class="config-line">
        <span class="line-key">标题 :</span>
        <input type="text" class="line-input" value="{{$announcement==''?'':$announcement->title}}" name="title">
        <span class="line-tip"></span>
    </div>
    <input type="hidden" name="id" value="{{$announcement==''?'':$announcement->id}}">
    <div class="config-line">
        <span class="line-key">时间 :</span>
        <input type="text" class="line-input" value="{{$announcement==''?'':$announcement->time}}" name="time">
        <span class="line-tip"></span>
    </div>

    <div class="config-line">
        <span class="line-key">作者 :</span>
        <input type="text" value="{{$announcement==''?'':$announcement->author}}" class="line-input" name="author">
        <span class="line-tip"></span>
    </div>

    <div class="config-line">
        <span class="line-key">排序值 :</span>
        <input type="number" value="{{$announcement==''?$sort:$announcement->sort}}" class="line-input" name="sort">
        <span class="line-tip"></span>
    </div>

    <textarea style="display: none" id="textarea" name="context" id="" cols="100" rows="12"></textarea>
    <div style="margin: 30px auto;width: 80%;">
        <script id="editor" type="text/plain" style="width:100%;height:500px;">
            {{$announcement==''?'':$announcement->context}}
        </script>
    </div>
    <div style="text-align: center">
        <span id="submit" style="font-size: 18px;color: #fff; display: inline-block; margin: 0 auto;
        background-color: #00affe;border-radius: 10px ;padding: 5px 20px; width: 80px;cursor: pointer">提交</span>
    </div>
</form>
</body>
<script>
    $('#submit').click(function(){
        $('#textarea').html(UE.getEditor('editor').getContentTxt())
        $('#form').submit()
    })
</script>
</html>
