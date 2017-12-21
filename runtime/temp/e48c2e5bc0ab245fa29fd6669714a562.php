<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"E:\phpStudy\WWW\tp5\public/../app/admin\view\admin\index.html";i:1513758664;s:61:"E:\phpStudy\WWW\tp5\public/../app/admin\view\public\base.html";i:1513754481;}*/ ?>
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

            </ol>
            
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span> 列表
                </div>
                <div class="tpl-portlet-input tpl-fz-ml">
                    <div class="portlet-input input-small input-inline">
                        <div class="input-icon right">
                            <!-- <i class="am-icon-search"></i> -->
                            <input type="text" class="form-control form-control-solid" style="height: 37px;" placeholder="搜索..."> </div>
                    </div>
                    <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                </div>
                
            </div>
            <div class="tpl-block">
                <div class="am-g">
                    <div class="am-u-sm-12 am-u-md-6">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <button onclick="add('<?php echo url('Admin/add'); ?>');" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                <!-- <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button> -->
                                <!-- <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button> -->
                                <!-- <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                    <tr>
                                        <th class="table-check"><input type="checkbox" class="tpl-table-fz-check" ></th>
                                        <th class="table-id">ID</th>
                                        <th class="table-title">账号</th>
                                        <th class="table-type">姓名</th>
                                        <th class="table-author am-hide-sm-only">头像</th>
                                        <th class="table-date am-hide-sm-only">注册时间</th>
                                        <th class="table-date am-hide-sm-only">状态</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                                        <tr>
                                            <td><input type="checkbox" class="ace" name="ids" value="<?php echo $vo['id']; ?>"></td>
                                            <td><?php echo $vo['id']; ?></td>
                                            <td><a href="#"><?php echo $vo['username']; ?></a></td>
                                            <td><?php echo $vo['name']; ?></td>
                                            <td class="am-hide-sm-only"><img src="<?php echo $vo['picname']; ?>" width="100px"></td>
                                            <td class="am-hide-sm-only"><?php echo $vo['addtime']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo $vo['state']; ?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <?php switch(\think\Session::get('adminuser.id')): case $vo['id']: ?>
                                                                <button onclick="grsz('<?php echo url('Admin/edit',['id' => $vo['id']]); ?>');" type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-pencil-square-o"></span> 个人设置</button>
                                                                <!-- <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button> -->
                                                            <?php break; default: ?>
                                                            <button onclick="edit('<?php echo url('Admin/edit',['id' => $vo['id']]); ?>');" type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                            <button onclick="del('<?php echo $vo['id']; ?>','<?php echo url('Admin/del'); ?>');" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>                                                            
                                                        <?php endswitch; ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                </tbody>
                            </table>
                            <div class="am-cf">
                                <!-- 分页 -->
                                <div class="sabrosus"><?php echo $page; ?></div>
                            </div>
                            
                            <!-- <div class="sabrosus"> -->
                                <!-- <ul class="pagination"> -->
                                    <!-- <li class="disabled"><span>«</span></li>  -->
                                    <!-- <li class="active"><span>1</span></li> -->
                                    <!-- <li><a href="/admin.php/admin/index.html?page=2">2</a></li>  -->
                                    <!-- <li><a href="/admin.php/admin/index.html?page=2">»</a></li> -->
                                <!-- </ul> -->
                            <!-- </div> -->
                            
                            
                            
                            
                            <!-- <div class="am-cf"> -->
                                <!-- <div class="am-fr"> -->
                                    <!-- <ul class="am-pagination tpl-pagination"> -->
                                        <!-- <li class="am-disabled"><a href="#">«</a></li> -->
                                        <!-- <li class="am-active"><a href="#">1</a></li> -->
                                        <!-- <li><a href="#">2</a></li> -->
                                        <!-- <li><a href="#">3</a></li> -->
                                        <!-- <li><a href="#">4</a></li> -->
                                        <!-- <li><a href="#">5</a></li> -->
                                        <!-- <li><a href="#">»</a></li> -->
                                    <!-- </ul> -->
                                <!-- </div> -->
                            <!-- </div> -->
                            <hr>

                        </form>
                    </div>

                </div>
            </div>
            <div class="tpl-alert"></div>
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
