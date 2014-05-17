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
            <li class="active" ><a href="/jiayi/index.php/Home/User/studentinfo">学生信息查询</a></li>
            <li><a href="/jiayi/index.php/Home/User/inputachievement">成绩登记</a></li>
           
            <li><a href="/jiayi/index.php/Home/User/teachermessage">站内短信</a></li>
            <li id="nav-user"><a href="#">欢迎您，<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo (session('teacher')); ?></a></li>
            <li class="pull-right"><a href="/jiayi/index.php/Home/User/logout">登出</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->
    
   
    <div class="container" id="mainct">
    <div id="inputachievement">
        <div class="input-group shortinput">
  <span class="input-group-addon" id>竞赛项目</span>
  <select class="form-control" id="achievementname" name="achievementname">
    <?php if(is_array($competition)): $i = 0; $__LIST__ = $competition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
   
    
</div>
        <div class="input-group shortinput">
  <span class="input-group-addon" >学生姓名</span>
  <input class="form-control" id="studentname" name="studentname"/>
   
    
</div>
        
        <div class="input-group shortinput">
  <span class="input-group-addon" >成绩</span>
  <input class="form-control" id="studentachievement" name="studentachievement"/>
   
    
</div>
        <button class="btn btn-primary" id="pushachievement">提交</button>
        
    </div>
       
    
  
        
       
    
    
     <div class="clear"></div>

     <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    

    </div><!--/.container-->
    
    
    <div class="modal fade" id="chooseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">由于出现同姓名学生，请根据照片选择学生</h4>
        
      </div>
      <div class="modal-body">
        
      </div>
        
        
        
        <div class="clear"></div>
      <div class="modal-footer">
        <input type="hidden" id="snamehide">
        <input type="hidden" id="sachievementhide">
        <input type="hidden" id="achievementnamehide">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="pushagain">提交</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

     
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
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
         $(document).ready(function(){
       $("#<?php echo ($type); ?>").show();
       $("#try").click(function(){
        $("#chooseModal").modal("show");
       });
       $("#pushachievement").click(function(){
        var achievement=$("#studentachievement").val();
        var achievementname=$("#achievementname  option:selected").text();
        var studentname=$("#studentname").val();
             
    $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/inputachievementapi",
   data: "achievement="+achievement+"&achievementname="+achievementname+"&studentname="+studentname,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==-1) {
      
      $('#chooseModal').find("#snamehide").val(studentname);
      $("#chooseModal").find("#achievementnamehide").val(achievementname);
      $("#chooseModal").find("#sachievementhide").val(achievement);
      var bodyhtml=""
      for (var i=0,n=data.user.length;i<n;i++) {
        bodyhtml+="<div class=\"studentimg\"><img src=\"/jiayi/Uploads"+data.user[i].photo+"\" class=\"csimg\"><h5 class=\"text-warning\">用户名:"+data.user[i].username+"</h5><div class=\"radio\" ><label><input type=\"radio\" name=\"choosestudent\" id=\"choosestudent\" value=\""+data.user[i].username+"\"> 请根据照片勾选</label> </div></div>";
      }
      $("#chooseModal").find(".modal-body").html(bodyhtml);
      $("#chooseModal").modal("show");
       
        
    }
   else if (data.state==1) {
    
         $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">录入成功</h4>");
        $("#msgModal").modal("show");
        
   }
   else if (data.state==-2) {
   $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">学生不存在，请仔细核对</h4>");
        $("#msgModal").modal("show");
   }
   else{
    
        $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">未知错误，请稍后再试或重新登入</h4>");
        $("#msgModal").modal("show");
       
    
   }
   }
    
    
    
  });
    
});
       $("#pushagain").click(function(){
        var achievement=$("#sachievementhide").val();
        var achievementname=$("#achievementnamehide").val();
        var username=$('input:radio[name="choosestudent"]:checked').val();
        $("#chooseModal").modal("hide");
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/inputachievementapiagain",
   data: "achievement="+achievement+"&achievementname="+achievementname+"&username="+username,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
      
       $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">成功录入</h4>");
        $("#msgModal").modal("show");
        
    }
   else{
    
        $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">未知错误，请稍后再试或重新登入</h4>");
        $("#msgModal").modal("show");
       
    
   }
   }
    
    
    
  });
        
       });
       
      
     
       
});    
    </script>
</body>
</html>