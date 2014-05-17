<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	$Set=M("set");
	for($i=1,$j=1;$i<=5;$i++){
	    $name="photo".$i;
	    $value=$Set->where("name='$name'")->find();
	    if($value['value']){
		$photo[$j]=$value;
		$j++;
	    }
	}
	$School=M('schoollist');
	$schoollist=$School->field('depname')->group('depname')->select();
	$depnumber=$School->group("depname")->count();
	$school=$School->select();
	$schoolnumber=$School->count();
	for($i=0;$i<$schoolnumber;$i++){
	    for($j=0;$j<$depnumber;$j++){
		if($school[$i]['depname']==$schoollist[$j]['depname']){
		    $schoollist[$j]['school'][]=$school[$i];
		}
	    }
	}
	$flink=$Set->where("name='flink'")->select();
	$Articlelist=M("articlelist");
	$gg=$Articlelist->where("type='公告'")->order("time desc")->limit(4)->field("title,id")->select();
	$this->assign("gg",$gg);
	$news=$Articlelist->where("type='嘉一新闻'")->order("time desc")->limit(6)->field("title,id,time")->select();
	$newsheader=array_shift($news);
	$this->assign("news",$news);
	$newshid=$newsheader['id'];
	$newsheader=$Articlelist->where("id='$newshid'")->field("title,id,photo,sct")->find();
	$newsheader['sct']=htmlspecialchars_decode(mb_substr($newsheader['sct'], 0, 45, 'utf-8'));
	$this->assign("newsheader",$newsheader);
	
	$dt=$Articlelist->where("type='嘉一动态'")->order("time desc")->limit(6)->field("title,id,time")->select();
	$dtheader=array_shift($dt);
	$this->assign("dt",$dt);
	$dthid=$dtheader['id'];
	$dtheader=$Articlelist->where("id='$dthid'")->field("title,id,photo,sct")->find();
	$dtheader['sct']=htmlspecialchars_decode(mb_substr($dtheader['sct'], 0, 45, 'utf-8'));
	$fc=$Articlelist->where("type='学员风采'")->order("rand()")->limit(7)->field("photo,id,title")->select();
	$this->assign("fc",$fc);
	$this->assign("dtheader",$dtheader);
	$this->assign("flink",$flink);
	$this->assign("schoollist",$schoollist);
	
	$this->assign("photo",$photo);
	$this->display();
    }

    public function school(){
	
        $Schoollist=M("schoollist");
	$schools=$Schoollist->field("schoolname,articleid,photo")->select();
	$recommends=$Schoollist->order("time desc")->field("photo,schoolname,articleid")->limit(4)->select();
	$this->assign("recommends",$recommends);
	$this->assign("schools",$schools);
        $this->display();
	
    }
    public function schoollist($articleid){
	$Articlelist=M("articlelist");
	$article=$Articlelist->where("id='$articleid'")->find();
	if($article){
	    $Schoollist=M("schoollist");
	    $schools=$Schoollist->field("schoolname,articleid,photo")->select();
	    $articlect=htmlspecialchars_decode($article['content']);
	    $this->assign("article",$article);
	    $this->assign("articlect",$articlect);
	    $this->assign("schools",$schools);
	    $this->display();
	}
	else{
	    $message='对不起，无此文章，请稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
	}
    }
    public function article($articleid){
	$Articlelist=M("articlelist");
	$article=$Articlelist->where("id='$articleid'")->find();
	if($article){
	    $this->assign("article",$article);
	    $articlect=htmlspecialchars_decode($article['content']);
	    $this->assign("articlect",$articlect);
	    $newtopic=$Articlelist->where("type='专题策划'")->order("time desc")->limit(2)->field("photo,id")->select();
	    $this->assign("newtopic",$newtopic);
	    
	    $ms=$Articlelist->where("type='教师风采'")->order("rand()")->limit(4)->field("photo,id")->select();
	    $this->assign("ms",$ms);
            
	    $gg=$Articlelist->where("type='公告'")->order("time desc")->limit(5)->field("title,id,time")->select();
	    $this->assign("gg",$gg);
	    $this->display();
	}
	else{
	    $message='对不起，无此文章，请稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
	}
    }
    public function aboutus($type="嘉一简介"){
	$Articlelist=M("articlelist");
	$article=$Articlelist->where("type='$type'")->field("title,content,time")->find();
	if($article){
	    
	    $article['content']=htmlspecialchars_decode($article['content']);
	    $this->assign("article",$article);

	    $this->display();
	}
	else{
	    $message='对不起，无此文章，请稍后再试';
                   $this->assign("message",$message);
                   $this->display('Message/error');
	}
	
    }
    public function newscenter(){
	
	$Articlelist=M("articlelist");
	
	$zt=$Articlelist->where("type='专题策划'")->order("time desc")->limit(5)->field("photo,id")->select();
	$this->assign("zt",$zt);
	
	
	$news=$Articlelist->where("type='嘉一新闻'")->order("time desc")->limit(6)->field("title,id,time")->select();
	$newsheader=array_shift($news);
	$this->assign("news",$news);
	$newshid=$newsheader['id'];
	$newsheader=$Articlelist->where("id='$newshid'")->field("title,id,photo,sct")->find();
	$newsheader['sct']=htmlspecialchars_decode(mb_substr($newsheader['sct'], 0, 45, 'utf-8'));
	$this->assign("newsheader",$newsheader);
	
	$dt=$Articlelist->where("type='嘉一动态'")->order("time desc")->limit(6)->field("title,id,time")->select();
	$dtheader=array_shift($dt);
	$this->assign("dt",$dt);
	$dthid=$dtheader['id'];
	$dtheader=$Articlelist->where("id='$dthid'")->field("title,id,photo,sct")->find();
	$dtheader['sct']=htmlspecialchars_decode(mb_substr($dtheader['sct'], 0, 45, 'utf-8'));
	$this->assign("dtheader",$dtheader);
	
	$xyfc=$Articlelist->where("type='学员风采'")->order("time desc")->limit(6)->field("title,id,time,sct")->select();
	$xyfcheader=array_shift($xyfc);
	$this->assign("xyfc",$xyfc);
	$xyfchid=$xyfcheader['id'];
	$xyfcheader=$Articlelist->where("id='$xyfchid'")->field("title,id,photo,sct")->find();
	$xyfcheader['sct']=htmlspecialchars_decode(mb_substr($xyfcheader['sct'], 0, 45, 'utf-8'));
	$this->assign("xyfcheader",$xyfcheader);
	
	$jsfc=$Articlelist->where("type='教师风采'")->order("time desc")->limit(6)->field("title,id,time,sct")->select();
	$jsfcheader=array_shift($jsfc);
	$this->assign("jsfc",$jsfc);
	$jsfchid=$jsfcheader['id'];
	$jsfcheader=$Articlelist->where("id='$jsfchid'")->field("title,id,photo,sct")->find();
	$jsfcheader['sct']=htmlspecialchars_decode(mb_substr($jsfcheader['sct'], 0, 45, 'utf-8'));
	$this->assign("jsfcheader",$jsfcheader);
	
	
	$gg=$Articlelist->where("type='公告'")->order("time desc")->limit(7)->field("title,id,time,sct")->select();
	$ggheader=array_shift($gg);
	$this->assign("gg",$gg);
	$gghid=$ggheader['id'];
	$ggheader=$Articlelist->where("id='$gghid'")->field("title,id,photo,sct")->find();
	$ggheader['sct']=htmlspecialchars_decode(mb_substr($ggheader['sct'], 0, 45, 'utf-8'));
	$this->assign("ggheader",$ggheader);
	
	
	$Set=M("set");
	for($i=1,$j=1;$i<=5;$i++){
	    $name="photo".$i;
	    $value=$Set->where("name='$name'")->find();
	    if($value['value']){
		$photo[$j]=$value;
		$j++;
	    }
	}
	$this->assign("photo",$photo);
	
	
	
	$this->display();
    }
    public function articlelist($type="嘉一动态",$page=1){
	
	    $Articlelist=M("articlelist");

	    $newtopic=$Articlelist->where("type='专题策划'")->order("time desc")->limit(2)->field("photo,id")->select();
	    $this->assign("newtopic",$newtopic);
	    
	    $ms=$Articlelist->where("type='教师风采'")->order("rand()")->limit(4)->field("photo,id")->select();
	    $this->assign("ms",$ms);
            
	    $gg=$Articlelist->where("type='公告'")->order("time desc")->limit(5)->field("title,id,time")->select();
	    $this->assign("gg",$gg);
	    
	    
	    $count=$Articlelist->where("type='$type'")->count();
	    $pagenumber=(int)($count/17)+2;
	    $this->assign("pagenumber",$pagenumber);
	    $this->assign("type",$type);
	    $list=$Articlelist->where("type='$type'")->page($page,17)->field("title,time,id,type")->select();
	    $this->assign("list",$list);
	    
	    $this->display();
	
    }
    public function classlist($grade="小学一年级"){
	 $Articlelist=M("articlelist");
	 $class=$Articlelist->where("type='课表' and sct='$grade'")->field("id,title")->select();
	 $this->assign("class",$class);
	 $this->display();
    }
    
    
}