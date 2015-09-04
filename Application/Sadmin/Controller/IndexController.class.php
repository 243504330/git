<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\ThinkSDK\ThinkOauth;
use Org\Filter\Filter;

class IndexController extends CommonController{
    public function index(){

    	$this->display();
    }
    public function login(){
    	//$sdk = ThinkOauth::getInstance('qq');
    	//dump($skd);
    	//redirect($sdk->getRequestCodeURL());
    	//$this->display();
    	//$this->param_isset('POST',array('email','pwd'));
        $this->param_isset('POST',array('id','email','pwd'));
     
        $pwd['id'] = Filter::get_str($_POST['id']);
        $pwd['pwd'] = Filter::get_str($_POST['pwd']);
        $pwd['pwd'] = Filter::get_salt_pwd($pwd['pwd']);
        $pwd['email']=Filter::get_str($_POST['email']);
        $this->check_param($pwd);
        $arr = D('user')->login($pwd);      
        $data['info'] = 'SUCCESS';
        $this->ajaxReturn($data);   	
       

    }

    public function demo(){
        //dump($_POST);
        //echo "hellow ordl";

         $this->param_isset('POST',array('id','email','pwd'));
         $data['id'] = Filter::get_str($_POST['id']);
    	 $data['pwd'] = Filter::get_str($_POST['pwd']);
         $data['pwd'] = Filter::get_salt_pwd($data['pwd']);
         $data['email'] = Filter::get_str($_POST['email']);
         $this->check_param($data);
         $data['status'] = 0;
        $this->ajaxReturn($data);
         
    }
   
}