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
    	$clean['email'] = Filter::get_str('243504330@qq.com');   	
    	$clean['pwd'] = Filter::get_str('cs1234');
    	$clean['pwd'] = Filter::get_salt_pwd($clean['pwd']);

    	$info = D('user')->get();
    	dump($info);

    	
    	

    }

    public function demo(){
    	dump(Filter::get_str('a<script>sd22a/,</script>sd'));
    }
}