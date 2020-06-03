<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tools\Render;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * @var Render
     */
    private $render;

    public function __construct(Render $render)
    {
        $this->render =$render;
    }
    public function demo(Request $request){
        $name = $request->get('name');
        if (is_null($name)){
            return redirect('/?name=index');
        }
        $id = $request->get('id');
        $sort = $request->get('sort');
        $tid = $request->get('tid');
        $category = $request->get('category');
        $show = $request->get('show');
        $type = $request->get('type')=='m'?'mobile':'pc';
        $basic_info = DB::table('basic_info')->get();
        $config = DB::table('config')->find(1);
        $buss = DB::table('buss')->find(1);
        $haveImgNews[0] = DB::table('news')->where('img','<>','')->where('img','<>',null)->orderBy('time','desc')->first();
        if (is_null($haveImgNews)){
            $haveImgNews = DB::table('news')->orderBy('time','desc')->where('img','=','')->limit('5,10')->get();
        }
        $news = DB::table('news')->orderBy('time','desc')->where('img','=','')->orWhere('img','=',null)->orderBy('time','desc')->limit(5)->get();
        $announcement = DB::table('announcement')->orderBy('time','desc')->limit(5)->get();
        $info = [];
        foreach ($basic_info as $item){
            $info[$item->name]=$item->value;
        }
        if (is_null($tid)){
            $template = DB::table('template')->where('name','=',$name)->where('type',$type)->first();
        }else{
            $template = DB::table('template')->find($tid);
        }
        $banner = DB::table('banner')->where('module_id','=',$template->id)->orderBy('sort')->get();
        $all_news = DB::table('news')->orderBy('time','desc')->get();
        $all_announcement = DB::table('announcement')->orderBy('time','desc')->get();

        if (!is_null($template)&&is_null($tid)){
            $type_of_list = DB::table('type_of_list')->where('template_id','=',$template->id)->first();
            $all_type_of_list = DB::table('type_of_list')->where('template_id','=',$template->id)->get();
            if (is_null($type_of_list)){
                $list = [];
            }else{
                $list = DB::table('list')->where('template_id','=',$type_of_list->template_id)->get();
            }
            if ($request->get('type')=='m'){
                return view('index.mobile.'.$name)->with('info',$info)->with('config',$config)
                    ->with('buss',$buss)->with('news',$news)->with('announcement',$announcement)
                    ->with('haveImgNews',$haveImgNews)->with('list',$list)->with('banner',$banner)
                    ->with('all_news',$all_news)->with('id',$id)->with('type',$type)->with('all_announcement',$all_announcement)
                    ->with('type_of_list',$all_type_of_list)->with('show',$show)->with('category',$category);
            }else{
                return view('index.pc.'.$name)->with('info',$info)->with('config',$config)
                    ->with('buss',$buss)->with('news',$news)->with('announcement',$announcement)
                    ->with('haveImgNews',$haveImgNews)->with('list',$list)->with('banner',$banner)
                    ->with('all_news',$all_news)->with('id',$id)->with('type',$type)->with('all_announcement',$all_announcement)
                    ->with('show',$show)->with('category',$category);
            }
        }else if (!is_null($tid)){
            $type_of_list = DB::table('type_of_list')->where('template_id','=',$template->id)->get();
            $list = DB::table('list')->where('template_id','=',$tid)->orderBy('sort')->get();
            $list= $list==""?[]:$list;
            return view('index.mobile.'.$name)->with('info',$info)->with('config',$config)
                ->with('buss',$buss)->with('news',$news)->with('announcement',$announcement)
                ->with('haveImgNews',$haveImgNews)->with('list',$list)->with('banner',$banner)
                ->with('all_news',$all_news)->with('id',$id)->with('type',$type)->with('all_announcement',$all_announcement)
                ->with('type_of_list',$type_of_list)->with('list',$list)->with('sort',$sort)->with('show',$show)->with('category',$category);
        }
    }
}
