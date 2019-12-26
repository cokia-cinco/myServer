<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  action="http://localhost:8000/doEdit"
      enctype="post"
>
    <input type="hidden" name="id" value=<?=$data->id?>>
    <div>
        <span>姓名</span>
        <input type="text" name="name" value=<?=$data->name?>>
    </div>
    <br>
    <div>
        <span>性别</span>
        <input type="text" name="sex" value="<?=$data->sex==1?'男':'女';?>">
    </div>
    <br>
    <div>
        <span>电话</span>
        <input type="text" name="tel" value="<?=$data->tel?>">
    </div>
    <br>
    <div>
        <span>邮箱</span>
        <input type="text" name="email" value="<?=$data->email?>">
    </div>
    <input style="margin: 1rem 3rem;width: 5rem" type="submit" value="提交">
</form>
</body>
</html>
