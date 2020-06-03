
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
    .from_list{
        background: orange;
        padding: 5px;
        color: #fff;
        cursor: pointer;
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
    }
</style>
<body class="index">
<ul class="index_ul">
    <form id="form" action="/admin/website/editConfig" method="get">
        <input type="hidden" name="id" value="{{$news->id}}">
        <input class="index_name" name="name" value="{{$news->name}}"> :
        <input class="index_value" type="text" name="value" value="{{$news->value}}">
        <a class="index_del" href="/admin/website/del">删除</a>|
        <input class="submit"  type="submit" value="修改">
        <li class="index_line">
        </li>
        <textarea style="display: none" id="textarea" name="context" id="" cols="100" rows="12"></textarea>
        <div style="margin: 30px auto;width: 80%;">
            <script id="editor" type="text/plain" style="width:100%;height:500px;">
            </script>
        </div>
        <div style="text-align: center">
        <span id="submit" style="font-size: 18px;color: #fff; display: inline-block; margin: 0 auto;
        background-color: #00affe;border-radius: 10px ;padding: 5px 20px; width: 80px;cursor: pointer">提交</span>
        </div>
    </form>
</ul>
</form>
</body>
<script>
    $('#submit').click(function(){
        $('#textarea').html(UE.getEditor('editor').getContentTxt())
        // $('#form').submit()
    })
</script>
</html>
