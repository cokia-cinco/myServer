<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    //

    function redirect($msg, $url = '', $time = 2)
    {
        return view('redirect')->with('msg',$msg)->with('url',$url)->with('time',$time);
    }

    public function info(Request $request){
        $type = $request->get('type');
        $data = DB::table('template')->where('type','=',$type)->get();
        return view('admin.template.index')->with('data',$data)->with('type',$type);
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $type = $request->get('type');
        if (is_null($id)){
            $data = '';
        }else{
            $data = DB::table('template')->find($id);
        }
        return view('admin.template.edit')->with('data',$data)->with('type',$type);
    }

    public function doEdit(Request $request){
        $id = $request->get('id');
        $data['name'] = $request->get('name');
        $data['nickname'] = $request->get('nickname');
        $data['context'] = $request->get('context');
        $data['type'] = $request->get('type');
        if ($id!=''){
            $bool = DB::table('template')->where('id','=',$id)->update($data);
        }else{
            $bool = DB::table('template')->insert($data);
        }
        if ($bool){
            $contextLocal = $request->get('contextLocal');
            if (!is_dir('../resources/views/index/template/')){
                mkdir('../resources/views/index/template/');
            }
            $contextLocal = str_replace('&lt;','<',$contextLocal);
            $contextLocal = str_replace('&gt;','>',$contextLocal);
            $contextLocal = str_replace('&amp;','&',$contextLocal);
            file_put_contents('../resources/views/index/'.$data['type'].'/'.$data['name'].'.blade.php',$contextLocal);
        }
        return $bool
            ?$this->redirect($id==''?'添加成功':'修改成功','/admin/template/info?type='.$data['type'])
            :$this->redirect($id==''?'添加失败':'修改失败','/admin/template/info?type='.$data['type']);
    }
}
