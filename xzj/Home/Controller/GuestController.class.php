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
       
        //�����֤��
        //@ Ϊsrc=""��ĵ�ַ
        $Verify->entry();
}
public function insert(){
	if($_SESSION['user']){$Liuyan=new \Home\Controller\LiuyanController();
$Liuyan->index();die;}

		$upload = new \Think\Upload();// ʵ�����ϴ��� 
		$upload->maxSize = 3145728 ;// ���ø����ϴ���С
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//���ø����ϴ�����
		$upload->rootPath = './Public/';// ���ø����ϴ�Ŀ¼ 
		$upload->savePath = './Uploads/pic/';// ���ø����ϴ�Ŀ¼
		$upload->autoSub = false; //�ر���Ŀ¼����

		// �ϴ��ļ�
		$info = $upload->upload();
		if(!$info){
			// �ϴ�������ʾ������Ϣ
			$this->error($upload->getError());
		}else{
			$file = $info['pic']; //��ȡ��ǰ�ļ����ϴ���Ϣ
			$pic = __ROOT__."/Public/".$file['savepath'].$file['savename'];
			
			//��������ͼ
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