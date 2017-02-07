<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>游戏工厂后台</title>

    <link href="/gamefactory/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/gamefactory/Public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Toastr style -->
    <link href="/gamefactory/Public/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/gamefactory/Public/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/gamefactory/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/gamefactory/Public/admin/css/style.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="/gamefactory/Public/admin/js/jquery-2.1.1.js"></script>
    <base href="/gamefactory/">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <a href="<?=U('home/front/index')?>">
                            <img style="height:60px;" src="/gamefactory/Public/img/logo.png">
                            <strong class="font-bold"><i class="fa fa-home"></i>        <?php echo ($_SESSION['admin_name']); ?></strong></a>
                             </span></span> </a>
                        </div>
                        <div class="logo-element">
                            GF
                        </div>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Front): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Front/index')?>"><i class="fa fa-home"></i> <span class="nav-label">首页</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Game): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Game/index')?>"><i class="fa fa-table"></i> <span class="nav-label">Game管理</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Channel): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Channel/index')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Channel管理</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Sp): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Sp/index')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">SP管理</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Province): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Province/index')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">省份统计</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Package): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Package/index')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Package管理</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Log): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Log/index')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Sp_Log日志查看</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Install): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Install/log')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Install日志查看</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Andriodss): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Andriodss/log')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Android日志查看</span></a>
                    </li>
                    <li <?php if($Think.CONTROLLER_NAME==Order): ?>class="active"<?php endif; ?>>
                        <a href="<?=U('home/Order/log')?>"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Order日志查看</span></a>
                    </li>
                  
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            </div>
                <ul class="nav navbar-top-links navbar-right">
                     <li>
				        <span class="m-r-sm text-muted welcome-message">后台管理系统</span>
				    </li>
				    <li>
				        <a href="<?=U('home/index/index')?>">
				            <i class="fa fa-sign-out"></i>退出
				        </a>
				    </li>
				</ul>
				</nav>
				</div>               
				<div class="row">
				<div class="col-lg-12">
				    
 <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>计费请求Log管理</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo U('home/index/index');?>">主页</a>
            </li>
            <li class="active">
                 <a href="<?php echo U('home/front/index');?>">计费请求Log列表</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content">
 

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Log  Table </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                

                <div class="ibox-content">
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead">
                            <tr>
                                <th width="150">编号 </th>
                                <th>imei</th>
                                <th>imsi</th>
                                <th>app_name</th>
                                <th>pay_code_name</th>
                                <th>cp_channel_id</th>
                                <th>client_ip</th>
                                <th>iccid</th>
                                <th>最后打印时间</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if(is_array($android)): $i = 0; $__LIST__ = $android;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$androids): $mod = ($i % 2 );++$i;?><tr>
	                                <td><?php echo ($androids["id"]); ?></td>
	                                <td><?php echo ($androids["imei"]); ?></td>
                                    <td><?php echo ($androids["imsi"]); ?></td>
                                    <td><?php echo ($androids["app_name"]); ?></td>
                                    <td><?php echo ($androids["pay_code_name"]); ?></td>
                                    <td><?php echo ($androids["cp_channel_id"]); ?></td>
                                    <td><?php echo ($androids["client_ip"]); ?></td>
                                    <td><?php echo ($androids["iccid"]); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$androids["time"])); ?></td>
	                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <?php echo ($page); ?>
                    </div>

                </div>
            </div>
        </div>
</div>


	<div class="modal fade" id="package">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">添加Package</h4>
	      </div>
	      <div class="modal-body" id="Mybody">
	         <div class="form-group">
			    <label>名称</label>
			    <input type="text" name="package_name" class="form-control" placeholder="请输入Package_name...">
			 </div>
             <div class="form-group">
                <label>付费提示</label>
                <select name="cue" class="form-control" placeholder="请选择付费提示">
                    <option>on</option>
                    <option>off</option>
                </select>
             </div>
             <div class="form-group">
                <label>付费开关</label>
                <select name="on_off" class="form-control" placeholder="请选择付费提示">
                    <option>on</option>
                    <option>off</option>
                </select>
             </div>
			 
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="button" id="package_save" class="btn btn-primary">保存</button>
	      </div>
	    </div>
	  </div>
	</div>
<!--  window.location.reload(); -->

				    <div class="footer">
                        <div class="pull-right">
                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company &copy; 2015-2016
                        </div>
                    </div>
                </div>
            </div>

        </div>
     </div>


    <script src="/gamefactory/Public/admin/js/bootstrap.min.js"></script>
    <script src="/gamefactory/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/gamefactory/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/gamefactory/Public/admin/js/inspinia.js"></script>
    <script src="/gamefactory/Public/admin/js/plugins/pace/pace.min.js"></script>
    <!-- jQuery UI -->
    <script src="/gamefactory/Public/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    

   
    
</body>
</html>