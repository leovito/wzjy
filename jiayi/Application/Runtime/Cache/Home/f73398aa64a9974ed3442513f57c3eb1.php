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
            <a href="/jiayi/index.php/Home/User/message/type/send" class="list-group-item">写信</a>
            <a href="/jiayi/index.php/Home/User/message/type/receivebox" class="list-group-item">收件箱</a>
            <a href="/jiayi/index.php/Home/User/message/type/sendbox" class="list-group-item">发件箱</a>
            
            
            
            
          </div>
       </div>
        
        <div class="ct" id="send">
          <form action="/jiayi/index.php/Home/User/sendmessage"  method="post" >
             <div class="input-group shortinput" >
  <span class="input-group-addon">收件人</span>
  <select class="form-control" id="receiver" name="receiver">
   
    <?php if(is_array($teacher)): $i = 0; $__LIST__ = $teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vot): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vot["realname"]); ?>"><?php echo ($vot["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
    
              </div> 
             
             
              <div class="input-group" >
  <span class="input-group-addon">内容</span>
  <textarea class="form-control" rows=10 name="messagect" id="messagect"></textarea>
    
              </div>
              <button class="btn btn-primary" id="sendbtn"  type="submit">发送</button>
         </form>
   
    </div>
        
        
        <div class="ct" id="sendbox">
            
              <table class="table table-hover" id="sendtable">
        <thead>
          <tr>
            <th>#</th>
            <th>收件人</th>
            <th>发件时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
            
             <?php if(is_array($sendm)): $i = 0; $__LIST__ = $sendm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vos["msgid"]); ?></td>
            <td><?php echo ($vos["realname"]); ?></td>
            <td><?php echo (date("y-m-d",$vos["time"])); ?></td>
            <td><div class="btn-group">
  <button type="button" class="btn btn-default btn-xs btn-read" value="<?php echo ($vos["msgid"]); ?>">阅读</button>
  <a href="/jiayi/index.php/Home/User/message/type/send/toname/<?php echo ($vos["realname"]); ?>" class="btn btn-default btn-xs" >再写一封</a>
  <button type="button" class="btn btn-danger btn-xs btn-dels" value="<?php echo ($vos["msgid"]); ?>">删除</button>
</div></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            
          
          
        </tbody>
      </table>
            
    
   
    </div>
        <div class="ct" id="receivebox">
             
              <table class="table table-hover" id="receivetable">
        <thead>
          <tr>
            <th>#</th>
            <th>发件人</th>
            <th>发件时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          
             <?php if(is_array($receivem)): $i = 0; $__LIST__ = $receivem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vor): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vor["msgid"]); ?></td>
            <td><?php echo ($vor["realname"]); ?></td>
            <td><?php echo (date("y-m-d",$vor["time"])); ?></td>
            <td><div class="btn-group">
  <button type="button" class="btn btn-default btn-xs btn-read" value="<?php echo ($vor["msgid"]); ?>">阅读</button>
  <a href="/jiayi/index.php/Home/User/message/type/send/toname/<?php echo ($vor["realname"]); ?>" class="btn btn-default btn-xs" >回信</a>
  <button type="button" class="btn btn-danger btn-xs btn-delr" value="<?php echo ($vor["msgid"]); ?>">删除</button>
</div></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
    
   
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



 <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">短信内容</h4>
        
      </div>
      <div class="modal-body">
        
      </div>
        
        
        
        <div class="clear"></div>
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-primary" data-dismiss="modal" >返回</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
         $(document).ready(function(){
       $("#<?php echo ($type); ?>").show();
       $("#receiver").val("<?php echo ($toname); ?>");
       $(".btn-read").click(function(){
        var msgid=$(this).val();
         $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/readmsg",
   data: "msgid="+msgid,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
      $("#messageModal").find(".modal-body").html(data.ct);
      $("#messageModal").modal("show");
      
        
    }
   else{
    
        $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">未知错误，请稍后再试或重新登入</h4>");
        $("#msgModal").modal("show");
       
    
   }
   }
    
    
    
  });
       });
       
     $(".btn-dels").click(function(){
        var msgid=$(this).val();
         $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/msgdels",
   data: "msgid="+msgid,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
      
      window.location.href="/jiayi/index.php/Home/User/message/type/sendbox";
        
    }
   else{
    
        $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">未知错误，请稍后再试或重新登入</h4>");
        $("#msgModal").modal("show");
       
    
   }
   }
    
    
    
  });
       });
     
     $(".btn-delr").click(function(){
        var msgid=$(this).val();
         $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/msgdelr",
   data: "msgid="+msgid,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
      
      window.location.href="/jiayi/index.php/Home/User/message/type/receivebox";
        
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