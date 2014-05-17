<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
            <link href="/jiayi/Public/js/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
                
             <link rel="stylesheet" href="/jiayi/Public/css/admin/index.css">
                
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

     <div class="side" >
        <div class="list-group" id="sidect">
            <a href="/jiayi/index.php/Home/admin/index/type/side1" class="list-group-item" id="side1bar">全局设置</a>
            <a href="/jiayi/index.php/Home/admin/index/type/side2" class="list-group-item" id="side2bar">文章发布</a>
            <a href="/jiayi/index.php/Home/admin/index/type/side3" class="list-group-item" id="side3bar">首页图片设置</a>
            
            <a href="/jiayi/index.php/Home/admin/index/type/side4" class="list-group-item" id="side4bar">入学测试</a>
            <a href="/jiayi/index.php/Home/admin/index/type/side5" class="list-group-item" id="side5bar">校区设置</a>
             <a href="/jiayi/index.php/Home/admin/index/type/side6" class="list-group-item" id="side6bar">课程发布</a>
              <a href="/jiayi/index.php/Home/admin/index/type/side7" class="list-group-item" id="side7bar">竞赛发布</a>
               <a href="/jiayi/index.php/Home/admin/index/type/side8" class="list-group-item" id="side8bar">学生信息查询</a>
               <a href="/jiayi/index.php/Home/admin/index/type/side9" class="list-group-item" id="side9bar">订单信息查询</a>
               <a href="/jiayi/index.php/Home/admin/index/type/side10" class="list-group-item" id="side10bar">竞赛查询</a>
               <a href="/jiayi/index.php/Home/admin/index/type/side11" class="list-group-item" id="side11bar">添加会员</a>
               <a href="/jiayi/index.php/Home/admin/index/type/side12" class="list-group-item" id="side12bar">友情链接</a>
               <a href="/jiayi/index.php/Home/admin/index/type/side13" class="list-group-item" id="side12bar">决赛设置</a>
          
          
            
          </div>
     </div>
     
     
          <div class="ct" id="side1">
            
   <form action="/jiayi/index.php/Home/Admin/upteacher" method="post">     
  <div class="input-group" id="tclass">
    <span class="input-group-addon">教师账号</span>
      <input type="text" class="form-control"  placeholder="请输入需要提升等级的账号" name="upteachername">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">提升</button>
      </span>
    
    </div>
  <span class="text-warning">输入用户账号，将其等级提升为教师（具有查看、编辑班级成员信息、选课信息）功能</span>
   </form>
  
  <form action="/jiayi/index.php/Home/Admin/upvip" method="post"> 
  <div class="input-group" id="sclass">
    <span class="input-group-addon">学生vip升级</span>
      <input type="text" class="form-control"  placeholder="请输入需要提升为vip的账号" name="upvipname">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">提升</button>
      </span>
    
    </div>
  
  <span class="text-warning">输入用户账号，将其等级提升为vip购买课程具有vip价格</span>
  </form>
  
  <form action="/jiayi/index.php/Home/Admin/downvip" method="post"> 
  <div class="input-group" id="class">
    <span class="input-group-addon">降级</span>
      <input type="text" class="form-control"  placeholder="请输入需要降级的账号" name="downvipname">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">降级</button>
      </span>
    
    </div>
  
  <span class="text-warning">输入用户账号，将其等级降级为普通用户</span>
  </form>
  
  
  
   <form action="/jiayi/index.php/Home/Admin/changevipdis" method="post">
  <div class="input-group" id="vip">
   <span class="input-group-addon">vip折扣</span>
      <input type="text" class="form-control"  placeholder="<?php echo ($vip); ?>" name="vipdis">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">修改</button>
      </span>
      
    </div>
   </form>
  <span class="text-warning">这里是vip用户的折扣价格，请注意折扣为0-10的数，如7折请填写7 7.5折，即填写7.5即可</span>
  
  
  <form action="/jiayi/index.php/Home/Admin/groupclass" method="post">
  <div id="classgroup">
    <div class="mselect">
        <span class="text-warning">所有课程</span>
    <select multiple id="select1" style="width:200px;height:160px;" class="form-control" >
        <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voclass): $mod = ($i % 2 );++$i;?><option value="<?php echo ($voclass["name"]); ?>"><?php echo ($voclass["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
   
   
  </select>
    <button class="btn btn-default btn-xs" id="addclass" type="button">将所选项添加到右边&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
    </div>
  <div class="mselect">
     <span class="text-warning">组合课程</span>
  <select multiple style="width:200px;height:160px;" class="form-control" name="select2[]" id="select2">
  
  </select>
  
  </div>
  <div class="mselect">
    <span class="text-warning">组合课程总价格</span>
    <input class="form-control" id="gclassprice" name="gclassprice">
        <span class="text-warning">组合课程名</span>
    <input class="form-control" id="gclassname" name="gclassname">
    <button class="btn btn-primary" type="submit"  id="gclasspricebtn">生成组合课程</button>
  </div>
  </div><!-- end classgroup-->
  </form>
          </div>
          
          

        
          
     <div class="ct" id="side2">
          
        <div class="input-group">
  <span class="input-group-addon">文章标题</span>
  <input type="text" class="form-control" placeholder="文章标题，输入请少于20字" id="side2articlet"/>
  
</div>
        <span class="text-warning">若文章类型为课表，标题请填写具体课程名称，正文部分编辑课程介绍</span>
        <div class="input-group">
  <span class="input-group-addon">文章内容简介</span>
  <input type="text" class="form-control" placeholder="文章内容简介,文章类型为‘嘉一动态’或‘嘉一新闻’或‘公告’必填，其他类型可不填" id="side2articlesct" name="side2articlesct"/>
</div>
        <div class="input-group">
  <span class="input-group-addon">文章焦点图片</span>
  <input type="file" class="file" id="side2articlep" name="side2articlep"/>
    <span class="text-warning">请选着长宽比例接近1.5:1的图片，若文章为公告类型，无需选择图片,教师风采类文章请选择1:1图片</span>
</div>
         <div class="input-group">
  <span class="input-group-addon" >文章类型</span>
  <select class="form-control" id="type">
  <option selected value="嘉一新闻">嘉一新闻</option>
  <option value="教师风采">教师风采</option>
  <option id="kb" value="课表">课表</option>
  <option value="最新竞赛">最新竞赛</option>
  <option value="最新教材">最新教材</option>
  <option value="学员风采">学员风采</option>
  <option value="嘉一动态">嘉一动态</option>
  <option value="专题策划">专题策划</option>
  <option value="校区简介">校区简介</option>
  <option value="公告">公告</option>
  <option value="其他文章">其他文章</option>
  <option class="sop" value="嘉一简介">嘉一简介</option>
  <option class="sop" value="企业文化">企业文化</option>
  <option class="sop" value="办学理念">办学理念</option>
  <option class="sop" value="嘉一荣誉">嘉一荣誉</option>
  <option class="sop" value="发展历程">发展历程</option>
  <option class="sop" value="教学成果">教学成果</option>
  <option class="sop" value="联系我们">联系我们</option>
</select>
  
</div>
         
          <div class="input-group" id="kbdiv">
  <span class="input-group-addon" >面向年级</span>
  <select class="form-control" id="kbgrade">
  <option value="小学一年级">小学一年级</option>
  <option value="小学二年级">小学二年级</option>
  <option value=”小学三年级">小学三年级</option>
  <option value="小学四年级">小学四年级</option>
  <option value="小学五年级">小学五年级</option>
  <option value="小学六年级">小学六年级</option>
  <option value="初中一年级">初中一年级</option>
  <option value="初中二年级">初中二年级</option>
  <option value="初中三年级">初中三年级</option>
  <option value="高中一年级">高中一年级</option>
  <option value="高中二年级">高中二年级</option>
  <option value="高中三年级">高中三年级</option>
  <option value="其他年级">其他年级</option>
  
</select>
  
</div>
         <span class="text-warning">请注意橙色类型文章原则上是单篇，请在文章列表中查看是否已经存在该类型文章，若存在，请不要再发布</span>
        <div class="aticle">
            
 <script type="text/plain" id="myEditor" style="width:750px;height:500px;">
    <p>正文</p>
</script>
        </div>
        <button class="btn btn-primary btn-push" id="pushside2">提交</button>
        
         
     </div>
   
     <div class="ct" id="side3">
        
       <form action="/jiayi/index.php/Home/Admin/changeimg/id/1" enctype="multipart/form-data" method="post" >

<div class="input-group">

  <span class="input-group-addon">轮播图片一</span>
  <input type="file" class="file" name="photo1" id="photo1">
    
    <span class="text-warning">请选着长宽比例接近1.5:1的图片</span>
    <div class="clear"></div>
    <input type="text" name="photourl"  class="form-control lbphoto" placeholder="请输入图片链接地址，http开头">
        
 
    <button class="btn btn-primary btn-photo" id="pushside31" value="1" type="submit">提交</button>
    
</div>
</form>
       <form action="/jiayi/index.php/Home/Admin/changeimg/id/2" enctype="multipart/form-data" method="post" >

<div class="input-group">
  <span class="input-group-addon">轮播图片二</span>
  <input type="file" class="file" name="photo2" id="photo2">
    <span class="text-warning">请选着长宽比例接近1.5:1的图片</span>
    <div class="clear"></div>
    <input type="text" name="photourl"  class="form-control lbphoto" placeholder="请输入图片链接地址，http开头">
    <button class="btn btn-primary btn-photo" id="pushside32" value="2" type="submit">提交</button>
</div>
</form>
         <form action="/jiayi/index.php/Home/Admin/changeimg/id/3" enctype="multipart/form-data" method="post" >

<div class="input-group">
  <span class="input-group-addon">轮播图片三</span>
  <input type="file" class="file" name="photo3" id="photo3">
    <span class="text-warning">请选着长宽比例接近1.5:1的图片</span>
    <div class="clear"></div>
    <input type="text" name="photourl"  class="form-control lbphoto" placeholder="请输入图片链接地址，http开头">
    <button class="btn btn-primary btn-photo" id="pushside33" value="3" type="submit">提交</button>
</div>
</form>
         <form action="/jiayi/index.php/Home/Admin/changeimg/id/4" enctype="multipart/form-data" method="post" >

<div class="input-group">
  <span class="input-group-addon">轮播图片四</span>
  <input type="file" class="file" name="photo4" id="photo4">
    <span class="text-warning">请选着长宽比例接近1.5:1的图片</span>
    <div class="clear"></div>
    <input type="text" name="photourl"  class="form-control lbphoto" placeholder="请输入图片链接地址，http开头">
    <button class="btn btn-primary btn-photo" id="pushside34" value="4" type="submit">提交</button>
</div>
</form>
        <form action="/jiayi/index.php/Home/Admin/changeimg/id/5" enctype="multipart/form-data" method="post" >

<div class="input-group">
  <span class="input-group-addon">轮播图片五</span>
  <input type="file" class="file" name="photo5" id="photo5">
    <span class="text-warning">请选着长宽比例接近1.5:1的图片</span>
    <div class="clear"></div>
    <input type="text" name="photourl"  class="form-control lbphoto" placeholder="请输入图片链接地址，http开头">
    <button class="btn btn-primary btn-photo" id="pushside35" value="5" type="submit">提交</button>
</div>
</form>
        
     </div>
    
   
    

    <div class="ct" id="side4">
        <form action="/jiayi/index.php/Home/Admin/uptest" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">试卷名</span>
  <input type="text" class="form-control" placeholder="试卷名，输入请少于20字" id="testname" name="testname">
</div>
        
        <input type="file" name='test' id='test'>
            <h5 class="text-warning">请选择压缩格式的文件上传，列如.rar .zip格式的文件</h5>
        <button class="btn btn-primary btn-push" id="pushside4" type="submit">上传</button>
        <hr>
      </form>
     </div><!-- end side4-->
     
     <div class="ct" id="side5">
        <form action="/jiayi/index.php/Home/Admin/addschool" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">校区名</span>
  <input type="text" class="form-control" placeholder="校区名，输入请少于20字 " id="shcoolname" name="schoolname">
</div>
        <div class="input-group shortinput">
  <span class="input-group-addon">行政区名</span>
  <input type="text" class="form-control" placeholder="行政区名，输入请少于5字，如鹿城区 " id="depname" name="depname">
</div>
        <div class="input-group shortinput">
  <span class="input-group-addon">联系方式</span>
  <input type="text" class="form-control" placeholder="联系方式，输入请少于20字 " id="contact" name="contact">
</div>
        <div class="input-group shortinput">
  <span class="input-group-addon">校长</span>
  <input type="text" class="form-control" placeholder="校长名" id="headmaster" name="headmaster">
</div>
        
        <div class="input-group shortinput">
  <span class="input-group-addon">校区地址</span>
  <input type="text" class="form-control" placeholder="校区地址，输入请少于20字 " id="address" name="address">
</div>
        
         <div class="input-group shortinput">
  <span class="input-group-addon">校区介绍文章</span>
  <input type="text" class="form-control" placeholder="请填写校区文章编号，此项可不填 " id="articleid" name="articleid">
    
</div>
        <h5 class="text-warning ">校区文章可以在左侧文章发布中选择校区文章类型发布，在顶部导航条的"文章列表"中查看该文章编号</h5>
        <div class="input-group">
  <span class="input-group-addon">校区图片</span>
  <input type="file" class="file" id="schoolp" name="schoolp">
    <span class="text-warning">请选着长宽比例接近1.5:1的图片</span>
</div>
        
        <button class="btn btn-primary btn-push" id="pushside5" type="submit">提交</button>
        <hr>
        </form>
        
    
     </div> <!-- end side5-->
     
     <div class="ct" id="side6">
        <form action="/jiayi/index.php/Home/Admin/addclass" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">课程名</span>
  <input type="text" class="form-control" placeholder="课程名，输入请少于20字" id="classname" name="classname">
</div>
        
        <div class="input-group shortinput">
  <span class="input-group-addon">课程类别</span>
  <input type="text" class="form-control" placeholder="课程类别" id="classtype" name="classtype">
</div>
        
        <div class="input-group shortinput">
  <span class="input-group-addon">课程时间</span>
  <input type="text" class="form-control" placeholder="具体课程时间" id="classtime" name="classtime">
</div>
        <div class="input-group shortinput">
            <span class="input-group-addon" >描述</span>
            <textarea class="form-control" rows=5 placeholder="此处填写课程描述，请不不要使用特殊字符" id="classdes" name="classdes"></textarea>
         </div>
        
         <div class="input-group shortinput">
  <span class="input-group-addon">价格</span>
  <input type="text" class="form-control" placeholder="此门课程单价，请填写数字" id="classprice" name="classprice">
    
</div>
         
         
         <div class="input-group shortinput" >
  <span class="input-group-addon">面向年级</span>
  <select class="form-control" id="classrank" name="classrank">
    <option value="1" selected>小学一年级</option>
    <option value="2">小学二年级</option>
    <option value="3">小学三年级</option>
    <option value="4">小学四年级</option>
    <option value="5">小学五年级</option>
    <option value="6">小学六年级</option>
    <option value="7">初中一年级</option>
    <option value="8">初中二年级</option>
    <option value="9">初中三年级</option>
    <option value="10">高中一年级</option>
    <option value="11">高中二年级</option>
    <option value="12">高中三年级</option>
    <option value="0">其他</option>
  </select>
    
</div>
       
        
        <button class="btn btn-primary btn-push" id="pushside6" type=“submit">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side6-->
     
     
     
     
     
      <div class="ct" id="side7">
        <form action="/jiayi/index.php/Home/Admin/addcompetition" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">竞赛名</span>
  <input type="text" class="form-control" placeholder="课程名，输入请少于20字" id="competitionname" name="competitionname">
</div>
        
        <div class="input-group shortinput">
  <span class="input-group-addon">竞赛类别</span>
  <input type="text" class="form-control" placeholder="课程类别" id="competitiontype" name="competitiontype">
</div>
        
        <div class="input-group shortinput">
  <span class="input-group-addon">竞赛时间</span>
  <input type="text" class="form-control" placeholder="具体课程时间" id="competitiontime" name="competitiontime">
</div>
        
         <div class="input-group shortinput">
  <span class="input-group-addon">报名价格</span>
  <input type="text" class="form-control" placeholder="此门竞赛单价，请填写数字" id="competitionprice" name="competitionprice">
    
</div>
         <div class="input-group shortinput">
            <span class="input-group-addon">描述</span>
            <textarea class="form-control" rows=5 placeholder="此处填写课程描述，请不不要使用特殊字符" id="competitiondes" name="competitiondes"></textarea>
         </div>
         
         
         <div class="input-group shortinput" >
  <span class="input-group-addon">面向年级</span>
  <select class="form-control" id="competitionrank" name="competitionrank">
    <option value="1">小学一年级</option>
    <option value="2">小学二年级</option>
    <option value="3">小学三年级</option>
    <option value="4">小学四年级</option>
    <option value="5">小学五年级</option>
    <option value="6">小学六年级</option>
    <option value="7">初中一年级</option>
    <option value="8">初中二年级</option>
    <option value="9">初中三年级</option>
    <option value="10">高中一年级</option>
    <option value="11">高中二年级</option>
    <option value="12">高中三年级</option>
    <option value="0">其他</option>
  </select>
    
</div>
        
       
        
        <button class="btn btn-primary btn-push" id="pushside7" type="submit">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side7-->
     
     
     
      <div class="ct" id="side8">
        <form action="/jiayi/index.php/Home/Admin/searchuser" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">姓名</span>
  <input type="text" class="form-control" placeholder="姓名，输入请少于20字" id="username" name="username">
    
</div>
        <h5 class="text-warning ">输入用户真实姓名查询用户</h5>
     
       
        
        <button class="btn btn-primary btn-push" id="pushside8">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side8-->
     <div class="ct" id="side9">
        <form action="/jiayi/index.php/Home/Admin/searchorder" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">订单编号</span>
  <input type="text" class="form-control" placeholder="订单编号，纯数字" id="orderid" name="orderid">
    
</div>
        <h5 class="text-warning ">输入订单编号查询该订单详情</h5>
        <button class="btn btn-primary btn-push" id="pushside9">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side9-->
    
    <div class="ct" id="side10">
        <form action="/jiayi/index.php/Home/Admin/searchachievement" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">学生姓名</span>
  <input type="text" class="form-control" placeholder="学生姓名" id="realname" name="realname">
    
</div>
        <h5 class="text-warning ">输入学生姓名查询竞赛成绩</h5>
        <button class="btn btn-primary btn-push" id="pushside10">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side10-->
     
     <div class="ct" id="side11">
        <form action="/jiayi/index.php/Home/Admin/adduser" enctype="multipart/form-data" method="post" >
        <div class="input-group shortinput">
  <span class="input-group-addon">用户名</span>
  <input type="text" class="form-control" placeholder="用户名" id="addusername" name="addusername">
        </div>
        <div class="input-group shortinput">
  <span class="input-group-addon">真实姓名</span>
  <input type="text" class="form-control" placeholder="真实姓名" id="addrealname" name="addrealname">
        </div>
       
        
        <div class="input-group shortinput">
 <span class="input-group-addon">手机</span>
  <input type="text" class="form-control" placeholder="手机" id="addphone" name="addphone">
    
</div>
        
        <div class="input-group shortinput" >
  <span class="input-group-addon">年级</span>
  <select class="form-control" id="addgrade" name="addgrade">
    <option value="小学一年级">小学一年级</option>
    <option value="小学二年级">小学二年级</option>
    <option value="小学三年级">小学三年级</option>
    <option value="小学四年级">小学四年级</option>
    <option value="小学五年级">小学五年级</option>
    <option value="小学六年级">小学六年级</option>
    <option value="初中一年级">初中一年级</option>
    <option value="初中二年级">初中二年级</option>
    <option value="初中三年级">初中三年级</option>
    <option value="高中一年级">高中一年级</option>
    <option value="高中二年级">高中二年级</option>
    <option value="高中三年级">高中三年级</option>
    <option value="其他">其他</option>
  </select>
        </div>
        
        <div class="input-group shortinput" >
  <span class="input-group-addon">性别</span>
  <select class="form-control" id="addsex" name="addsex">
    <option value="男" selected>男</option>
    <option value="女">女</option>
    
  </select>
        </div>
        
        
        <div class="input-group middleinput" >
  <span class="input-group-addon">出生日期</span>
  <select class="form-control" id="addbirthyear" name="addbirthyear">
    <option value=1992>1992</option>
    <option value=1993>1993</option>
    <option value=1994>1994</option>
    <option value=1995>1995</option>
    <option value=1996>1996</option>
    <option value=1997>1997</option>
    <option value=1998>1998</option>
    <option value=1999>1999</option>
    <option value=2000>2000</option>
    <option value=2001>2001</option>
    <option value=2002>2002</option>
    <option value=2003>2003</option>
    <option value=2004>2004</option>
    <option value=2005>2005</option>
    <option value=2006>2006</option>
    <option value=2007>2007</option>
    <option value=2008>2008</option>
    <option value=2009>2009</option>
    
  </select>
  <span class="input-group-addon">年</span>
  <select class="form-control" id="addbirthmonth" name="addbirthmonth">
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
    <option value=5>5</option>
    <option value=6>6</option>
    <option value=7>7</option>
    <option value=8>8</option>
    <option value=9>9</option>
    <option value=10>10</option>
    <option value=11>11</option>
    <option value=12>12</option>
    
    
  </select>
  <span class="input-group-addon">月</span>
  <select class="form-control" id="addbirthday" name="addbirthday">
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
    <option value=5>5</option>
    <option value=6>6</option>
    <option value=7>7</option>
    <option value=8>8</option>
    <option value=9>9</option>
    <option value=10>10</option>
    <option value=11>11</option>
    <option value=12>12</option>
    <option value=13>13</option>
    <option value=14>14</option>
    <option value=15>15</option>
    <option value=16>16</option>
    <option value=17>17</option>
    <option value=18>18</option>
    <option value=19>19</option>
    <option value=20>20</option>
    <option value=21>21</option>
    <option value=22>22</option>
     <option value=23>23</option>
    <option value=24>24</option>
    <option value=25>25</option>
    <option value=26>26</option>
    <option value=27>27</option>
    <option value=28>28</option>
    <option value=29>29</option>
     <option value=30>30</option>
    <option value=31>31</option>
    
    
  </select>
  <span class="input-group-addon">日</span>
  
  
        </div>
        
        <h5 class="text-warning ">添加新会员，初始密码和账号相同，账号建议设置成会员手机号以方便识别</h5>
        <button class="btn btn-primary btn-push" id="pushside11">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side11-->
     
     
     
     <div class="ct" id="side12">
        <form action="/jiayi/index.php/Home/Admin/addlink" enctype="multipart/form-data" method="post" >
            <div class="input-group shortinput">
  <span class="input-group-addon">网址名称</span>
  <input type="text" class="form-control" placeholder="友情链接网址名称，例如百度，新浪" id="flinkname" name="flinkname">
    
</div>
        <div class="input-group middleinput">
  <span class="input-group-addon">网址</span>
  <input type="text" class="form-control" placeholder="友情链接网址，http://开头，例如http://www.baidu.com" id="flink" name="flink">
    
</div>
        <h5 class="text-warning ">输入网址添加友情链接，在页面顶部友情链接列表课查看或删除</h5>
     
       
        
        <button class="btn btn-primary btn-push" id="pushside12">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side12-->
     
     
     <div class="ct" id="side13">
        <form action="/jiayi/index.php/Home/Admin/addfcompetition" enctype="multipart/form-data" method="post" >
           <div class="input-group shortinput" >
  <span class="input-group-addon">决赛选择</span>
  <select class="form-control" id="fcompetition" name="fcompetition">
    <?php if(is_array($fcompetition)): $i = 0; $__LIST__ = $fcompetition;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vofc): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vofc["name"]); ?>"><?php echo ($vofc["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
        </div>
        <div class="input-group shortinput">
  <span class="input-group-addon">决赛资格分数</span>
  <input type="text" class="form-control" placeholder="决赛资格分数，请填写整数" id="fcscore" name="fcscore">
    
