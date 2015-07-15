<?php
namespace Admin\Model;

use Think\Model;

class LoginModel extends Model
{
	public function getUser($username){
		$mod=M('user');
   	$data['name']=$username;
   	$user=$mod->where("name='".$username."'")->find();
		return $user;
	}
	
	
}