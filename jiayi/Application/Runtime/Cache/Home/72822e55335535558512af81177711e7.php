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
  <span class="input-group-addon">试卷搜索</span>
  <input type="text" class="form-control" placeholder="关键字" id="testkey" name="testkey">
     <span class="input-group-btn">
        <button class="btn btn-default" type="submit" id="search">搜索</button>
      </span>
</div>
     <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>试卷名</th>
            <th>上传时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
            <?php if(is_array($test)): $i = 0; $__LIST__ = $test;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["testname"]); ?></td>
            <td><?php echo (date("y-m-d",$vo["time"])); ?></td>
            <td><div class="btn-group">
  <a class="btn btn-danger btn-xs btn-download"  href="/jiayi/Uploads<?php echo ($vo["url"]); ?>">下载</a>
  
</div></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </tbody>
      </table>
    <ul class="pagination">      
 <?php $__FOR_START_1364000332__=1;$__FOR_END_1364000332__=$pagenumber;for($i=$__FOR_START_1364000332__;$i < $__FOR_END_1364000332__;$i+=1){ ?><li><a href="/jiayi/index.php/Home/User/downloadtest/page/<?php echo ($i); ?>/searchkey/<?php echo ($searchkey); ?>/"><?php echo ($i); ?></a></li><?php } ?>
   </ul>
        </div>
    </div>
    
    
    
     <div class="clear"></div>

      <hr>


    </div><!--/.container-->
    
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
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
        $(document).ready(function(){
            $("#search").click(function(){
        var key=$("#testkey").val();
         window.location.href="/jiayi/index.php/Home/User/downloadtest/searchkey/"+key; 
       })
           
  
});
        
    </script>
</body>
</html>