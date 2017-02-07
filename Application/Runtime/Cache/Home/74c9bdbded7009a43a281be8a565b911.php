<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge;chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>济南食创餐饮管理有限公司</title>
    <meta name="keywords" content="济南食创餐饮管理有限公司"/>
    <meta name="description" content="济南食创餐饮管理有限公司" />

    <script type="text/javascript">
        function browserRedirect() {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

            if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
                window.location.href = '/sd/index.php/home/mobile/index';
            } else {

            }

        }
        browserRedirect();
    </script>

    <link  href="/sd/Public/template/css/style.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script type="text/javascript" src="/sd/Public/../apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="/sd/Public/template/js/jquery.js"></script>
    <script type="text/javascript" src="/sd/Public/template/js/jquery.superslide.js"></script>
    <script type="text/javascript" src="/sd/Public/template/js/common.js"></script>

</head>

<body>


<!-- Copyright � 2008. Spidersoft Ltd -->
<style>
    A.applink:hover {border: 2px dotted #DCE6F4;padding:2px;background-color:#ffff00;color:green;text-decoration:none}
    A.applink       {border: 2px dotted #DCE6F4;padding:2px;color:#2F5BFF;background:transparent;text-decoration:none}
    A.info          {color:#2F5BFF;background:transparent;text-decoration:none}
    A.info:hover    {color:green;background:transparent;text-decoration:underline}
</style>

<!-- /Copyright � 2008. Spidersoft Ltd -->



<img width="100%" src="/sd/Public/headfoot/header.png">

<div class="header w100 clearfix" id="header">
    <div class="w clearfix">
        <a href="/sd/index.php/Home/Index/index" class="logo fl"><img src="/sd/Public/template/img/logo.png" alt=""></a>

    </div>
</div>

<nav class="nav w100 clearfix">
    <div class="w clearfix">
        <ul class="menu clearfix">
            <ul class="menu clearfix">

                <li class="m"><h3>
                        <a <?php if($Think.CONTROLLER_NAME==Index): ?>class="curr"<?php endif; ?> href="/sd/index.php/Home/Index/index" title="">首页</a>
                    </h3>

                </li>

                <li class="m"><h3>

                        <a <?php if($Think.CONTROLLER_NAME==Project): ?>class="curr"<?php endif; ?>  href="/sd/index.php/Home/Project/index" title="">综合项目</a>

                    </h3>

                </li>

                <li class="m"><h3>

                        <a <?php if($Think.CONTROLLER_NAME==Student): ?>class="curr"<?php endif; ?> href="/sd/index.php/Home/Student/index" title="">学员风采</a>

                    </h3>

                </li>

                <li class="m"><h3>
                        <a <?php if($Think.CONTROLLER_NAME==Cooker): ?>class="curr"<?php endif; ?> href="/sd/index.php/Home/Cooker/index" title="">师资力量</a>
                    </h3>



                </li>

                <li class="m"><h3>
                        <a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" title="">新闻资讯</a>
                    </h3>

                </li>

                <li class="m"><h3>

                        <a  href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" title="">关于我们</a>

                    </h3>

                </li>

                <li class="m"><h3>
                        <a  href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" title="">联系我们</a>
                    </h3>

                    <ul class="sub"> <li><a href="<?php echo U(home/contect/index);?>">联系方式</a></li></ul>

                </li>

            </ul>
        </ul>
    </div>
    <!-- <script type="text/javascript">
            jQuery(".nav").slide({type:"menu",titCell:".m",targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:100,returnDefault:!0});
    </script> -->
</nav>

<div class="banner w100 clearfix">

    <div class="ffocus clearfix">
        <div class="bd">
            <ul class="ffocuspic">

                <li><a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" style="background: url(/sd/Public/UploadFiles/2016-12/2016122113463415968.jpg) no-repeat center top"></a></li>

                <li><a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" style="background: url(/sd/Public/UploadFiles/2016-09/2016090710450187001.jpg) no-repeat center top"></a></li>

            </ul>
        </div>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
        <div class="hd"><ul></ul></div>
    </div>

    <script>
        $(".ffocus").hover(function(){
            $(this).find(".prev,.next").fadeTo("show",0.3);
        },function(){
            $(this).find(".prev,.next").hide();
        })
        /*鼠标移过某个按钮 高亮显示*/
        $(".prev,.next").hover(function(){
            $(this).fadeTo("show",0.8);
        },function(){
            $(this).fadeTo("show",0.3);
        })
        $(".ffocus").slide({ titCell:".hd ul" , mainCell:".bd ul" , effect:"fold", autoPlay:true, delayTime:300, interTime:1500, autoPage:true });
    </script>

</div>






<div class="i_pc2 p40 w100">
<div class="w clearfix">

    <div class="pc2l fl">
            <div class="pcbmtop clearfix">
                    <a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank" class="pcbm">我要报名</a>
                    <h3><span>今日新增学员76人</span><em>剩下24个名额</em></h3>
                    <p>由于报名人数过多，为确保学员教学质量，特限每日100名</p>
            </div>
            <div class="pcbmul clearfix" id="pcbm_list">
                    <dl class="dl1"><dt>姓名</dt><dd class="dd1">项目</dd><dd class="dd2">报名时间</dd></dl>

                    <div class="bd clearfix">
                        <dl class="dl2"><dt>叶皖风</dt><dd class="dd1">蒸饺开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>刘杰</dt><dd class="dd1">烧烤开店</dd><dd class="dd2"><?php echo date("Y-m-d"); ?></dd></dl>
                        <dl class="dl2"><dt>项永华</dt><dd class="dd1">卤味开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>夏敏</dt><dd class="dd1">卤味开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>王建国</dt><dd class="dd1">烧烤开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>王新凤</dt><dd class="dd1">奶茶开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>孟翠莲</dt><dd class="dd1">锅贴煎饺开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>周莲芳</dt><dd class="dd1">包子早餐开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>罗爱芳</dt><dd class="dd1">重庆小面开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>祝春花</dt><dd class="dd1">绝味鸭脖开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>柳明明</dt><dd class="dd1">烧烤开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>金露珠</dt><dd class="dd1">奶茶开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>毛新峰</dt><dd class="dd1">蛋糕开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>夏建海</dt><dd class="dd1">烧烤卤水开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                        <dl class="dl2"><dt>夏建斌</dt><dd class="dd1">烧烤卤水开店</dd><dd class="dd2"><?php echo date("Y-m-d");; ?></dd></dl>
                    </div>

            </div>
    </div>
    
    <div class="pc2r fr">
            <h2 class="h2"><span>金牌培训师</span><a href="Item/list.asp�id=1662.html">more +</a></h2>
            <ul class="pc2ul clearfix">
<?php if(is_array($cooker)): $i = 0; $__LIST__ = $cooker;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cookers): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/cooker/cooker/id/'.$cookers['id']);?>"><img width="210" height="296" src="/sd/Public/<?php echo ($cookers["img"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
    </div>

</div>
</div>









<div class="i_pc3 p400 w100">
<div class="w clearfix">

    <h2 class="h2"><span>热销项目</span></h2>
    <div class="pc3 clearfix">

    <?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$projects): $mod = ($i % 2 );++$i;?><a href="<?php echo U('home/project/index/id='.$projects['id']);?>"><img src="/sd/Public/<?php echo ($projects["img"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>

</div>
</div>






<div class="i_pcpx w100">
<div class="w clearfix">



    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s1">特色小吃培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/sd/Public/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                            <ul class="px_xmul clearfix">
                                <?php if(is_array($food_one)): $i = 0; $__LIST__ = $food_one;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_1): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/project/food/id/'.$food_1['id']);?>" title="<?php echo ($food_1["name"]); ?>"><?php echo ($food_1["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                            </ul>
                            <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                    <div class="px1r fr">
                            <ul class="px_xmimg clearfix">
                                <?php if(is_array($food_one)): $i = 0; $__LIST__ = $food_one;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_1): $mod = ($i % 2 );++$i;?><li><img class="img" src="/sd/Public/<?php echo ($food_1["img"]); ?>"><a href="<?php echo U('home/project/food/id/'.$food_1['id']);?>"><h3><?php echo ($food_1["name"]); ?></h3><span class="tc"><img src="/sd/Public/template/img/ico6.png" alt=""></span><p>报名人气 ：<?php echo ($food_1["click"]); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                    </div>
            </div>
    </div>
    

    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s2">中式面点</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/sd/Public/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                <div class="px1l fl">
                    <ul class="px_xmul clearfix">
                        <?php if(is_array($food_two)): $i = 0; $__LIST__ = $food_two;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_2): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/project/food/id/'.$food_2['id']);?>" title="<?php echo ($food_2["name"]); ?>"><?php echo ($food_2["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                    <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <?php if(is_array($food_two)): $i = 0; $__LIST__ = $food_two;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_2): $mod = ($i % 2 );++$i;?><li><img class="img" src="/sd/Public/<?php echo ($food_2["img"]); ?>"><a href="<?php echo U('home/project/food/id/'.$food_2['id']);?>"><h3><?php echo ($food_2["name"]); ?></h3><span class="tc"><img src="/sd/Public/template/img/ico6.png" alt=""></span><p>报名人气 ：<?php echo ($food_2["click"]); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s3">早餐早点培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/sd/Public/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                        <ul class="px_xmul clearfix">
                            <?php if(is_array($food_three)): $i = 0; $__LIST__ = $food_three;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_3): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/project/food/id/'.$food_3['id']);?>" title="<?php echo ($food_3["name"]); ?>"><?php echo ($food_3["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                        <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <?php if(is_array($food_three)): $i = 0; $__LIST__ = $food_three;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_3): $mod = ($i % 2 );++$i;?><li><img class="img" src="/sd/Public/<?php echo ($food_3["img"]); ?>"><a href="<?php echo U('home/project/food/id/'.$food_3['id']);?>"><h3><?php echo ($food_3["name"]); ?></h3><span class="tc"><img src="/sd/Public/template/img/ico6.png" alt=""></span><p>报名人气 ：<?php echo ($food_3["click"]); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s4">烧烤油炸培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/sd/Public/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                        <ul class="px_xmul clearfix">
                            <?php if(is_array($food_four)): $i = 0; $__LIST__ = $food_four;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_4): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/project/food/id/'.$food_4['id']);?>" title="<?php echo ($food_4["name"]); ?>"><?php echo ($food_4["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                        <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <?php if(is_array($food_four)): $i = 0; $__LIST__ = $food_four;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_4): $mod = ($i % 2 );++$i;?><li><img class="img" src="/sd/Public/<?php echo ($food_4["img"]); ?>"><a href="<?php echo U('home/project/food/id/'.$food_4['id']);?>"><h3><?php echo ($food_4["name"]); ?></h3><span class="tc"><img src="/sd/Public/template/img/ico6.png" alt=""></span><p>报名人气 ：<?php echo ($food_4["click"]); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s5">卤菜卤味培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/sd/Public/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                            <ul class="px_xmul clearfix">
                                 <?php if(is_array($food_five)): $i = 0; $__LIST__ = $food_five;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_5): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/project/food/id/'.$food_5['id']);?>" title="<?php echo ($food_5["name"]); ?>"><?php echo ($food_5["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



                            </ul>
                            <p class="tc"><a class="px_xma" href="<?php echo U('home/project/classify');?>">更多培训项目 &gt;&gt;</a></p>
                    </div>
                    <div class="px1r fr">
                            <ul class="px_xmimg clearfix">
                                <?php if(is_array($food_five)): $i = 0; $__LIST__ = $food_five;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_5): $mod = ($i % 2 );++$i;?><li><img class="img" src="/sd/Public/<?php echo ($food_5["img"]); ?>"><a href="<?php echo U('home/project/food/id/'.$food_5['id']);?>"><h3><?php echo ($food_5["name"]); ?></h3><span class="tc"><img src="/sd/Public/template/img/ico6.png" alt=""></span><p>报名人气 ：<?php echo ($food_5["click"]); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                    </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s6">西餐西点培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/sd/Public/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                        <ul class="px_xmul clearfix">
                            <?php if(is_array($food_six)): $i = 0; $__LIST__ = $food_six;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_6): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/project/food/id/'.$food_6['id']);?>" title="<?php echo ($food_6["name"]); ?>"><?php echo ($food_6["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                        <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <?php if(is_array($food_six)): $i = 0; $__LIST__ = $food_six;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food_6): $mod = ($i % 2 );++$i;?><li><img class="img" src="/sd/Public/<?php echo ($food_6["img"]); ?>"><a href="<?php echo U('home/project/food/id/'.$food_6['id']);?>"><h3><?php echo ($food_6["name"]); ?></h3><span class="tc"><img src="/sd/Public/template/img/ico6.png" alt=""></span><p>报名人气 ：<?php echo ($food_6["click"]); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    </div>
            </div>
    </div>

