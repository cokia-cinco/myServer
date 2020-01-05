<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class webToken
{
    protected $id;
    /**
     * Handle an incoming request.
     * @param    $request
     * @param    $next
     * @return   mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->get('token');
        if ($token==''){
            return response()->json(['status'=>false,'data'=>'未设置token']);
        }
        $this->id = $request->get('id');
        $user = new User;
        $data = $user::where('api_token','=',$token)->where('id','=',$this->id)->get();
        if(count($data)===1){
            return $next($request);
        }
        return response()->json(['status'=>false,'data'=>'token错误']);
    }
}
