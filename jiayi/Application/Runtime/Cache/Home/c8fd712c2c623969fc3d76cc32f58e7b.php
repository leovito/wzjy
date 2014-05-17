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
   <table class="table table-hover table-condensed">
        <thead>
          <tr>
            <th clas="num">编号</th>
            <th class="name">校区名字</th>
            <th class="type">联系方式</th>
            <th class="time">校长</th>
            <th class="op">操作</th>
          </tr>
        </thead>
        <tbody>
            
            <?php if(is_array($school)): $i = 0; $__LIST__ = $school;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vos["id"]); ?></td>
            <td><?php echo ($vos["schoolname"]); ?></td>
            <td><?php echo ($vos["contact"]); ?></td>
            <td><?php echo ($vos["headmaster"]); ?></td>
            <th><div class="btn-group">
  
  <button type="button" class="btn btn-danger btn-xs" value="<?php echo ($vos["id"]); ?>">删除</button>
  
</div></th>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            
          
          
        </tbody>
      </table>
   <ul class="pagination">      
 <?php $__FOR_START_213963056__=1;$__FOR_END_213963056__=$pagenumber;for($i=$__FOR_START_213963056__;$i < $__FOR_END_213963056__;$i+=1){ ?><li><a href="/jiayi/index.php/Home/Admin/articlelist/page/<?php echo ($i); ?>/"><?php echo ($i); ?></a></li><?php } ?>
   </ul>
    </div>
    
    
    
     <div class="clear"></div>

     

    </div><!--/.container-->
     <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
     
    
    <script>
        $(document).ready(function(){
  
});
        
    </script>
</body>
</html>