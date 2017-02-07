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
                            <span class="clear"> <span class="block m-t-xs"> <a href="<?=U('admin/index/index')?>">
                            <img style="height:60px;" src="/gamefactory/Public/img/logo.png">
                            <strong class="font-bold"><i class="fa fa-home"></i>        <?php echo ($_SESSION['admin_name']); ?></strong></a>
                             </span></span> </a>
                        </div>
                        <div class="logo-element">
                            DJB
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
        <h2>实时统计</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo U('home/front/index');?>">主页</a>
            </li>
            <li>
                 <a href="<?php echo U('home/front/index');?>">统计列表</a>
            </li>
            <li class="active">
                 <span>查询结果</span>
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
                    <h5>Statistics  Table </h5>
                    <div class="ibox-tools">
                        
                        <form method="post" action="<?=U('home/front/search');?>">

                        <div class="col-sm-1">开始日期：</div>
                        <div class="col-sm-1">
                            <select name="year" class="form-control">
                            <option selected='seleceted' value="<?=$serach_year?>"><?=$serach_year?></option>
                            <?php
 for ( $i = 2017; $i >=2016; $i-- ) { ?>
                             <option name="start_year" selected='seleceted' value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
 } ?>
                            </select>
                        </div>
                        <div class="col-sm-1">

                            
                            <select class="day_check form-control" name=month >
                            <option selected='seleceted' value="<?=$serach_month?>"><?=$serach_month?></option>
                                <?php foreach ($months as $month) { ?>
                                    <option class="month_check" name="start_day" value="<?=$month['month']?>"><?=$month['month']?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <select class="day_check form-control" name=day >
                            <option selected='seleceted' value="<?=$serach_day?>"><?=$serach_day?></option>
                                <?php foreach ($days as $day) { ?>
                                    <option class="month_check" name="start_day" value="<?=$day['date']?>"><?=$day['date']?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                         <div class="col-sm-1">结束日期：</div>
                         <div class="col-sm-1">
                            <select name="end_year" class="day_check form-control">
                            <option selected='seleceted' value="<?=$serach_end_year?>"><?=$serach_end_year?></option>
                            <?php
 for ( $i = 2017; $i >=2016; $i-- ) { ?>
                             <option name="end_year" selected='seleceted' value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
 } ?>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <select class="day_check form-control" name="end_month">
                            <option selected='seleceted' value="<?=$serach_end_month?>"><?=$serach_end_month?></option>
                                <?php foreach ($months as $month) { ?>
                                    <option class="month_check form-control" name="end_day" value="<?=$month['month']?>"><?=$month['month']?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                         <div class="col-sm-1">
                            <select class="day_check form-control" name="end_day">
                            <option selected='seleceted' value="<?=$serach_end_day?>"><?=$serach_end_day?></option>
                                <?php foreach ($days as $day) { ?>
                                    <option class="month_check" name="end_day" value="<?=$day['date']?>"><?=$day['date']?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                         <input type="submit" value="查询" class="btn-primary btn"></input>
                        </br>




                    </form>
                    <div>
                        查询条件：  <?php echo ($time); ?>至      <?php echo ($end_time); ?>           
    

                    </div>
                    


                    <div class="table-responsive">
                    </div>
                </div>
                <br>
                    
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>日期 </th>
                                <th>付费率</th>
                                <th>渠道</th>
                                <th>包</th>
                                <th>安装数</th>
                                <th>付费数</th>
                                <th>充值</th>
                                <th>分成</th>
                                <th>成本</th>
                                <th>利润</th>
                                <th>充值arpu</th>
                                <th>分成arpu</th>
                                <th>成本arpu</th>
                                <th>利润arpu</th>
                                <th>投产比</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if(is_array($statistic)): $i = 0; $__LIST__ = $statistic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$statistics): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo (date("Y-m-d",$statistics["create_time"])); ?></td>
                                    <td><?php echo ($statistics["rate"]); ?></td>
                                    <td><?php  switch ($statistics['channel_name']) { case '10': echo "聚优"; break; case '11': echo "道有道"; break; case '12': echo "奇迹"; break; case '13': echo "创变"; break; case '14': echo "宿迁"; break; case '15': echo "qq"; break; default: echo "渠道不明"; break; }?>
                                           
                                       
                                    </td>
                                    <td>
                                        <?php echo ($statistics["bag"]); ?>
                                    </td>
                                    <td><?php echo ($statistics["install_num"]); ?></td>
                                    <td><?php echo ($statistics["pay_num"]); ?></td>
                                    <td><?php echo ($statistics["recharge"]); ?></td>
                                    <td><?php echo ($statistics["percentage"]); ?></td>
                                    <td><?php echo ($statistics["cost"]); ?></td>
                                    <td><?php echo ($statistics["profits"]); ?></td>
                                    <td><?php echo ($statistics["recharge_arpu"]); ?></td>
                                    <td><?php echo ($statistics["percentage_arpu"]); ?></td>
                                    <td><?php echo ($statistics["cost_arpu"]); ?></td>
                                    <td><?php echo ($statistics["profits_arpu"]); ?></td>
                                    <td><?php echo ($statistics["input_output"]); ?></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <?php echo ($page); ?>
                    </div>
                </div>
            </div>
        </div>
</div>

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