<?php

namespace App\Http\Controllers;

use App\Http\Controllers\getValidator;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Chat;
use App\Models\Message;
use App\Models\Friend;

class FriendController extends Controller
{
    protected $validator;

    public function __construct()
    {
        //验证类实例
        $this->validator = new getValidator;
    }

    public function addFriend(Request $request)
    {
        if (!(array_key_exists('friend_id', $_GET) && array_key_exists('id', $_GET))) {
            return Response()->json(['status' => false, 'data' => '传值错误']);
        }
        $friend = new Friend();
        $friend->user_id = $request->get('id');
        $friend->friend_id = $request->get('friend_id');
        $friend->type= 0 ;
        $res = $friend->save();
        dd($res);
    }

    /**
     * 展示好友列表
     * @pa2ram Request $request
     * @r1eturn json数据|array
     */
    public function friend(Request $request)
    {
        if (!$this->validator->showFriend($request)) {
            return $this->ResponseJson(false, '未设置有效id');
        }
            $data = Friend::find($request->get('id'));
            foreach ($data as $key => $value) {
                $friend = User::find($value['id'],['id','name','tel','sex','avatar']);
            }
            return $this->ResponseJson(true, $friend);
    }

    public function registered()
    {
        return $this->ResponseJson(true, Session::token());
    }

    /**
     * 注册判断
     * @param Request $request
     * @return json数据
     */
    public function signUp(Request $request)
    {
        if (!$this->validator->signUp($request)) {
            return $this->ResponseJson(false, '格式错误');
        }
        $user = new User;
        $user->id = $request->get('id');
        $user->tel = $request->get('id');
        $user->name = $request->get('id');
        $user->password = $request->get('password');
        $user->regtime = time();
        $bool = $user->save();
        if ($bool) {
            return $this->ResponseJson(true, '添加成功');
        }
        return $this->ResponseJson(false, '添加失败');
    }

    /**
     * 登录判断是否有该用户
     * @param Request $request
     * @return json数据
     */
    public function signIn(Request $request)
    {

        if (!$this->validator->signUp($request)) {
            return $this->ResponseJson(false, '格式错误');
        }
        $data = User::where('id2', '=', $request->get('id'))->where('password', '=', $request->get('password'))->get();
        if (count($data) == 1) {
            $api_token = md5(time());
            User::where('ID', '=', $request->get('id'))->update(['api_token' => $api_token]);
            $friend_id = Friend::where('user_id','=',$request->get('id'))->get();
            $friends=[];
            foreach ($friend_id as $value){
                $friend_info = User::find($value['friend_id'],['id','name','tel','sex','avatar']);
                if (!is_null($friend_info)){
                    $friends[]=$friend_info;
                }
            }
            return $this->ResponseJson(true, ['token' => $api_token,'data'=>$data,'friend'=>$friends]);
        }
        return $this->ResponseJson(false, '用户名或密码错误');
    }
    /**
     * [chat description]建立聊天关系
     * @param  Request $request [description]自己的id/对方id
     * @return [type]           [description]
     */
    public function chat(Request $request)
    {
        $id = $request->get('id');
        $friend_id = $request->get('friend_id');
        //查询是否为好友
        $data = Friend::where('user_id', '=', $request->get('friend_id'))->where('friend_id', '=', $request->get('id'))->get();
        if(count($data)==1) {
            //查询是否已建立聊天关系
            $res = Chat::where('user_id', '=', $request->get('id'))
                ->where('another_id', '=', $request->get('friend_id'))
                ->where('user_delete', '=', '0')
                ->get();
            if (count($res)== 1) {
                //查询聊天
                $msg = Message::where('id','=',$res['0']['id'])->get();
                return $this->ResponseJson(true,$msg,1);
            } else {
                Chat::insert(['$friend_list_id'=>$data['id'],
                    'user_id'=> $request->get('id'),
                    'another_id' => $request->get('friend_id'),
                    'is_online' => 0,
                    'user_delete' => 0,
                    ]);
                return $this->ResponseJson(true,'',1);
            }
        }else{
            return $this->ResponseJson(false,'对方不是你的好友');
        }
    }

