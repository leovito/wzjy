<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\VerifyController;
use Think\Upload;
use Think\Image; 
use Think\MessageController;
class AdminController extends Controller {
    public function index($type="side1"){
        if(session("?admin")&&session("admin")=="1"){
            $Class=M("goodslist");
            $class=$Class->where("classorcompetition='class'")->field("name")->select();
            $this->assign("class",$class);
            $Set=M("set");
            $vip=$Set->where("name='vip'")->getField("value");
            $this->assign("vip",$vip);
            $this->assign("type",$type);
            $Fcompetition=M("fcompetition");
            $fcompetition=$Class->where("classorcompetition='competition'")->field("name")->select();
            for($i=0,$n=count($fcompetition);$i<$n;$i++){
                $fname=$fcompetition[$i]['name'];
                $isexit=$Fcompetition->where("name='$fname'")->find();
                if($isexit){
                    unset($fcompetition[$i]);
                }
                
                }
            $this->assign("fcompetition",$fcompetition);
   
	$this->display();
        }
        else{
           $this->display('Admin/error');
        }
    }
    public function login(){
        $this->display();
    }
    
    public function articlelist($page=1,$searchkey=""){
         if(session("?admin")&&session("admin")=="1"){
            $this->assign("searchkey",$searchkey);
        $Articlelist=M("articlelist");
        $article=$Articlelist->where("title like '%$searchkey%'")->field("id,title,type,time")->page($page,15)->order("time desc")->select();
        $this->assign("article",$article);
        $count=$Articlelist->where("title like '%$searchkey%'")->count();
	$pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
	$this->display();
        }
        else{
          $this->display('Admin/error');
        }
    }
    public function article($id=0){
         if((session("?admin"))&&(session("admin")=="1")&&($id!=0)){
        $Articlelist=M("articlelist");
        $article=$Articlelist->where("id='$id'")->find();
        $article['content']=htmlspecialchars_decode($article['content']);
        $this->assign("article",$article);
	$this->display();
        }
        else{
           $this->display('Admin/error');
        }
    }
    public function classlist($page=1,$searchkey=""){
         if(session("?admin")&&session("admin")=="1"){
        $this->assign("searchkey",$searchkey);
        $Class=M("goodslist");
        $class=$Class->where("classorcompetition='class' and name like '%$searchkey%'")->page($page,15)->order("time desc")->select();
        $this->assign('class',$class);
        $count=$Class->where("classorcompetition='class' and name like '%$searchkey%'")->count();
	$pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
        
	$this->display();
        }
        else{
           $this->display('Admin/error');
        }
    }
    public function competitionlist($page=1,$searchkey=""){
        if(session("?admin")&&session("admin")=="1"){
        $this->assign("searchkey",$searchkey);
        $Class=M("goodslist");
        $competition=$Class->where("classorcompetition='competition' and name like '%$searchkey%'")->page($page,15)->order("time desc")->select();
        $this->assign('competition',$competition);
        $count=$Class->where("classorcompetition='competition' and name like '%$searchkey%'")->count();
        $pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
	$this->display();
        }
        else{
          $this->display('Admin/error');
        }
    }
    public function achievementlist($page=1,$searchkey=""){
        if(session("?admin")&&session("admin")=="1"){
        $this->assign("searchkey",$searchkey);
        $Achievement=M("achievementlist");
        $achievement=$Achievement->where("achievementname like '%$searchkey%'")->page($page,15)->order('time desc')->select();
        $this->assign('achievement',$achievement);
        $count=$Achievement->where("achievementname like '%$searchkey%'")->count();
        $pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
	$this->display();
        }
        else{
           $this->display('Admin/error');
        }
    }
    public function orderlist($page=1,$searchkey=""){
        if(session("?admin")&&session("admin")=="1"){
        $this->assign("searchkey",$searchkey);
        $Order=M("orderlist");
        $order=$Order->where("username like '%$searchkey%'")->page($page,15)->order('time desc')->select();
        $this->assign('order',$order);
        $count=$Order->where("username like '%$searchkey%'")->count();
        $pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
	$this->display();
        }
        else{
           $this->display('Admin/error');
        }
    }
    public  function schoollist($page=1){
         if(session("?admin")&&session("admin")=="1"){ 
          $Schoollist=M("schoollist");
          $school=$Schoollist->page($page,15)->select();
          $this->assign("school",$school);
          $count=$Schoollist->count();
          $pagenumber=(int)($count/15)+2;
	  $this->assign("pagenumber",$pagenumber);
	  $this->display();
        }
        else{
           $this->display('Admin/error');
        }
    }

