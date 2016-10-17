<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!doctype html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
    <meta charset="UTF-8">
    <title>插入激活码</title>
    <style type="text/css">
        .main {
            width: 100%;
            height: 1600px;
            margin-top: 180px;
        }

        .text {
            width: 60%;
            height: 50px;
        }

        span {
            font-size: 30px;

        }

        .btn {
            position: absolute;
            left: 40px;
            top: 400px;
            width: 200px;
            height: 50px;
            font-size: 20px;
        }

    </style>
</head>
<body>
<div class="main">
    <form action="addcode" method="post">
        <span> 加激活码：</span><input type="text" class="text" name="code">
        <button class="btn" type="submit">加入</button>
    </form>

</div>

</body>
</html>