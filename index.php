<?php
header("Content-Type:text/html;charset=utf-8");
//框架的入口文件
define("APP_DEBUG",false); //开启调试模式

//指定当前应用的入口路径
define("APP_PATH","./xzj/");

//导入框架的入口文件
require("./ThinkPHP/ThinkPHP.php");