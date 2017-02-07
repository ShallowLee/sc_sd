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
                    <h5>SP Edit Table </h5>
                    
                </div>
                    <div id="spSave">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        <form method="post" action="<?=U('home/sp/do_edit')?>">
                          <div class="modal-header">
                            <h4 class="modal-title">编辑sp</h4>
                          </div>
                          <div class="modal-body" id="Mybody">
                             <div class="form-group">
                                <label>sp名称</label>
                                <input type="hidden" name="id" value="<?php echo ($edit["id"]); ?>">
                                <input type="text" name="sp_name" class="form-control" value="<?php echo ($edit["name"]); ?>">
                             </div>
                             <div class="form-group">
                                <label>分成比例</label>
                                <input type="text" name="percentage" class="form-control" value="<?php echo ($edit["percentage"]); ?>" >
                             </div>
                             <div class="form-group">
                                <label>结算方式</label>
                                <input type="text" name="balance_mode" class="form-control"  value="<?php echo ($edit["balance_mode"]); ?>">
                             </div>
                             <div class="form-group">
                                <label>每日请求次数</label>
                                <input type="text" name="request_num" class="form-control" value="<?php echo ($edit["request_num"]); ?>" >
                             </div>
                             <div class="form-group col-lg-6">
                                <label>屏蔽开始时间（24小时）</label>
                                <select name="start_time" class="form-control">
                                  <option><?php echo ($edit["start_time"]); ?></option>
                                  <option></option>
                                  <?php for ($i=1; $i <=24 ; $i++) { ?>
                                    <option><?=$i?></option>
                                  <?php } ?>
                                </select>
                             </div>
                             <div class="form-group col-lg-6">
                                <label>屏蔽结束时间（24小时）</label>
                                <select name="end_time" class="form-control">
                                  <option><?php echo ($edit["end_time"]); ?></option>
                                  <option></option>
                                  <?php for ($i=1; $i <=24 ; $i++) { ?>
                                    <option><?=$i?></option>
                                  <?php } ?>
                                  
                                </select>
                             </div>
                             <div class="form-group">
                                <label>状态</label>

                                <select class="form-control" name="status">
                                  <?php switch($edit["status"]): case "1": ?><option>on</option><?php break;?>
                                    <?php case "0": ?><option>off</option><?php break;?>
                                    <?php default: ?>default<?php endswitch;?>

                                    <option>on</option>
                                    <option>off</option>
                                </select>

                             </div>
                             <div class="form-group">
                                <label>屏蔽省份</label>
                                <textarea name="province" class="form-control" placeholder="请输入屏蔽省份（可不写）" ><?php echo ($edit["off_province"]); ?></textarea>
                             </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary col-lg-12">保存</button>
                          </div>

                          
                        </form>
                        </div>
  
                      </div>
                    </div>
                </div>
                <br>
               </br>

                    <div class="table-responsive">
                        
                    </div>
                    <br>
               </br>

                </div>
            </div>
        </div>


</div>
<!-- <script type="text/javascript">
    $(function(){
       
            
             $('#Sp_do_edit').click(function() {
                var sp_name=$('#Mybody [name="sp_name"]').val();
                var status=$('#Mybody [name="status"]').val();
                var start_time=$('#Mybody [name="start_time"]').val();
                var end_time=$('#Mybody [name="end_time"]').val();
                var balance_mode=$('#Mybody [name="balance_mode"]').val();
                var province=$('#Mybody [name="province"]').val();
                var request_num=$('#Mybody [name="request_num"]').val();
                var percentage=$('#Mybody [name="percentage"]').val();
                $.post('<?=U('home/sp/do_edit')?>', {
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
</script> -->
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