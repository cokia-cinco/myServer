<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class TestController extends Controller
{

    public function test(Request $request){
       $name = $request->input('name');
       $id = $request->input('id');
       $action = $request->input('action');
       //这里如果有服务处应添加在服务层处理
        switch ($action){
            case 'add':
                $bool = DB::table('test')->insert(['name'=>$name,'status'=>'doing']);
                break;
            case 'delete':
                $bool = DB::table('test')->where('id',$id)->update(['is_delete'=>1]);
                break;
            case 'carrOut':
                $bool = DB::table('test')->where('id',$id)->update(['status'=>'carry_out']);
                break;
            default:
                $bool = 1;
                break;
        }
        if (!$bool){
            return $this->success('','','发生错误');
        }


        //这里对应该放模型
        $doing = DB::table('test')
            ->where('status','=','doing')
            ->where('is_delete','=',0)
            ->get(['id','name']);

        $carryOut = DB::table('test')
            ->where('status','=','carry_out')
            ->where('is_delete','=',0)
            ->get(['id','name']);
        $data = ['doing'=>$doing,'carrOut'=>$carryOut];

        return $this->success(200,$data,'');
    }

    function success($code,$data,$prompt=''){
        return json_encode(['code'=>$code,'data'=>$data,'prompt'=>$prompt]);
    }
    function error($code = 999,$data=[],$prompt='error'){
        return json_encode(['code'=>$code,'data'=>$data,'prompt'=>$prompt]);
    }
}
