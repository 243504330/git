<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\ThinkSDK\ThinkOauth;
use Org\Filter\Filter;

class IndexController extends CommonController{
   const ERR = 7000;
    public function index(){

    	
        dump($_SESSION['email']);
        $this->display();
    }
    public function login(){
    	//$sdk = ThinkOauth::getInstance('qq');
    	//dump($skd);
    	//redirect($sdk->getRequestCodeURL());
    	//$this->display();
    	//$this->param_isset('POST',array('email','pwd'));
        session('email','hahahahha');
      
       /* $this->param_isset('POST',array('email','pwd'));
     
        
        $pwd['pwd'] = Filter::get_str($_POST['pwd']);
        $pwd['pwd'] = Filter::get_salt_pwd($pwd['pwd']);
        $pwd['email']=Filter::get_str($_POST['email']);
        $this->check_param($pwd);
        $arr = D('user')->login($pwd); 

        /*if($arr === false){
            $data['status'] = self::ERR + __LINE__;
            $this->ajaxReturn($data);
        }    
        $data['status'] = 0;
        $this->ajaxReturn($data);   	*/
       

    }

    public function demo(){
        
        $this->param_isset('POST',array('email','pwd'));
    	$data['pwd'] = Filter::get_str($_POST['pwd']); 
        $data['email'] = Filter::get_str($_POST['email']);
        $this->check_param($data);
        $data['pwd'] = Filter::get_salt_pwd($data['pwd']);  
        $info = D('user')->login($data);
        if($info === false){
            $data['status'] = self::ERR + __LINE__;
            $data['info'] = "帐号或密码错误";
            $this->ajaxReturn($data);
        }
        $data['status'] = 0;
        $data['info'] ="登录成功,执行跳转";
        $this->ajaxReturn($data);
         
    }
   
}