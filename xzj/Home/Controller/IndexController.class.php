<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		 $liuyan['huifuid']=array('neq',1);
$huifu=D('liuyan')->where($liuyan)->order('time DESC')->limit('4')->select();
foreach($huifu as $key=>$value){
$huifu[$key]['user']=D('guest')->where('id='.$value['huifuid'])->find();

}
  $this->assign('huifu',$huifu);
		 $cxdiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=3 and diaryid=0 and uid=0")->limit(2)->select();
	
	  $jddiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=2 and diaryid=0 and uid=0")->limit(1)->find();
	
     
	
	  $rsdiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=4 and diaryid=0 and uid=0")->limit(1)->find();
	 
	  $grdiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=1 and diaryid=0 and uid=0")->limit(1)->find();
      
	  
	 


		$tiaojian['id']=array('neq',1);
	 $fangke=D('guest')->where($tiaojian)->limit('4')->order('logintime DESC')->select();
	 $this->assign('fangke',$fangke);
	  $user=D('user')->find();
	   $where['diaryid']=array('eq',0);
	    $where['uid']=array('eq',0);
	  $hotdiary=D('diary')->where($where)->limit('4')->order('view DESC')->select();
	 
	  $newdiary=D('diary')->limit('4')->where($where)->order('time DESC')->select();
	  $where['type']=array('eq',0);
	  $cxdiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=3 and diaryid=0 and uid=0")->limit(2)->select();
	  foreach($cxdiary as $key=>$value){
		 $cxdiary[$key]['content']=htmlspecialchars_decode($value['content']);
	  
	  }
	  $jddiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=2 and diaryid=0 and uid=0")->limit(1)->find();
	
      $jddiary['content']=htmlspecialchars_decode($jddiary['content']);
	  $rsdiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=4 and diaryid=0 and uid=0")->limit(1)->find();
	  $rsdiary['content']=htmlspecialchars_decode($rsdiary['content']);
	  $grdiary=D('diary_type')->join('left join xzj_diary on xzj_diary.type=xzj_diary_type.id')->where("type=1 and diaryid=0 and uid=0")->limit(1)->find();
      $grdiary['content']=htmlspecialchars_decode($grdiary['content']);
	  
	 
	  $this->assign('cxdiary',$cxdiary);
	
	  $this->assign('jddiary',$jddiary);
	  $this->assign('rsdiary',$rsdiary);
	  $this->assign('grdiary',$grdiary);
	  $this->assign('user',$user);
	  $this->assign('newdiary',$newdiary);
	  $this->assign('hotdiary',$hotdiary);
      $this->display();
  
	}
}