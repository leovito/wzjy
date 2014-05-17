<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\VerifyController;
use Think\Upload;
use Think\MessageController;
class UserController extends Controller {
    public function index($type="side1"){
	if(session("?username")){
        $username=session("username");
        $Achievement=M('achievementlist');
        $Articlelist=M("articlelist");
        $achievement=$Achievement->where("username='$username'")->select();
        $this->assign("achievement",$achievement);
        $this->assign("type",$type);
        $gg=$Articlelist->where("type='公告'")->order("time desc")->limit(11)->field("title,id,time")->select();
	$this->assign("gg",$gg);
	$this->display();
        }
        else{
           
        }
    }
    public function teacherindex($type="side1"){
        if(session("?teacher")){
            $username=session("teacher");
        
        $this->assign("type",$type);
	$this->display();
        }
        else{
           
        }
    }
    public function searchstudent(){
        if(session("?teacher")){
            $username=session("teacher");
             
        
	$this->display();
        }
        else{
           
        }
    }
    public function studentinfo(){
        if(session("?teacher")){
            $username=session("teacher");
             $studentname=I('post.studentname');
             $User=M('user');
             $student=$User->where("realname='$studentname' and userclass=0")->select();
             $this->assign("student",$student);
             
        
	$this->display();
        }
        else{
           
        }
    }
    public function inputachievement(){
        
        if(session("?teacher")){
            $username=session("teacher");
            $Competition=M("goodslist");
            $competition=$Competition->where("classorcompetition='competition'")->select();
            $this->assign("competition",$competition);
            
           
	$this->display();
        }
        else{
           
        }
    }
    public function inputachievementapi(){
        if(session("?teacher")){
             
            
            $studentname=I("post.studentname");
            
            $User=M("user");
            $user=$User->where("realname='$studentname'")->select();
           
            if(count($user)>1){
                for($i=0,$n=count($user);$i<$n;$i++){
                    
                    $arr['user'][$i]['photo']=$user[$i]['photo'];
                    $arr['user'][$i]['username']=$user[$i]['username'];
                }
                $arr['state']=-1;
            }
            elseif(count($user)<1){
                $arr['state']=-2;//无此学生
            }
            else{
                $data['achievement']=I("post.achievement");
                $data['achievementname']=I("post.achievementname");
                $data['realname']=$studentname;
                $data['username']=$user[0]['username'];
                $data['time']=time();
            
                $Achievementlist=M("achievementlist");
                $Achievementlist->add($data);
                $arr['state']=1;
            }//存在学生
        }
        else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function inputachievementapiagain(){
        if(session("?teacher")){
            
            $username=I("post.username");
            $User=M("user");
            $user=$User->where("username='$username'")->find();
            $data['achievement']=I("post.achievement");
            $data['achievementname']=I("post.achievementname");
            $data['realname']=$user['realname'];
            $data['username']=$username;
            $data['time']=time();
            $Achievementlist=M("achievementlist");
            $Achievementlist->add($data);
            $arr['state']=1;
        }
        else{
        
           $arr['state']=0;
        }
        
        echo json_encode($arr);
    }
   
    public function register(){
	$this->display();
    }
    public function registerapi(){
        $verify=I('post.ve');
    
        $Verify=A("Verify");
            if($Verify->check_verify($verify)){
                 $User=M('User');
                $data['username']=I('post.username');
                $user=$User->where("username='$data[username]'")->find();
                if($user){
                   $message='对不起，账号已经存在了,换个账号试试吧';
                   $this->assign("message",$message);
                   $this->display('Message/error');
                }
                else{
                   $data['password']=md5(I('post.password'));
                    $data['realname']=I('post.realname');
                     $data['sex']=I('post.sex');
                    $data['phone']=I('post.phone');
                   $data['grade']=I('post.grade');
               
                   $User->add($data);
                   $message='注册成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
                }
                
                
                  
            }
            else{
               $message='验证码错误';
               $this->assign("message",$message);
               $this->display('Message/error');
            }
            
    }
    public function usercenter(){
         
        if(session("?username")){
            $username=session('username');
            $User=M('user');
        $user=$User->where("username='$username'")->find();
        $this->assign('user',$user);
        $this->display();
            }
            else{
            
            }
    }
    public function changeinfo(){
         
        if(session("?username")){
            $username=session('username');
            $User=M('user');
        $user=$User->where("username='$username'")->find();
        $this->assign('user',$user);
        $this->display();
            }
            else{
            
            }
    }
    public function message($type="send",$toname="")
    {
        if(session("?username")){
            $username=session('username');
            $User=M('user');
            $teacher=$User->where("userclass=1")->field("realname")->select();
            
             $this->assign("type",$type);
             $this->assign("teacher",$teacher);
             $this->assign("toname",$toname);
             $Message=M("message");
             $sendm=$Message->where("fromname='$username' and fromdel=0")->select();
             if($sendm){
             for($i=0,$n=count($sendm);$i<$n;$i++){
                $toname=$sendm[$i]['toname'];
                 $sendm[$i]['realname']=$User->where("username='$toname'")->getField("realname");
                }
             }
            $this->assign("sendm",$sendm);
          
             $receivem=$Message->where("toname='$username' and todel=0")->select();
             if($receivem){
             for($i=0,$n=count($receivem);$i<$n;$i++){
                $fromname=$receivem[$i]['fromname'];
                 $receivem[$i]['realname']=$User->where("username='$fromname'")->getField("realname");
                }
             }
             
            $this->assign("receivem",$receivem);
            
        $this->display();
            }
            else{
            
            }
    }
    public function readmsg(){
        if(session("?username")){
            $username=session("username");
            $msgid=I('post.msgid');
            $Message=M("message");
            $message=$Message->where("msgid='$msgid'")->find();
            if($message){
                if($message['fromname']==$username||$message['toname']==$username){
                    $arr['state']=1;
                    $arr['ct']=$message['content'];
                    
                }
                else{
                    $arr['state']=3;//越权访问
                }
            }
            else{
                $arr['state']=2;//消息不存在
            }
            
            
        }
        else{
         
         $arr['state']=0;   
        }
        echo json_encode($arr);
    }
    public function msgdels(){
        if(session("?username")){
            $username=session("username");
            $msgid=I('post.msgid');
            $Message=M("message");
            $message=$Message->where("msgid='$msgid'")->find();
            if($message){
                if($message['fromname']==$username){
                    $arr['state']=1;
                    $data['fromdel']=1;
                    $Message->where("msgid='$msgid'")->save($data);                    
                }
                else{
                    $arr['state']=3;//越权访问
                }
            }
            else{
                $arr['state']=2;//消息不存在
            }
            
            
        }
        else{
         
         $arr['state']=0;   
        }
        echo json_encode($arr);
    }
    public function msgdelr(){
        if(session("?username")){
            $username=session("username");
            $msgid=I('post.msgid');
            $Message=M("message");
            $message=$Message->where("msgid='$msgid'")->find();
            if($message){
                if($message['toname']==$username){
                    $arr['state']=1;
                    $data['todel']=1;
                    $Message->where("msgid='$msgid'")->save($data);                    
                }
                else{
                    $arr['state']=3;//越权访问
                }
            }
            else{
                $arr['state']=2;//消息不存在
            }
            
            
        }
        else{
         
         $arr['state']=0;   
        }
        echo json_encode($arr);
    }
    public function sendmessage(){
        if(session("?username")){
             $username=session('username');
             $teacher=I('post.receiver');
             
             $ct=I("post.messagect");
             $User=M('user');
             $uteacher=$User->where("realname='$teacher' and userclass=1")->getField("username");
             $Message=M('message');
             $data['fromname']=$username;
             $data['toname']=$uteacher;
             $data['content']=$ct;
             $data['time']=time();
             $Message->add($data);
             $message='发送成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
            }
            else{
            $message='发送失败，请重新登入';
                   $this->assign("message",$message);
                   $this->display('Message/error');
            }
    }
    public function updateinfo(){
          if(session("?username")){
             $upload = new \Think\Upload();// 实例化上传类
          $upload->maxSize   =     5120000 ;// 设置附件上传大小
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
        $upload->saveName = time().'_'.mt_rand();
        $info   =   $upload->uploadOne($_FILES["photo"]);
         if(!$info) {// 上传错误提示错误信息
          $data['photo']='/Public/Uploads/default.jpg';
          
          
          }else{// 上传成功
        $data['photo']=substr($info['savepath'], 1).$info['savename'];
       
        
        }
        $username=session('username');
            $User=M('user');
          $data['realname']=I('post.realname');
          $data['phone']=I('post.phone');
          $data['email']=I('post.email');
          $data['grade']=I('post.grade');
          $data['address']=I('post.address');
          $data['sex']=I('post.sex');
          $data['idcard']=I('post.idcard');
          $data['question']=I('post.question');
          $data['answer']=I('post.answer');
          $User->where("username='$username'")->save($data);
          $this->display('success');
            }
            else{
            $this->display('error');
            }
    }
    public function buyclass($page=1,$searchkey=""){
        
         
        if(session("?username")){
        $this->assign("searchkey",$searchkey);
            $Goodslist=M('goodslist');
        $class=$Goodslist->where("classorcompetition='class' and name like '%$searchkey%'")->page($page,15)->select();
        $this->assign('class',$class);
        $count=$Goodslist->where("classorcompetition='class' and name like '%$searchkey%'")->count();
	$pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
        $this->display();
            }
            else{
            $this->display('error');
            }
    }
     public function buycompetition($page=1,$searchkey=""){
        
        if(session("?username")){
            $this->assign("searchkey",$searchkey);
            $Goodslist=M('goodslist');
        $competition=$Goodslist->where("classorcompetition='competition' and name like '%$searchkey%' ")->page($page,15)->select();
        $this->assign('competition',$competition);
         $count=$Goodslist->where("classorcompetition='competition' and name like '%$searchkey%'")->count();
        $pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
        $this->display();
            }
            else{
                  $this->display('error');
            }
        
    }
    public function shopcar(){
        if(session("?username")){ 
            $username=session('username');
            $Shopcar=M('shoppingcar');
            $Goodlist=M('goodslist');
            $goods=$Shopcar->where("username='$username'")->select();
            $sumprice=0;
            for($i=0,$n=count($goods);$i<$n;$i++){
                $goodid=$goods[$i]['goodid'];
                $goods[$i]['price']=$Goodlist->where("id='$goodid'")->getField('price');
                $goods[$i]['name']=$Goodlist->where("id='$goodid'")->getField('name');
                $goods[$i]['type']=$Goodlist->where("id='$goodid'")->getField('type');
                $goods[$i]['time']=$Goodlist->where("id='$goodid'")->getField('time');
                $goods[$i]['school']=$Goodlist->where("id='$goodid'")->getField('school');
                $sumprice+=$goods[$i]['price'];
            
                 
                }
            $this->assign('sumprice',$sumprice);
            $this->assign('goods',$goods);
            $this->display();
            
        }
           else{
           
        }
    }
   
    public function addtoshopcar(){
        if(session("?username")){
            $Shopcar=M("Shoppingcar");
            
            $data['goodid']=I('post.id');
            $data['username']=session('username');
            $data['time']=time();
	    $good=$Shopcar->where("goodid='$data[goodid]' and username='$data[username]'")->find();
            if($good){
                //已经存在购物车中;
                $arr['state']=-1;
            }
            else{
            $Shopcar->add($data);
            
            $arr['state']=1;
            }
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function delshopcar(){
        if(session("?username")){
            $Shopcar=M("Shoppingcar");
            
            $data['goodid']=I('post.id');
            $data['username']=session('username');
           
	    $Shopcar->where("goodid='$data[goodid]' and username='$data[username]'")->delete();
            
            
            $arr['state']=1;
        
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function gooddetail(){
        if(session("?username")){
            $Goodslist=M("goodslist");
            
            $id=I('post.id');
            $good=$Goodslist->where("id='$id'")->find();
            $arr['good']=$good;
            
            
            $arr['state']=1;
        
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function login(){
        $this->display();
    }
    public function userlogin(){
         $verify=I('post.verify');
    
        $Verify=A("Verify");
            if($Verify->check_verify($verify)){
                $username=I('post.username');
                $password=I('post.password');
                 $User=M('user');
                 $user=$User->where("username='$username' and password='$password'")->find();
                 
                 if($user){
                    if($user['userclass']==1){
                        $arr['state']=11;//教师成功登入
                        session("teacher",$username);
                    }
                    else{
                    $arr['state']=1;//学生登入成功
                    session("username",$username);
                    }
                    
                 }
                 else{
                    $arr['state']=-1;//账号密码错误;
                 }
            }
            else{
             $arr['state']=0;//验证码错误;   
            }
            echo json_encode($arr);
    }
    public function downloadtest($page=1,$searchkey=""){
        if(session("?username")){
            $this->assign("searchkey",$searchkey);
	    $Testlist=M("testlist");
            $test=$Testlist->where("testname like '%$searchkey%'")->page($page,15)->order('time desc')->select();
            $this->assign('test',$test);
            $count=$Testlist->where("testname like '%$searchkey%'")->count();
            $pagenumber=(int)($count/15)+2;
	    $this->assign("pagenumber",$pagenumber);
            $this->display();
        }
           else{
           $this->display('error');
        }
    }
    
}