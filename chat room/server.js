const net = require('net')
let clients=[]
let exits
const server = net.createServer((socket) => {
    socket.on('data',function(data){
        //获得客户端信息,判断
        var res = data.toString()
        var result = celints(res)
        //判断是用户名还是信息
        if(result){
            //存入对象
            user_obj(res,socket)
        }else{
          //  发送信息,单发或群发
          send_users(res)
        }
    })
    //当退出时,删除这个对象的链接
    socket.on('end',function(end){
        console.log(`${this.clientName}正在`+'exit')
        for (var i=0;i<clients.length;i++){
            if (clients[i].clientName==this.clientName){
                clients.splice(i,1)
            }
        }
        exits = this.clientName+'退出成功'
        console.log(clients.length)
        console.log(exits)
    })
    //报错时所发的信息
    socket.on('error',function(error){
        socket.end()
    });
})
server.listen({
    port:10086,
})
//获得客户端信息
function celints(res) {
    var result = res.substr(0,5)=='login'?true:false
    return result
}
//存入客户端对象
function user_obj(res,socket){
    socket.clientName=res.split(':')[1]
    clients.push(socket)
    for (var i=0;i<clients.length;i++) {
        clients[i].write(res.split(':')[1]+'上线了')
    }
    console.log(res)
}
//群体发消息
function send_users(res) {
    //判断是否为@语句
    var preg = /.*:@.*/
    var res2 = preg.test(res)
    if(res2){
        //捕捉@的人
        var username = res.split('@')[1].split(' ')[0]
        console.log(username)
    }
    //全屏发送消息
    for (var i=0;i<clients.length;i++){
        //判断正则匹配是否有@符存在
        if (res2 && clients[i].clientName==username){
            clients[i].write(res)
        }else if(!res2){
            clients[i].write(res)
        }
    }
}