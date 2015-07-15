<?php

namespace Admin\Controller;

class UserController extends CommonController
{

    //查询用户列表
/*   
   public function index() {
		parent::index();
        //$sql = "select u.*,up.lovestatus from yyw_user u,yyw_user_params up where u.id=up.userid";
        //$list = M()->query($sql);
		$sta = array();
        $list = D('User')->select();
		foreach($list as &$v) {
			$sta = D('UserParams')->field(array('lovestatus', 'gender'))->where('userid='.$v['id'])->find();
			$v['lovestatus'] = $sta['lovestatus'];
			$v['gender'] = $sta['gender'];
			
		}
		
        $this->assign('sta', array('管理员', '启用', '禁用'));
        $this->assign('loveSta', array('关闭征友', '征友进行时'));
        $this->assign("list", $list);
		
        $this->display("User/index");
    }
	*/
	//数据加工
	
	public function _tigger_list(&$list) {
		foreach($list as $key=>$lis){
		$list[$key]['gender']=C('USER_CONFIG')['gender'][$lis['gender']];
		}
		
	}
    
	
	public function insert() {
		$mod = D('User');
		if(!$mod->create()) {
			$this->error($mod->getError());
		}
		$data = array();
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);
		$data['status'] = 0;
		$data['points'] = 0;
		if($mod->data($data)->add()) {
			$this->success('添加成功!', U('index'));
		}else{
			$this->error('添加失败!');
		}
	}
	
	
    //获取修改用户表单界面
    public function edit($act='') {
        // @param $act  根据参数选择修改用户信息还是修改用户密码
        
        if(!$act){
			$mod=M('user');
			$id=I('get.id','0',int);
			if($id==0){$this->error('数据有问题');}
			$user=$mod->where('id='.$_GET['id'])->find();
			$area=explode('-',$user['jiguan']);
			$this->assign('area',json_encode($area));
			
			$this->assign('user',$user);
			$this->display('User/edit');
        }else{
            $res = D('User')->field('username,id')->find($_GET['id']);
            $this->assign('find', $res);
            $this->display('User/resetpass');
        }
    }
    public function addrAjax($upid=0) {
    	$addrs =M('area')->where("upid={$upid}")->select();
    	echo json_encode($addrs);
    	exit();
    }
 
    
    //接收用户信息更改到数据库中
    public function update() {
		//判断是否修改了形象照(上传图片)
		//exit();
		$mod = D('User');
		$sheng[0]=I('provinceid','0',int);
		$sheng[1]=I('cityid','0',int);
		$area=implode('-',$sheng);
		
		$_POST['jiguan']=$area;
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
		if($mod->create()){$mod->save();
		$this->success("修改成功");
		}else{
			$this->error("修改失败");
		}
		//echo $this->success($_FILES['pic']['name']);
	/*	
		$res = D('UserParams')->where('userid='.$_POST['id'])->find();
		$user = array();
		$uparams = array();

		if($_POST['active'] == 'increase') {
			$user['points'] = $_POST['points'] + $_POST['updatePoints'];
		}else{
			$user['points'] = $_POST['points'] - $_POST['updatePoints'];
		}
		$user['id'] = $_POST['id'];
		$yonghu=$mod->where($user)->find();
		if($yonghu['shenhe']!=3){
			if($_POST['shenhe']==3){
				$jiage=M('weiaibi')->where('id=13')->getField('jiage');
				$total= intval($yonghu['points'], 10)+$jiage;
				if($_POST['updatePoints']==""){
					$user['points']=$total;
				}
				$data['userid']=$user['id'];
				$data['increase']=$jiage;
				$data['points']=$total;
				$data['content']="形象照审核通过，奖励".$jiage."个唯爱币";
				$data['addtime']=time();
				M('user_points')->add($data);
				D('UserParams')->where('userid='.$_POST['id'])->setinc('cxdj');
			}
		}
		$user['status'] = $_POST['status'];
		$user['email'] = $_POST['email'];
		
		$user['shenhe'] = $_POST['shenhe'];
		if($_POST['pic']){
			$uparams['avatar'] = 1;
			
		}
		
		
		$uparams['id'] = $res['id'];
		$uparams['vip'] = $_POST['vip'];
		$uparams['lovestatus'] = $_POST['lovestatus'];

		if($_FILES['pic']['error'] == 4){
			//没有编辑图片直接修改信息
			
			//修改某一个(傻傻不分前后) 修改两个
			$userRes = $mod->data($user)->save();
			$uparamsRes = D('UserParams')->data($uparams)->save();
			$itag = ( $userRes && $uparamsRes) || ( $userRes || $uparamsRes );
			
			
			if($itag) {
				echo $this->success('修改成功!', U('index'));
			}else{
				echo $this->error('修改失败!');
			}
        }else{
			
            //有图片上传 执行上传 判断是否上传成功 如果成功裁剪
                //执行信息修改    如果信息修改成功则删除旧图片 否则删除新上传的图片
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
                //裁剪
                $img = new \Think\Image();
                $img->open("./Public/".$file['savepath'].$file['savename']);
                $img->thumb(300, 300)->save("./Public/".$file['savepath'].$file['savename']);
                
                $user['avatar'] = $file['savename'];

                //找到原来的图片名
                $unlinkFile = $mod->field(array('avatar'))->find($_POST['id']);

				//修改某一个(傻傻不分前后) 修改两个
				$userRes = $mod->data($user)->save();
				$uparamsRes = D('UserParams')->data($uparams)->save();
				$itag = ( $userRes && $uparamsRes) || ( $userRes || $uparamsRes );
				
				if($itag) {
					unlink($upload->rootPath.ltrim($upload->savePath, './').$unlinkFile['avatar']);
				
					
                    echo $this->success('修改成功!', U('index'));
				}else{
					unlink($upload->rootPath.$upload->savePath.$file['savename']);
					echo $this->error('修改失败!');
				}
            }
        }
		*/
    }
    public function _list($model, $map = array(), $sortBy = '', $asc = false) {
    
    
    
    	//排序字段 默认为主键名
    	if (!empty($_REQUEST['_order'])) {
    		$order = $_REQUEST['_order'];
    	} else {
    		$order = !empty($sortBy)?$sortBy:$model->getPk();
    	}
    
    	//排序方式默认按照倒序排列
    	//接受 sort参数 0 表示倒序 非0都 表示正序
    	if (!empty($_REQUEST['_sort'])) {
    		$sort = $_REQUEST['_sort'] == 'asc'?'asc':'desc';
    	} else {
    		$sort = $asc ? 'asc' : 'desc';
    	}
    
    	//取得满足条件的记录数
    	$count = $model->where($map)->count();
    
    	//每页显示的记录数
    	if (!empty($_REQUEST['numPerPage'])) {
    			
    		$listRows = $_REQUEST['numPerPage'];
    	} else {
    		$listRows = '10';
    	}
    
    
    	//设置当前页码
    	if(!empty($_REQUEST['pageNum'])) {
    		$nowPage=$_REQUEST['pageNum'];
    	}else{
    		$nowPage=1;
    	}
    	$_GET['p']=$nowPage;
    
    	//创建分页对象
    	$p = new \Think\Page($count, $listRows);
    
    
    	//分页查询数据
    	$list = $model->where($map)->order($order.' '.$sort)
    	->limit($p->firstRow.','.$p->listRows)
    	->select();
    	foreach($list as $key=>$value){
    		$list[$key]['vip']=M('user_params')->where('userid='.$value['id'])->getField('vip');
    		$list[$key]['vip']=C("USER_CONFIG")["vip"][$list[$key]['vip']];
    	}
    		
    
    	//回调函数，用于数据加工，如将用户id，替换成用户名称
    	if (method_exists($this, '_tigger_list')) {
    
    		$this->_tigger_list($list);
    	}
    
    
    	//分页跳转的时候保证查询条件
    	foreach ($map as $key => $val) {
    		if (!is_array($val)) {
    			$p->parameter .= "$key=" . urlencode($val) . "&";
    		}
    	}
    
    	//分页显示
    	$page = $p->show();
    
    	//列表排序显示
    	$sortImg = $sort;                                 //排序图标
    	$sortAlt = $sort == 'desc' ? '升序排列' : '倒序排列';   //排序提示
    	$sort = $sort == 'desc' ? 1 : 0;                  //排序方式
    
    	//模板赋值显示
    	$this->assign('list', $list);
    	$this->assign('sort', $sort);
    	$this->assign('order', $order);
    	$this->assign('sortImg', $sortImg);
    	$this->assign('sortType', $sortAlt);
    	$this->assign("page", $page);
    
    	$this->assign("search",			$search);			//搜索类型
    	$this->assign("values",			$_POST['values']);	//搜索输入框内容
    	$this->assign("totalCount",		$count);			//总条数
    	$this->assign("numPerPage",		$p->listRows);		//每页显多少条
    	$this->assign("currentPage",	$nowPage);			//当前页码
    
    }
    //处理删除指定用户的操作
   
    
}