    public function testlist($page=1,$searchkey=""){
         if(session("?admin")&&session("admin")=="1"){ 
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
           $this->display('Admin/error');
        }
    }
    public function testdel(){
        if(session("?admin")&&session("admin")=="1"){ 
        
	    $Testlist=M("testlist");
            $id=I('post.id');
            $Testlist->where("id='$id'")->delete();
            $arr['state']=1;
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function orderdel(){
        if(session("?admin")&&session("admin")=="1"){ 
        
	    $Orderlist=M("ORDERlist");
            $id=I('post.id');
            $Testlist->where("id='$id'")->delete();
            $arr['state']=1;
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function orderdetail(){
       if(session("?admin")&&session("admin")=="1"){ 
            $Orderlist=M("orderlist");
            $User=M("user");
            
            $id=I('post.id');
            $order=$Orderlist->where("id='$id'")->find();
            $order['time']=date('Y-m-d H:i:s',$order['time']);
            $order['realname']=$User->where("username='$order[username]'")->getField("realname");
            $arr['order']=$order;
            
            
            
            $arr['state']=1;
        
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function userdel(){
        if(session("?admin")&&session("admin")=="1"){ 
        
	    $User=M("user");
            $id=I('post.id');
            $User->where("id='$id'")->delete();
            $arr['state']=1;
        }
           else{
           $arr['state']=0;
        }
        echo json_encode($arr);
    }
    public function adminlogin(){
        
        $verify=I('post.verify');
    
        $Verify=A("Verify");
            if($Verify->check_verify($verify)){
                $username=I('post.username');
                $password=I('post.password');
                 $Set=M('set');
                 $adminname=$Set->where("name='adminname'")->getField("value");
                 
                 $adminpassword=$Set->where("name='adminpassword'")->getField("value");
                 
                 if($adminname==$username&&$adminpassword==$password){
                    $arr['state']=1;//登入成功
                    session("admin","1");
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
    public function articlepush(){
        if(session("?admin")&&session("admin")=="1"){
        $data['sct']=I("post.sct");
        $data['title']=I('post.title');
        $data['content']=js_unescape(I('post.content'));
        $data['type']=I('post.type');
        $data['time']=time();
	$Articlelist=M("articlelist");
        $Articlelist->add($data);
        $arr['state']=1;
        }
        else{
           $arr['state']=0;
        }
         echo json_encode($arr);
    }
    public function addfcompetition(){
       if(session("?admin")&&session("admin")=="1"){
            $data['name']=I("post.fcompetition");
            $data['time']=I("post.fctime");
            $data['score']=I("post.fcscore");
            $data['school']=I("post.fcschool");
            $data['introduction']=I("post.fcdes");
            $Fcompetition=M("fcompetition");
            $Fcompetition->add($data);
            $message='设置成功，只有该竞赛分数达到&nbsp;&nbsp'.$data['score']."&nbsp;&nbsp;的学生才会在竞赛进阶栏目中出现该竞赛报名选项";
                   $this->assign("message",$message);
                   $this->display('Message/success');
        }
        else{
          $this->display('Admin/error');
        } 
        
        
        
        
        
    }
    public function fclist($page=1,$searchkey=""){
        if(session("?admin")&&session("admin")=="1"){
        $this->assign("searchkey",$searchkey);
        $Fcompetition=M("fcompetition");
        $fclist=$Fcompetition->where("name like '%$searchkey%'")->page($page,15)->order("id")->select();
        $this->assign('fclist',$fclist);
        $count=$Fcompetition->where("name like '%$searchkey%'")->page($page,15)->count();
        $pagenumber=(int)($count/15)+2;
	$this->assign("pagenumber",$pagenumber);
	$this->display();
        }
        else{
          $this->display('Admin/error');
        }
    }
    public function articledel(){
        if(session("?admin")&&session("admin")=="1"){ 
        $data['id']=I('post.id');
        
	$Articlelist=M("articlelist");
        $Articlelist->where("id='$data[id]'")->delete();
        $arr['state']=1;
        }
        else{
           $arr['state']=0;
        }
         echo json_encode($arr);
    }
    public function articleedit(){
        if(session("?admin")&&session("admin")=="1"){ 
        $data['id']=I('post.id');
        $data['content']=js_unescape(I('post.content'));
	$Articlelist=M("articlelist");
        $Articlelist->where("id='$data[id]'")->save($data);
        $arr['state']=1;
        }
        else{
           $arr['state']=0;
        }
         echo json_encode($arr);
    }
    public function upimg($title=""){
        if(session("?admin")&&session("admin")=="1"&&title!=""){ 
        $upload = new \Think\Upload();// 实例化上传类
          $upload->maxSize   =     5120000 ;// 设置附件上传大小
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
        $upload->saveName = time().'_'.mt_rand();
        $Articlelist=M("articlelist");
        
        $article=$Articlelist->where("title='$title'")->find();
    if($article){
        
         $info   =   $upload->uploadOne($_FILES['side2articlep']);
         if(!$info) {// 上传错误提示错误信息
          $adata['photo']='/Public/Uploads/default.png';
          
          
          }else{// 上传成功
        $image = new \Think\Image();
      
$image->open("./Uploads".substr($info['savepath'], 1).$info['savename']);
$image->thumb(650, 650)->save("./Uploads".substr($info['savepath'], 1).$info['savename']);
        $adata['photo']=substr($info['savepath'], 1).$info['savename'];
        
        
        }
        $Articlelist->where("title='$title'")->save($adata);  
        $arr['state']=1;
         
    }
    else{
        $arr['state']=0;
    }
	
        
        }
        else{
           $arr['state']=0;
        }
        json_encode($arr);
    }
    public function changeimg($id){
        if(session("?admin")&&session("admin")=="1"){
            $upload = new \Think\Upload();// 实例化上传类
          $upload->maxSize   =     5120000 ;// 设置附件上传大小
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
        $upload->saveName = time().'_'.mt_rand();
        $Set=M("set");
        $name="photo".$id;
        $adata['avalue']=I('post.photourl');
        $info   =   $upload->uploadOne($_FILES[$name]);
         if(!$info) {// 上传错误提示错误信息
          $adata['value']='/Public/Uploads/default.png';
           $message='设置失败，请注意上传文件格式和大小';
                   $this->assign("message",$message);
                   $this->display('Message/error');
          
          }else{// 上传成功
        $image = new \Think\Image();
      
$image->open("./Uploads".substr($info['savepath'], 1).$info['savename']);
$image->thumb(650, 650)->save("./Uploads".substr($info['savepath'], 1).$info['savename']);
        $adata['value']=substr($info['savepath'], 1).$info['savename'];
        $message='设置成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
        
        }
        $Set->where("name='$name'")->save($adata);
        
        
    
        }
        else{
          $this->display('Admin/error');
        }
         
    }
    public function uptest(){
        if(session("?admin")&&session("admin")=="1"){
            
          $upload = new \Think\Upload();// 实例化上传类
          $upload->maxSize   =     51200000 ;// 设置附件上传大小
          $upload->exts      =     array('zip', 'rar', '7zip');// 设置附件上传类型
          $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
          $upload->saveName = time().'_'.mt_rand();
        

         $info   =   $upload->uploadOne($_FILES['test']);
         if(!$info) {// 上传错误提示错误信息
         
                   $message="上传文件失败，原因：".$upload->getError();
                   $this->assign("message",$message);
                   $this->display('Message/error');
          
          }else{// 上传成功
            $Testlist=M("testlist");
          $data['url']=substr($info['savepath'], 1).$info['savename'];
          $data['time']=time();
          $data['testname']=I('post.testname');
          $Testlist->add($data);
            
            $message='上传成功，您可以在试卷列表中找到该试卷';
                   $this->assign("message",$message);
                   $this->display('Message/success');
        }
        }
        else{
            
            $message='对不起，请重新登入或者稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
            
        }
        
        
    
        
        
    }
    public function addschool(){
        if(session("?admin")&&session("admin")=="1"){
          $upload = new \Think\Upload();// 实例化上传类
          $upload->maxSize   =     5120000;// 设置附件上传大小
          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
          $upload->saveName = time().'_'.mt_rand();
        

          $info   =   $upload->uploadOne($_FILES['schoolp']);
         if(!$info) {// 上传错误提示错误信息
                   $message="上传图片失败，原因：".$upload->getError();
                   $this->assign("message",$message);
                   $this->display('Message/error');
          
          
          }
          else{// 上传成功
            $Schoollist=M("schoollist");
          $data['photo']=substr($info['savepath'], 1).$info['savename'];
          $data['time']=time();
          $data['schoolname']=I('post.schoolname');
          $data['headmaster']=I('post.headmaster');
          $data['depname']=I('post.depname');
          $data['contact']=I('post.contact');
          $data['address']=I('post.address');
          $data['articleid']=I('post.articleid');
          $Schoollist->add($data);
           $message='添加学校成功，您可以在校区列表中找到该校区';
                   $this->assign("message",$message);
                   $this->display('Message/success');
           }
        }
        else{
            $message='对不起，请重新登入或者稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
            
        }
    }
    public function addclass(){
        if(session("?admin")&&session("admin")=="1"){
          
          
          $Goodslist=M("goodslist");
          $data['name']=I('post.classname');
          $data['price']=I('post.classprice');
          $data['type']=I('post.classtype');
          $data['classorcompetition']="class";
          $data['tolevel']=I('post.classrank');
          $data['time']=I('post.classtime');
          $data['introduction']=I('post.classdes');
          $Goodslist->add($data);
          $message='添加课程成功，您可以在课程列表中找到该课程';
                   $this->assign("message",$message);
                   $this->display('Message/success');
           
        }
        else{
            $message='对不起，请重新登入或者稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function addcompetition(){
        if(session("?admin")&&session("admin")=="1"){
          
          
          $Goodslist=M("goodslist");
          $data['name']=I('post.competitionname');
          $data['price']=I('post.competitionprice');
          $data['type']=I('post.competitiontype');
          $data['classorcompetition']="competition";
          $data['tolevel']=I('post.competitionrank');
          $data['time']=I('post.competitiontime');
          $data['introduction']=I('post.competitiondes');
          $Goodslist->add($data);
          $message='添加竞赛成功，您可以在竞赛列表中找到该竞赛';
                   $this->assign("message",$message);
                   $this->display('Message/success');
        }
        else{
            $message='对不起，请重新登入或者稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function about(){
        if(session("?admin")&&session("admin")=="1"){
          
          
          $this->display();
        }
        else{
            
        }
    }
    public function searchuser(){
        if(session("?admin")&&session("admin")=="1"){
          
          $data['realname']=I('post.username');
          $User=M('user');
          $user=$User->where("realname='$data[realname]'")->select();
          $this->assign('user',$user);
          
          $this->display();
          
        }
        else{
            $this->display('Admin/error');
        }
    }
    public function searchorder(){
        if(session("?admin")&&session("admin")=="1"){
          
          $data['id']=I('post.orderid');
          $Buy=M('buy');
          $buy=$Buy->where("id='$data[id]'")->find();
          $this->assign('buy',$buy);
          
          $this->display();
          
        }
        else{
            $this->display('Admin/error');
        }
    }
    public function groupclass(){
        if(session("?admin")&&session("admin")=="1"){
          
         $class=I("post.select2");
         $data['gclassname']=I("post.gclassname");
         $Class=M("groupclass");
         $exit=$Class->where("gclassname='$data[gclassname]'")->select();
         if($exit){
             $message='对不起，该组合课程名已经存在了,换个名字试试吧';
                   $this->assign("message",$message);
                   $this->display('Message/error');
         }
         else{
            
          for($i=0,$n=count($class);$i<$n;$i++){
            $data['gclass']=$class[$i];
            $data['price']=I("post.gclassprice");
           
            $Class->add($data);
             
          }
           $message='生成成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
         }
        
          
        }
        else{
             $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function changevipdis(){
        if(session("?admin")&&session("admin")=="1"){
            $data['value']=I("post.vipdis");
            $Set=M("set");
            $Set->where("name='vip'")->save($data);
            $message='修改vip优惠折扣成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function downvip(){
        if(session("?admin")&&session("admin")=="1"){
            $username=I("post.downvipname");
            $User=M("user");
            $data['userclass']=0;
            $user=$User->where("username='$username'")->find();
            if($user){
                $User->where("username='$username'")->save($data);
                $message='降级vip成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
            }
            else{
                $message='对不起，无此账号';
                   $this->assign("message",$message);
                   $this->display('Message/error');
            }
            
            
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function upvip(){
        if(session("?admin")&&session("admin")=="1"){
            $username=I("post.upvipname");
            $User=M("user");
            $data['userclass']=3;
            $user=$User->where("username='$username'")->find();
            if($user){
                $User->where("username='$username'")->save($data);
                $message='升级vip成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
            }
            else{
                $message='对不起，无此账号';
                   $this->assign("message",$message);
                   $this->display('Message/error');
            }
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function upteacher(){
        if(session("?admin")&&session("admin")=="1"){
            $username=I("post.upteachername");
            $User=M("user");
            $data['userclass']=2;
            $user=$User->where("username='$username'")->find();
            if($user){
                $User->where("username='$username'")->save($data);
                $message='修改为教师角色成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
            }
            else{
                $message='对不起，无此账号';
                   $this->assign("message",$message);
                   $this->display('Message/error');
            }
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function adduser(){
        if(session("?admin")&&session("admin")=="1"){
                $User=M('User');
                $data['username']=I('post.addusername');
                $user=$User->where("username='$data[username]'")->find();
                if($user){
                   $message='对不起，账号已经存在了,换个账号试试吧';
                   $this->assign("message",$message);
                   $this->display('Message/error');
                }
                else{
                   $data['password']=md5($data['username']);
                   $data['realname']=I('post.addrealname');
                   $data['sex']=I('post.addsex');
                   $data['phone']=I('post.addphone');
                   $data['grade']=I('post.addgrade');
                   $data['birthday']=I('post.addbirthyear')."年".I('post.addbirthmonth')."月".I('post.addbirthday')."日";
                   $User->add($data);
                   $message='注册成功';
                   $this->assign("message",$message);
                   $this->display('Message/success');
                }
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function addlink(){
         if(session("?admin")&&session("admin")=="1"){
                $Set=M("set");
                $data['name']='flink';
                $data['value']=I('post.flink');
                $data['avalue']=I('post.flinkname');
                $data['description']="网站底部友情链接";
                $Set->add($data);
                $message='添加成功';
                $this->assign("message",$message);
                $this->display('Message/success');
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function flink(){
         if(session("?admin")&&session("admin")=="1"){
                $Set=M("set");
                $flinks=$Set->where("name='flink'")->select();
                
                $this->assign("flinks",$flinks);
                $this->display();
        }
        else{
            $message='对不起，请重新登入或稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
        }
    }
    public function flinkdel(){
        if(session("?admin")&&session("admin")=="1"){
                $Set=M("set");
                $id=I('post.id');
                $flinks=$Set->where("id='$id'")->delete();
                $arr['state']=1;
                
                
        }
        else{
            $arr['state']=-1;
        }
        echo json_encode($arr);
    }
    
    
}