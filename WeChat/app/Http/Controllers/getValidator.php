<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class getValidator extends Controller
{
    /**
     * @var 验证是否有误
     */
    protected  $validator;
    protected  function vd(){
        if ($this->validator->fails()){
            return false;
        }
        return true;
    }

    public function showFriend(Request $request){
        $this->validator = Validator::make($request->all(),[
            'id'=>'required|max:11',
        ]);
        return $this->vd();
    }

    public function signUp(Request $request){
        $this->validator = Validator::make($request->all(),[
            'id'=>'required|max:11|min:6',
            'password'=>'required|max:16|min:6'
        ]);
       return $this->vd();
    }


}
