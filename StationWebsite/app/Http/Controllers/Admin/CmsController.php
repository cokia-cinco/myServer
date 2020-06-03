<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Tools\UpImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsController extends Controller
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
        $data = DB::table($table)->get();
        return view('admin.cms.index')->with('data',$data)->with('table',$table);
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $table = $request->get('table');
        if (is_null($id)){
            $data = '';
        }else{
            $data  = DB::table($table)->find($id);
        }
        return view('admin.cms.edit')->with('data',$data)->with('table',$table);
    }

    public function doEdit(Request $request){
        $id = $request->get('id');
        $table = $request->get('table');
        $data['title'] = $request->get('title');
        $data['author'] = $request->get('author');
        $data['context'] = $request->get('context');
        if ($table == 'news'){
            $file = $request->file('imgList');
            if ($id != ''){
                $old_img = DB::table($table)->find($id)->img;
            }else{
                $old_img = '';
            }
            if (!is_null($file)){
                $data['img'] = $this->upImg->imgUp($file,$this->upPath);
                if ($id != ''){
                    if ($old_img!=''||$old_img!=null){
                        @unlink($old_img);
                    }
                }
            }else{
                $file = $request->get('imgList');
                if (is_null($file)){
                    $data['img'] = null;
                }else{
                    if (!is_dir($this->upPath)){
                        mkdir($this->bannerPath);
                    }
                    $fileName = $this->bannerPath.time().rand(1000,9999).'.png';

                    $bool = copy($file,$fileName);
                    if ($bool){
                        if ($id != ''){
                            if ($old_img!=''||$old_img!=null){
                                unset($old_img);
                            }
                        }
                        $data['img'] = $fileName;
                    }else{
                        return $this->redirect($id==''?'添加图片失败':'修改图片失败','/admin/cms/info?table='.$table);
                    }
                }
            }
        }
        if ($id == ''){
            $bool = DB::table($table)->insert($data);
        }else{
            $bool = DB::table($table)->where('id','=',$id)->update($data);
        }
        return $bool
            ?$this->redirect($id==''?'添加成功':'修改成功','/admin/cms/info?table='.$table)
            :$this->redirect($id==''?'添加失败':'修改失败','/admin/cms/info?table='.$table);
    }
}
