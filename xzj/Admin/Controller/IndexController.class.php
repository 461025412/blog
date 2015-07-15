<?php
namespace Admin\Controller;

class IndexController extends CommonController {
	public function index() {
		//列表过滤器，生成查询Map对象
	
		$map = $this->_search();
	
	
		if(method_exists($this, '_filter')) {
	
			$this->_filter($map);
		}
		//判断采用自定义的Model类
		if(!defined(CONTROLLER_NAME)){
	
			$model = D(CONTROLLER_NAME);
		}
	
		if(!empty($model)) {
	
			$this->_list($model, $map);
		}
	
		$this->left();
		$this->display();
		return;
	}
	public function left()
	{
	// 1. 取出所有的按钮
	$menuList = C('menuList');
	// 取出按钮与权限对应的数组

	
	
	$this->assign('menuList', $menuList);
	// 2. 循环每一个按钮，并判断当前管理有没有这个权限，如果有就显示
	
	}
	
}