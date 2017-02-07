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
                    <br>
                      <div >
                        <div class="modal-content col-lg-10">
                        <form method="post" action="<?=U('home/sp/do_edit')?>">
                          <div class="modal-header">
                            <h4 class="modal-title">编辑屏蔽省份</h4>
                            <a class="pull-right btn btn-success clear_sheild">清除屏蔽</a>
                          </div>
                          
                          <div class="modal-body" id="Mybody">
                              <div class="form-group">
                                <label>已屏蔽省份: </label>
                                  <?php
 $op = json_decode($off_province); $count = count($op); for ($i=0; $i <$count ; $i++) { echo "<span class='btn btn-sm btn-rounded  btn-danger'>".$op[$i]."</span>"."　"; } ?>
                                <input type="hidden" class="i-checks" name="id" value="<?php echo ($id); ?>">
                             </div>
                             <br><br>
                             <div class="form-group">
                                <label>修改屏蔽省份:</label>
                                  <input type="button" class="btn-success btn-xs" value="全选" id="reverse" /> <br>                               
                                <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$provinces): $mod = ($i % 2 );++$i;?><input type="checkbox" class="i-checks shield_province" name="province" value="<?php echo ($provinces["name"]); ?>"><?php echo ($provinces["name"]); ?>　　<?php endforeach; endif; else: echo "" ;endif; ?>
                                
                             </div>
                          </div>

                          <div class="modal-footer">
                            <button type="submit" class="shieldProvince btn btn-primary col-lg-12">保存</button>
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
<script type="text/javascript">
    $(function(){
              $("#reverse").click(function () {   
                  $("#Mybody :checkbox").each(function () {  
                      $(this).prop("checked", !$(this).prop("checked"));  
                  });  
              });
              
              $(".shieldProvince").click(function() { 
                if(confirm('你确定要更改屏蔽省份吗？')){
                    var province = [];
                    var id = $('#Mybody [name="id"]').val();
                    $(".shield_province").each(function(index, el) {           
                        if ($(el).prop('checked')) {
                            province.push($(el).val());
                        }
                        
                    });
                    if (province.length==0) {
                        alert("没有选中任何省份");
                    }else{
                        $.post('<?=U('home/sp/sheild_province')?>', {
                          province: province,
                          id: id,
                        }, function(data) {
                            if (data=='ok') {
                                location.reload();
                            }else{
                                alert("修改失败");
                            }
                        });
                    }
                }
                return false;
              });                        
              
              $(".clear_sheild").click(function() { 
                if(confirm('你确定要清除屏蔽吗？')){
                    var id = $('#Mybody [name="id"]').val();
                        $.post('<?=U('home/sp/clear')?>', {
                          id: id,
                        }, function(data) {
                            if (data=='ok') {
                                location.reload();
                            }else{
                                alert("清除失败");
                            }
                        });
                    }
               
                return false;
              });              
            //  $('#Sp_do_edit').click(function() {
            //     var sp_name=$('#Mybody [name="sp_name"]').val();
            //     var status=$('#Mybody [name="status"]').val();
            //     var start_time=$('#Mybody [name="start_time"]').val();
            //     var end_time=$('#Mybody [name="end_time"]').val();
            //     var balance_mode=$('#Mybody [name="balance_mode"]').val();
            //     var province=$('#Mybody [name="province"]').val();
            //     var request_num=$('#Mybody [name="request_num"]').val();
            //     var percentage=$('#Mybody [name="percentage"]').val();
            //     $.post('<?=U('home/sp/do_edit')?>', {
            //         sp_name: sp_name,
            //         status:status,
            //         start_time: start_time,
            //         end_time:end_time,
            //         balance_mode: balance_mode,
            //         province:province,
            //         request_num: request_num,
            //         percentage:percentage,

            //     }, function(data) {
            //         data = eval("("+data+')');
            //         if (data.code=='ok') {
            //             location.reload();
            //         }
            //         if (data.code=='error') {
            //             $('#Mybody [name="'+data.field+'"]').after('<p class="error">'+data.msg+"</p>")
            //         }
            //         return false;
            //     });
            // });


    })
</script>
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