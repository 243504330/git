<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\Filter\Filter;
class ImgController extends CommonController{
	const ERR = 20000;

	public function index(){
		$this->display();
	}

	public function imgs($id){
		$data = D('salon')->img_select($id);
		$this->ajaxReturn($data);
	}

	public function add(){
		//上传图片成功 
		$data['img'] = $this->upload_file();
		//过滤
		$data['img'] = Filter::get_str($data['img']);
		$data['sid'] = Filter::get_str($_GET['id']);
		//入库
		$result = D('salon')->add_img($data);
		if($result === false){
			$data['status'] = self::ERR + __LINE__;
			$this->ajaxReturn($data);
		}

		$data['status'] = 0;
		$data['info'] = "添加成功";
		$this->ajaxReturn($data);
	}


	public function add_img(){
			    
		$this->display();
	}

	public function del_img(){
		//过滤
		$id = Filter::get_str($_GET['id']);
		//删除
		$result = D('salon')->delete_img($id);
		if($result === false){
			$data['status'] = self::ERR + __LINE__;
			$data['info'] = "删除失败";
			$this->ajaxReturn($data);
		}

		$data['status'] = 0;
		$data['info'] = "删除成功";
		$this->ajaxReturn($data);

	}

}
