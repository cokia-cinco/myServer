<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tools\UpImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class EditController extends Controller
{
    private $upImg;
    private $upPath;
    /**
     * @var IndexController
     */
    private $indexController;
    /**
     * @var \Illuminate\Config\Repository
     */
    private $bannerPath;

    public function __construct(UpImg $upImg,IndexController $indexController)
    {
        $this->upImg = $upImg;
        $this->indexController = $indexController;
        $this->upPath = config('a_set.upImgPath');
        $this->bannerPath = config('a_set.bannerPath');
    }
    function redirect($msg, $url = '', $time = 2)
    {
        return view('redirect')->with('msg',$msg)->with('url',$url)->with('time',$time);
    }



    public function change_status(Request $request){
        $id = $request->get('id');
        $table = $request->get('table');
        $status = $request->get('status')==0?1:0;
        $url = $request->get('url');
        $bool = DB::table($table)->where('id','=',$id)->update(['status'=>$status]);
        return $bool?redirect($url):$this->redirect('修改失败',$url);
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $table = $request->get('table');
        $type = $request->get('type')==''?'':'&type='.$request->get('type');
        $url = $request->get('url').$type;
        $bool = DB::table($table)->delete($id);
        return $this->redirect($bool?'删除成功':'删除失败',$url);
    }
    //配置信息修改
    public function config(Request $request){
        $file = $request->file('logo');
        $old_config = DB::table('config')->where('buss_id','=',1)->get();

        if (!is_null($file)){
            //如果不为空先删除
            if ($old_config[0]->logo!=''){
                @unlink($old_config[0]->logo);
            }
            //上传图片
            $fileName = $this->upImg->imgUp($file,$this->upPath);
            if ($fileName!=false){
                $config['logo'] = $fileName;
            }
        }
        $config['website_name'] = $request->get('website_name');
        $config['url'] = $request->get('url');
        $config['info'] = $request->get('info');

        $line = DB::table('config')->where('id','=',1)->update($config);
        if ($line){
            return $this->indexController->config();
        }
        return $this->redirect('添加失败','/admin/view/develop_path');
    }


    public function basic(Request $request){
        $basic['buss_name'] = $request->get('buss_name');
        $basic['buss_address'] = $request->get('buss_address');
        $basic['service_time_week'] = $request->get('service_time_week');
        $basic['service_time_day'] = $request->get('service_time_day');
        $basic['service_tel'] = $request->get('service_tel');
        $line = DB::table('buss')->where('id','=',1)->update($basic);
        if ($line){
            return $this->indexController->basic();
        }
        return $this->redirect('修改失败','/admin/view/basic');
    }

    public function contact(Request $request){
        $contact['address'] = $request->get('address');
        $contact['tel'] = $request->get('tel');
        $contact['e_mail'] = $request->get('e_mail');

        $line = DB::table('contact')->where('id','=',1)->update($contact);
        if ($line){
            return $this->indexController->contact();
        }
    }


    public function edit_announcement(Request $request){
        $announcement['title'] = $request->get('title');
        $announcement['context'] = $request->get('context');
        $announcement['author'] = $request->get('author');
        $announcement['time'] = $request->get('time');
        $announcement['sort'] = $request->get('sort');
        $id = $request->get('id');

        if ($id){
            $line = DB::table('announcement')->where('id','=',$id)->update($announcement);
        }else{
            $line = DB::table('announcement')->insert($announcement);
        }
        if ($line){
            return $this->indexController->announcement();
        }
    }


    public function del_announcement(Request $request){
        $id = $request->get('id');
        $bool = DB::table('announcement')->delete($id);
        if ($bool){
            return $this->indexController->announcement();
        }
        return $this->redirect('删除失败','/admin/view/announcement');
    }

    //添加新闻
    public function add_news(Request $request){
        $file = $request->file('img');
        if (!is_null($file)){
            $path = $this->upImg->imgUp($file,$this->bannerPath);
        }else{
            $file = $request->get('img');
            if (is_null($file)){
                $path = '';
            }else{
                if (!is_dir($this->bannerPath)){
                    mkdir($this->bannerPath);
                }
                $fileName = $this->bannerPath.time().rand(1000,9999).'.png';
                $bool = copy($file,$fileName);
                if ($bool){
                    $path = $fileName;
                }else{
                    return $this->indexController->banner();
                }
            }
        }
        $news['img'] = $path;
        $news['title'] = $request->get('title');
        $news['context'] = $request->get('context');
        $news['author'] = $request->get('author');
        $news['time'] = $request->get('time');

        $line = DB::table('news')->insert($news);
        if ($line){
            return $this->indexController->news();
        }
        return $this->redirect('删除失败','/admin/view/news');
    }
    //修改新闻
    public function edit_news(Request $request){
        $id = $request->get('id');
        $old_news = DB::table('news')->find($id);
        $file = $request->file('img');
        if (!is_null($file)) {
            @unlink($old_news->img);
            $path = $this->upImg->imgUp($file,$this->upPath);
        }else{
            $file = $request->get('img');
            if (is_null($file)){
                $path = $old_news->img;
            }else{
                if (!is_dir($this->bannerPath)){
                    mkdir($this->bannerPath);
                }
                $fileName = $this->bannerPath.time().rand(1000,9999).'.png';
                $bool = copy($file,$fileName);
                if ($bool){
                    $path = $fileName;
                }else{
                    return $this->redirect('修改失败','/admin/view/news');
                }
            }
        }
        $news['img'] = $path;
        $news['title'] = $request->get('title');
        $news['context'] = $request->get('context');
        $news['author'] = $request->get('author');
        $news['time'] = $request->get('time');

        $line = DB::table('news')->where('id','=',$id)->update($news);
        if ($line){
            return $this->indexController->news();
        }else{
            return $this->redirect('修改失败','/admin/view/news');
        }
    }

    public function del_news(Request $request){
        $id = $request->get('id');
        $news = DB::table('news')->find($id);
        @unlink($news->img);
        $bool = DB::table('news')->delete($id);
        if ($bool){
            return $this->indexController->news();
        }
        return $this->redirect('删除失败','/admin/view/news');
    }



    public function edit_banner(Request $request){
        $id = $request->get('id');
        if ($id!=''){
            $old_banner = DB::table('banner')->find($id);
        }
        $file = $request->file('img');
        if (!is_null($file)) {
            if ($id!=''){
                $bool = @unlink($old_banner->img);
            }
            $path = $this->upImg->imgUp($file, $this->bannerPath);
        }else{
            $file = $request->get('imgList');
            if (is_null($file)){
                if ($id!=''){
                    $path = $old_banner->img;
                }else{
                    $path ='';
                }
            }else{
                if (!is_dir($this->upPath)){
                    mkdir($this->upPath);
                }
                $fileName = $this->upPath.time().rand(1000,9999).'.png';
                $bool = copy($file,$fileName);
                if ($bool){
                    $path = $fileName;
                    if ($id!=''){
                        @unlink($old_banner->img);
                    }
                }else{
                    return $this->indexController->banner();
                }
            }
        }
        $banner['img'] = $path;
        $banner['url'] = $request->get('url');
        $banner['url_status'] = $request->get('url_status');
        $banner['module_id'] = $request->get('module_id');
        $banner['sort'] = $request->get('sort');
        if ($id != ''){
            $bool = DB::table('banner')->where('id','=',$id)->update($banner);
        }else{
            $bool = DB::table('banner')->insert($banner);
        }
        if ($bool){
            return $this->indexController->banner();
        }
        return $this->redirect('您未修改','/admin/view/banner');
    }

    public function edit_password(Request $request){
        $password = $request->get('password');
        $bool = DB::table('website_admin')->update(['password'=>md5($password)]);
        if ($bool){
            return '<h1 style="text-align: center">修改成功</h1><script>window.opener = null;
                       window.open(\'\', \'_self\');window.close()</script>';
        }
    }

}
