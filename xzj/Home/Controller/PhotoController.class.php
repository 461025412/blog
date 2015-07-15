<?php
namespace Home\Controller;
use Think\Controller;
class PhotoController extends Controller{
public function index(){
$tiaojian['id']=array('neq',1);
	 $fangke=D('guest')->where($tiaojian)->order('logintime DESC')->limit('8')->select();
	 $this->assign('fangke',$fangke);
	 $where['diaryid']=array('eq',0);
	 $where['uid']=array('eq',0);

	 $hotdiary=D('diary')->where($where)->limit('4')->order('view DESC')->select();
	  $newdiary=D('diary')->where($where)->limit('4')->order('time DESC')->select();
	 
	  $type=D('diary_type')->select();
	  $s=D('photo')->select();
	  $pb=D('photopb')->select();
	  $liuyan['huifuid']=array('neq',1);
      $huifu=D('liuyan')->where($liuyan)->order('time DESC')->limit('4')->select();
      foreach($huifu as $key=>$value){
      $huifu[$key]['user']=D('guest')->where('id='.$value['huifuid'])->find();}
      $this->assign('huifu',$huifu);
	  
	  for($i=0;$i<count($s);$i++){
	  $photo['data'][$i]['src']=$s[$i]['url'];
	  $photo['data'][$i]['title']=$s[$i]['name'];
	  $photo['data'][$i]['id']=$s[$i]['id'];
	  $photo['data'][$i]['comment']=$s[$i]['comment'];
	  $photo['data'][$i]['view']=$s[$i]['view'];
	  }
	  $this->assign("photo",json_encode($photo));
	  $this->assign('type',$type);
	  $this->assign('pb',$pb);
	  $this->assign('newdiary',$newdiary);
	  $this->assign('hotdiary',$hotdiary);
$this->display();
}
public function single($id){
	$tiaojian['id']=array('neq',1);
	 $fangke=D('guest')->where($tiaojian)->order('logintime DESC')->limit('8')->select();
	 $this->assign('fangke',$fangke);
	 $where['diaryid']=array('eq',0);
	 $where['uid']=array('eq',0);
 $liuyan['huifuid']=array('neq',1);
      $huifu=D('liuyan')->where($liuyan)->order('time DESC')->limit('4')->select();
      foreach($huifu as $key=>$value){
      $huifu[$key]['user']=D('guest')->where('id='.$value['huifuid'])->find();}
      $this->assign('huifu',$huifu);

	 $hotdiary=D('diary')->where($where)->limit('4')->order('view DESC')->select();
	  $newdiary=D('diary')->where($where)->limit('4')->order('time DESC')->select();
	  $type=D('diary_type')->select();

if($id<=12){$single=D('photopb')->find($id);

}
else{
$single=D('photo')->find($id);
}
$this->assign('type',$type);

	  $this->assign('newdiary',$newdiary);
	  $this->assign('hotdiary',$hotdiary);
$this->assign('single',$single)	;
$this->display();

}

}