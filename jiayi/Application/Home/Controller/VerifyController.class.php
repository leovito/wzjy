<?php
namespace Home\Controller;
use Think\Controller;
class VerifyController extends Controller {
   
   public function verify(){
      $config =    array(
    
    'length'      =>    4,     // 验证码位数
    
);
    $Verify = new \Think\Verify($config);
$Verify->entry();
   }
   function check_verify($code, $id = ''){
      $config =    array(
    
    'length'      =>    4,     // 验证码位数
    
);
    $verify = new \Think\Verify($config);
    return $verify->check($code, $id);
}
}