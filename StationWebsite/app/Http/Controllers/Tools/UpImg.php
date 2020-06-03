<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;

class UpImg extends Controller
{
    public function imgUp($file,$filePath){
        if (is_null($file)){
            return false;
        }
        //判断目录是否存在
        if (!is_dir($filePath)){
            mkdir($filePath);
        }
        $fileName = time().rand(1000,9999).'.png';
        //上传文件
        if(move_uploaded_file($file,$filePath.$fileName)){
            return $filePath.$fileName;
        }else{
            return false;
        }
    }
}
