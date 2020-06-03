<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    //

    function redirect($msg, $url = '', $time = 2)
    {
        return view('redirect')->with('msg',$msg)->with('url',$url)->with('time',$time);
    }

    public function basicInfo(){
        $basicInfo = DB::table('basic_info')->get();
        return view('admin.basicInfo.index')->with('basicInfo',$basicInfo);
    }
    public function addConfig(Request $request){
        $config['name'] = $request->get('name');
        $config['value'] = $request->get('value');
        $bool = DB::table('basic_info')->insert($config);
        if ($bool){
            return $this->basicInfo();
        }
        return $this->redirect('添加失败','/admin/website/websiteBasicInfo');
    }

    public function editConfig(Request $request){
        $id = $request->get('id');
        $config['name'] = $request->get('name');
        $config['value'] = $request->get('value');
        $bool = DB::table('basic_info')->where('id','=',$id)->update($config);
        if ($bool){
            return $this->basicInfo();
        }
        return $this->redirect('修改失败','/admin/website/websiteBasicInfo');
    }
}
