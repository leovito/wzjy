<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="en">
<head>
    <title>消息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/jiayi/Public/css/message/message.css">
</head>
<body>
    <!-- Insert your content here -->
     <div class="container">

     
        <h2>操作失败</h2>
        <h3 class="text-warning">消息：<?php echo ($message); ?></h3>
        <a href="javascript:history.go(-1)" class="btn  btn-primary" id="back">返回上一页</a>
        <a href="/jiayi/index.php/Home/Index" class="btn  btn-warning" id="index">回到首页</a>
        
        <img src="/jiayi/Public/images/logo.png" id="logo">
     
        
    </div> <!-- /container -->
  
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
   
    
</body>
</html>