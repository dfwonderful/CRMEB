<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:49:"/opt/Golden/application/admin/view/public/500.php";i:1563521450;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/public/system/frame/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/system/frame/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/public/system/frame/css/style.min.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="middle-box text-center animated fadeInDown">
    <h1>500</h1>
    <h3 class="font-bold">服务器内部错误</h3>

    <div class="error-desc">
        服务器好像出错了...
        <p><?php echo $msg; ?></p>
    </div>
</div>

</body>

</html>
