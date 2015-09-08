<?php
namespace Sadmin\Controller;
use Think\Controller;
class ImgController extends Controller{
	public function index(){
		$this->display();
	}

	public function imgs($id){
		$data = D('salon')->img_select($id);
		$this->ajaxReturn($data);

	}
}