</div>
         <div class="input-group shortinput">
  <span class="input-group-addon">决赛报名价格</span>
  <input type="text" class="form-control" placeholder="决赛报名价格，请填写整数" id="fcprice" name="fcprice">
    
</div>
         <div class="input-group shortinput">
  <span class="input-group-addon">决赛地点</span>
  <input type="text" class="form-control" placeholder="决赛地点" id="fcschool" name="fcschool">
    
</div>
         <div class="input-group shortinput">
  <span class="input-group-addon">竞赛时间</span>
  <input type="text" class="form-control" placeholder="具体课程时间" id="fctime" name="fctime">
</div>
         
         <div class="input-group shortinput">
            <span class="input-group-addon">描述</span>
            <textarea class="form-control" rows=5 placeholder="此处填写竞赛描述，请不不要使用特殊字符" id="fcdes" name="fcdes"></textarea>
         </div>
        
     
       
        
        <button class="btn btn-primary btn-push" id="pushside13">提交</button>
        <hr>
        
        </form>
    
     </div> <!-- end side13-->
    
    
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
    
    <script src="/jiayi/Public/js/ajaxfileupload.js"></script>
    
    <script>
        
        $(document).ready(function(){
      
       
       var um = UM.getEditor("myEditor");
       $("#<?php echo ($type); ?>").show();
       $("#<?php echo ($type); ?>bar").addClass("active");
       $("#addclass").click(function(){
        
         $('#select1 option:selected').appendTo('#select2');
         
        
       });
       $("#pushside2").click(function(){
        var title=$("#side2articlet").val();
        var sct=$("#side2articlesct").val();
        var type=$("#type  option:selected").text();
        if (type=="课表") {
            sct=$("#kbgrade option:selected").text();
        }
         var content = [];
         content.push(UM.getEditor('myEditor').getContent());
         $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/Admin/articlepush",
   data: "title="+title+"&content="+escape(content)+"&type="+type+"&sct="+sct,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==1) {
        if ($("#side2articlep").val()=="") {
            
              $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">文章发布成功，没有上传封面图片</h4>");
		$('#msgModal').modal('show');
        }
        else{
        $.ajaxFileUpload
                     (
                       {
                            url:'/jiayi/index.php/Home/Admin/upimg/title/'+title,
                            secureuri:false,
                            fileElementId:'side2articlep',
                            dataType: 'text',
                            success: function (data)
                                  {
                                    $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">文章发布成功</h4>");
		$('#msgModal').modal('show');
                                  },
                                  error: function (data)            
                            {
              $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">文章发布成功，封面图片上传失败(请注意大小和格式）</h4>");
		$('#msgModal').modal('show');            
                                 }
                               }
                         )

        }
    }
    else{
        $('#msgModal').find('.modal-body').html("<h4 class=\"text-danger\">文章发布失败，请稍后尝试或重新登入</h4>");
		$('#msgModal').modal('show');
    }
    
   }
		
		});
        
        
       });
       
    $("#type").change(function(){
       
       if($(this).find("option:selected").text()=="课表"){
        $("#kbdiv").show();
       }
       else{
        $("#kbdiv").hide();
       }
    })
      
       
        
       
});
       
        
    </script>
</body>
</html>