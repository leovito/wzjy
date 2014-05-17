<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en">
<!--<![endif]-->
<head>
    <title>嘉一教育</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
     <link rel="stylesheet" href="/jiayi/Public/css/index/custom.css">
     <link rel="stylesheet" href="/jiayi/Public/css/index/index.css"> 

        
        <script src="/jiayi/Public/js/modernizr.custom.17475.js"></script>
</head>

<body>
      
    <div class="header">
        
        <div class="topbar">
            
        <div class="logo">
            <img src="/jiayi/Public/images/logo.png">
        </div>
        
        <div class="topc">
            

    <ul id="breadcrumb">
  <li><a href="#"><span class="icon icon-home"> </span></a></li>
  <li><a href="/jiayi/index.php/Home/Index"><span class="glyphicon glyphicon-home"> </span> &nbsp;&nbsp;&nbsp;首页&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  
  <li><a href="/jiayi/index.php/Home/Index/newscenter"><span class="glyphicon glyphicon-bullhorn"> </span> &nbsp;&nbsp;&nbsp;新闻中心&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="/jiayi/index.php/Home/Index/classlist"><span class="glyphicon glyphicon-list-alt"> </span>&nbsp;&nbsp;&nbsp;嘉一课表&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="/jiayi/index.php/Home/Index/aboutus"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;&nbsp;走进嘉一&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="/jiayi/index.php/Home/Index/school"><span class="glyphicon glyphicon-inbox"> </span> &nbsp;&nbsp;&nbsp;嘉一分校&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>


        </div>
        
        </div><!-- end topbar-->
        
        
    </div><!--end header-->
    
  <div class="clear"></div>
        <hr class="tophr">
    <div class="scontainer">
        <div class="sct">
            
        <div class="amainct">
             <div class="articletitle">
                <h3><?php echo ($article["title"]); ?></h3>
                <h5 class="text-muted">时间：<?php echo (date("y-m-d",$article["time"])); ?>&nbsp;&nbsp;&nbsp;文章类型：<?php echo ($article["type"]); ?>&nbsp;&nbsp;&nbsp;来源：嘉一教育</h5>
             </div>
             <hr class="articlehr">
                <div class="articlect">
                     <?php echo ($articlect); ?>
                </div>
          
            
            
        </div><!-- end smainct-->
        <div class="amainbar">
            <div class="barnews">
                <div class="barnewstitle">
                    最新公告
                </div>
                <div class="barnewsct">
                    <ul>
                        <?php if(is_array($gg)): $i = 0; $__LIST__ = $gg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vogg): $mod = ($i % 2 );++$i;?><li><span class="glyphicon glyphicon-bullhorn"></span><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vogg["id"]); ?>"><?php echo ($vogg["title"]); ?></a><?php echo (date("y-m-d",$vogg["time"])); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </ul>
                </div>
            </div><!-- end barnews-->
            
            <div class="barnews">
                <div class="barnewstitle">
                    最新专题
                </div>
                <div class="barnewsct">
                    <?php if(is_array($newtopic)): $i = 0; $__LIST__ = $newtopic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vont): $mod = ($i % 2 );++$i;?><div class="barztblock">
                      <a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vont["id"]); ?>">
                        <img class="ntimg" src="/jiayi/Uploads<?php echo ($vont["photo"]); ?>">
                      </a>  
                    </div>
<button type="button" class="btn btn-default btn-to">
  <span class="glyphicon glyphicon-chevron-right"></span> 
</button>
<div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    
                </div>
            </div><!-- end barnews-->
            
            
            
            
            <div class="barnews">
                <div class="barnewstitle">
                    嘉一名师
                </div>
                <div class="barnewsct">
                    <?php if(is_array($ms)): $i = 0; $__LIST__ = $ms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voms): $mod = ($i % 2 );++$i;?><div class="barmsblock">
                      <a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($voms["id"]); ?>">
                        <img class="msimg" src="/jiayi/Uploads<?php echo ($voms["photo"]); ?>">
                      </a>  
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                 
                 <div class="clear"></div>  
                    
                </div>
            </div><!-- end barnews-->
            
        </div>
        
        </div>
        
    </div>
     
     
     
     <hr class="tophr">
    <div class="footer">
       <div class="ftct">
       
        
      <div class="ft">
        <img id="footlogo" src="/jiayi/Public/images/logosingle.png">
      </div>
      
      <div class="ft">
        <h4>关于我们</h4>
        <h5 class="aulink"><a href="/jiayi/index.php/Home/Index/aboutus/type/嘉一简介">嘉一简介</a></h5>
        <h5 class="aulink"><a href="/jiayi/index.php/Home/Index/aboutus/type/企业文化">企业文化</a></h5>
        <h5 class="aulink"><a href="/jiayi/index.php/Home/Index/aboutus/type/办学理念">办学理念</a></h5>
        <h5 class="aulink"><a href="/jiayi/index.php/Home/Index/aboutus/type/联系我们">联系我们</a></h5>
      </div>
      
      <div class="ft">
        <h4>友情链接</h4>
        <h5 class="text-primary"><a href="http://www.zjedu.gov.cn/gb/index1.html">浙江省教育厅</a></h5>
        <h5 class="text-primary"><a href="http://www.wzer.net/">温州教育网</a></h5>
        <h5 class="text-primary"><a href="http://www.wzjky.net/">温州科研网</a></h5>
        <h5 class="text-primary"><a href="http://www.yje.cn/">永嘉教育局</a></h5>
      </div>
      
      <div class="ft">
        <h4>联系方式</h4>
        <h5 class="text-muted">电话 400-809-5822</h5>
        <h5 class="text-muted">电话 400-809-5822</h5>
      </div>
      
      <div class="bft">
        <h4>理念</h4>
        <p>真正的强者不一定是多有力，或者多有钱，而是他对别人多有帮助。责任可以让我们将事做完整，爱可以让我们将事情做好。</p>
        <span class="sublink">ICP备案：湘ICP备12005327号</span>
       <span class="sublink">技术支持：leovito科技</span>
      </div>
      
      <div class="clear"></div>
      <div class="link">
       
       
      </div>
       </div><!--end  ftct-->
       
    </div><!-- end footer-->

    
    <script type="text/javascript" src="/jiayi/Public/js/jquery-1.10.2.js"></script>
    <script src="/jiayi/Public/js/bootstrap.min.js"></script>
        
</body>
</html>