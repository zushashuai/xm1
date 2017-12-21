<?php
//管理员控制器
namespace app\admin\controller;
use \think\Session;
use think\Db;

class Admin extends Base
{
    //首页
    public function index()
    {
        $user = session('adminuser');
        
        // $list = Db::table("admin")->select();
        $list = Db::table("admin")->paginate(2,false,['type'=>'BootstrapDetailed']);
        // return dump($list);
        // 获取分页显示
        $page = $list->render();
        // 模板变量赋值
        $this->assign('list', $list);
        $this->assign('page', $page);

        return $this->fetch('');
    }
    
    //添加页
    public function add()
    {
        return $this->fetch('');
    }
    
    //添加操作
    public function insert()
    {
        //判定
        if(!request()->isPost()) {
           $this->error('提交不合法');
        }
        $post = input('post.');//接收传值
        /*
        $result = $this->validate(
            [
                'username'  => $post['username'],
                'name'  => $post['name'],
                'pass'  => $post['pass'],
            ],
            [
                'username'  => 'require',
                'name'  => 'require',
                'pass'  => 'require',
            ]
        );
        if(true !== $result){
            // 验证失败 输出错误信息
            dump($result);
        }
        */
        
        $mod = model('Admin');
        
        $data['username'] = $post['username'];
        $data['name'] = $post['name'];
        $data['pass'] = md5($post['pass']);
        $data['addtime'] = date("Y-m-d H:i:s",time());
        $data['picname'] = $this->up("picname","admin");
        
        if($mod->insert($data)){
            return $this->redirect('Admin/index');
        }else{
            return $this->error('添加失败');
        }
    }
    
    //修改页
    public function edit($id){
        // $get = input('param.id');
        // dump($get);
        $mod = model('Admin');
        $res = $mod->where('id',$id)->find();
        
        $this->assign("res",$res);
        return $this->fetch('');
    }
    
    //修改操作
    public function update()
    {
        //判定
        if(!request()->isPost()) {
           $this->error('提交不合法');
        }
        $post = input('post.');//接收传值
        // dump($post);
        $mod = model('Admin');
        
        $data['username'] = $post['username'];
        $data['name'] = $post['name'];
        $data['picname'] = $this->up("picname","admin");
        
        if($mod->where('id',$post['id'])->update($data)){
            @unlink(".".$post['oldpicname']);
            return $this->redirect('Admin/index');
        }else{
            return $this->error('修改失败');
        }
    }
    
    //删除
    public function del()
    {
        //判定
        if(!request()->isPost()) {
           return json_encode(3);
        }
        $id = input('post.id');//接收传值
        
        $mod = model('Admin');
        $res = $mod->where('id',$id)->find();
        if($mod->where('id',$id)->delete()){
            @unlink(".".$res['picname']);
            return json_encode(1);
        }else{
            return json_encode(2);
        }
    }
    
    //上传图片
    /*
        $pic 上传文件的属性名
        $path 子目录名
    */
    public function up($pic,$path=""){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($pic);
        // 移动到框架应用根目录/public/uploads/ 目录下
        // $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads',false);
        $info = $file->rule('uniqid')->move(ROOT_PATH.'public/uploads/'.$path);
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            // echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            // return $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            if($path){
                return "/uploads/".$path."/".$info->getFilename(); 
            }else{
                return "/uploads/".$info->getFilename();                 
            }
        }else{
            // 上传失败获取错误信息
            $this->error($file->getError());
            return false;
        }
    }

}
