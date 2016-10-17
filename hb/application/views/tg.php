<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
    <meta charset="UTF-8">
    <title>微信红包插件</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;

        }

        .main {
            width: 100%;
            height: 800px;
            background-color: #e8bf94;
            margin: 0px;
            padding: 0px;
        }

        .money {
            background-color: #CC0000;
            color: gold;
            font-size: 35px;
            margin-left: 10%;
            margin-right: 10%;
            width: 80%;
            margin-top: 5%;
            position: absolute;
            text-align: center;
        }

        .description {
            width: 100%;
            font-size: 25px;
            color: black;
            position: absolute;
            top: 120px;
            text-align: center;
        }

        .div_img {
            width: 100%;
            text-align: center;
            position: absolute;
            margin-top: 250px;
        }

        .img {
            width: 250px;
            height: 450px;
        }

    </style>
    <script type="text/javascript">
        function isWeiXin() {
            var ua = window.navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == 'micromessenger') {
                document.getElementById("bg_img").style.position = 'absolute';
                document.getElementById("bg_img").style.width = '100%';
                document.getElementById("bg_img").style.top = '0px';
                document.getElementById("bg_img").style.backgroundColor = '#000000';
                document.getElementById("bg_img").style.opacity = '0.8';
                document.getElementById("bg_img").src = '/static/images/live_weixin.png';
                return true;
            } else {
                window.location.href = "/static/hb.apk";
                return false;
            }
        }
    </script>
</head>
<body>
<div class="main">
    <div class="money">10元（终身免费）</div>
    <div class="description">
        <span>安卓抢红包插件==></span>
        <a href="javascript:isWeiXin();">立即下载</a>
    </div>
    <div class="div_img">
        <img src="/static/images/hb.png" class="img">
    </div>
    <img id="bg_img">
</body>
</html>
