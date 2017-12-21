<?php
//登陆控制器
namespace app\admin\controller;
use think\Controller;
// use think\Db;
use \think\Session;

class Login extends Controller
{
    //登录页
    public function login() {
        return $this->fetch();
    }
    //登陆
    // public function logincheck(){
        // //判定
        // if(!request()->isPost()) {
           // $this->error('提交不合法');
        // }
        // $data = input('post.');//接收传值
        
        // $user = Db::table("user")
            // ->where("username",'123456')
            // ->find();
        
        // return dump($user);
    // }
    //登陆
    public function logincheck(){
        //判定
        if(!request()->isPost()) {
           $this->error('提交不合法');
        }
        $post = input('post.');//接收传值
        
        $where['username'] = $post['username'];
        $user = model('Admin')->where($where)->find();//用户信息
        
        //验证码
        if(!captcha_check($post['code'])){
            //验证失败
            $this->error('验证码不正确');
        };
        
        //用户
        if(!$user){
            $this->error('该用户不存在');
        }
        
        //密码
        if($post['pass'] != $user->pass){
            $this->error('密码不正确');
        }
        //把用户信息记录到session
        Session::set('adminuser',$user);
        // session('user',$user);
        // return dump($user['name']);
        
        
        $this->redirect('Index/index');
    }
    //退出
    public function loginout(){
        session('adminuser',null);
        $this->redirect('Login/login');
    }
}
