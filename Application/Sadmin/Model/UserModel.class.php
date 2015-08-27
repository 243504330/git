<?php
namespace Sadmin\Model;
use Think\Model;
class UserModel extends Model {
	public function get(){
		$info = M('user')->select();
		return $info;
	}

	public function table($key){
		return $this;
	}

	public function get_info_by_email($email){
		$re = $this->table($email)->where(array('eamil'=>$email))->select();
		if(empty($re)){
			return false;
		}else{
			return $re[0];
		}
	}
}