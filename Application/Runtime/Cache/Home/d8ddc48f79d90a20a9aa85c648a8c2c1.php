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
                window.location.href = '/Item/list.asp?id=1681';
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
        <a href="www.sdxc360.html" class="logo fl"><img src="/sd/Public/template/img/logo.png" alt=""></a>
        <a href="www.sdxc360.html" class="tel fr"><img src="/sd/Public/template/img/tel.png" alt=""></a>
    </div>
</div>


<nav class="nav w100 clearfix">
    <div class="w clearfix">
        <ul class="menu clearfix">
            <ul class="menu clearfix">

                <li class="m"><h3>
                        <a  class="curr" href="<?php echo U(home/index/index);?>" title="">首页</a>
                    </h3>

                </li>

                <li class="m"><h3>

                        <a  href="/sd/index.php/Home/Project/index" title="">综合项目</a>

                    </h3>

                    <ul class="sub"> <li><a href="<?php echo U(home/project/index);?>">特色小吃</a></li> <li><a href="<?php echo U(home/project/index);?>">中餐面点</a></li> <li><a href="<?php echo U(home/project/index);?>">早餐早点</a></li> <li><a href="<?php echo U(home/project/index);?>">烧烤油炸</a></li> <li><a href="<?php echo U(home/project/index);?>">卤菜卤味</a></li> <li><a href="<?php echo U(home/project/index);?>">西餐西点</a></li></ul>

                </li>

                <li class="m"><h3>

                        <a  href="/sd/index.php/Home/Student/index" title="">学员风采</a>

                    </h3>

                    <ul class="sub"> <li><a href="<?php echo U(home/student/index);?>">优秀学员</a></li></ul>

                </li>

                <li class="m"><h3>
                        <a  href="/sd/index.php/Home/Teacher/index" title="">师资力量</a>
                    </h3>



                </li>

                <li class="m"><h3>
                        <a  href="/sd/index.php/Home/News/index" title="">新闻资讯</a>
                    </h3>

                    <ul class="sub"> <li><a href="<?php echo U(home/news/index);?>">公司动态</a></li> <li><a href="<?php echo U(home/news/index);?>">行业资讯</a></li></ul>

                </li>

                <li class="m"><h3>
                        <a  href="http://p.qiao.baidu.com/im/index?siteid=5367383&ucid=6948249&cp=lxxcpx.com&cr=&cw=" target="_blank" title="">关于我们</a>
                    </h3>

                    <ul class="sub"> <li><a href="<?php echo U(home/about/index);?>">关于我们</a></li> <li><a href="<?php echo U(home/about/index);?>">联系我们</a></li> <li><a href="<?php echo U(home/about/index);?>">荣誉资质</a></li> <li><a href="<?php echo U(home/about/index);?>">学员店面</a></li> <li><a href="<?php echo U(home/about/index);?>">学校实景</a></li> <li><a href="<?php echo U(home/about/index);?>">毕业指导</a></li></ul>

                </li>

                <li class="m"><h3>
                        <a  href="http://p.qiao.baidu.com/im/index?siteid=5367383&ucid=6948249&cp=lxxcpx.com&cr=&cw=" target="_blank" title="">联系我们</a>
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

                <li><a href="www.sdxc360.html" style="background: url(/sd/Public/UploadFiles/2016-12/2016122113463415968.jpg) no-repeat center top"></a></li>

                <li><a href="www.sdxc360.html" style="background: url(/sd/Public/UploadFiles/2016-09/2016090710450187001.jpg) no-repeat center top"></a></li>

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



<div class="i_pc3 p400 w100">
    <div class="w clearfix">

        <h2 class="h2"><span>热销项目</span></h2>



        <a href="Item/Show.asp�m=114&d=3.html"><img src="../../UploadFiles/2016-09/2016090713253119818.jpg"></a>

        <a href="Item/Show.asp�m=114&d=4.html"><img src="../../UploadFiles/2016-09/2016090713260085528.jpg"></a>

        <a href="Item/Show.asp�m=114&d=15.html"><img src="../../UploadFiles/2016-09/201609071326188470.jpg"></a>

        <a href="Item/Show.asp�m=114&d=16.html"><img src="../../UploadFiles/2016-09/2016090713264678180.jpg"></a>

        <a href="Item/Show.asp�m=114&d=17.html"><img src="../../UploadFiles/2016-09/2016090713265912325.jpg"></a>

        <a href="Item/Show.asp�m=114&d=18.html"><img src="../../UploadFiles/2016-09/2016090713271013196.jpg"></a>



    </div>
</div>





