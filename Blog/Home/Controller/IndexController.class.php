<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$assign['article'] = M('article') -> select();
		$assign['users'] = M('User')->getField('username',true);
		$this->assign($assign);
		$this->display ();
	}
	public function login_easy(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$userinfo = M('user')->where('username='.$username)->find();
		if($userinfo['password'] == $password){
			$_SESSION['username'] = $username;
			$this->success("登陆成功","index.php");
		}else {
			$this->error("登陆失败，请检查你的用户名或密码！");
		}
	}
	public function register_easy(){
		$user = M('User');
		$add['username'] = $_POST['username'];
		$add['password'] = $_POST['username'];
		if($user->add($add)){
			$user->createTable($add['username']);
		}else{
			$this->error("注册失败");
		}
	}
}
