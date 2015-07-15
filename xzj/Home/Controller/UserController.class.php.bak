<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
public function index(){
$user=D('user')->find();
if($user['gender']==1){$user['gender']="男";}
else{$user['gender']="女";}
$this->assign('user',$user);
$this->display();
}

}