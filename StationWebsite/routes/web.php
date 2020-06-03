<?php
Route::get('/test',function(){
    return "hello";
});

Route::group(['middleware' => ['pcOrMobile']], function () {
    Route::get('/', 'Index\IndexController@demo');
});

//计算用
Route::group(array('prefix' => 'cal'),function(){
    Route::get('/vip','Tools\CalculationController@vip');
    Route::get('/experience','Tools\CalculationController@experience');
    Route::get('/partnership','Tools\CalculationController@partnership');
});

Route::post('/login/admin','Admin\IndexController@login');

Route::get('/login',function (){
    return view('admin.login');
});

Route::get('/logout',function (){
    session()->forget('token');
    return view('admin.login');
});

Route::group(array('prefix' => 'view'),function(){
   Route::get('news','Index\IndexController@show_news');
   Route::get('announcement','Index\IndexController@show_announcement');
});

//管理员模块
//!!!!!后期做登录验证
Route::group(['middleware' => ['login']], function (){

    //首页
    Route::get('/admin', function () {
        return view('admin.index.index');
    });

    Route::group(array('prefix' => 'admin'),function() {

        //基本配置
        Route::group(array('prefix' => 'website'), function () {

            //展示
            Route::get('/websiteBasicInfo', 'Admin\WebsiteController@basicInfo');

            //添加
            Route::get('/addConfig', 'Admin\WebsiteController@addConfig');

            //修改
            Route::get('/editConfig', 'Admin\WebsiteController@editConfig');
        });

        Route::group(array('prefix' => 'cms'), function () {
            //展示列表
            Route::get('/info', 'Admin\CmsController@info');
            //编辑|添加
            Route::get('/edit', 'Admin\CmsController@edit');
            //执行编辑|添加
            Route::post('/doEdit', 'Admin\CmsController@doEdit');
        });

        //模板管理
        Route::group(array('prefix' => 'template'), function () {
            Route::get('/info', 'Admin\TemplateController@info');

            Route::get('/edit', 'Admin\TemplateController@edit');

            Route::post('/doEdit', 'Admin\TemplateController@doEdit');
        });

        //列表类型模板
        Route::group(array('prefix' => 'list'), function () {
            Route::get('/info', 'Admin\ListController@info');
            Route::get('/edit', 'Admin\ListController@edit');
            Route::post('/doEdit', 'Admin\ListController@doEdit');
            Route::get('/view', 'Admin\ListController@view');
            Route::get('/viewEdit', 'Admin\ListController@viewEdit');
            Route::post('/doViewEdit', 'Admin\ListController@doViewEdit');
        });


        Route::get('/update', 'Admin\IndexController@update');
        //纯展示view
        Route::group(array('prefix' => 'view'), function () {

            //首页展示页面
            Route::get('/welcome', function () {
                return view('admin.index.welcome');
            });

            //配置页面
            Route::get('/config', 'Admin\IndexController@config');

            //基本配置
            Route::get('/basic', 'Admin\IndexController@basic');

            //图库
            Route::get('/img', 'Admin\ImgController@index');

            //修改密码
            Route::get('/edit_password', 'Admin\IndexController@edit_password');

            //公告
            Route::get('/announcement', 'Admin\IndexController@announcement');

            //编辑公告
            Route::get('/edit_announcement', 'Admin\IndexController@edit_announcement');

            //新闻
            Route::get('/news', 'Admin\IndexController@news');

            //添加新闻
            Route::get('/add_news', 'Admin\IndexController@add_news');

            //修改新闻
            Route::get('/edit_news', 'Admin\IndexController@edit_news');

            //banner管理
            Route::get('/banner', 'Admin\IndexController@banner');

            //添加banner
            Route::get('/add_banner', 'Admin\IndexController@add_banner');

            //修改banner
            Route::get('/edit_banner', 'Admin\IndexController@edit_banner');

            //删除banner
            Route::get('/del_banner', 'Admin\IndexController@del_banner');

            //查找指定banner
            Route::get('/select_banner', 'Admin\IndexController@select_banner');


        });


        //进行操作
        Route::group(array('prefix' => 'action'), function () {

            //修改状态
            Route::get('/change_status', 'Admin\EditController@change_status');

            //删除
            Route::get('/delete', 'Admin\EditController@delete');

            //配置信息修改
            Route::post('/config', 'Admin\EditController@config');

            //基本信息修改
            Route::post('/basic', 'Admin\EditController@basic');

            //导航栏
            Route::post('/edit_nav', 'Admin\EditController@nav');

            //发展历程修改
            Route::post('/develop_path', 'Admin\EditController@develop_path');


            //修改招聘/添加招聘
            Route::post('/edit_recruitment', 'Admin\EditController@edit_recruitment');

            //招聘头部
            Route::post('/recruitment_top', 'Admin\EditController@recruitment_top');


            //删除招聘
            Route::get('/del_recruitment', 'Admin\EditController@del_recruitment');

            //联系我们修改
            Route::post('/contact', 'Admin\EditController@contact');

            //模板尾部修改
            Route::post('/tail', 'Admin\EditController@tail');

            //公告修改
            Route::post('/edit_announcement', 'Admin\EditController@edit_announcement');

            //删除公告
            Route::get('/del_announcement', 'Admin\EditController@del_announcement');

            //新闻修改
            Route::post('/edit_news', 'Admin\EditController@edit_news');

            //添加新闻
            Route::post('/add_news', 'Admin\EditController@add_news');

            //删除新闻
            Route::get('/del_news', 'Admin\EditController@del_news');

            //修改/添加模板
            Route::post('/edit_module', 'Admin\EditController@edit_module');

            //删除模板
            Route::get('/del_module', 'Admin\EditController@del_module');

            //添加banner
            Route::post('/add_banner', 'Admin\EditController@add_banner');

            //修改banner
            Route::post('/edit_banner', 'Admin\EditController@edit_banner');

            //添加block
            Route::post('/add_block', 'Admin\EditController@add_block');

            //删除模块
            Route::get('/del_block', 'Admin\EditController@del_block');

            //删除公司简介
            Route::get('/del_company_profile', 'Admin\EditController@del_company_profile');

            //修改公司简介
            Route::post('/edit_company_profile', 'Admin\EditController@edit_company_profile');

            //添加公司简介
            Route::post('/add_company_profile', 'Admin\EditController@add_company_profile');

            //公司简介的图片管理
            Route::post('/company_profile_insertimg', 'Admin\EditController@company_profile_insertimg');

            //
            Route::get('/company_profile_delimg', 'Admin\EditController@company_profile_delimg');

            //视图修改
            Route::post('/view_update', 'Admin\EditController@view_update');

            //模块的源码修改
            Route::post('/edit_block', 'Admin\EditController@edit_block');

            //删除发展历程
            Route::get('/del_develop_path', 'Admin\EditController@del_develop_path');

            //添加发展历程
            Route::post('/add_develop_path', 'Admin\EditController@add_develop_path');

            //修改发展历程
            Route::post('/edit_develop_path', 'Admin\EditController@edit_develop_path');

            //修改密码
            Route::post('/edit_password', 'Admin\EditController@edit_password');

        });

        Route::group(array('prefix' => 'img'), function () {
            //图库添加图片
            Route::post('/addImg', 'Admin\ImgController@add');
            //删除图片
            Route::get('/del', 'Admin\ImgController@del');
            //选取列表
            Route::get('/imgList', 'Admin\ImgController@imgList');
        });
    });
});

Route::get('/test','Index\TestController@test');
