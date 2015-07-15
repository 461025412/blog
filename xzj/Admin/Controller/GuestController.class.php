<?php

namespace Admin\Controller;

class GuestController extends CommonController
{
	public function _tigger_list(&$list) {
		foreach($list as $key=>$lis){
			$list[$key]['gender']=C('USER_CONFIG')['gender'][$lis['gender']];
		}
	
	}
	public function add() {
		if(IS_POST){
		$mod = M(guest);
		
		if($_FILES['pic']['name']!=""){
			
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3145728 ;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
			$upload->rootPath = './Public/';// 设置附件上传根目录
			$upload->savePath = './Uploads/pic/';// 设置附件上传目录
			$upload->autoSub = false; //关闭子目录生成
				
			$info = $upload->upload();
			if(!$info){
				echo $this->error($upload->getError());
			}else{
				//上传图片成功
				$file = $info['pic'];
		
				$_POST['bigpic']=$file['savename'];
			}
		}
		if($mod->create()){
			$mod->add();
			$this->success("添加成功");
				
		}else{
			$this->success("添加失败");
		}
		}else{
			$this->display();
		}
		
	}
	public function edit() {
		$model = M(CONTROLLER_NAME);
		$id = $_REQUEST[$model->getPk()];
		$user = $model->find($id);
		$this->assign('user', $user);
		$this->display('edit');
	}
	public function update(){
		
		if($_FILES['pic']){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
		$upload->rootPath = './Public/';// 设置附件上传根目录
		$upload->savePath = './Uploads/pic/';// 设置附件上传目录
		$upload->autoSub = false; //关闭子目录生成
			
		$info = $upload->upload();
		if(!$info){
			echo $this->error($upload->getError());
		}else{
			//上传图片成功
			$file = $info['pic'];
				
			$_POST['bigpic']=$file['savename'];
		}
		}
		
		$mod=M('guest');
		if($mod->create()){
			$mod->save();
			$this->success("修改成功");
			
		}else{
			$this->success("修改失败");
		}
		
	}
}