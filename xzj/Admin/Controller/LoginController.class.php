<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
    //获取登陆界面的操作
    public function index() {
       
        $this->display('login');
    }
    
   
   public function login(){
   	$username=I('username');
   	$userpwd=I('userpwd');
   	$login=new \Admin\Model\LoginModel();
   	$user=$login->getUser($username);
    $this->checkPassword($user,$userpwd);
    
   }
   
   
   
   
   
   //验证密码
   public function checkPassword($user,$userpwd){
   	
   	if($user['password']==md5($userpwd)){
   		$_SESSION['user']=$user;
   		$this->success('Index/index','', 3, '登陆成功');
   	}
   	else{
   		$this->error('Login/login','', 3, '登陆失败');
   	}
   	
   }
    //获取验证码
    public function getCode() {
        $config = array(
            'useNoise'  =>  false,
            'length'    =>  4,
            'fontSize'  =>  16,
        );
        $Verify = new \Think\Verify($config);
        $code = $Verify->entry();
    }
}
