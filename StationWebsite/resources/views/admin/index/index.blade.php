<!doctype html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>Build-WebStation</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="stylesheet" href="{{URL::asset('/css/admin/font.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/admin/xadmin.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/admin/theme1.css')}}">
        <script type="text/javascript" src="{{URL::asset('/lib/admin/layui/layui.js')}}" charset="utf-8"></script>
        <script type="text/javascript" src="{{URL::asset('/js/admin/xadmin.js')}}"></script>
    </head>
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <div class="logo">
                <a href="{{URL::asset('/')}}">网站管理系统</a></div>
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>

            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">admin</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('修改密码','/admin/view/edit_password')">修改密码</a>
                        </dd>
                        <dd>
                            <a href="/logout">退出</a>
                        </dd>
                        <dd>
                            <a href="/admin/update">更新前端页面</a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="/">前台首页</a></li>
            </ul>
        </div>
        <!-- 顶部结束 -->
        <!-- 中部开始 -->
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="基础信息">&#xe723;</i>
                            <cite>基础信息</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('配置信息','admin/view/config')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>配置信息</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('企业基本信息','admin/view/basic')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>企业基本信息</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="图片管理">&#xe723;</i>
                            <cite>图片管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('图库管理','admin/view/img')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>图库管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('banner管理','admin/view/banner')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>banner管理</cite></a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="站点基本配置">&#xe723;</i>
                            <cite>站点基本配置</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('网站基本信息','admin/website/websiteBasicInfo')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>网站基本信息</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="CMS管理">&#xe723;</i>
                            <cite>CMS管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('新闻','/admin/cms/info?table=news')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>新闻</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('公告','/admin/cms/info?table=announcement')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>公告</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="模板管理">&#xe723;</i>
                            <cite>模板管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">

                            <li>
                                <a onclick="xadmin.add_tab('PC端模板','/admin/template/info?type=pc')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>PC端模板</cite></a>
                            </li>

                            <li>
                                <a onclick="xadmin.add_tab('手机端模板','/admin/template/info?type=mobile')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>手机端模板</cite></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="列表类型">&#xe723;</i>
                            <cite>列表类型</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">

                            <li>
                                <a onclick="xadmin.add_tab('列表类型>PC端','/admin/list/info?table=type_of_list&type=pc')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>PC端</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('列表类型>手机端','/admin/list/info?table=type_of_list&type=mobile')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>手机端</cite></a>
                            </li>


                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <!-- <div class="x-slide_left"></div> -->
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
            <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
                <ul class="layui-tab-title">
                    <li class="home">
                        <i class="layui-icon">&#xe68e;</i>我的桌面</li></ul>
                <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                    <dl>
                        <dd data-type="this">关闭当前</dd>
                        <dd data-type="other">关闭其它</dd>
                        <dd data-type="all">关闭全部</dd></dl>
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <iframe src='admin/view/welcome' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                    </div>
                </div>
                <div id="tab_show"></div>
            </div>
        </div>
        <div class="page-content-bg"></div>
        <style id="theme_style"></style>
        <!-- 右侧主体结束 -->
    </body>

</html>
