<?php
//所有文章拥有唯一ID存在article表中，其余表中ID则为article表中id相同
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller {
	private $username = '';
	private $condition;
	function __construct(){
		if(!empty($_SESSION['username'])){
			$this->username = $_SESSION['username'];
		}
		$this->condition = $_SESSION['username'] == $_GET['visit'];
	}
    public function index(){
    	$user = M("User");
    	$assign['title'] = $user -> table($this->username)->order('id DESC')->limit(10)->getField('title,timeline,id');
    	$this->assign($assign);
    	$this->display();
    }
    //文章详情
    public function details(){
    	$id = $_GET['id'];
    	$visit = $_GET['auther'];
    	$assign = M('user')->table($visit)->where($id)->find();
    	$this->assign($assign);
    	$this->display();
    }
    //显示创建或修改文档
    public function update(){
    	//若文章id为空则为创建新文章
    	if(empty($_GET['id'])){
    		$this->display();
    	}else{
    		$id = $_GET['id'];//文章id
    		$visit = $_GET['visit'];//表名
    		$assign = M('user')->table($visit)->where('id='.$id)->find();//查找
    		$this->assign($assign);
    		$this->display();
    	}
    }
    //保存被修改的文档
    public function updateSubmit(){
    	if($this->condition){
    		$id = $_GET['id'];//修改文章ID
    		$save = array(
    			'title' => $_GET['title'],
    			'content' => $_GET['content'],
    			'from' => $_GET['from'],
    			'timeline' => time(),
    			);
    		if(empty($id))//若id不为空为修改，空为增加
    			M('user')->table($this->username)->where('id='.$id)->save();
    		else 
    			M('user')->table($this->username)->add($save);
    	}else{
    		$this->error("请登陆后再操作");
    	}
    }
   	public function delete(){
    	$id = $_GET['id'];
    	$user = M($this->username);
    	$title = $user->where('id='.$id)->getField('title');
    	$user->delete($id);
    	M('article')->delete($title);
    }
}