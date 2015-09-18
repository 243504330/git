<?php
namespace Home\Controller;
use Think\Controller;
class SalonController extends Controller{
	const ERR = 30000;

	public function index(){
		$this->display();
	}

	public function index_data(){
		$model = M('salon');
		$result = D('salon')->select_all($model);
		if($result === false){
			$data['status'] = self::ERR + __LINE__;
			$this->ajaxReturn($data);

		}

		$data['data'] = $result;
		$data['status'] = 0;
		$this->ajaxReturn($data);
	}
	public function salon(){
		
		
		$img = M('simg');
		$imgs = $img->where('sid=%d',$_GET['id'])->select();
		
		$bimg = M('bimg');
		$bimgs = $bimg->where('sid=%d',$_GET['id'])->find();

		
		$this->assign('bimg',$bimgs);
		$this->assign('img',$imgs);
		
		$this->display();
	}

	public function salon_data(){
		$img = M('simg');
		$id = (int)$_GET['id'];
		$imgs = $img->where('sid=%d',$id)->select();

		$data['data'] = $imgs;
		$data['status'] = 0;

		$this->ajaxReturn($data);
	}

	public function salon_data_2(){
		$Model = M('bimg');
		$id = (int)$_GET['id'];
		$data = $Model->where('sid=%d',$id)->select();
		if(!$data){
			$data['status'] = self::ERR + __LINE__;
			$this->ajaxReturn($data);
		}
		$data['data'] = $data;
		$data['status'] = 0;
		$this->ajaxReturn($data);
	}
}