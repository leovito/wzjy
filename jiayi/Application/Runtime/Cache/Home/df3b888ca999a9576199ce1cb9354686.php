<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
            
             <link rel="stylesheet" href="/jiayi/Public/css/user/index.css">
                
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
            <li ><a href="/jiayi/index.php/Home/User/teacherindex">主页</a></li>
            <li class="active" ><a href="/jiayi/index.php/Home/User/searchstudent">学生信息查询</a></li>
            <li><a href="/jiayi/index.php/Home/User/inputachievement">成绩登记</a></li>
           
            <li><a href="/jiayi/index.php/Home/User/teachermessage">站内短信</a></li>
            <li id="nav-user"><a href="#">欢迎您，<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo (session('teacher')); ?></a></li>
            <li class="pull-right"><a href="/jiayi/index.php/Home/User/logout">登出</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->
    
   
    <div class="container" id="mainct">
        
       
    <form action="/jiayi/index.php/Home/User/studentinfo" enctype="multipart/form-data" method="post" >

  <div class="input-group shortinput">
  <span class="input-group-addon">学生姓名</span>
  <input type="text" class="form-control" name="studentname" id="studentname">
   
    
</div>
  <button class="btn btn-primary"  type="submit">提交</button>
</form>
  
        
       
    
    
     <div class="clear"></div>

     <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    

    </div><!--/.container-->
    
     
    <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" id="del" class="btn btn-danger btn-sm" value="">确定</button>
        <button type="button" id="close" class="btn btn-default btn-sm" data-dismiss="modal">取消</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
         $(document).ready(function(){
       $("#<?php echo ($type); ?>").show();
     
       
});    
    </script>
</body>
</html>