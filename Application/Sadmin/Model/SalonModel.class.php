<?php
namespace Sadmin\Model;
use Think\Model;
class SalonModel extends Model{
	public function img_select($id){
		$data = M('simg')->where('sid=%d',$id)->select();
		return $data;
	}

	public function add_img($data){
		$data = M('simg')->add($data);
		return $data;
	}

	public function delete_img($id){
		$model = M('simg');
		$data = $model->where('id=%d',$id)->getField('img');
		if(!$data){
			return false;
		}
		$url = '/Public/images/'.$data;		
		$dels = $model->where('id=%d',$id)->delete();
		if($dels === false){
			return false;
		}
		$del = dirname(dirname(dirname(dirname(__FILE__)))).$url;

		if($del === false){
			return false;
		}
		unlink($del);
		return true;
	}
}
