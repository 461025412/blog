<?php
return array(
	//'配置项'=>'配置值'
	 /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'blog',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '',        // 端口
	'DB_PREFIX'             =>  'xzj_',    // 数据库表前缀
    //'DB_DSN'             	=>  'mysql:host=localhost;dbname=yyw;charset=utf8',    
	
	'SHOW_PAGE_TRACE' 	=> true,	// 显示页面Trace信息
	
	'MODULE_ALLOW_LIST'	=> array('Home','Admin'),	//设置当前允许访问的模块
	'DEFAULT_MODULE'	=> 'Home',			//默认模块
	'TMPL_PARSE_STRING' =>  array( // 地址替换,用_UPLOAD_目录 代替 根目录下的Upload目录
    '__UPLOAD__'        =>  '/Uploads/pic/',
	
     ),
	 //自定义用户配置
	 'USER_CONFIG'		=>array(
	        'type'=> array(1=>'个人日志',2=>'经典语录',3=>'程序人生',4=>'人生感悟'),
	         'gender'=> array(1=>'男',2=>'女'),
			  'url'=>__APP__."/Public/images/"
			
	),
);