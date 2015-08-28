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
        $_POST['id'] = '1';
        $_POST['email'] = '243504330@qq.com';
        $_POST['pwd'] = 'cs1234';
      
        $this->param_isset('POST',array('id','email','pwd'));

       
        $pwd['id'] = 'sdsssss';
        $pwd['pwd'] = Filter::get_str($_POST['pwd']);
        $pwd['pwd'] = Filter::get_salt_pwd($pwd['pwd']);
        

        $this->check_param($pwd);

        $arr = D('user')->login($pwd);
        
        $data['info'] = 'SUCCESS';
        $this->ajaxReturn($data);

           
        
           
        
           
       
    	
    	

    }

    public function demo(){
    	dump(Filter::get_str('a<script>sd22a/,</script>sd'));
    }
}