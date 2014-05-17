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
         <div class="container">
            
            
            
            
            <div class="ncheader1">
                
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
    <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vop): $mod = ($i % 2 );++$i;?><div class="item">
            <a href="<?php echo ($vop["avalue"]); ?>"><img src='/jiayi/Uploads<?php echo ($vop["value"]); ?>' style="width: 400px;height: 240px;"></a>
      
      <div class="carousel-caption">
       
      </div> 
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    
   </div>

 </div> 
                
                
            </div>
            <div class="ncheader2">
                <div class="nch2t">
                    <h4 class="text-primary text-center">祝贺思齐育才校长叶丽萍老师入围2013年千金优雅女性</h4>
                </div>
                <div class="nch2ct">
                    <div class="nch2ctimg">
                        <img src="/jiayi/Uploads<?php echo ($ggheader["photo"]); ?>">
                    </div>
                    <div class="nch2cttext"><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($ggheader["id"]); ?>">
                        <?php echo ($ggheader["sct"]); ?>
                    </a>
                    </div>
                    <div class="clear"></div>
                    <div class="nch2ctlist">
                        <?php if(is_array($gg)): $i = 0; $__LIST__ = $gg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vogg): $mod = ($i % 2 );++$i;?><div class="listitem">
                            <h5><span class="glyphicon glyphicon-calendar text-muted">&nbsp;<?php echo (date("y-m-d",$vogg["time"])); ?></span><span class="lispan"><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vogg["id"]); ?>"><?php echo ($vogg["title"]); ?></a></span></h5>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                       
                        
                    </div>
                  
                </div>
            </div>
            <div class="clear"></div>
            
            <div class="zt">
                <div class="ztbar">
                   <h4 class="text-success">嘉一最新专题<a href="/jiayi/index.php/Home/Index/articlelist/type/专题策划"><span  class="glyphicon glyphicon-list"></span>&nbsp;查看更多</a></h4> 
                </div>
                <div class="ztct">
                    <?php if(is_array($zt)): $i = 0; $__LIST__ = $zt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vozt): $mod = ($i % 2 );++$i;?><div class="ztblock">
                       <a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vozt["id"]); ?>"><img src="/jiayi/Uploads<?php echo ($vozt["photo"]); ?>"></a> 
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            
            
            <div class="news">
        <div class="news1">
            <div class="news1bar">
                <h4 class="text-success">嘉一最新动态<a href="/jiayi/index.php/Home/Index/articlelist/type/嘉一动态"><span  class="glyphicon glyphicon-list"></span>&nbsp;查看更多</a></h4>
            </div>
            <div class="news1ct">
                <div class="cttop">
                    <img src="/jiayi/Uploads<?php echo ($newsheader["photo"]); ?>">
                        <div class="cttopct">
                            <h4 class="text-success text-center"><?php echo ($newsheader["title"]); ?></h4>
                            <p class="text-muted">
                                <?php echo ($newsheader["sct"]); ?><a class="glyphicon glyphicon-chevron-right" href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($newsheader["id"]); ?>">&nbsp;查看详情</a>
                            </p>
                        </div>
                </div>
                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vonews): $mod = ($i % 2 );++$i;?><div class="newslist">
                    <h4><span class="glyphicon glyphicon-bullhorn text-muted">&nbsp;<?php echo (date("y-m-d",$vonews["time"])); ?></span><span class="newslistt"><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vonews["id"]); ?>"><?php echo ($vonews["title"]); ?></a></span></h4>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </div>
        </div>
        <div class="news2">
            <div class="news2bar">
                <h4 class="text-success">嘉一焦点新闻<a href="articlelist/type/嘉一新闻"><span  class="glyphicon glyphicon-list"></span>&nbsp;查看更多</a></h4>
            </div>
            <div class="news2ct">
                 <div class="cttop">
                    <img src="/jiayi/Uploads<?php echo ($dtheader["photo"]); ?>">
                        <div class="cttopct">
                            <h4 class="text-success text-center"><?php echo ($dtheader["title"]); ?></h4>
                            <p class="text-muted">
                                <?php echo ($dtheader["sct"]); ?><a class="glyphicon glyphicon-chevron-right" href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($dtheader["id"]); ?>">&nbsp;查看详情</a>
                            </p>
                        </div>
                </div>
                  <?php if(is_array($dt)): $i = 0; $__LIST__ = $dt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vodt): $mod = ($i % 2 );++$i;?><div class="newslist">
                    <h4><span class="glyphicon glyphicon-bullhorn text-muted">&nbsp;<?php echo (date("y-m-d",$vodt["time"])); ?></span><span class="newslistt"><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vodt["id"]); ?>"><?php echo ($vodt["title"]); ?></a></span></h4>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            
        </div>
        <div class="clear"></div>
    </div><!-- end news-->
    
    
    
    <div class="news">
        <div class="news1">
            <div class="news1bar">
                <h4 class="text-success">嘉一学员风采<a href="articlelist/type/学员风采"><span  class="glyphicon glyphicon-list"></span>&nbsp;查看更多</a></h4>
            </div>
            <div class="news1ct">
                <div class="cttop">
                    <img src="/jiayi/Uploads<?php echo ($xyfcheader["photo"]); ?>">
                        <div class="cttopct">
                            <h4 class="text-success text-center"><?php echo ($xyfcheader["title"]); ?></h4>
                            <p class="text-muted">
                                <?php echo ($xyfcheader["sct"]); ?><a class="glyphicon glyphicon-chevron-right" href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($xyfcheader["id"]); ?>">&nbsp;查看详情</a>
                            </p>
                        </div>
                </div>
                <?php if(is_array($xyfc)): $i = 0; $__LIST__ = $xyfc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voxyfc): $mod = ($i % 2 );++$i;?><div class="newslist">
                    <h4><span class="glyphicon glyphicon-bullhorn text-muted">&nbsp;<?php echo (date("y-m-d",$voxyfc["time"])); ?></span><span class="newslistt"><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($voxyfc["id"]); ?>"><?php echo ($voxyfc["title"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($voxyfc["sct"]); ?></a></span></h4>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </div>
        </div>
        <div class="news2">
            <div class="news2bar">
                <h4 class="text-success">嘉一教师风采<a href="articlelist/type/教师风采"><span  class="glyphicon glyphicon-list"></span>&nbsp;查看更多</a></h4>
            </div>
            <div class="news2ct">
                 <div class="cttop">
                    <img src="/jiayi/Uploads<?php echo ($jsfcheader["photo"]); ?>">
                        <div class="cttopct">
                            <h4 class="text-success text-center"><?php echo ($jsfcheader["title"]); ?></h4>
                            <p class="text-muted">
                                <?php echo ($jsfcheader["sct"]); ?><a class="glyphicon glyphicon-chevron-right" href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($jsfcheader["id"]); ?>">&nbsp;查看详情</a>
                            </p>
                        </div>
                </div>
                  <?php if(is_array($jsfc)): $i = 0; $__LIST__ = $jsfc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vojsfc): $mod = ($i % 2 );++$i;?><div class="newslist">
                    <h4><span class="glyphicon glyphicon-bullhorn text-muted">&nbsp;<?php echo (date("y-m-d",$vojsfc["time"])); ?></span><span class="newslistt"><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vojsfc["id"]); ?>"><?php echo ($vojsfc["title"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vojsfc["sct"]); ?></a></span></h4>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            
        </div>
        <div class="clear"></div>
    </div><!-- end news-->
    
    
    
    
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
    
    <script type="text/javascript">
    $(window).load(function() {
       
    
       $(".carousel-inner").find(".item").first().addClass("active");
     
	$('.carousel').carousel('cycle');
       
       
    });
    </script>
        
</body>
</html>