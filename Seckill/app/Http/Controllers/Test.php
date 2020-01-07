<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Goods;
use App\Models\Consignee;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function test(){
        echo 'hello';
    }

    public function  consignee(Request $request){
        try {
            $id = $request->get('id');
            $uid = $request->get('uid');
            if (is_null($id)||is_null($uid)){
                return Response()->json(['status'=>false,'data'=>'传值错误']);
            }else{
                $goods = Goods::find($id);
                //数量超过10个正常的数据库处理
                if($goods['number']>10){
                    //开启事务
                    lable:
                    DB::beginTransaction();
                    $data = Consignee::insert(['user_id'=>$uid,'goods_id'=>$id,'created_at'=>time()]);
                    if($data){
                        $data = Goods::where('id','=',$id)->decrement('number');
                        if ($data==1){
                            //当全部成功才提交
                            DB::commit();
                            return Response()->json(['status'=>true,'data'=>'抢购成功']);
                        }
                    }else{
                        DB::rollBack();
                        return Response()->json(['status'=>false,'data'=>'抢购失败']);
                    }
                }else{
                    //开启 redis事务
                    $num =  Redis::get('num');
                    var_dump($num);
                    if (null === Redis::get('num')){
                         Redis::set('num',9);
                         goto lable;
                    } elseif( 0 >= Redis::get('num')){
                        return Response()->json(['status'=>false,'data'=>'抢购失败']);
                    } else {
                        Redis::decr('num');
                        //是否为最后一个
                        if (0 == Redis::get('num')){
                            Redis::watch('num');
                            Redis::mulit();
                            Redis::decr('num');
                            $res = Redis::exec();
                            if ($res == 'ok'){
                                goto lable;
                            }
                            return Response()->json(['status'=>false,'data'=>'抢完了']);
                        }else{
                            goto lable;
                        }
                    }
                }
            }
        }catch (Request $request){
            DB::rollBack();
            return Response()->json(['status'=>false,'data'=>'抢购失败']);
        }
    }
}
