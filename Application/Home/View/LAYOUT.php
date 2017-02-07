<!DOCTYPE html>
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

    <link  href="__PUBLIC__/template/css/style.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script type="text/javascript" src="__PUBLIC__/../apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="__PUBLIC__/template/js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/template/js/jquery.superslide.js"></script>
    <script type="text/javascript" src="__PUBLIC__/template/js/common.js"></script>

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



<img width="100%" src="__PUBLIC__/headfoot/header.png">

<div class="header w100 clearfix" id="header">
    <div class="w clearfix">
        <a href="/sd/index.php/Home/Index/index" class="logo fl"><img src="__PUBLIC__/template/img/logo.png" alt=""></a>

    </div>
</div>

<nav class="nav w100 clearfix">
    <div class="w clearfix">
        <ul class="menu clearfix">
            <ul class="menu clearfix">

                <li class="m"><h3>
                        <a <if condition="$Think.CONTROLLER_NAME==Index">class="curr"</if> href="/sd/index.php/Home/Index/index" title="">首页</a>
                    </h3>

                </li>

                <li class="m"><h3>

                        <a <if condition="$Think.CONTROLLER_NAME==Project">class="curr"</if>  href="/sd/index.php/Home/Project/index" title="">综合项目</a>

                    </h3>

                </li>

                <li class="m"><h3>

                        <a <if condition="$Think.CONTROLLER_NAME==Student">class="curr"</if> href="/sd/index.php/Home/Student/index" title="">学员风采</a>

                    </h3>

                </li>

                <li class="m"><h3>
                        <a <if condition="$Think.CONTROLLER_NAME==Cooker">class="curr"</if> href="/sd/index.php/Home/Cooker/index" title="">师资力量</a>
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

                    <ul class="sub"> <li><a href="{:U(home/contect/index)}">联系方式</a></li></ul>

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

                <li><a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" style="background: url(__PUBLIC__/UploadFiles/2016-12/2016122113463415968.jpg) no-repeat center top"></a></li>

                <li><a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank" style="background: url(__PUBLIC__/UploadFiles/2016-09/2016090710450187001.jpg) no-repeat center top"></a></li>

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



{__CONTENT__}




<img width="100%" src="__PUBLIC__/headfoot/footer.png">





<p style="text-align: center;">CopyRight © 2010-2016 xueup.cn All Rights Reserved.
    2010-2016，北京蓝程科技有限公司 版权所有，未经授权，不得转载本站内所有信息。
    京ICP备15033742号-1bsp;&nbsp;&nbsp;
</p>
</div>


<br><br>

<div class="tel_fixed">
    <a href="http://p.qiao.baidu.com/im/index?siteid=9949925&ucid=6948249&cp=&cr=&cw=" target="_blank"></a>
</div>






<script type="text/javascript" charset="utf-8" async src="__PUBLIC__/../lxbjs.baidu.com/lxb.js�sid=9622002"></script>




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