</div>
</div>







<img width="100%" src="/sd/Public/headfoot/footer.png">





<p style="text-align: center;">CopyRight © 2010-2016 xueup.cn All Rights Reserved.
    2010-2016，北京蓝程科技有限公司 版权所有，未经授权，不得转载本站内所有信息。
    京ICP备15033742号-1bsp;&nbsp;&nbsp;
</p>
</div>


<br><br>

<div class="tel_fixed">
    <a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank"></a>
</div>






<script type="text/javascript" charset="utf-8" async src="/sd/Public/../lxbjs.baidu.com/lxb.js�sid=9622002"></script>




<script type="text/javascript">
    jQuery(".tabbox").slide({trigger:"click"});
    jQuery(".partner").slide({ mainCell:"ul",autoPlay:true,effect:"leftMarquee",interTime:50,vis:5  });
    jQuery("#pcbm_list").slide({ mainCell:".bd",autoPlay:true,effect:"topMarquee",interTime:50,vis:7});
</script>
<script>
    $(function(){
        $('.pc3 a:nth-child(3n)').addClass('no');

        $('.px_xmul li:even').addClass('even');
        $('.px_xmul li:odd').addClass('odd');

        $('.px_xmimg li:nth-child(4n)').addClass('no');

        $('.yuan_list li:nth-child(4n)').addClass('no');
    })
</script>


</body>
</html>