<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
            <link href="/jiayi/Public/js/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
             <link rel="stylesheet" href="/jiayi/Public/css/admin/article.css">
                
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
          <a class="navbar-brand" href="#">嘉一后台管理系统</a>
        </div>
        
         <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/jiayi/index.php/Home/Admin">主页</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/articlelist">文章列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/classlist">课程列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/schoollist">校区列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/testlist">试卷列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/userlist">用户列表列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/orderlist">订单列表列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/achievementlist">竞赛成绩列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/flink">友情链接列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/about">关于</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/contact">联系</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->
    
   
    <div class="container" id="mainct">
     <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>姓名</th>
            <th>用户名</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["realname"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td><div class="btn-group">
  <button class="btn btn-default btn-xs btn-info" value="<?php echo ($vo["id"]); ?>">查看详细信息</button>
  <button class="btn btn-default btn-xs btn-del" value="<?php echo ($vo["id"]); ?>">删除该用户</button>
  
</div></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </tbody>
      </table>
        </div>
    </div>
    
    
    
     <div class="clear"></div>

      

    </div><!--/.container-->
    
    <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="userModalLabel">用户详细信息</h4>
        
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
            $(".btn-del").click(function(){
                var id=$(this).val();
         $("#del").attr("value",id);
         $("#msgModal").find(".modal-body").html("<h4>你确定要删除这位用户么<small>&nbsp;&nbsp;id:"+id+"</small></h4>");
         $("#msgModal").modal("show");
            });
            $("#del").click(function(){
        var id=$(this).val();
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/Admin/userdel",
   data: "id="+id,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        
              
		$('#msgModal').modal('hide');
       
        
    }
    else{
        $('#msgModal').modal('hide');
    }
    
   }
		
		});
        
       });
            $(".btn-info").click(function(){
              var id=$(this).val();
 $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/Admin/userinfo",
   data: "id="+id,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        
              
       $("#userModal").modal("show");
       
        
    }
    else{
       $("#userModal").modal("show");
    }
    
   }
		
		});
              
            });
  
});
        
    </script>
</body>
</html>