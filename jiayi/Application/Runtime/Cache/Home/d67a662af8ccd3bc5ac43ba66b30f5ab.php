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
        <div id="side1">
       <div id="userimg">
        <img  src="/jiayi/Uploads<?php echo ($user["photo"]); ?>">
       </div>
       <div class="clear"></div>
       <div id="userdetail">
        <h4>用户名：<?php echo ($user["username"]); ?></h4>
        <h4>姓名：<?php echo ($user["realname"]); ?></h4>
        <h4>积分：<?php echo ($user["userscore"]); ?></h4>
        <h4>性别：<?php echo ($user["sex"]); ?></h4>
        <h4>邮箱：<?php echo ($user["email"]); ?></h4>
        <h4>生日：<?php echo ($user["birthday"]); ?></h4>
        <h4>手机：<?php echo ($user["phone"]); ?></h4>
        <h4>年级：<?php echo ($user["grade"]); ?></h4>
        <h4>学校：<?php echo ($user["school"]); ?></h4>
        <h4>家庭住址：<?php echo ($user["address"]); ?></h4>
        <h4>身份证：<?php echo ($user["idcard"]); ?></h4>
        <h4>密保提问：<?php echo ($user["question"]); ?></h4>
        <h4>答案:<?php echo ($user["answer"]); ?></h4>
       </div>
        </div><!--side1-->
        <div id="side2">
            <div id="side21">
            <h4 class="text-warning">已报课程</h4>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
           
            </div>
            <div id="side22">
              <h4 class="text-warning">已报竞赛</h4>
              <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            <span class="label label-default h4label">小学奥数七年级强化提高班</span>
            </div>
            <div id="side23">
              <h4 class="text-warning">奖项</h4>
              <span class="label label-warning h4label">小学奥数七年级强化提高班</span>
            <span class="label label-warning h4label">小学奥数七年级强化提高班</span>
            <span class="label label-warning h4label">小学奥数七年级强化提高班</span>
            </div>
            
        </div><!-- end side2-->
        <div class="clear"></div>
        <a class="btn btn-info" role="button" href="/jiayi/index.php/Home/User/changeinfo">修改信息</a>
    </div>
    
    
    
     <div class="clear"></div>
     

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

   
    <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" id="del" class="btn btn-danger btn-sm" data-dismiss="modal" value="">确定</button>
        
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" id="ok" class="btn btn-primary btn-sm" data-dismiss="modal" >确定</button>
        
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
        $(document).ready(function(){
       
       
});
        
    </script>
</body>
</html>