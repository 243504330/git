<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\Filter\Filter;

class CommonController extends Controller{
	const ERR = 800000;
	const FOO = "参数不能为空";

	public function _initialize(){
		echo '------------------测试-------------------';
		echo '<br/>';
		
	}

	protected function param_isset($method,$fields){
		
		if(empty($fields)){
			$data['info'] = 'const is empty';
			$data['error'] = self::ERR+__LINE__;
			$this->ajaxReturn($data);
		}

		$temp = $method == 'POST' ? $_POST : $_GET;
		
		if(!is_array($fields)){
			$fields = array($fields);
		}
		foreach($fields as $v){
			
			if(!isset($temp[$v])){
				$data['info'] = 'lost the ->'.$v;
				$data['error']	= self::ERR + __LINE__;	
				$this->ajaxReturn($data);
			}
		}

		return true;
	}

	protected function check_param($param){
		if(isset($param['id'])){
			if(strlen($param['id'])>18){
				$data['info'] = 'to long' ;
				$this->ajaxReturn($data);
			}			
		}
		return true;
	}
}