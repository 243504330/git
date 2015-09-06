<?php
namespace Sadmin\Model;
use Think\Model;
use Org\Filter\Filter;

class UserModel extends Model {
	public function get(){
		$info = M('user')->select();
		return $info;
	}

	public function table($key){
		return $this;
	}

	public function get_info_by_email($email){
		$re = M('user')->where(array('eamil'=>$email))->select();
		if(empty($re)){
			return false;
		}else{
			return $re[0];
		}
	}

	public function login($pwd){
		$arr = $this->get_info_by_email();
		if($pwd['pwd'] != $arr['pwd']){
			return false;
		}
			return true;
	}

	static function check_param($param){
		$POO = 'id参数错误';
		if(isset($param['id'])){
			if(!Filter::check_str($param['id'],filter::RG_MD5)){
				return $POO;
				exit;
			}
		}
	}


}