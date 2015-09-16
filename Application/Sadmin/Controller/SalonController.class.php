<?php
namespace Sadmin\Controller;
use Think\Controller;
use Org\Filter\Filter;
class SalonController extends CommonController {
    const ERR = 60000;

    public function index(){
    	$this->display();
    }

    public function index_data(){
        $model = M('salon');
        $arr = D('salon')->select_all($model);
        $data['data'] = $arr;
        $data['status'] = 0;
        $this->ajaxReturn($data);
    }

    public function edite_data(){
        $this->display();
    }

    public function save_data(){
        //参数检查
        $this->param_isset('POST',array('id','title','compere','guest','imgs'));
        //参数过滤
        $data['img'] = $this->upload_file();
            if($data['img'] === null){
                $data['img'] = Filter::get_str($_POST['imgs']);
            }
        $data['img'] = Filter::get_str($data['img']);
        $data['title'] = Filter::get_str($_POST['title']);
        $data['compere'] = $_POST['compere'];
        $data['guest'] = $_POST['guest'];
        $id = (int)$_POST['id'];
        
        //保存
        $result = M('salon')->where('id=%d',$id)->save($data);

        if($result === false){
            $data['status'] = self::ERR + __LINE__;
            $this->ajaxReturn($data);
        }
        $data['status'] = 0;

        $this->ajaxReturn($data);
    }

    public function edite(){   	
        $model = M('salon');
        //过滤ID
        $id = (int)$_GET['id'];
        //模型查询
    	$profile = D('salon')->find_by_id($model,$id);
        if($profile === false){
            $data['status'] = self::ERR + __LINE__;
            $this->ajaxReturn($data);
        }
    	$data['data'] = $profile;
        $data['status'] = 0;
        $this->ajaxReturn($data);	
    }

    public function details_data(){
        $this->display();
    }

    public function details_index(){
        $model = M('bimg');
        //过滤ID
        $id = (int)$_GET['id'];
        //模型查询
        $result = D('salon')->find_by_id($model,$id);
        if($result === false){
            $data['status'] = self::ERR + __LINE__;
            $this->ajaxReturn($data);
        }
        $data['data'] = $result;
        $data['status'] = 0;
        $this->ajaxReturn($data);
    }
    public function img_url(){
        $img = $this->upload_file();
        $data['status'] = 0;
        $data['img'] = $img;
        $this->ajaxReturn($data);
    }

    public function details_save(){
        //参数检查
        $this->param_isset('POST',array('sid','says','details','bimg1','bimg2','bimg3'));
        //参数过滤
        $sid = (int)$_POST['sid'];
        $data['data']['says'] = $_POST['says'];
        $data['data']['details'] = Filter::get_str($_POST['details']);
        $data['data']['bimg1'] = Filter::get_str($_POST['bimg1']);
        $data['data']['bimg2'] = Filter::get_str($_POST['bimg2']);
        $data['data']['bimg3'] = Filter::get_str($_POST['bimg3']);
        //保存
        $result = D('salon')->save_by_id($sid,$data['data']);
        if($result === false){
            $data['status'] = 3000000;
            $data['info'] = '修改失败';
            $this->ajaxReturn($data);
        }
        $data['status'] = 0;
        $this->ajaxReturn($data);
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