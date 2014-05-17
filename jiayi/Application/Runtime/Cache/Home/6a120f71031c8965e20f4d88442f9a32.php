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
            <li><a href="/jiayi/index.php/Home/Admin/competitionlist">竞赛列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/schoollist">校区列表</a></li>
            <li><a href="/jiayi/index.php/Home/Admin/testlist">试卷列表</a></li>
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
        <div class="input-group shortinput">
  <span class="input-group-addon">订单搜索</span>
  <input type="text" class="form-control" placeholder="用户名" id="orderkey" name="orderkey">
     <span class="input-group-btn">
        <button class="btn btn-default" type="submit" id="search">搜索</button>
      </span>
</div>
     <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>订单用户名</th>
            <th>订单生成时间</th>
            <th>订单价格</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
            <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td><?php echo (date("y-m-d",$vo["time"])); ?></td>
            <td><?php echo ($vo["price"]); ?>&nbsp;&nbsp;元</td>
            <td><div class="btn-group">
  <button class="btn btn-danger btn-xs btn-del" value="<?php echo ($vo["id"]); ?>">删除</button>
  <button class="btn btn-info btn-xs btn-detail" value="<?php echo ($vo["id"]); ?>">详情</button>
</div></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </tbody>
      </table>
     <ul class="pagination">      
 <?php $__FOR_START_1225717937__=1;$__FOR_END_1225717937__=$pagenumber;for($i=$__FOR_START_1225717937__;$i < $__FOR_END_1225717937__;$i+=1){ ?><li><a href="/jiayi/index.php/Home/Admin/orderlist/page/<?php echo ($i); ?>/searchkey/<?php echo ($searchkey); ?>/"><?php echo ($i); ?></a></li><?php } ?>
   </ul>
        </div>
    </div>
    
    
    
     <div class="clear"></div>

      

    </div><!--/.container-->
    
    
    
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
        <button type="button" id="del" class="btn btn-danger btn-sm" value="">确定</button>
        <button type="button" id="close" class="btn btn-default btn-sm" data-dismiss="modal">取消</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">订单详情</h4>
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
            
             $("#search").click(function(){
        var key=$("#orderkey").val();
         window.location.href="/jiayi/index.php/Home/Admin/orderlist/searchkey/"+key; 
       })
            
            $(".btn-del").click(function(){
                var id=$(this).val();
         $("#del").attr("value",id);
         $("#msgModal").find(".modal-body").html("<h4>你确定要删除这个定单么<small>&nbsp;&nbsp;id:"+id+"</small></h4>");
         $("#msgModal").modal("show");
            });
            $("#del").click(function(){
        var id=$(this).val();
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/Admin/orderdel",
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
            $(".btn-detail").click(function(){
                var id=$(this).val();
        $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/Admin/orderdetail",
   data: "id="+id,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        var body="<p class=\"text-muted\">订单编号："+data.order['id']+"</p><h5 class=\"text-warning\">生成时间："+data.order['time']+"</h5><h5 class=\"text-warning\">订单用户："+
        data.order['username']+"</h5><h5 class=\"text-warning\">订单用户真实姓名："+data.order['realname']+"</h5><h5 class=\"text-danger\">价格："+data.order['price']+"元</h5><p class=\"text-primary\">详情："+data.order['description']+"</p>";
      
       
        $('#detailModal').find('.modal-body').html(body);
		$('#detailModal').modal('show');
    }
    
    else{
        $('#detailModal').find('.modal-body').html("<h4 class=\"text-danger\">查询失败，请稍后尝试或重新登入</h4>");
		$('#detailModal').modal('show');
    }
    
   }
		
		});
            })
  
});
        
    </script>
</body>
</html>