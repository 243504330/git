<?php
namespace Sadmin\Model;
use Think\Model;
class SalonModel extends Model{
	public function img_select($id){
		$data = M('simg')->where('sid=%d',$id)->select();
		return $data;
	}
}