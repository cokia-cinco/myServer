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
        <th>ID</th>
        <th>姓名</th>
        <th>手机号</th>
        <th>性别</th>
        <th>生日</th>
        <th>邮箱</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    <?php
        $se = $data->sex==1?'男':'女';
        echo("<tr>");
        echo ("<td>$data->id</td>");
        echo ("<td>$data->name</td>");
        echo ("<td>$data->tel</td>");
        echo ("<td>$se</td>");
        echo ("<td>$data->birthday</td>");
        echo ("<td>$data->email</td>");
        echo ("<td>$data->regtime</td>");
        echo ("<td><a href=/delete?id=$data->id>删除</a>
                    <a href=/edit?id=$data->id>编辑</a>
               </td>");
        echo ("</tr>");
    ?>
</table>
</body>
</html>
