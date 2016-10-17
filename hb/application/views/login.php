<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<style type="text/css">
    .form {
        padding-top: 50px;
        width: 400px;
        margin: auto;
        text-align: center;
    }

    .table {
        width: 400px;
        height: 50px;
        text-align: center;
    }
</style>

<body>
<form class="form" action="admin/dologin" method="post">
    <div class="table">用户名：<input type="text" name="name"></div>
    <div class="table">密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="pwd"></div>
    <button type="submit">登录</button>
</form>

</body>
</html>