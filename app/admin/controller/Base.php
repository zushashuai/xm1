<?php
namespace app\admin\controller;
use think\Controller;
// use \think\Session;

class Base extends Controller
{
    public function _initialize() {
        // // 是否的登录验证
        // if(!Session::get('name')){
            // $this->redirect("Login/login");
            // exit();
        // }
        
        if(empty(session('adminuser'))){
            // $url = CONTROLLER_NAME."/".ACTION_NAME;//当前控制器/操作名
            // $_SESSION['url'] = $url;
            $this->redirect("Login/login");
            exit();
        }
    }
    
}
