## 									微信聊天接口

1. ### 获取csrf_token

   每一个post表单都需要验证 name: _token  value:xxxxx

   ```
   method : get
   url    : /api/get_csrf_token
   params : ''
   return : {status:状态 data:_token码 msg: 提示}
   ```

   

2. ### 登录

   ```
   method: post
   url   : /api/sign_in
   params:	_token and id and password
   return: {status:状态 data:用户的信息(包含token,好友列表) msg: 提示}
```
   
3. ### 注册

   ```
   method: post
   url   : /api/sign_up
   params: _token and id(手机号) and password
   ```

   

   ## ##下面的全部需要 id + token (非 "_token")验证##

   

4. ### 好友列表

   // 添加好友后更新使用

   ```
   method: get
   url   : api/validation/show_friend
   params: id and token
   return: {status:状态 data:好友列表 msg: 提示}
   ```

5. ### 添加好友

   ```
   method: get
   url   : api/validation/add_friend
   params: id and token and friend_id
   return: {status:状态 data:'' msg: 提示}
   ```

6. ### 发起聊天

   ```
   method: get
   url   : api/validation/chat
   params: id and token and friend_id
   return:  {status:状态 data:聊天列表 msg: 提示}
   ```

7. ### 获取未读消息

   ```
   method: get
   url   : api/validation/received
   params: id and token 
   return {status:状态 data:消息列表 msg: 提示}
   ```

8. ### 发送消息

   ```
   method: post
   url   : api/validation/send
   params: id and token and chat_id and content and _token
   return: {status:状态 data:成功/失败 msg: 提示}
   ```

9. ### 获取消息

   ```
   method: get
   url   : api/validation/message
   params: id and token and chat_id and friend_id
   return: {status:状态 data:消息列表(未排序) msg: 提示}
   ```

10. ### 删除聊天关系(非删除好友)

    ```
    method: get
    url   : api/validation/delete_chat
    params: id and chat_id and token
    return: {status:状态 data:删除成功 msg: 提示}
    ```

11. ### 添加好友请求

    ```
    method: get
    url   : api/validation//processing_request
    params: id and token and friend_id
    return: {status:状态 data:等待对方同意}
    ```

    

