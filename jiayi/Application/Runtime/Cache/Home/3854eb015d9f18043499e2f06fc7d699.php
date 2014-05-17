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
     <form action="/jiayi/index.php/Home/User/updateinfo" enctype="multipart/form-data" method="post" >   
       <div id="userimg">
         <div id="preview">
    <img id="imghead" width=100 height=100  src="/jiayi/Uploads<?php echo ($user["photo"]); ?>">
      
     </div>
         <input type="file" name="photo" id="photo" onchange="previewImage(this)">
         <div class="clear"></div>
       </div>
       
      
        
       <div id="userdetail">
        <div class="input-group short">
  <span class="input-group-addon">姓名</span>
  <input type="text" class="form-control" value="<?php echo ($user["realname"]); ?>" id="realname" name="realname">
</div>
        <div class="input-group short">
  <span class="input-group-addon">手机</span>
  <input type="text" class="form-control" value="<?php echo ($user["phone"]); ?>" id="phone" name="phone">
</div>
        

<div class="input-group short">
  <span class="input-group-addon">住址</span>
  <input type="text" class="form-control" value="<?php echo ($user["address"]); ?>" id="address" name="address">
</div>
<div class="input-group short">
  <span class="input-group-addon">邮箱</span>
  <input type="text" class="form-control" value="<?php echo ($user["email"]); ?>" id="email" name="email">
</div>

<div class="input-group short">
  <span class="input-group-addon">年级</span>
  <select class="form-control" id="grade" name="grade">
  
  <option value="小学一年级">小学一年级</option>
  <option value="小学二年级">小学二年级</option>
  <option value=”小学三年级">小学三年级</option>
  <option value="小学四年级">小学四年级</option>
  <option value="小学五年级">小学五年级</option>
  <option value="小学六年级">小学六年级</option>
  <option value="初中一年级">初中一年级</option>
  <option value="初中二年级">初中二年级</option>
  <option value="初中三年级">初中三年级</option>
  <option value="高中一年级">高中一年级</option>
  <option value="高中二年级">高中二年级</option>
  <option value="高中三年级">高中三年级</option>
  <option value="其他">其他</option>
  
</select>
</div>

<div class="input-group short">
  <span class="input-group-addon">学校</span>
  <input type="text" class="form-control" value="<?php echo ($user["school"]); ?>" name="school" id="school">
</div>


<div class="input-group short">
  <span class="input-group-addon">性别</span>
  <select class="form-control" id="sex" name="sex">
  <option value="男">男</option>
  <option value="女">女</option>
  
</select>
</div>

<div class="input-group short">
  <span class="input-group-addon">身份证</span>
  <input type="text" class="form-control" value="<?php echo ($user["idcard"]); ?>" name="idcard" id="idcard">
</div>

<div class="input-group short">
  <span class="input-group-addon">密保提问</span>
  
    <select class="form-control" id="question" name="question">
  <option value="你的母亲姓名是">你的母亲姓名是</option>
  <option value="你的父亲姓名是">你的父亲姓名是</option>
  <option value="你的小学是">你的小学是</option>
  <option value="你的高中是">你的高中是</option>
  <option value="你的初中是">你的初中是</option>
  <option value="你的小学班主任是">你的小学班主任是</option>
  <option value="你的初中班主任是">你的初中班主任是</option>
  <option value="你的高中班主任是">你的高中班主任是</option>
  <option value="你最喜欢的颜色是">你最喜欢的颜色是</option>
  <option value="你的配偶是">你的配偶是</option>
  <option value="你最喜欢的食物是">你最喜欢的食物是</option>
  
</select>
</div>
<div class="input-group short">
  <span class="input-group-addon">密保答案</span>
  <input type="text" class="form-control" value="<?php echo ($user["answer"]); ?>" name="answer" id="answer">
</div>
        
       </div>
        
       
        <div class="clear"></div>
        <button class="btn btn-info" type="submit">保存</button>
        
        
        
        
     </form>
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
       $("#grade option[value='<?php echo ($user["grade"]); ?>']").attr("selected", true);
       $("#sex option[value='<?php echo ($user["sex"]); ?>']").attr("selected", true);
       $("#question option[value='<?php echo ($user["question"]); ?>']").attr("selected", true);
       
});
        
    </script>
<script type="text/javascript">


                //图片上传预览    IE是用了滤镜。
                function previewImage(file)
        {
          
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                
                img.width  =  100;
                img.height =  100;

                
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:100px;height:100px;"+sFilter+src+"\"'></div>";
          }
        }
        
      
</script>     
</body>
</html>