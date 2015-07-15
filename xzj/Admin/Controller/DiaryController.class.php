<?php

namespace Admin\Controller;

class DiaryController extends CommonController
{
	public function _tigger_list($list){
		foreach($list as $key=>$value){
			$list[$key]['type']=C('USER_CONFIG')['type'][$value['type']];
			
		}
		$this->assign('list',$list);
	}
	public function edit(){
		$mod=M('diary');
		$id=I('get.id',0,int);
		$find=$mod->where("id=".$id)->find();
		$this->assign('find',$find);
		$this->display();
		
	}
	public function add(){
		if(IS_POST){
		$mod=M('diary');
		if($_FILES['pic']['name']!=""){
		
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3145728 ;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
			$upload->rootPath = './Public/';// 设置附件上传根目录
			$upload->savePath = './Uploads/pic/';// 设置附件上传目录
			$upload->autoSub = true; //关闭子目录生成
			$upload->subName  =  array('date', 'Y-m-d'); //子目录生成规则
			$info = $upload->upload();
			if(!$info){
				echo $this->error($upload->getError());
			}else{
				//上传图片成功
				$file = $info['pic'];
		
				$_POST['bigpic']=date('Y-m-d',time()).$file['savename'];
			}
		}
		
		$_POST['content']=$_POST['content'];
		if($mod->create()){
			$mod->add();
				
			$this->success("修改成功");
		}else{
			$this->success("修改失败");
		}}
		else{
			$this->display();
		}
		
	}
	public function update(){
		$mod=M('diary');
		if($_FILES['pic']['name']!=""){
				
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3145728 ;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
			$upload->rootPath = './Public/';// 设置附件上传根目录
			$upload->savePath = './Uploads/pic/';// 设置附件上传目录
			$upload->autoSub = true; //关闭子目录生成
			$upload->subName  =  array('date', 'Y-m-d'); //子目录生成规则
			$info = $upload->upload();
			if(!$info){
				echo $this->error($upload->getError());
			}else{
				//上传图片成功
				$file = $info['pic'];
		
				$_POST['bigpic']=date('Y-m-d',time()).$file['savename'];
			}
		}
		
		$_POST['content']=$_POST['content'];
		if($mod->create()){
			$mod->save();
			
			$this->success("修改成功");
		}else{
			$this->success("修改失败");
		}
		
	}
	
}