<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
            <link href="/jiayi/Public/js/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
             <link rel="stylesheet" href="/jiayi/Public/css/user/usercenter.css">
                
</head>
<body>
    
   <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">嘉一教育</a>
        </div>
        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/jiayi/index.php/Home/User/">主页</a></li>
            <li ><a href="/jiayi/index.php/Home/User/buyclass">购买课程</a></li>
            <li><a href="/jiayi/index.php/Home/User/buycompetition">竞赛报名</a></li>
            <li><a href="/jiayi/index.php/Home/User/finals">竞赛进阶</a></li>
            <li><a href="/jiayi/index.php/Home/User/downloadtest">试卷下载</a></li>
            <li><a href="/jiayi/index.php/Home/User/usercenter">个人信息</a></li>
            <li><a href="/jiayi/index.php/Home/User/shopcar">购物车</a></li>
            <li><a href="/jiayi/index.php/Home/User/message">站内短信</a></li>
            <li id="nav-user"><a href="#">欢迎您，<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo (session('username')); ?></a></li>
            <li class="pull-right"><a href="/jiayi/index.php/Home/User/logout">登出</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->
    
   
    <div class="container" id="mainct">
    <img id="error" src="/jiayi/Public/images/error.png">
    <button class="btn btn-warning btn-sm" id="backhis">返回上一页</button>
    <button class="btn btn-default btn-sm" id="backindex">回到首页</button>
    <h4 class="text-warning">出错啦，请稍后再试或者重新登入</h4>
    </div>
    
    
    
     <div class="clear"></div>
     

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

   
    
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
        $(document).ready(function(){
      
       
});
        
    </script>

</body>
</html>