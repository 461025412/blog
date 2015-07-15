<?php
$_menu['博主管理']['博主管理']['博主信息'] = __ROOT__.'/index.php/Admin/User/index';
$_menu['用户管理']['访客管理']['用户列表'] = __ROOT__.'/index.php/Admin/Guest/index';
$_menu['用户管理']['访客管理']['添加用户'] = __ROOT__.'/index.php/Admin/Guest/add';
$_menu['内容管理']['日志管理']['日志列表'] = __ROOT__.'/index.php/Admin/Diary/index';
$_menu['内容管理']['日志管理']['添加日志'] = __ROOT__.'/index.php/Admin/Diary/add';
$_menu['内容管理']['图片管理']['图片列表'] =__ROOT__.'/index.php/Admin/photo/index';
$_menu['内容管理']['图片管理']['添加图片'] = __ROOT__.'/index.php/Admin/photo/add';
$_menu['内容管理']['留言管理']['留言列表'] = __ROOT__.'/index.php/Admin/liuyan/index';




return array(
	'menuList' => $_menu,
	
);