<div class="i_body p40 w100">
    <div class="w clearfix">

        <ul class="llist clearfix">

            <li><a  href="http://www.sdxc360.com/Item/list.asp?id=1659" target="_self">特色小吃</a></li>  <li><a  href="http://www.sdxc360.com/Item/list.asp?id=1698" target="_self">中餐面点</a></li>  <li><a  href="http://www.sdxc360.com/Item/list.asp?id=1699" target="_self">早餐早点</a></li>  <li><a  href="http://www.sdxc360.com/Item/list.asp?id=1700" target="_self">烧烤油炸</a></li>  <li><a  href="http://www.sdxc360.com/Item/list.asp?id=1701" target="_self">卤菜卤味</a></li>  <li><a  href="http://www.sdxc360.com/Item/list.asp?id=1702" target="_self">西餐西点</a></li>

        </ul>

        <div class="manr clearfix">

            <ul class="px_ul clearfix">

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=33"><img src="../../UploadFiles/2016-09/2016090919002157860.jpg"><p>空心麻球培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=32"><img src="../../UploadFiles/2016-09/2016090919015321317.jpg"><p>锅贴饺子培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=31"><img src="../../UploadFiles/2016-09/2016090919022122014.jpg"><p>包子培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=30"><img src="../../UploadFiles/2016-09/2016090919025241893.jpg"><p>西餐培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=29"><img src="../../UploadFiles/2016-09/2016090919031940251.jpg"><p>冰激凌培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=28"><img src="../../UploadFiles/2016-09/2016090919034629837.jpg"><p>重庆烤鱼培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=27"><img src="../../UploadFiles/2016-09/2016090919050389024.jpg"><p>油炸全能班</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=26"><img src="../../UploadFiles/2016-09/2016090919054586362.jpg"><p>铁板鱿鱼培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=25"><img src="../../UploadFiles/2016-09/2016090919060949831.jpg"><p>铁板烧培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=24"><img src="../../UploadFiles/2016-09/2016090919062840419.jpg"><p>十三香龙虾培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=23"><img src="../../UploadFiles/2016-09/2016090818443477055.png"><p>烧烤全能班</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=22"><img src="../../UploadFiles/2016-09/2016090919074750400.jpg"><p>烤面筋培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=21"><img src="../../UploadFiles/2016-09/2016090919081756126.jpg"><p>花甲培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=20"><img src="../../UploadFiles/2016-09/2016090919084421933.jpg"><p>韩式纸上烧烤培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=19"><img src="../../UploadFiles/2016-09/2016090919091476563.jpg"><p>重庆小面培训</p></a></li>

                <li><a href="http://sdxc360.com/Item/Show.asp?m=115&d=18"><img src="../../UploadFiles/2016-09/2016090919094566751.jpg"><p>炸酱面培训</p></a></li>

            </ul>
            <div align="right" class="fenye" id="fenye">
                <table border="0"><tr><td id="pagelist">
                            <a href="http://www.sdxc360.com/Item/?id=1658&page=1" class="prev" style=" display:none;">首页</a>
                            <a href="http://www.sdxc360.com/Item/?id=1658&page=6" class="next"><<</a>
                            <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=1">1</a> <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=2">2</a> <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=3">3</a> <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=4">4</a> <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=5">5</a> <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=6">6</a> <a href="#" class="curr">7</a> <a class="num" href="http://www.sdxc360.com/Item/?id=1658&page=8">8</a>
                            <a href="http://www.sdxc360.com/Item/?id=1658&page=8" class="next">>></a>
                            <a href="http://www.sdxc360.com/Item/?id=1658&page=8" class="prev" style=" display:none;">末页</a>
                            <span style=" display:none;">共<span id="totalpage">8</span>页</span></td></tr></table>
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
    <a href="http://p.qiao.baidu.com/im/index?siteid=5367383&ucid=6948249&cp=lxxcpx.com&cr=&cw=" target="_blank"></a>
</div>



<div id="top">
    <div id="izl_rmenu" class="izl-rmenu">
        <a href="tencent://Message/?Uin=123456&websiteName=com=&Menu=yes" target="_blank" class="btn btn-qq"></a>
        <a href="http://p.qiao.baidu.com/im/index?siteid=5367383&ucid=6948249&cp=lxxcpx.com&cr=&cw=" class="btn btn-phone"><div class="btn btn-phone"></div></a>
        <div class="btn btn-wx"><img class="pic" src="/sd/Public/template/img/weixin.jpg"></div>
        <a href="http://www.sdxc360.com/index.asp#i_pc1" class="btn btn-ms anchor"></a>
        <div class="btn btn-top" onClick="location.href='#header'"></div>
    </div>
</div>

<script type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol +
        "hm.baidu.com/h.js%3Fe79b1659676dd7bad9d0758ada6f4b63' type='text/javascript'%3E%3C/script%3E")) </script>

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