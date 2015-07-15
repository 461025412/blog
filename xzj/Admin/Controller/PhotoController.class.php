<?php

namespace Admin\Controller;

class PhotoController extends CommonController
{
	public function update(){
		$id=I('id',0,'int');
        $mod=M('photo');
        $photo=M('photo')->where('id='.$id)->find();
        unlink("./Public/Uploads/pic/".$photo['url']);
        unlink("./Public/Uploads/pic/".$photo['bigurl']);
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
				$time=date('Y-m-d');
		
				$file = $info['pic'];
				var_dump($_FILES['pic']);
				die;
				$_POST['bigurl']=$time."/".$file['savename'];
				$pic = __ROOT__."/Public/".$file['savepath'].$file['savename'];
				$img = new \Think\Image();
				$img->open("./Public/".$file['savepath'].$file['savename']);
				$img->thumb(300,300)->save("./Public/".$file['savepath']."/s_".$file['savename']);
				$_POST['url']=$time."/s_".$file['savename'];
			}
			$_POST['time']=time();
			
			if($mod->create()){
				
	
				$mod->save();
				
				$this->success("添加成功");
			
			}else{
				$this->success("添加失败");
			}
		
	}else{
		$_POST['time']=time();
		if($mod->create()){
			$mod->save();
			
			$this->success("添加成功");	
		}else{
			$this->success("添加失败");
		}
	}
	}
	
	function download($file,$name=''){
		$fileName = $name ? $name : pathinfo($file,PATHINFO_FILENAME);
		$filePath =$_SERVER['DOCUMENT_ROOT']."/blog1/Public/Uploads/pic/2015-05-05/".$file;
	
		$fp = fopen($filePath,'rb');
	
		if(!$filePath || !$fp){
			header('HTTP/1.1 404 Not Found');
			echo "Error: 404 Not Found.(server file path error)<!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding --><!-- Padding -->";
			exit;
		}
	
		$fileName = $fileName .'.'. pathinfo($filePath,PATHINFO_EXTENSION);
		$encoded_filename = urlencode($fileName);
		$encoded_filename = str_replace("+", "%20", $encoded_filename);
	
		header('HTTP/1.1 200 OK');
		header( "Pragma: public" );
		header( "Expires: 0" );
		header("Content-type: application/octet-stream");
		header("Content-Length: ".filesize($filePath));
		header("Accept-Ranges: bytes");
		header("Accept-Length: ".filesize($filePath));
	
		$ua = $_SERVER["HTTP_USER_AGENT"];
		if (preg_match("/MSIE/", $ua)) {
			header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
		} else if (preg_match("/Firefox/", $ua)) {
			header('Content-Disposition: attachment; filename*="utf8\'\'' . $fileName . '"');
		} else {
			header('Content-Disposition: attachment; filename="' . $fileName . '"');
		}
	
		// ob_end_clean(); <--有些情况可能需要调用此函数
		// 输出文件内容
		fpassthru($fp);
		exit;
	}
	
/*public function download($file){

	
	
        $file_dir = $_SERVER['DOCUMENT_ROOT']."/blog1/Public/Uploads/pic/2015-05-05/".$file;
        $filename=pathinfo($file);
      
        if (!file_exists($file_dir)){
            header("Content-type: text/html; charset=utf-8");
            echo "File not found!";
            exit; 
        } else {
            $file = fopen($file_dir,"r"); 
            header("Content-type: application/octet-stream");
            header("Accept-Ranges: bytes");
            header("Accept-Length: ".filesize($file_dir));
            header("Content-Disposition: attachment; filename=".$filename['basename']);
            echo fread($file, filesize($file_dir));
            fclose($file);
        }
    }*/
	

public function add() {
	
	
	
		if(IS_POST){
			
		$mod = D(Photo);
		$files=getFiles();
		foreach($files as $fileInfo){
			$data=date('Y-m-d');
			$path="./Public/Uploads/pic/".$data;
			if(!file_exists($path)){
				mkdir($path,0777,true);
				chmod($path,0777);
			}
			
			$res=uploadFile($fileInfo,"./Public/Uploads/pic/".$data);
			
			$uploadFiles[]=$res['dest'];
		}
		$uploadFiles=array_values(array_filter($uploadFiles));
		$img = new \Think\Image();
		/*foreach($uploadFiles as $k=>$v){
		$img->open($v);
		$ext=strtolower(end(explode('.',$v)));
		$random=getUniName();
		$img->thumb(300,300)->save("./Public/Uploads/pic/".$data."/s_".$random.".".$ext);}*/
		var_dump($uploadFiles);
		

		
		/*	
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3145728 ;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp3');//设置附件上传类型
			$upload->rootPath = './Public/';// 设置附件上传根目录
			$upload->savePath = './Uploads/pic/';// 设置附件上传目录
			$upload->autoSub = true; //关闭子目录生成
			$upload->subName  =  array('date', 'Y-m-d'); //子目录生成规则
			$info = $upload->upload();
			die;
			if(!$info){
				echo $this->error($upload->getError());
			}else{
				//上传图片成功
				$time=date('Y-m-d');
				
				$file = $info['pic'];
				$_POST['bigurl']=$time."/".$file['savename'];
				$pic = __ROOT__."/Public/".$file['savepath'].$file['savename'];
				$img = new \Think\Image();
				$img->open("./Public/".$file['savepath'].$file['savename']);
				$img->thumb(300,300)->save("./Public/".$file['savepath']."/s_".$file['savename']);
				$_POST['url']=$time."/s_".$file['savename'];
			}
		*/
		$_POST['time']=time();
		$mod->create();
		$mod->add();
		
		
			$this->success("添加成功");
				
		
		}else{
			
			
			
			$this->display();
		}
		
	}
}