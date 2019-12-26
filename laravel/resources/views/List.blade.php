<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>姓名</th>
            <th>手机号</th>
            <th>性别</th>
            <th>邮箱</th>
            <th>操作
                <a href="/add">添加用户</a>
            </th>
        </tr>
        @foreach($data as $val)
                <tr>
                    <td>{{$val['name']}}</td>
                    <td>{{$val['tel']}}</td>
                    <td>{{$val['sex']==1?'男':'女'}}</td>
                    <td>{{$val['email']}}</td>
                    <td><a href=/delete?id={{$val['id']}}>删除</a>
                                <a href=/edit?id={{$val['id']}}>编辑</a>
                                <a href=/detail?id={{$val['id']}}>详情</a>
                     </td>
                </tr>
       @endforeach
    </table>
</body>
</html>
