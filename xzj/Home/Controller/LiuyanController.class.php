<?php 
namespace Home\Controller;
use Think\Controller;
 class LiuyanController extends Controller{
	 public function insertH($id,$content,$liuyanid){
		 if($id==$_SESSION['user']['id']){
		 $hui['error']='1';
		 }
		 $data['huifu']=$content;
		 $data['uid']=$id;
		 $data['huifuid']=$_SESSION['user']['id'];
          $data['liuyanid']=$liuyanid;
		  $liuyan=D('liuyan');
           $liuyan->data($data);
           $id=$liuyan->add();
		   $huifu=$liuyan->find($id);
           
	  $huifu['beiliuyan']=D('guest')->where('id='.$huifu['uid'])->getField('name');
	   $huifu['liuyanzhe']=D('guest')->where('id='.$huifu['huifuid'])->getField('name');
	  $huifu['bigpic']=D('guest')->where('id='.$huifu['huifuid'])->getField('bigpic');
		   $huifu['bigpic']=__ROOT__."/Public/Uploads/pic/".$huifu['bigpic'];
		   $huifu['error']=$hui['error'];
		   echo  json_encode($huifu);
		   exit();
	 
	 }
	 public function insert($content){
	 $data['huifu']=$content;
     $data['huifuid']=$_SESSION['user']['id'];
      $data['uid']='1';
	  $data['time']=time();
	  $data['liuyanid']='0';
	  $liuyan=D('liuyan');
      $liuyan->data($data);
	  $liuyan->add();
	  echo json_encode(true);
	  exit();


	 }
	
 public function index(){
	 $tiaojian['id']=array('neq',1);
	 $fangke=D('guest')->where($tiaojian)->limit('8')->order('logintime DESC')->select();
	 $this->assign('fangke',$fangke);
	   $liuyan['huifuid']=array('neq',1);
$huifu=D('liuyan')->where($liuyan)->order('time DESC')->limit('4')->select();
foreach($huifu as $key=>$value){
$huifu[$key]['user']=D('guest')->where('id='.$value['huifuid'])->find();

}
	 $list=array();
	 $where['liuyanid']=array('eq',0);
$ws['liuyanid']=array('neq',0);
 $ss['diaryid']=array('eq',0);
	 $ss['uid']=array('eq',0);
	 $hotdiary=D('diary')->where($ss)->limit('4')->order('view DESC')->select();
	  $newdiary=D('diary')->where($ss)->limit('4')->order('time DESC')->select();
	  $type=D('diary_type')->select();
	  $total=D('liuyan')->where($where)->count();

	  $page = new \Home\Org\ShowPage($total,2);
	  $liuyan =D('liuyan')->where($where)->limit($page->limit)->select();
	 
	  foreach($liuyan as $key=>$value){
	  $liuyan[$key]['beiliuyan']=D('guest')->where('id='.$value['uid'])->getField('name');
	   $liuyan[$key]['liuyanzhe']=D('guest')->where('id='.$value['huifuid'])->getField('name');
	    $liuyan[$key]['liuyanzhepic']=D('guest')->where('id='.$value['huifuid'])->getField('bigpic');
	  }
	  
	  $i=0;
	 
	 foreach($liuyan as $key=>$value){
		
		 if($i>0){$i=0;}
	 $liuyan2=D('liuyan')->where($ws)->select();
	 foreach($liuyan2 as $key2=>$value2){
	 if($value2['liuyanid']==$value['id']){
		 
	 $b[$key][$i]=$value2;
	 $i++;
	 }
		 
	 }
	


      foreach($b as $key=>$value){
         foreach($value as $key2=>$value2){
       $value2['beiliuyan']=D('guest')->where('id='.$value2['uid'])->getField('name');
	   $value2['liuyanzhe']=D('guest')->where('id='.$value2['huifuid'])->getField('name');
	    $value2['liuyanzhepic']=D('guest')->where('id='.$value2['huifuid'])->getField('bigpic');
	 $datawb = "";
					$datawb = $datawb."<div class='weinei1' style='width:500px;' id=".$value2['id'].">"; 
					$datawb = $datawb."<a href=\"\" target=\"_blank\" class=\"head\" title=\"查看资料\" style=\"height:30px; width:30px\">";
					$datawb = $datawb."<img src='".__ROOT__."/Public/Uploads/pic/".$value2['liuyanzhepic']."'"; 
					$datawb = $datawb." border='0' style='height:50px;width:50px;' />";
					$datawb = $datawb."</a>";
					$datawb = $datawb."<span class=\"you\"><a href=\"\" title=\"查看TA的微播\"><b>".$value2['liuyanzhe']."</b></a>";
					$datawb =$datawb. "对<a href=''title=\"查看TA的微播\"><b>".$value2['beiliuyan']."</b></a>说：</span>";
					$datawb = $datawb.$value2['huifu'];
					$datawb = $datawb."</div>";
					$datawb = $datawb."<div style=\"clear:both\"></div>";
					$datawb= $datawb."<div class=\"huifu\">";
					$datawb= $datawb."<font color=\"#999999\">".$value2['d']."</font>&nbsp;";
					if($_SESSION['user']){
					$datawb= $datawb."<a href=\"javascript:void(0);\" onclick=\"return doHuifu(".$value2['id'].");\" id='adas' >回复</a>";}
					$datawb= $datawb."</div>";
					$datawb = $datawb."<div style=\"clear:both\"></div>";
					$datawb = $datawb. "<div id=\"comdiv_adass".$value2['id']."\" style=\"display:none\" class=\"pin\">";
                    $datawb = $datawb."<form action='__MODULE__/Liuyan/insert' method='post' target='myform' >";
                    
					$datawb = $datawb. "<input name=\"comid_adas\" id=\"comid_adass\" value=\"\" type=\"hidden\">";
						$datawb = $datawb."<table style=\"line-height:25px;\" border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"600px\">";
						$datawb = $datawb."<tbody><tr>";
						$datawb = $datawb."<td id=\"reply_uid_adas\" align=\"right;\" width=\"100px;\"></td>";
						$datawb = $datawb."<td width=\"400px;\"><textarea name=\"comment_362\" id=w".$value2['id']." style=\"width:95%;height:30px;overflow:hidden;\"></textarea></td>";
						$datawb = $datawb."<td><a href=\"javascript:void(0);\" class=\"btn_c2\" id=\"btn_comment_362\" onclick=\"return huiFu(".$value2['huifuid'].",".$value2['liuyanid'].",".$value2['id'].");\"><span>提交回复</span></a>							 
					  </td>";
							$datawb = $datawb."</span></a></td></tr></tbody></table></form></div><div style=\"clear:both\"></div>";
					$ss[$key][$key2]=$datawb;
					
					$liuyan[$key][$key][$key2]=$key2;
		 }
		 
	  }
	 }


	$this->assign('huifu',$huifu);
$this->assign('show', $page->fpage(array(0,1,2,3, 4, 5, 6, 7, 8)));
	$this->assign('key2',$ss1);
	$this->assign('liuyan',$liuyan);
	$this->assign('ss',$ss);
  $this->assign('type',$type);
	  $this->assign('newdiary',$newdiary);
	  $this->assign('hotdiary',$hotdiary);
 $this->display('Liuyan/index');
 }
 }