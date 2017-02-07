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
        <h2>游戏管理</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo U('home/index/index');?>">主页</a>
            </li>
            <li>
                 <a href="<?php echo U('home/game/index');?>">游戏列表</a>
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
                    <h5>Game  Table </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                

                <div class="ibox-content">
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td><input type="button" class="btn-success btn-xs" value="全选" id="reverse" />  
                                <td colspan="10">
                                    <p class="pull-right"><button id="game_add" class="btn btn-primary pull-right">添加游戏</button></p>

                                </td>
                            </tr>
                            <tr>
                                <th width="150">编号 </th>
                                <th>游戏名称</th>
                                <th>创建时间</th>
                                <th>游戏状态</th>
                                <th>下载总数</th>
                                <th>描述</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if(is_array($games)): $i = 0; $__LIST__ = $games;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$game): $mod = ($i % 2 );++$i;?><tr>
	                                <td><?php echo ($game["id"]); ?></td>
	                                <td><?php echo ($game["game_name"]); ?></td>
	                                <td><?php echo (date("Y-m-d H:i:s",$game["create_time"])); ?></td>
	                                
                                    <td>
                                        <?php if ($game['status']==0){?>
                                            <a class="btn btn-warning btn-rounded">已禁用</a>
                                        <?php } ?>
                                        <?php if ($game['status']==1){ ?>
                                            <a class="btn btn-primary btn-rounded">
                                              已启用
                                            </a>
                                        <?php } ?>
                                    </td>
                                    
	                                <td><?php echo ($game["install_sum"]); ?></td>
                                    <td><?php echo ($game["desc"]); ?></td>
	                                <td><a class="btn btn-xm btn-primary add_product" href="<?php echo U('home/game/edit/id/'.$game['id']);?>">编辑</a>  |  <a class="btn btn-xm btn-danger" href="<?php echo U('home/game/delete/id/'.$game['id']);?>">删除</a></td>
	                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
</div>


	<div class="modal fade" id="game">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">添加游戏</h4>
	      </div>
	      <div class="modal-body" id="Mybody">
	         <div class="form-group">
			    <label>名称</label>
			    <input type="text" name="game_name" class="form-control" placeholder="请输入姓名...">
			 </div>
			 <div class="form-group">
                <label>状态</label>
                <select class="form-control" name="status">
                    <option>on</option>
                    <option>off</option>
                </select>
             </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="button" id="game_save" class="btn btn-primary">保存</button>
	      </div>
	    </div>
	  </div>
	</div>

<script type="text/javascript">
        $(function () { 

            $("#reverse").click(function () {   
                $(".table-striped :checkbox").each(function () {  
                    $(this).prop("checked", !$(this).prop("checked"));  
                });  
            });


            $(".game_del_one").click(function() {
                if(confirm('你确定要删除这条数据吗？')){
                    var id=$('.table-striped [name="id"]').val();
                    console.log(id);
                    debugger;
                    $.post('<?=U('home/game/del_one')?>',{
                        'id':id,
                        },function(data) {
                            if (data=='ok') {
                                location.reload();
                            }else{
                                alert(删除失败);
                            }
                    });
                }
            });



            $('#game_add').click(function() {
    			$('#game').modal('show');
    			return false;
    		});
    		 $('#game_save').click(function() {
                var game_name=$('#Mybody [name="game_name"]').val();
                var status=$('#Mybody [name="status"]').val();
                $.post('<?=U('home/game/do_add')?>', {
                    game_name: game_name,
                    desc:desc,

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
    		$('.delete').click(function() {
    			var id =  $(this).parents('.tr').find('.add_id').val();
    			$.post('<?=U('home/home/del_address')?>', {
    				'id': id
    			}, function(data) {
    			    if (data=='ok') {
    					location.reload();
    				}
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