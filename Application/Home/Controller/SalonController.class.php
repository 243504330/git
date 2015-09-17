<?php
namespace Home\Controller;
use Think\Controller;
class SalonController extends Controller{
	public function index(){
		$this->display();
	}

	public function index_data(){
		$model = M('salon');
		$result = D('salon')->select_all($model);

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
		$imgs = $img->where('sid=%d',1)->select();

	

		$data['data'] = $imgs;
		$data['status'] = 0;

		$this->ajaxReturn($data);
	}
}