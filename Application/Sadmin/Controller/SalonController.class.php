<?php
namespace Sadmin\Controller;
use Think\Controller;
class SalonController extends CommonController {
    public function index(){
    	$this->display();
    }

    public function index_data(){
        $model = M('salon');
        $arr = $model->select();
        $data['data'] = $arr;
        $data['status'] = 0;
        $this->ajaxReturn($data);
    }

    public function edite_data(){
        $this->display();
    }

    public function save_data(){
        $data['img'] = $_POST['img'];
        $data['title'] = $_POST['title'];
        $this->ajaxReturn($data);
    }

    public function edite(){
    	
    		$model = M('salon');

    		$profile = $model->where('id=%d',1)->find();
    		$data['data'] = $profile;
            $data['status'] = 0;
            $this->ajaxReturn($data);
    	

 		/*	$upload = new \Org\Net\UploadFile();

 			$upload->maxSize = 3145728;
 			$upload->allowExts = array('jpg','gif','png','jpeg');
 			$upload->savePath = './Public/images/';
 			$upload->saveRule = time();
 			$result = $upload->upload();
 			if($result){
 				$info = $upload->getUploadFileInfo();
 				$data['img']=$info[0]['savename'];


 			}

           
           
 			$res = $model->where('id=%d',$_GET['id'])->save($data);

 			if($res){
 				$this->success('OK');
 			}
 		 $this->assign('data',$profile);
    	 $this->display();*/
    	
    }

    public function details(){
       $model = M('bimg');
      
         $arr = $model->where('id=%d',$_GET['id'])->find();
      
       $upload = new \Org\Net\UploadFile();

            $upload->maxSize = 3145728;
            $upload->allowExts = array('jpg','gif','png','jpeg');
            $upload->savePath = './Public/images/';

            $upload->saveRule = time();
            $result = $upload->upload();
            if($result){
                $info = $upload->getUploadFileInfo();
                $data['imgs']=$info[0]['savename'];
             

            }

        $res = $model->where('id=%d',$_GET['id'])->save($_POST);

        if($res){
            $this->success('Ok');
        }

       
      

        $this->assign('arr',$arr);
        $this->assign('data',$data);
        $this->display();
    }

    public function simg(){
        $model = M('simg');

        $data = $model->select();
        dump($data);

        $this->display();
    }

    public function add(){
        $model = M('simg');

         $upload = new \Org\Net\UploadFile();

            $upload->maxSize = 3145728;
            $upload->allowExts = array('jpg','gif','png','jpeg');
            $upload->savePath = './Public/images/';

            $upload->saveRule = time();
            $result = $upload->upload();
            if($result){
                $info = $upload->getUploadFileInfo();
                $data['img']=$info[0]['savename'];
              
                dump($data['img']);

            }

        $data['sid']=$_GET['id'];
        if($result){
            $ok= $model->add($data);
            if($ok){
                 $this->success('ok');
             }
        }

        $arr = $model->where('sid=%d',$_GET['id'])->select();
        dump($arr);
        $this->assign('arr',$arr);
        $this->display();

    }

    public function del(){
        D('salon')->delete_img($_GET['id']);
       
    

       /* if($data){
            $info['status']=0;
            $info['msg']='修改成功';
            $info['content']=$data;

        }else{
            $info['status']=1;
            $info['msg']='修改失败';
        }

        $this->ajaxReturn($info,'JSON');*/
       

    }
}