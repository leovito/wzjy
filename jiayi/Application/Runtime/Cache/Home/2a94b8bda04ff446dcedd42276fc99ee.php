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
     <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
  
      <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/jiayi/Public/css/index/elastislide.css">
     <link rel="stylesheet" href="/jiayi/Public/css/index/custom.css">
     <link rel="stylesheet" href="/jiayi/Public/css/index/index.css"> 
    <link href="/jiayi/Public/css/index/common.css" rel="stylesheet" type="text/css" />
   <link href="/jiayi/Public/css/index/timetabs.css" rel="stylesheet" type="text/css" />
        
        <script src="/jiayi/Public/js/modernizr.custom.17475.js"></script>
</head>

<body>
      
    <div class="header">
        <div class="topad">
            <img imgsrc="/jiayi/Public/images/topad.gif">
        </div>
        

   
        
        <div class="topbar">
            
        <div class="logo">
            <img imgsrc="/jiayi/Public/images/logo.png">
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
    <div class="ct">
        
        
        
        <div class="lb">
    
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
    <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vop): $mod = ($i % 2 );++$i;?><div class="item">
            <a href="<?php echo ($vop["avalue"]); ?>"><img src='/jiayi/Uploads<?php echo ($vop["value"]); ?>' style="width: 725px;height: 280px;"></a>
      
      <div class="carousel-caption">
       
      </div> 
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    
   </div>

 </div>
   </div>

        
        
        <div class="login">
            
            <a id="re" class="btn btn-primary" role="button" href="/jiayi/Home/User/register">注册</a>
            
            <div class="tab">
            <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#gg" data-toggle="tab">嘉一公告</a></li>
            <li><a href="#loginpanel" data-toggle="tab">用户登入</a></li>
             </ul>

        <div class="tab-content">
            
  <div class="tab-pane active" id="gg">
    <ul>
        <?php if(is_array($gg)): $i = 0; $__LIST__ = $gg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vogg): $mod = ($i % 2 );++$i;?><li><span class="glyphicon glyphicon-volume-down"></span><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vogg["id"]); ?>"><?php echo ($vogg["title"]); ?></a></li>
        <div class="clear"></div>
        <hr><?php endforeach; endif; else: echo "" ;endif; ?>
        
    </ul>
  </div>
  
  <div class="tab-pane" id="loginpanel">
  <input id="username" type="text" class="form-control" placeholder="用户名">
    <input id="password" type="password" class="form-control" placeholder="密码">
   <button class="btn btn-default" id="loginbtn">立即登入</button>
   <div class="clear"></div>
   <a id="fgpass" href="">忘记密码</a>
  </div>
  
  
</div>

