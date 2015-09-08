<?php
namespace Sadmin\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function _initialize(){
		if(!isset($_SESSION['email'])){
			$this->redirect('Sadmin/index/index');
		}
		echo $_SESSION['email'];
	}
}