<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tools\Render;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    //配置信息
    public function config(){
        $config = DB::table('config')->where('buss_id','=',1)->get();
        return view('admin.config.index')->with('config',$config[0]);
    }
    public function login(Request $request){
        $name = $request->get('username');
        $pwd = md5($request->get('password'));
        $admin = DB::table('website_admin')->find(1);
        if ($admin->name!==$name){
            return $this->redirect('用户名错误','/login');
        }else if ($admin->password!==$pwd){
            return $this->redirect('密码错误','/login');
        }else{
            $token = md5(time().rand(1000,9999));
            session(['token'=>$token]);
            $bool = DB::table('website_admin')->where('id','=','1')->update(['token'=>$token]);
            if ($bool){
                return $this->redirect('登陆成功,正在跳转','/admin');
            }else{
                return $this->redirect('登陆失败,请重新登陆','/login');
            }
        }
    }
    public function edit_password(){
        return view('admin.password');
    }
    function redirect($msg, $url = '', $time = 2)
    {
        return view('redirect')->with('msg',$msg)->with('url',$url)->with('time',$time);
    }
    //基本信息
    public function basic(){
        $basic = DB::table('buss')->find(1);
        return view('admin.basic.index')->with('basic',$basic);
    }

    //公告
    public function announcement(){
        $announcement = DB::table('announcement')->get();
        return view('admin.announcement.index')->with('announcement',$announcement);
    }

    //公告修改
    public function edit_announcement(Request $request){
        $id = $request->get('id');
        $announcement = '';
        if (!is_null($id)){
            $announcement = DB::table('announcement')->find($id);
        }
        $sort = DB::table('announcement')->orderBy('sort','desc')->first()->sort;
        return view('admin.announcement.edit')->with('announcement',$announcement)->with('sort',$sort+1);
    }

    //新闻
    public function news(){
        $news = DB::table('news')->get();
        return view('admin.news.index')->with('news',$news);
    }
    //添加新闻
    public function add_news(){
        $img_list = DB::table('img')->get();
        try{
            $sort = DB::table('news')->orderBy('sort','desc')->first()->sort;
        }catch (\Exception $e){
            if($e->getMessage()=="Trying to get property 'sort' of non-object"){
                $sort = 0;
            }else{
                return $e;
            }
        }
        return view('admin.news.add')->with('img_list',$img_list)->with('sort',$sort+1);
    }
    //修改新闻
    public function edit_news(Request $request){
        $id = $request->get('id');
        $news = DB::table('news')->find($id);
        $img_list = DB::table('img')->get();
        return view('admin.news.edit')->with('news',$news)->with('img_list',$img_list);
    }

    //展示banner
    public function banner(){
        $banner = DB::table('banner')->get();
        $template = DB::table('template')->get();
        foreach ($banner as $key => $item){
            foreach ($template as $k => $v){
                if ($item->module_id == $v->id){
                    $banner[$key]->module = $v->nickname;
                }
            }
        }
        return view('admin.banner.index')->with('banner',$banner)->with('module',$template);
    }

    public function select_banner(Request $request){
        $id = $request->get('id');
        $banner = DB::table('banner')->where('module_id','=',$id)->get();

        $template = DB::table('template')->get();
        foreach ($banner as $key => $item){
            foreach ($template as $k => $v){
                if ($item->module_id == $v->id){
                    $banner[$key]->module = $v->nickname;
                }
            }
        }
        return view('admin.banner.index')->with('banner',$banner)->with('module',$template);
    }

    public function add_banner(){
        $module = DB::table('module')->get();
        $img_list = DB::table('img')->get();
        return view('admin.banner.add')->with('module',$module)->with('img_list',$img_list);
    }

    public function edit_banner(Request $request){
        $id = $request->get('id');
        if ($id==''){
            $banner='';
        }else{
            $banner = DB::table('banner')->find($id);
        }
        $template = DB::table('template')->get();
        $img_list = DB::table('img')->get();
        return view('admin.banner.edit')->with('banner',$banner)->with('module',$template)->with('img_list',$img_list);
    }

    public function del_banner(Request $request){
        $id = $request->get('id');
        $path = $request->get('path');
        @unlink($path);
        $bool = DB::table('banner')->delete($id);
        if ($bool){
            return $this->banner();
        }
    }

    public function update(){
        $bool = DB::table('module')->increment('is_update');
        if ($bool){
            return redirect('/admin');
        }
    }
}
