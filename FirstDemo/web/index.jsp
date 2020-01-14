<%--
  Created by IntelliJ IDEA.
  User: 23177
  Date: 2020/1/13
  Time: 19:28
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
  <head>
    <title>登录</title>
  </head>
  <body>
    <h1 style="text-align: center">登录</h1>
    <form method="post" action="ValidateServlet" style="text-align: center">
      用户  : <input type="text" name="name"><br><br>
      密码  : <input type="password" name="password"><br>
      <%= request.getAttribute("type")!=null?"<p>密码错误,请重试</p>":""%>
      <input type="submit" value="登录">
    </form>

  </body>
</html>
