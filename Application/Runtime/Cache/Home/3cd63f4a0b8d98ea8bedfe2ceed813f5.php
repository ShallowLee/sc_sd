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

<div class="wrapper wrapper-content">
 

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>SP  Table </h5>
                    <div>
                        <div class="table-responsive">
                        <div class="col-lg-10">
                    <p>
                        <a class="btn btn-rounded btn-success pull-left" href="<?=U('home/sp/statistics')?>">SP数据统计</a>
                        <button id="sp_add" class="btn btn-primary pull-right">添加sp</button>
                    </p>
                </div>
                        <table class="table table-striped">
                            <thead>
                            
                            <tr>
                                <th>ip</th>
                                <th>通道名称</th>
                                <th>运营商</th>
                                <th>分成比例</th>
                                <th>结算方式</th>
                                <th>每天请求次数</th>
                                <th>屏蔽时间</th>
                                <th>屏蔽省份</th>
                                <th>创建时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if(is_array($sp)): $i = 0; $__LIST__ = $sp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sps): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($sps["id"]); ?></td>

                                    <td><a class="btn btn-rounded btn-primary">  <?php echo ($sps["name"]); ?></td>
                                    <td>中国电信</td>
                                    <td><?php echo ($sps["percentage"]); ?></td>
                                    <td><?php echo ($sps["balance_mode"]); ?></td>
                                    <td><?php echo ($sps["request_num"]); ?></td>
                                    <td><?php echo ($sps["start_time"]); ?>点至<?php echo ($sps["end_time"]); ?>点</td>
                                    <td width="500">
                                        <?php
 $op = json_decode($sps['off_province']); $count = count($op); for ($i=0; $i <$count ; $i++) { echo "<span class='btn btn-sm btn-rounded  btn-danger'>".$op[$i]."</span>"."　"; } ?>
                                    </td>
                                    <td><?php echo (date("Y-m-d H:i:s",$sps["create_time"])); ?></td>
                                    <td>
                                        

                                        <?php if ($sps['status']==0){?>
                                            <a class="btn btn-warning btn-rounded btn-sm">已禁用</a>
                                        <?php } ?>
                                        <?php if ($sps['status']==1){ ?>
                                            <a class="btn btn-primary btn-rounded btn-sm">
                                              已启用
                                            </a>
                                        <?php } ?>
                                    </td>
                                    
                                    <td>
                                        <?php if($sps['status']==1): ?><a class="btn btn-danger btn-rounded btn-outline" href="<?php echo U('home/sp/change_status/id/'.$sps['id']);?>"> 禁用 </a>
                                        <?php else: ?>
                                            <a class="btn btn-danger btn-rounded btn-outline" href="<?php echo U('home/sp/change_status/id/'.$sps['id']);?>">启用</a><?php endif; ?> | 
                                        <a class="btn btn-danger btn-rounded btn-outline" href="<?php echo U('home/sp/edit/id/'.$sps['id']);?>">编辑</a> | 
                                        <a class="btn btn-danger btn-rounded btn-outline" href="<?php echo U('home/sp/province/id/'.$sps['id']);?>">屏蔽省份</a><br>

                                   </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
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


    <div class="modal fade" id="spAdd">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">添加sp</h4>
          </div>
          <div class="modal-body" id="Mybody">
             <div class="form-group">
                <label>sp名称</label>
                <input type="text" name="sp_name" class="form-control" placeholder="请输入Sp_name（必填）">
             </div>
             <div class="form-group">
                <label>分成比例</label>
                <input type="text" name="percentage" class="form-control" placeholder="请输入分成比例（必填）">
             </div>
             <div class="form-group">
                <label>结算方式</label>
                <input type="text" name="balance_mode" class="form-control" placeholder="请输入结算方式（可不写">
             </div>
             <div class="form-group">
                <label>每日请求次数</label>
                <input type="text" name="request_num" class="form-control" placeholder="请输入每日请求此时（可不写）">
             </div>
             <div class="form-group col-lg-6">
                <label>屏蔽开始时间</label>
                <input type="text" name="start_time" class="form-control" placeholder="请输入屏蔽时间（可不写）">
             </div>
             <div class="form-group col-lg-6">
                <label>屏蔽结束时间</label>
                <input type="text" name="end_time" class="form-control" placeholder="请输入屏蔽时间（可不写）">
             </div>
             <div class="form-group">
                <label>状态</label>
                <select class="form-control" name="status">
                    <option>on</option>
                    <option>off</option>
                </select>
             </div>
             <div class="form-group">
                <label>屏蔽省份</label>
                <textarea name="province" class="form-control" placeholder="请输入屏蔽省份（可不写）"></textarea>
             </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" id="Sp_do_add" class="btn btn-primary">保存</button>
          </div>
        </div>
      </div>
    </div>
    








</div>
<script type="text/javascript">
    $(function(){
       
            $('#sp_add').click(function() {
                $('#spAdd').modal('show');
                return false;
            });
            $('#sp_edit').click(function() {
                $('#spSave').modal('show');
                return false;
            });
             $('#Sp_do_add').click(function() {
                var sp_name=$('#Mybody [name="sp_name"]').val();
                var status=$('#Mybody [name="status"]').val();
                var start_time=$('#Mybody [name="start_time"]').val();
                var end_time=$('#Mybody [name="end_time"]').val();
                var balance_mode=$('#Mybody [name="balance_mode"]').val();
                var province=$('#Mybody [name="province"]').val();
                var request_num=$('#Mybody [name="request_num"]').val();
                var percentage=$('#Mybody [name="percentage"]').val();
                $.post('<?=U('home/sp/do_add')?>', {
                    sp_name: sp_name,
                    status:status,
                    start_time: start_time,
                    end_time:end_time,
                    balance_mode: balance_mode,
                    province:province,
                    request_num: request_num,
                    percentage:percentage,

                }, function(data) {
                    data = eval("("+data+')');
                    if (data.code=='ok') {
                        location.reload();
                    }
                    if (data.code=='error') {
                        $('#Mybody [name="'+data.field+'"]').after('<p class="error">'+data.msg+"</p>")
                    }
                    return false;
                });
            });


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