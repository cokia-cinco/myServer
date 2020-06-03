<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tools\UpImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
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

    public function info(Request $request){
        $table = $request->get('table');
        $type = $request->get('type');
        $data = DB::table($table)->where('type','=',$type)->get();
        $template = DB::table('template')->get();
        return view('admin.list.index')->with('data',$data)->with('table',$table)->with('template',$template)->with('type',$type);
    }

    public function edit(Request $request){
        $type = $request->get('type')=='pc'?'pc':'mobile';
        $template = DB::table('template')->where('type','=',$type)->get();
        $id = $request->get('id');
        $table = $request->get('table');
        if (is_null($id)){
            $data ='';
        }else{
            $data = DB::table('type_of_list')->find($id);
        }
        return view('admin.list.edit')->with('template',$template)->with('data',$data)->with('table',$table)->with('type',$type);
    }
    public function doEdit(Request $request){
        $id = $request->get('id');
        $table = $request->get('table');
        $list['name'] = $request->get('name');
        $list['template_id'] = $request->get('template');
        $list['context'] = $request->get('context');
        $list['type'] = $request->get('type');
        if ($list['type'] != 'pc') {
            $file = $request->file('img');
            if ($id != '') {
                $old_img = DB::table($table)->find($id)->img;
            } else {
                $old_img = '';
            }
            if (!is_null($file)) {
                $list['img'] = $this->upImg->imgUp($file, $this->upPath);
                if ($id != '') {
                    if ($old_img != '' || $old_img != null) {
                        @unlink($old_img);
                    }
                }
            } else {
                $file = $request->get('imgList');
                if (is_null($file)) {
                    $data['img'] = null;
                } else {
                    if (!is_dir($this->upPath)) {
                        mkdir($this->bannerPath);
                    }
                    $fileName = $this->bannerPath . time() . rand(1000, 9999) . '.png';

                    $bool = copy($file, $fileName);
                    if ($bool) {
                        if ($id != '') {
                            if ($old_img != '' || $old_img != null) {
                                unset($old_img);
                            }
                        }
                        $list['img'] = $fileName;
                    } else {
                        return $this->redirect($id == '' ? '添加图片失败' : '修改图片失败', '/admin/cms/info?table=' . $table.'&type='.$list['type']);
                    }
                }
            }
        }
        if ($id == ''){
            $bool = DB::table($table)->insert($list);
        }else{
            $bool = DB::table($table)->where('id','=',$id)->update($list);
        }
        return $bool
            ?$this->redirect($id==''?'添加成功':'修改成功','/admin/list/info?table='.$table.'&type='.$list['type'])
            :$this->redirect($id==''?'添加失败':'修改失败','/admin/list/info?table='.$table.'&type='.$list['type']);
    }
    public function view(Request $request){
        $id = $request->get('id');
        $type = $request->get('type');
        $list = DB::table('list')->where('template_id','=',$id)->get();
        return view('admin.list.view')->with('list',$list)->with('table','list')->with('tid',$id)->with('type',$type);
    }
    public function viewEdit(Request $request){
        $id = $request->get('id');
        $tid = $request->get('tid');
        $type = $request->get('type');
        $table = $request->get('table');
        $data = DB::table($table)->find($id);
        return view('admin.list.viewEdit')->with('data',$data)->with('table',$table)->with('tid',$tid)->with('type',$type);
    }
    public function doViewEdit(Request $request){
        $id = $request->get('id');
        $table = $request->get('table');
        $list['context'] = $request->get('context');
        $list['name'] = $request->get('name');
        $list['sort'] = $request->get('sort');
        $list['template_id'] = $request->get('tid');
        if ($id == ''){
            $bool = DB::table($table)->insert($list);
        }else{
            $bool = DB::table($table)->where('id','=',$id)->update($list);
        }
        return $bool
            ?$this->redirect($id==''?'添加成功':'修改成功','/admin/list/view?id='.$list['template_id'])
            :$this->redirect($id==''?'添加失败':'修改失败','/admin/list/view?id='.$list['template_id']);
    }
}
