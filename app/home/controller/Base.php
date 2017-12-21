<?php
namespace app\home\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize() {
        // 是否的登录验证
        if(empty($_SESSION['user'])){
            // $url = CONTROLLER_NAME."/".ACTION_NAME;//当前控制器/操作名
            // $_SESSION['url'] = $url;
            $this->redirect("Login/login");
            exit();
        }
    }
    
}