</div><!-- login-->
              
            <button id="discuss" class="btn btn-warning"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;家长互动论坛</button>
            
        </div>
            
            
        <div class="clear"></div>
        
        <div class="navigate">
            <ul>
                <li>最新课堂</li>
                <li>嘉一名师</li>
                <li>嘉一校区</li>
                <li>诚聘英才</li>
                <li>联系我们</li>
                <li>嘉一党建</li>
                <li>嘉一名人堂</li>
                <li>活动</li>
                <li>嘉一名人堂</li>
                <li>活动</li>
            </ul>
            <div class="clear"></div>
        </div>
        
        <div class="contact">
            
            <div class="cway">
                <a href="http://wpa.qq.com/msgrd?v=3&uin=511912708&site=qq&menu=yes"><img src="/jiayi/Public/images/qq.png">
                <h5 class="text-success qq">QQ在线咨询 511912708</h5>
                </a>
            </div>
            
            <div class="cway">
                <img src="/jiayi/Public/images/weibo.png">
                    <h5 class="text-warning weibo">关注嘉一微博&nbsp;&nbsp;&nbsp;</h5>
            </div>
            
            <div class="cwayb">
                <div class="cwayb1">
                <img src="/jiayi/Public/images/weixin.png">
                    <h5 class="weixin">关注嘉一微信</h5>
                    <div class="clear"></div>
                    <h6 class="text-muted">（扫一扫右边二维码）</h6>
                </div>
                <div class="cwayb2">
                    <img src="/jiayi/Public/images/weixin.jpg">
                </div>
            </div>
        </div><!-- end contact-->
        
        <div class="clear"></div>

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
                <h4 class="text-success">嘉一焦点新闻<a href="/jiayi/index.php/Home/Index/articlelist/type/嘉一新闻"><span  class="glyphicon glyphicon-list"></span>&nbsp;查看更多</a></h4>
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
    
    
    
    <!-- Elastislide Carousel -->
    <div class="container demo-1" id="fc">
        <h4 class="text-warning subtitle">风采展示</h4>
				<ul id="carousel" class="elastislide-list">
                                    <?php if(is_array($fc)): $i = 0; $__LIST__ = $fc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vofc): $mod = ($i % 2 );++$i;?><li><a href="/jiayi/index.php/Home/Index/article/articleid/<?php echo ($vofc["id"]); ?>"><img src="/jiayi/Uploads<?php echo ($vofc["photo"]); ?>" alt="<?php echo ($vofc["title"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
					
                                        
				</ul>
    </div>
				<!-- End Elastislide Carousel -->
     
     <dl class="tabs" id="tabs1">
                <?php if(is_array($schoollist)): $i = 0; $__LIST__ = $schoollist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><dt><?php echo ($vos["depname"]); ?></dt>
                    <dd>
                       <?php if(is_array($vos['school'])): $i = 0; $__LIST__ = $vos['school'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i; echo ($sub["name"]); ?>
        
         <div class="xq">
                    <img src="/jiayi/Public/images/xq1.jpg" class="xqphoto">
                <div class="xqcontact">
                   <h4><a href="/jiayi/index.php/Home/Index/schoollist/articleid/<?php echo ($sub["articleid"]); ?>" class="glyphicon glyphicon-inbox">&nbsp;<?php echo ($sub["schoolname"]); ?></a></h4>
                    <h5>地址：<?php echo ($sub["address"]); ?></h5>
                    
                </div>
                <div class="clear"></div>
                <h5 class="text-primary">电话：<?php echo ($sub["contact"]); ?> </h5> 
                    
                    </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                    </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                
     </dl>
        
     <div class="flink">
        <h4 class="text-warning subtitle">友情链接</h4>
        <ol class="breadcrumb">
            
            
            
            <?php if(is_array($flink)): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vof): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vof["value"]); ?>"><?php echo ($vof["avalue"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  
  
</ol>
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
    <script src="/jiayi/Public/js/jquery.timetabs.min.js" type="text/javascript"></script>

    <script src="/jiayi/Public/js/jquerypp.custom.js"></script>
    <script SRC="/jiayi/Public/js/jquery.elastislide.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
       
       $( '#carousel' ).elastislide();
       $(".carousel-inner").find(".item").first().addClass("active");
     
	$('.carousel').carousel('cycle');
       jQuery('dl#tabs1').addClass('enabled').timetabs({
		defaultIndex: 0,
		interval: 6500,
		continueOnMouseLeave: true,
		animated: false,
		animationSpeed: 6500
	});
	
	// animation preview
	jQuery('input[name=animation]').click(function() {
		$this = jQuery(this);
		jQuery.fn.timetabs.switchanimation($this.val());
	});
       
    });
    </script>
    <script>
 function lazyloadimg(){
    imgs=document.getElementsByTagName("img");
    imgsnum=imgs.length;
    for(i=0;i<imgsnum;i++){
        if((typeof(imgs[i].src)=='undefined'||imgs[i].src=='')&&imgs[i].getAttribute('imgsrc')!=null){
            imgs[i].src=imgs[i].getAttribute('imgsrc');
        }
    }
 }
lazyloadimg();
 </script>
   
</body>
</html>