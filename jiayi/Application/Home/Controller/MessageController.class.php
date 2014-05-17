<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function success($message=""){
        $this->assign("message",$message);
	$this->display();
    }
    public function error($message=""){
	
    
        $this->assign("message",$message);
	$this->display();
    }
}