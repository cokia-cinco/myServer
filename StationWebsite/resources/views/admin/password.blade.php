<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/admin/action/edit_password" method="post">
    @csrf
    <div>
        <p style="padding-left: 36%;font-size: 20px">请输入新密码:</p>
        <input style="width: 300px;height: 40px; display: block ;margin: 0 auto" type="text" name="password">
    </div>
    <input style="background-color: #d24848;width: 310px;height: 40px;
        margin: 0 auto;display: block;border: .1rem solid #f19300;border-radius: 5px;margin-top: 40px;" type="submit" value="确定修改">
</form>
</body>
</html>
