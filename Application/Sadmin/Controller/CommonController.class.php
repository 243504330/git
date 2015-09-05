<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\Filter\Filter;

class CommonController extends Controller{
	const ERR = 800000;
	const FOO = "参数不能为空";

	/*public function _initialize(){
		

		
	}*/

	protected function param_isset($method,$fields){
		
		if(empty($fields)){
			$data['info'] = '内容不能为空';
			$data['status'] = self::ERR+__LINE__;
			$this->ajaxReturn($data);
		}

		$temp = $method == 'POST' ? $_POST : $_GET;
		
		if(!is_array($fields)){
			$fields = array($fields);
		}
		foreach($fields as $v){
			
			if(!isset($temp[$v])){
				$data['info'] = '缺少参数---'.$v;
				$data['status']	= self::ERR + __LINE__;	
				$this->ajaxReturn($data);
			}
		}

		return true;
	}

	protected function check_param($param){
		/*if(isset($param['id'])){
			if(strlen($param['id'])>18){
				$data['info'] = 'id太长了';
				$data['status'] = self::ERR + __LINE__;
				$this->ajaxReturn($data);
			}			
		}*/
		if(strlen($param['email']) ==0 ){
			$data['info'] = '邮箱或密码不能为空';
			$data['status'] = self::ERR + __LINE__;
			$this->ajaxReturn($data);
		}
		return true;
	}





}