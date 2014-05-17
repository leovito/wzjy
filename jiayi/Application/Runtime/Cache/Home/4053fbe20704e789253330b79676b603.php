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
            <li><a href="#">主页</a></li>
            <li><a href="#">文章列表</a></li>
            <li><a href="#about">关于</a></li>
            <li><a href="#contact">联系</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->
    
   
    <div class="container" id="mainct">

    
     <h3 class="text-warning"><?php echo ($article["title"]); ?>&nbsp;&nbsp;<small>发布时间：<?php echo (date("y-m-d",$article["time"])); ?></small></h3>       
 <script type="text/plain" id="myEditor" style="width:1100px;height:500px;">
    <p>正文</p>
</script>
 <button class="btn btn-primary" id="push" value="<?php echo ($article["id"]); ?>">提交</button>
        
    
     </div> <!-- end side8-->
    
    
    
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
        <button type="button" id="del" class="btn btn-danger btn-sm" data-dismiss="modal">确定</button>
        
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    <script type="text/javascript" charset="utf-8" src="/jiayi/Public/js/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/jiayi/Public/js/umeditor.min.js"></script>
    <script type="text/javascript" src="/jiayi/Public/js/lang/zh-cn/zh-cn.js"></script>
    
    <script>
        $(document).ready(function(){
  
        var um = UM.getEditor("myEditor");
       var content="<?php echo ($article["content"]); ?>";
       UM.getEditor('myEditor').setContent(content);
       
       $("#push").click(function(){
        var id=$(this).val();
        var content = [];
        content.push(UM.getEditor('myEditor').getContent());
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/Admin/articleedit",
   data: "id="+id+"&content="+escape(content),
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">文章修改成功！</h4>");
		$('#msgModal').modal('show');
    }
    else{
        $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">文章修改失败，请稍后尝试或重新登入</h4>");
		$('#msgModal').modal('show');
    }
    
   }
		
		});
        
        
       });
       
       
});
        
    </script>
</body>
</html>