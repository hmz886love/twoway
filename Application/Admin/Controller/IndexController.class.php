<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//默认执行方法
    public function index(){
		if(session("isLogin")){
			$this->display("index");
		}else{
			$this->display("login");
		}
       
    }
	//判断登录方法
	public function login(){
		if(session("isLogin")){
			$this->success('已登录', 'index',1);
		}else{
			if($this->checklogin(I("username"),I("userpasswd"))){
				session("isLogin",True);
				$this->success('成功登录', 'base',1);
				//$this->display("base");
			}else{
				$this->error('请重新登录', 'index',1);
				//$this->display("login");
			}
		}
		
	}
	//检验提交用户名登录方法
	static function checklogin($username,$userpasswd){
		$Model=M("tw_user");
		$loginData=array("user_name"=>$username,"user_psw"=>strtoupper(sha1($userpasswd)));
		$data=$Model->where($loginData)->field("user_id")->select();
		if($data[0]["user_id"]>0){
			return True;
		}else{
			return False;
		}
	}
	//退出用户
	public function logout(){
		session("isLogin",Null);
		$this->success('退出成功', 'index');
	}
	//重定向call方法
	public function __call($method,$args){
		if(session("isLogin")){
			parent::__call($method,$args);
		}else{
			$this->success('请先登录', 'index');
		}
		
	}
}