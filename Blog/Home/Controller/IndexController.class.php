<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$assign['condition'] = empty($_SESSION['username']);
		$assign['article'] = M('article') -> select();
		$assign['users'] = M('User')->getField('username',true);
		$this->assign($assign);
		$this->display ();
	}
}
