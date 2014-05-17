<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
            <link href="/jiayi/Public/js/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
             <link rel="stylesheet" href="/jiayi/Public/css/user/buy.css">
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
        
        <div class="input-group shortinput">
  <span class="input-group-addon">课程搜索</span>
  <input type="text" class="form-control" placeholder="关键字" id="classkey" name="classkey">
     <span class="input-group-btn">
        <button class="btn btn-default" type="submit" id="search">搜索</button>
      </span>
</div>
        
        <h4 class="text-info">课程列表</h4>
        <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="classlist">
        <h5 class="classname text-primary"><?php echo ($vo["name"]); ?><small>类别：<?php echo ($vo["type"]); ?></small></h5>
        <div class="clistdetail">
        <h6 class="classtime">课程时间：<?php echo ($vo["time"]); ?></h6>
        <h6 class="classschool">校区：<?php echo ($vo["school"]); ?></h6>
        </div>
        <h5 class="classprice text-warning">价格：<?php echo ($vo["price"]); ?>元<div class="btn-group classop"><button class="btn btn-warning btn-xs addtoshopcar" value="<?php echo ($vo["id"]); ?>">加入购物车</button><button class="btn btn-default btn-xs detail" value="<?php echo ($vo["id"]); ?>">课程详情</button></div></h5>
        
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    
     <div class="clear"></div>
  <ul class="pagination">      
 <?php $__FOR_START_390336574__=1;$__FOR_END_390336574__=$pagenumber;for($i=$__FOR_START_390336574__;$i < $__FOR_END_390336574__;$i+=1){ ?><li><a href="/jiayi/index.php/Home/User/buyclass/page/<?php echo ($i); ?>/searchkey/<?php echo ($searchkey); ?>/"><?php echo ($i); ?></a></li><?php } ?>
   </ul>
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
       $(".addtoshopcar").click(function(){
        var id=$(this).val();
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/addtoshopcar",
   data: "id="+id,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">添加成功！</h4>");
		$('#msgModal').modal('show');
    }
    else if(data.state==-1){
        $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">添加失败，购物车已经存在</h4>");
		$('#msgModal').modal('show');
    }
    else{
        $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">添加失败，请稍后尝试或重新登入</h4>");
		$('#msgModal').modal('show');
    }
    
   }
		
		});
       });
       $(".detail").click(function(){
        var id=$(this).val();
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/gooddetail",
   data: "id="+id,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        var body="<p class=\"text-muted\">介绍："+data.good['introduction']+"</p><h5 class=\"text-warning\">时间："+data.good['time']+"</h5><h5 class=\"text-warning\">校区："+
        data.good['school']+"</h5><h5 class=\"text-danger\">价格："+data.good['price']+"元</h5>";
        $('#detailModal').find('.modal-title').text(data.good['name']);
       
        $('#detailModal').find('.modal-body').html(body);
		$('#detailModal').modal('show');
    }
    
    else{
        $('#detailModal').find('.modal-body').html("<h4 class=\"text-danger\">查询失败，请稍后尝试或重新登入</h4>");
		$('#detailModal').modal('show');
    }
    
   }
		
		});
       });
       $("#search").click(function(){
        var key=$("#classkey").val();
         window.location.href="/jiayi/index.php/Home/User/buyclass/searchkey/"+key; 
       })
       
});
        
    </script>
</body>
</html>