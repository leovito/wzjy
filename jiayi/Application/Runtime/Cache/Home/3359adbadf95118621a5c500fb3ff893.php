<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="en">
<head>
    <title>嘉一后台</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/jiayi/Public/css/user/register.css">
</head>
<body>
    <!-- Insert your content here -->
     <div class="container">

      <div class="form-signin">
        <h2 class="form-signin-heading">嘉一网站用户注册界面</h2>
        <form action="/jiayi/index.php/Home/User/registerapi"  method="post" >
        <input type="text" class="form-control shortinput" placeholder="账号" required autofocus id="username" name="username">
        <input type="password" class="form-control shortinput" placeholder="密码" required id="password" name="password">
    
        <div class="clear"></div>
         <input type="text" class="form-control shortinput" placeholder="真实姓名" required id="realname" name="realname">
           
                <select class="form-control shortinput" id="sex" name="sex">
  
  <option value="男">男</option>
  <option value="女">女</option>
  
  
</select>
                <div class="clear"></div>
        
            <select class="form-control shortinput" id="grade" name="grade">
  
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
  <option value="其他">其他</option>
  
</select>
            <input type="text" class="form-control shortinput" placeholder="手机或电话" required id="phone" name="phone">
                <div class="clear"></div>
        <input type="text" class="form-control shortinput" placeholder="验证码" id="ve" name="ve" required>
            <img id="verifyimg"src='/jiayi/index.php/Home/verify/verify' onclick="fleshVerify()"/>
            <div class="clear"></div>
        
        <button class="btn btn-lg btn-primary btn-blockn shortinput" id="registerbtn">注册</button>
        </form>
          <a href="/jiayi/index.php" class="btn btn-lg btn-warning btn-blockn shortinput" id="baock">返回首页</a>
         
      </div>
        <img id="logo" src="/jiayi/Public/images/logo.png">
    </div> <!-- /container -->
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
    <script src="/jiayi/Public/js/md5.js"></script>
    <script language="JavaScript">
function fleshVerify(){
    //重载验证码
    var time = new Date().getTime();
        document.getElementById('verifyimg').src= '/jiayi/index.php/Home/verify/verify/'+time;
}
</script>
    <script>
        $(document).ready(function(){
            
            $("#loginbtn").click(function(event){
               event.preventDefault;
    var username=$("#username").val();
    var password=hex_md5($("#password").val());
    var verify=$("#ve").val();
    
    
    
        
    $.ajax({
   type: "POST",
   url: "/jiayi/index.php/Home/User/userlogin",
   data: "username="+username+"&password="+password+"&verify="+verify,
   success: function(msg){
    var data = eval("(" + msg + ")");
    if (data.state==-1) {
          $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">账号或密码错误</h4>");
        $("#msgModal").modal("show");
        fleshVerify();
       
        
    }
    else if (data.state==0) {
       
        $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">验证码错误</h4>");
        $("#msgModal").modal("show");
        fleshVerify();
        
        
   }
   else if (data.state==1) {
    
        window.location="/jiayi/index.php/Home/User/index";
   }
   else{
    
        $("#msgModal").find(".modal-body").html("<h4 id=\"msgct\" class=\"text-danger text-center\">未知错误，请稍后再试</h4>");
        $("#msgModal").modal("show");
        fleshVerify();
    
   }
   }
    
    
    
  });
    
});
            
            
            });
    </script>
</body>
</html>