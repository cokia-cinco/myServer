<?php

        //csrf_token获取验证码接口
        Route::get('/api/get_csrf_token','FriendController@registered');
        //登录接口
        Route::post('/api/sign_in','FriendController@signIn');
        //注册接口
        Route::post('/api/sign_up','FriendController@signUp');
        //需要进行id+token验证的api
        Route::group(array('prefix' => 'api/validation'),function(){
            //验证的中间件
            Route::group(['middleware' => ['auth.api']], function (){
                //好友列表接口
                Route::get('/show_friend','FriendController@friend');
                //添加朋友接口
                Route::get('/add_friend','FriendController@addFriend');
                //发起聊天接口
                Route::get('/chat','FriendController@chat');
                //消息请求接口
                Route::get('/received','FriendController@received');
                //发送消息api
                Route::post('/send','FriendController@send');
                //获取消息api
                Route::get('/message','FriendController@message');
                //删除聊天关系
                Route::get('/delete_chat','FriendController@delete_chat');
                //添加好友请求
                Route::get('/processing_request','FriendController@processing_request');

            });
        });

