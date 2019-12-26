<?php
namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Location;
use App\Models\Users;
class UsersController{
    public  function show(){
        $data=Users::all()->toArray();
        return view('List')->with('data',$data);
    }
    public  function del(){
        $data =  Users::where('id',$_GET['id'])->delete();
        if ($data!=0){
            return redirect('/List');
        }
    }
    public  function detail(){
        $data = Users::find($_GET['id']);
        return view('Detail')->with('data',$data);
    }
    public  function edit(){
        $data = users::find($_GET['id']);
        return view('Edit')->with('data',$data);
    }
    public  function doEdit(){
        $_GET['sex']=$_GET['sex']=='男'?'1':2;
        $data =  Users::where('id', $_GET['id'])->update($_GET);
        if ($data!=0){
            return redirect('/List');
        }else{
            return redirect("/edit?id=".$_GET['id']);
        }
    }
    public function add(){
        return view('Add');
    }
    public function doAdd(){
        if ($_GET['name']==''||$_GET['sex']==''||$_GET['tel']==''||$_GET['email']==''){
            return redirect('/add');
        }
        $_GET['sex']=$_GET['sex']=='男'?'1':2;
        $ret = Users::insertGetId($_GET);
        if ($ret) {
            return redirect('/List');
        }
    }
}
