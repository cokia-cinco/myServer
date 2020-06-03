<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tools\UpImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImgController extends Controller
{
    /**
     * @var UpImg
     */
    private $upImg;
    /**
     * @var \Illuminate\Config\Repository
     */
    private $upPath;

    public function __construct(UpImg $upImg)
    {
        $this->upImg = $upImg;
        $this->upPath = config('a_set.upImgPath');
    }

    //
    public function index(){
       $imgList = DB::select('select * from img');
       return view('admin.image.index')->with('imgList',$imgList);
    }

    public function add(Request $request){
        $img = $request->file('img');
        if (!is_null($img)){
            //上传图片
            $fileName = $this->upImg->imgUp($img,$this->upPath);
            if ($fileName!=false){
                $bool = DB::table('img')->insert(['file_name'=>$fileName]);
                if ($bool){
                    $imgList = DB::select('select * from img');
                    return view('admin.image.index')->with('imgList',$imgList);
                }
            }
        }
    }

    public function del(Request $request){
        $id = $request->get('id');
        $img = DB::table('img')->find($id);
        $bool = unlink($img->file_name);
        if ($bool){
            $del = DB::table('img')->delete($id);
            $imgList = DB::select('select * from img');
            return view('admin.image.index')->with('imgList',$imgList);
        }
    }

    public function imgList(){
        $imgList = DB::select('select * from img');
        return view('admin.image.list')->with('imgList',$imgList);
    }
}
