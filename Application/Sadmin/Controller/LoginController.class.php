<?php
namespace Sadmin\Controller;
use Think\Controller;
class LoginController extends CommonController{
	public function edite(){
		$model = M('salon');
		$data = $model->select();
		dump($data);
	}
}