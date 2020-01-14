var net = require('net')
var port = 10086;
var host = '192.168.1.102';
var socket= new net.Socket();
let name = ''
//单行输入流
var readline = require('readline')
const re = readline.createInterface({
    input:process.stdin,
    output:process.stdout
})
//创建socket客户端
socket.setEncoding('utf-8');
// 连接到服务端
socket.connect(port,host,function(){
    //获得名字
    re.question('请输入你的名字？', (answer) => {
        name = answer
        socket.write(`login:${answer}`)
        console.log('登陆成功')
    });
    //输入流
    re.on('line',function(line) {
        var tokens = line
        socket.write(`${name}:${tokens}`)
        if(tokens=='bye'){
            socket.end(name)
        }
    })
});
//输出流
socket.on('data',function(data){
    console.log(data.toString());
})
socket.on('close',function(){
    console.log('Connection closed')
})
socket.on('error',function(error){
    console.log('error:'+error);
});
socket.on('end', ()=>{
    console.log('ended');
});

