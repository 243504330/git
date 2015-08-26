<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\ThinkSDK\ThinkOauth;
class IndexController extends Controller {
    public function index(){

    	$this->display();
    }
    public function login(){
    	$sdk = ThinkOauth::getInstance('qq');
    	redirect($sdk->getRequestCodeURL());
    	//$this->display();
    }
}