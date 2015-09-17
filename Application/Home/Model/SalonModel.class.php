<?php
namespace Home\Model;
use Think\Model;
class SalonModel extends Model{
	public function select_all($model){
		$data = $model->select();
		return $data;
	}
}