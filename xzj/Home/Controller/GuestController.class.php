<?php

namespace Home\Controller;
use Think\Controller;

class GuestController extends Controller{
public function regiser(){
$this->display();
}
public function login(){
	if($_POST){
		$where['name']=$_POST['name'];
$user=D('guest')->where($where)->find();
if(md5($_POST['password'])==$user['password']){	
	$data['logintime']=time();
D('guest')->data($data)->save();
session('user',$user);
$Liuyan=new \Home\Controller\LiuyanController();
$Liuyan->index();
}

}
else{
$this->display();
}
}


public function getCode(){
 $config = array(
            'fontSize'  =>  15,
            'length'    =>  4,
	        
            'useNoise'  =>  true,
			'useCurve'  =>  false,
			 
        );

        $Verify = new \Think\Verify($config);
       
        //输出验证码
        //@ 为src=""里的地址
        $Verify->entry();
}
public function insert(){
	if($_SESSION['user']){$Liuyan=new \Home\Controller\LiuyanController();
$Liuyan->index();die;}

		$upload = new \Think\Upload();// 实例化上传类 
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
		$upload->rootPath = './Public/';// 设置附件上传目录 
		$upload->savePath = './Uploads/pic/';// 设置附件上传目录
		$upload->autoSub = false; //关闭子目录生成

		// 上传文件
		$info = $upload->upload();
		if(!$info){
			// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			$file = $info['pic']; //获取当前文件的上传信息
			$pic = __ROOT__."/Public/".$file['savepath'].$file['savename'];
			
			//生产缩略图
			$img = new \Think\Image(); 
			$img->open("./Public/".$file['savepath'].$file['savename']);
			//$img->thumb(300,300)->save("./Public/".$file['savepath'].'c_'.$file['savename']);
			$img->thumb(100,100)->save("./Public/".$file['savepath'].$file['savename']);
			
			
$_POST['shengri']=$_POST['ageyear'].'-'.$_POST['agemonth'].'-'.$_POST['ageday'];
$_POST['password']=md5($_POST['password']);
$guest=D('guest');
$_POST['bigpic']=$file['savename'];
$_POST['logintime']=time();
$guest->create();
$id=$guest->add();
$user=$guest->where('id='.$id)->find();
session('user',$user);
$Liuyan=new \Home\Controller\LiuyanController();
$Liuyan->index();
}
}
public function verify($ver) {
		//dump($ver);
		
		$Verify = new \Think\Verify();
		if($Verify->check($ver, '')){
			echo 'true';
			exit();
		}
		echo 'false';
		exit();
	}
	 public function unique($inputName, $inputValue){
       
        $res = D('guest')->field($inputName)->select();
		
        foreach($res as $v){
            if($inputValue==$v['name']){
                echo 'false';
                exit();
            }
        }
        echo 'true';
        exit();
    }
}
