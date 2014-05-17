<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html lang="en">
<head>
    <title>嘉一后台</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/jiayi/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/jiayi/Public/css/admin/login.css">
</head>
<body>
    <!-- Insert your content here -->
     <div class="container">

      <div class="form-signin">
        <h2 class="form-signin-heading">嘉一管理员登入界面</h2>
        <input type="text" class="form-control" placeholder="账号" required autofocus id="username">
        <input type="password" class="form-control" placeholder="密码" required id="password">
        <input type="text" class="form-control" placeholder="验证码" id="ve" required>
            <img id="verifyimg"src='/jiayi/index.php/Home/verify/verify' onclick="fleshVerify()"/>
            <div class="clear"></div>
        
        <button class="btn btn-lg btn-primary btn-block" id="loginbtn">登入</button>
      </div>

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
   url: "/jiayi/index.php/Home/Admin/adminlogin",
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
    
        window.location="/jiayi/index.php/Home/Admin/index";
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