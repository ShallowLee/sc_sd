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
    <script src="/gamefactory/Public/js/showdate.js"></script>
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
                        <a href="<?=U('home/Sp/index')?>"><i class="fa fa-shopping-cart sp_statistics"></i> <span class="nav-label">SP管理</span></a>
                        <ul class="nav metismenu" id="side-menu">
                            <li <?php if($Think.CONTROLLER_NAME==Sp): ?>class="active"<?php endif; ?>>
                                <a href="<?=U('home/Sp/index')?>"><i class="fa"></i> <span class="nav-label">　Sp管理</span></a>
                            </li>
                            <li <?php if($Think.CONTROLLER_NAME==Sp): ?>class="active"<?php endif; ?>>
                                <a href="<?=U('home/Sp/province_statistics')?>"><i class="fa"></i> <span class="nav-label">　Sp省份统计</span></a>
                            </li>
                            <li <?php if($Think.CONTROLLER_NAME==Sp): ?>class="active"<?php endif; ?>>
                                <a href="<?=U('home/Sp/statistics')?>"><i class="fa"></i> <span class="nav-label">　Sp总量统计</span></a>
                            </li>
                        </ul>
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
        <h2>SP管理</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo U('home/front/index');?>">主页</a>
            </li>
            <li class="active">
                 <a href="<?php echo U('home/front/index');?>">SP列表</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<p>
        <div class="col-lg-12">
                        
            <form method="post" action="<?php echo U('home/Sp/statistics');?>">

                <div class="col-lg-1">SP_Name：</div>

                <div class="col-lg-2">
                    <select name="search_name" class="form-control">
                    <option selected='seleceted' value="<?php echo ($search_name); ?>"><?php echo ($search_name); ?></option>
                    <?php if(is_array($log)): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$logs): $mod = ($i % 2 );++$i;?><option><?php echo ($logs["sp_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <div class="col-lg-1">月份：</div>

                <div class="col-lg-2" >
                    <select name="search_month" class="form-control">
                    
                    <?php
 for ( $i = 1; $i <=12; $i++ ) { ?>
                     <option selected='seleceted' value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
 } ?>
                    <option selected='seleceted' value="$search_month}"><?php echo ($search_month); ?></option>
                    </select>
                    
                </div>
                <input type="submit" class="btn btn-success col-lg-2" name="查询">
            </form>
            

        </div></p>
<div class="wrapper wrapper-content">
        
        <div class="col-lg-12">

            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <?php if ($name) { ?>
                            <p style="text-align: center;"><a class="btn btn-rounded btn-xl btn-danger"><?php echo ($name); ?>统计</a></p>
                            <?php } ?>
                    
                    <div>
                        <div class="table-responsive">
                        <div class="col-lg-10">

                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/创宏');?>">创宏</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/真趣');?>">真趣</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/鼎元离线1');?>">鼎元离线1</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/鼎元离线3');?>">鼎元离线3</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/鼎元离线5');?>">鼎元离线5</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/悦人爱城市');?>">悦人爱城市</a>　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/悦人');?>">悦人</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/龙腾');?>">龙腾</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/平治');?>">平治</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/百荣翼支付');?>">百荣翼支付</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/百荣空间');?>">百荣空间</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/星合');?>">星合</a>　　
                        <a class="btn btn-rounded btn-outline btn-danger" href="<?php echo U('home/sp/statistics/name/朗天');?>">朗天</a>　　


                    
                </div>  
                    
                        <table class="table table-striped">
                           
                                <tr>
                                    <th>SP名称</th>
                                    <th>充值数</th>
                                    <th>充值</th>
                                    <th>time</th>
                                    <th>日期（
                                    <?php if ($name) { echo "日"; }else{ echo "月"; } ?>）
                                    </th>
                                </tr>
                            

                            <?php if(is_array($sp_statistics)): $i = 0; $__LIST__ = $sp_statistics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$statistics): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($statistics["name"]); ?></td>
                                    <td><?php echo ($statistics["pay_num"]); ?></td>
                                    <td><?php echo ($statistics["recharge"]); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$statistics["time"])); ?></td>
                                    <td>
                                        <?php if ($statistics['day']) { echo $statistics['day']; }else{ echo $statistics['month']; } ?>
                                    </td>
                                   
                                    <td>
                                        

                                   </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                    </div>
                </div>
                <br>
                
                 
                </div>
                <br>
                </br>

                    
                    <br>
               </br>

                </div>
            </div>
        </div>


    








</div>

				    <div class="footer">
                        <div class="pull-right">

                            <table>
                                <tr bgcolor="#FFFFFF">
                                <td>当前时间：</td>
                                <td id="CurrentTime"></td>
                                <script type="text/javascript">
                                    function changetime(){
                                        var ary = Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
                                        var Timehtml = document.getElementById('CurrentTime');
                                        var date = new Date();
                                        Timehtml.innerHTML = ''+date.toLocaleString()+'   '+ary[date.getDay()];
                                    }
                                    window.onload = function(){
                                        changetime();
                                        setInterval(changetime,1000);   
                                    }
                                </script>
                                </tr>
                            </table>

                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company &copy; 2016-2017
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