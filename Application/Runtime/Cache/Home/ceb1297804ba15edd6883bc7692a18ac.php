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
        <h2>实时统计</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo U('home/front/index');?>">主页</a>
            </li>
            <li class="active">
                 <a href="<?php echo U('home/front/index');?>">统计列表</a>
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
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
<br>
                <div id="date_serch">
                    
<div>
<form method="post" action="<?=U('home/front/search');?>">
    <span class="col-sm-1">开始日期：</span><span class="col-sm-2"><input type="text" id="st" onclick="return Calendar('st');" value="<?php echo ($time); ?>" name="st" class="text form-control" /></span>
    <span class="col-sm-1">结束日期：</span><span class="col-sm-2"><input type="text" id="et" onclick="return Calendar('et');" value="<?php echo ($time); ?>" name="et" class="text form-control" /></span>
    <span class="col-sm-1"><input type="submit" value="查询" class="btn-primary btn"></input></span>
</form>
    <br/> <br/> <br/>
</div>


                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            
                            <tr>
                                <th>编号 </th>
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
                                <th>更新时间</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            <?php if(is_array($statistic)): $i = 0; $__LIST__ = $statistic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$statistics): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($statistics["id"]); ?></td>
                                    <td>
                                       <?php if ($statistics['create_time'] == strtotime('today')) { echo weekday($statistics['create_time']); }else{ ?> <?php echo (date("Y-m-d",$statistics["create_time"])); ?> <?php } ?>
                                           
                                    </td>
                                    <td><?php echo ($statistics["rate"]); ?></td>
                                    <td>
                                        <?php  $channel_code = $statistics['channel_name']; $channel_num = M('channel')->where(array('channel_num' =>$channel_code ,))->find(); $channel_id = M('channel')->where(array('id' =>$channel_code ,))->find(); if ($channel_num) { echo $channel_num['channel_name']; }elseif($channel_id){ echo $channel_id['channel_name']; }else{ echo "线上渠道"; } ?>
                                    </td>
                                    <td>
                                        <?php  $game_code = $statistics['bag']; $game_name = M('game')->where(array('id' =>$game_code ,))->find(); if (!$game_name) { echo "未知包"; }else{ echo $game_name['game_name']; } ?>
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
                                    <td><?php echo (date("Y-m-d H:i:s",$statistics["time"])); ?></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                            <tr>
                                <th colspan="2">昨日总计:<br>今日总计：</th>
                                <th><?php echo ($fate); ?><br><?php echo ($tfate); ?></th>
                                <th colspan="2"></th>
                                <th><?php echo ($install_num); ?>次<br><?php echo ($tinstall_num); ?>次</th>
                                <th><?php echo ($pay_num); ?>次<br><?php echo ($tpay_num); ?>次</th>
                                <th><?php echo ($sum); ?>元<br><?php echo ($tsum); ?>元</th>
                                <th><?php echo ($percentage); ?>元<br><?php echo ($tpercentage); ?>元</th>
                                <th><?php echo ($cost); ?>元<br><?php echo ($tcost); ?>元</th>
                                <th><?php echo ($profits); ?>元<br><?php echo ($tprofits); ?>元</th>
                                <th colspan="4"></th>
                                <th><?php echo ($input_output); ?><br><?php echo ($tinput_output); ?></th>
                                <th></th>
                            </tr>
                            </tbody>
                        </table>
                        <?php echo ($page); ?>
                        <br><br>
                      
                </div></br>
                </div>
                

            </div>
                

                    
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    $(function(){
       function change_one() {
            var id = $('.frist_cata').val();
            $.get('<?php echo U('home/front/index');?>',{'id':id}, function(data) {
                var str = "";
                for (var i = 0; i < data.length; i++) {
                    str+= '<option value="'+data[i].id+'">'+data[i].name+'</option>'
                }
                $('.second_cata').html(str);
                change_two();
            });
        }
        function change_two() {
            var id = $('.second_cata').val();
            $.get('<?php echo U('home/front/index');?>',{'id':id}, function(data) {
                var str = "";
                for (var i = 0; i < data.length; i++) {
                    str+= '<option value="'+data[i].id+'">'+data[i].name+'</option>'
                }
                $('.third_cata').html(str);
            });
        }
        $('.frist_cata').change(change_one);
        $('.second_cata').change(change_two);
        change_one();



    })
</script>
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