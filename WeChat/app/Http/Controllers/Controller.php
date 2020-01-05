<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param string $status 状态
     * @param string $data 数据
     * @param string $msg 提示信息
     * @return          json数据
     */
    public function ResponseJson($status='',$data='',$msg=''){
       return Response()->json(['status'=>$status,'data'=>$data,'code'=>$msg]);
    }
}
