<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
            <link href="/jiayi/Public/js/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
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
        
        <div class="side" >
        <div class="list-group">
            <a href="/jiayi/index.php/Home/User/index/type/side1" class="list-group-item active">最新公告</a>
            <a href="/jiayi/index.php/Home/User/index/type/side2" class="list-group-item">成绩查询</a>
            <a href="/jiayi/index.php/Home/User/index/type/side3" class="list-group-item">使用说明</a>
            
            
          </div>
     </div>
        
        <div class="ct" id="side1">
            <h4 class="text-warning">最新公告</h4>   
 <div id="gg">
    <?php if(is_array($gg)): $i = 0; $__LIST__ = $gg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vogg): $mod = ($i % 2 );++$i;?><ol class="breadcrumb">
  <li><a href="/jiayi/Home/Index/article/articleid/<?php echo ($vogg["id"]); ?>" target="_blank"><?php echo (date("y-m-d",$vogg["time"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vogg["title"]); ?></a></li>
  
</ol><?php endforeach; endif; else: echo "" ;endif; ?>
 
        
        
 </div><!--end gg-->       
   
    </div>
    <div class="ct" id="side2">
            <h4 class="text-warning">成绩</h4>   
 <div id="cj">
    <?php if(is_array($achievement)): $i = 0; $__LIST__ = $achievement;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ol class="breadcrumb">
  <li class="text-primary"><span class="text-primary achievementname"><?php echo ($vo["achievementname"]); ?></span><span class="text-warning achievement"><?php echo ($vo["achievement"]); ?>&nbsp;&nbsp;分</span><span class="text-primarg achievement"><?php echo (date("y-m-d",$vo["time"])); ?></span></li>
  
</ol><?php endforeach; endif; else: echo "" ;endif; ?>

 
        
        
 </div><!--end cj-->       
   
    </div>
    
    <div class="ct" id="side3">
            <h4 class="text-warning">使用说明</h4>
            <p>欢迎使用嘉一教育系统，本系统集成竞赛报名，自主选课，信息交流和个人成绩查询以及个人资料整理等功能，导航栏部分罗列了本后台系统的大多数功能，
            您可以在 <a href="/jiayi/index.php/Home/User/buyclass">购买课程</a> 模块自主选择需要报名的课程，加入购物车或者在 <a href="/jiayi/index.php/Home/User/buycompetition">竞赛报名</a> 模块报名竞赛，来参与竞赛，这里请注意，出于竞赛报名对于学生信息的要求，本系统
            需要用户完成某些个人信息的填写才可报名竞赛，具体的填写项目是：真实姓名，性别，出生日期，年级，手机，身份证，照片如果您无法报名竞赛，请先完成善述的信息，再进行竞赛报名，谢谢</p>
            <p>对于竞赛进阶模块，只有在相应的初赛中通过，并取得一定的决赛进阶成绩，才可以在这个模块中看到报名选项，否者则只能看到相应的初赛成绩</p>
            <p>在个人信息中，您可以查看竞赛获奖情况，课程报名情况和竞赛报名情况，请注意，课程报名情况和竞赛报名情况只有在付款后才会显示的，如果您未付款，这里将不会出现该课程或者该竞赛，在付款后，课程可能会延迟一段时间才会出现在该模块中，请耐心等待，如果仍未出现，请联系本课程或本竞赛负责人，谢谢</p>
            <p>站内短信模块是提供给了一个师生交流的平台，您可以在这里向老师提问，咨询。此外，如发现bug或者系统上的疑问，您可以发送邮件至网站管理员邮箱：511912708@qq.com，谢谢</p>
            
 <div id="sysm">
   
 </div><!--end sysm-->       
   
    </div>
    
    
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