    //获取未读消息(非详情)
    public function received(Request $request){
        $id = $request->get('id');
        $list = Chat::where('another_id','=',$id)->where('unread','>',0)->where('user_delete','=','0')->get();
        if(count($list)>0){
            foreach ($list as $key=>$value){
                //判断好友列表是否有该好友
                $response[] = ['friend_id'=>$value['user_id'],'unread'=>$value['unread']];
                $data = Friend::where('friend_id', '=',$value['user_id'])
                        ->where('user_id', '=', $request->get('id'))
                        ->get();
                if (count($data)==1){
                    //判断是否已经建立了聊天关系
                    $link = Chat::where('user_id','=',$id)
                            ->where('another_id','=',$value['user_id'])
                            ->where('user_delete','=','0')->get();
                    if(count($link)==0){
                        $res = Chat::insert([
                            'friend_list_id'=>$data[0]['id'],
                            'user_id'=>$data[0]['user_id'],
                            'another_id'=>$data[0]['friend_id'],
                            'is_online'=>0,
                            'unread'=>0,
                            'user_delete'=>0
                         ]);
                    }
                }
            }
            $friend = Friend::where('friend_id','=',$id)->where('type','=',0)->get();
            if (!is_null($friend)) {
                foreach ($friend as $key => $value) {
                    $friend_request[] = User::find($value['id'],['id','name','tel','sex','avatar']);
                }
                $response[] = ['friend_request'=>$friend_request];
            }
            return $this->ResponseJson(true,$response);
        }else{
            return $this->ResponseJson(true,$list);
        }
    }

    //发送信息需要chat_id,user_id,content,token,
    public function send(Request $request){
        $message = new Message();
        $chat_id=$request->get('chat_id');
        $from_user_id=$request->get('id');
        $content=$request->get('content');
        if ($chat_id==null||$from_user_id==null){
            return $this->ResponseJson(false,'id错误');
        }elseif ($content==null){
            return $this->ResponseJson(false,'不能发送空消息');
        }
        $msg = $message->where('chat_id','=',$chat_id)->orderBy('time','desc')->first();
        if ($msg!=null){
            $bool = Message::where('id','=',$msg['id'])->update(['is_latest'=>0]);
        }
        $message->chat_id = $chat_id;
        $message->from_user_id = $from_user_id;
        $message->content = $content;
        $message->time=time();
        $message->type='message';
        $message->is_latest=1;
        $data  = $message->save();
        if($data){
            $bool = Chat::where('id','=',$chat_id)->increment('unread');
            dd($bool);
        }
    }

    //查询收到的消息详情需要id,token,chat_id,friend_id
    public function message(Request $request){
        $id = $request->get('id');
        $chat_id = $request->get('chat_id');
        $friend_id = $request->get('friend_id');
        //查询对方和自己的聊天列表id
        $chat_friend = Chat::where('user_id','=',$friend_id)
            ->where('another_id','=',$id)
            ->where('another_delete','=',0)
            ->get();
        foreach ($chat_friend as $key => $value)
        {
            $chat_message[] = Message::where('chat_id','=',$value['id'])->get();
        }
        $chat_message[] = Message::where('chat_id','=',$id)->get();
        return $this->ResponseJson(true,$chat_message);
    }

    //删除聊天关系
    public function delete_chat(Request $request)
    {
        $id = $request->get('id');
        $chat_id = $request->get('chat_id');
        $data = Chat::find($chat_id);
        // dd($data);
        $ros = Chat::where('id','=',$chat_id)->update(['user_delete'=>1]);
        $res = Chat::where('user_id','=',$data['another_id'])
        ->where('another_id','=',$data['user_id'])
        ->where('another_delete','=',0)
        ->update(['another_delete'=>1]);
        dd($res&&$ros);
    }


    public function processing_request(Request $request)
    {
        $id = $request->get('id');
        $friend_id = $request->get('friend_id');
        $result = $request->get('result');
        if ($result) {
            $data = Friend::where('friend_id','=',$friend_id)
                    ->where('user_id','=',$id)
                    ->update(['type'=>1]);
            if($data){
                Friend::insert(['user_id'=>$id,'friend_id'=>$friend_id,'type'=>1]);
            }
        }
    }
}
