<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"E:\phpStudy\WWW\tp5\public/../app/admin\view\admin\add.html";i:1513319963;s:61:"E:\phpStudy\WWW\tp5\public/../app/admin\view\public\base.html";i:1513754481;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理平台</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="__STATIC__/admin/assets/i/favicon.png">
    <!-- <link rel="icon" type="image/png" href="__STATIC__/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" href="__STATIC__/admin/assets/i/app-icon72x72@2x.png">
    <meta name="__STATIC__/admin/apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="__STATIC__/admin/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="__STATIC__/admin/assets/css/admin.css">
    <link rel="stylesheet" href="__STATIC__/admin/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/page.css">
    <script src="__STATIC__/admin/assets/js/echarts.min.js"></script>
</head>

<body data-type="index">

    
    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="__STATIC__/admin/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
            
        </div>
    
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick"><?php echo \think\Session::get('adminuser.name'); ?></span>
                        <!-- <span class="tpl-header-list-user-ico"> <img src="__STATIC__/admin/assets/img/user01.png"></span> -->
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <!-- <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li> -->
                    </ul>
                </li>
                <li><a href="<?php echo url('Login/loginout'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size">退出</span></a></li>
            </ul>
        </div>
    </header>

    <div class="tpl-page-container tpl-page-header-fixed">
    
        
        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                Amaze UI 列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo url('Index/index'); ?>" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>管理员管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right "></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="<?php echo url('Admin/index'); ?>" >
                                    <i class="am-icon-angle-right"></i>
                                    <span>管理员列表</span>
                                </a>
                                <a href="##">
                                    <i class="am-icon-angle-right"></i>
                                    <span>角色列表</span>
                                </a>
                                <a href="##">
                                    <i class="am-icon-angle-right"></i>
                                    <span>权限列表</span>
                                </a>
                                <a href="##">
                                    <i class="am-icon-angle-right"></i>
                                    <span>个人设置</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
        
        <div class="tpl-content-wrapper">
            <ol class="am-breadcrumb">
                <li><a href="<?php echo url('Index/index'); ?>" class="am-icon-home">首页</a></li>
                
    <li><a href="<?php echo url('Admin/index'); ?>">管理员列表</a></li>
    <li class="am-active">添加</li>

            </ol>
            
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>
        </div>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" action="<?php echo url('Admin/insert'); ?>" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">账号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="username" name="username" placeholder="账号">
                                <small style="display:inline-block;"></small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">姓名</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="name" name="name" placeholder="姓名">
                                <small style="display:inline-block;"></small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" id="pass" name="pass" placeholder="密码">
                                <small style="display:inline-block;"></small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">确认密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" id="repass" placeholder="确认密码">
                                <small style="display:inline-block;"></small>
                            </div>
                        </div>
                        
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">头像</label>
                            <div class="am-u-sm-9">
                                <input type="file" id="picname" name="picname">
                                <small style="display:inline-block;"></small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submint" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

        </div>

    </div>
    <!-- 模板收集自 <a href="http://www.php.cn/" target="_blank" title="php中文网">php中文网</a> -  More Templates  <a href="http://www.php.cn/" title="网页模板" target="_blank">网页模板</a> -->


    <script src="__STATIC__/admin/assets/js/jquery.min.js"></script>
    <script src="__STATIC__/admin/assets/js/amazeui.min.js"></script>
    <script src="__STATIC__/admin/assets/js/iscroll.js"></script>
    <script src="__STATIC__/admin/assets/js/app.js"></script>
</body>
</html>

    <script src="__STATIC__/admin/js/adminindex.js"></script>
