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
                        <a <?php if($Think.CONTROLLER_NAME==News): ?>class="curr"<?php endif; ?> href="/sd/index.php/Home/News/index" title="">新闻资讯</a>
                    </h3>

                </li>

                <li class="m"><h3>

                        <a  href="http://p.qiao.baidu.com/im/index?siteid=5367383&ucid=6948249&cp=lxxcpx.com&cr=&cw=" target="_blank" title="">关于我们</a>

                    </h3>

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





<div class="i_body p40 w100">
    <div class="w clearfix">


        <div class="pxtit clearfix"><span class="s1">西餐西点培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="/template/img/titlink.png"></a></div>

        <div class="pxzuan tc clearfix">
            <h3>韩式裱花蛋糕系列培训培训</h3>
            <span> 技能改变命运 三个月收入翻番</span>
            <h2>创业技能+精选项目=创富保证</h2>
            <p>TOP CUISINE PROFESSION</p>
        </div>

        <div class="tc clearfix">
            <img src="/sd/Public/<?php echo ($food["img"]); ?>">
        </div>


        <div class="ms_box clearfix">
            <h3 class="msh3 tc">项目简介</h3>
            <div class="ms_b m3 clearfix">
                <img src="/sd/Public/UploadFiles/2016-09/201609221323233598.jpg" style="line-height: 20.8px;" /><br />
                <span style="line-height: 20.8px;">蛋糕是一种古老的西点，而近年比较流行的生日蛋糕当属韩式裱花蛋糕。韩式裱花蛋糕造型优美、花式繁多，最是吸引女孩子的眼球。普创邢老师传授的韩式裱花蛋糕技术是经过香港专家改良的更符合国人口味的秘方，更适合蛋糕创业者学习。</span><br style="line-height: 20.8px;" />
                <span style="line-height: 20.8px;">韩式裱花蛋糕特色店受到各地投资开店、餐饮经营者的欢迎，小投资、高回报，良好的经营效益被加盟开店者看好，成为市场广阔，收益稳固、利润可观的优秀创业项目。</span><span style="line-height: 20.8px;">​</span>
            </div>
        </div>


        <div class="ms_tel clearfix">
            <a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" class="fl"><img src="/sd/Public/template/img/btn_tel.png"></a>
            <span class="fr"></span>
        </div>


        <div class="ys_hehuo m2 clearfix">
            <div class="ys_title">
                <p class="tc">学习内容</p>
                <div class="ys_line w100"><i></i><span class="linebg1">重点培养动手实践能力+餐饮创业经营指导</span></div>
                <div class="tc"><a class="ysa" href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=">了解学费 在线咨询</a></div>
            </div>

            <div class="ms_cj tc"><img src="/sd/Public/template/test/t7.jpg" alt=""></div>

            <div class="ms_youshi m2 clearfix">


                <div id="MyContent"><dl class="ms_xmdl clearfix">
                        <dd class="fl">
                            <div class="xm_txt clearfix">
                                <h3><i>1</i><span>选购材料</span></h3>

                                <p>韩式裱花蛋糕系列培训：食材的选择和采购；<br />
                                    韩式裱花蛋糕系列配料的选择和采购；<br />
                                    韩式裱花蛋糕系列设备、工具的选择和采购；</p>
                                <a class="xm_btn" href="" target="_blank">更多内容&gt;&gt;</a></div>
                        </dd>
                        <dt class="fr"><img src="/sd/Public/UploadFiles/2016-09/2016092213225575021.jpg" /></dt>
                    </dl>

                    <dl class="ms_xmdl clearfix">
                        <dd class="fl">
                            <div class="xm_txt clearfix">
                                <h3><i>2</i><span>处理食材</span></h3>

                                <p>韩式裱花蛋糕系列食材、配材的处理；<br />
                                    韩式裱花蛋糕系列食材、配材的配比和用量；<br />
                                    韩式裱花蛋糕系列配料、辅材的比例和选择；</p>
                                <a class="xm_btn" href="" target="_blank">更多内容&gt;&gt;</a></div>
                        </dd>
                        <dt class="fr"><img src="/sd/Public//UploadFiles/2016-09/2016092213231196312.jpg" /></dt>
                    </dl>

                    <dl class="ms_xmdl clearfix">
                        <dd class="fl">
                            <div class="xm_txt clearfix">
                                <h3><i>3</i><span>配方配料</span></h3>

                                <p>韩式裱花蛋糕系列配料、配方公开；<br />
                                    韩式裱花蛋糕系列如何制作配料；<br />
                                    韩式裱花蛋糕系列如何各种配方配置方法等。</p>
                                <a class="xm_btn" href="" target="_blank">更多内容&gt;&gt;</a></div>
                        </dd>
                        <dt class="fr"><img src="/sd/Public/UploadFiles/2016-09/2016092213231863890.jpg" /></dt>
                    </dl>

                    <dl class="ms_xmdl clearfix">
                        <dd class="fl">
                            <div class="xm_txt clearfix">
                                <h3><i>4</i><span>实操练习</span></h3>

                                <p>韩式裱花蛋糕系列设备的熟练使用；<br />
                                    韩式裱花蛋糕系列口感味道调整；<br />
                                    韩式裱花蛋糕系列店铺开店辅导；</p>
                                <a class="xm_btn" href="" target="_blank">更多内容&gt;&gt;</a></div>
                        </dd>
                        <dt class="fr"><img src="/sd/Public/UploadFiles/2016-09/2016092115213020475.jpg" /></dt>
                    </dl></div>



            </div>
        </div>

    </div>



    <div class="classys p2 clearfix">
        <div class="w clearfix">
            <div class="ys_title">
                <p class="tc">课程优势</p>
                <div class="ys_line w100"><i></i><span class="linebg1" style="margin-left: -112px;">恋香小吃培训3大优势</span></div>
            </div>


            <ul class="classysul clearfix">
                <li><a href=""><img src="/sd/Public/template/test/kcys1.jpg"></a><p>自身优势</p></li>
                <li><a href=""><img src="/sd/Public/template/test/kcys2.jpg"></a><p>行业优势</p></li>
                <li><a href=""><img src="/sd/Public/template/test/kcys3.jpg"></a><p>市场优势</p></li>
            </ul>
        </div>
    </div>



    <div class="shizhi p2 clearfix">
        <div class="w clearfix">
            <div class="ys_title">
                <p class="tc">师资力量</p>
                <div class="ys_line w100"><i></i><span class="linebg1" style="margin-left: -110px;">烹饪精英专业教师介绍</span></div>
            </div>

            <ul class="classshi_ul clearfix">

                <li><a href="/Item/Show.asp?m=1&d=3108"><img src="/sd/Public/UploadFiles/2017-01/2017010314274198821.gif"><p>张子尧</p></a></li>

                <li><a href="/Item/Show.asp?m=1&d=3109"><img src="/sd/Public/UploadFiles/2017-01/2017010314345391627.gif"><p>林平俊</p></a></li>

                <li><a href="/Item/Show.asp?m=1&d=3110"><img src="/sd/Public/UploadFiles/2017-01/2017010314382669488.gif"><p>林志远</p></a></li>

                <li><a href="/Item/Show.asp?m=1&d=3111"><img src="/sd/Public/UploadFiles/2017-01/2017010314385633107.gif"><p>谢志勇</p></a></li>

            </ul>
            <div class="tc"><a class="ysa" href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=">了解学费 在线咨询</a></div>
        </div>
    </div>


    <div class="w tc m2 clearfix"><img src="/sd/Public/template/test/t8.jpg"></div>



    <div class="seccess_bg p2 clearfix">
        <div class="w clearfix">
            <div class="ys_title">
                <p class="tc">成功学员</p>
                <div class="ys_line w100"><i></i><span class="linebg1" style="margin-left: -112px;">你也可以像他们一样成功</span></div>
                <div class="tc"><a class="ysa" href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=">了解学费 在线咨询</a></div>
            </div>


            <ul class="seccess_yuan clearfix">

            </ul>
        </div>
    </div>




    <div class="pxxm_more p2 clearfix">
        <div class="w clearfix">
            <div class="ys_title">
                <p class="tc">更多推荐项目</p>
                <div class="ys_line w100"><i></i><span class="linebg1" style="margin-left: -112px;">更多学习项目更多优惠政策</span></div>
            </div>

            <ul class="px_xmimg clearfix" id="px_xmimg">

                <li><img class="img" src="/sd/Public/UploadFiles/2016-09/2016092213232972683.jpg" alt="韩式裱花蛋糕系列培训"><a href="/Item/Show.asp?m=115&d=135"><h3>韩式裱花蛋糕系列培训</h3><span class="tc"><img src="/template/img/ico6.png"></span><p>报名人气 ：87698</p></a></li>

                <li><img class="img" src="/sd/Public/UploadFiles/2016-09/2016092213015594497.jpg" alt="蛋挞泡芙系列培训"><a href="/Item/Show.asp?m=115&d=134"><h3>蛋挞泡芙系列培训</h3><span class="tc"><img src="/template/img/ico6.png"></span><p>报名人气 ：4574</p></a></li>

                <li><img class="img" src="/sd/Public/UploadFiles/2016-09/2016092211183481335.jpg" alt="芝士慕斯系列培训"><a href="/Item/Show.asp?m=115&d=133"><h3>芝士慕斯系列培训</h3><span class="tc"><img src="/template/img/ico6.png"></span><p>报名人气 ：9621</p></a></li>

                <li><img class="img" src="/sd/Public/UploadFiles/2016-09/2016092118144091532.jpg" alt="宫廷桃酥王培训"><a href="/Item/Show.asp?m=115&d=132"><h3>宫廷桃酥王培训</h3><span class="tc"><img src="/template/img/ico6.png"></span><p>报名人气 ：3634</p></a></li>

                <li><img class="img" src="/sd/Public/UploadFiles/2016-09/2016092117263989909.jpg" alt="面包系列培训"><a href="/Item/Show.asp?m=115&d=131"><h3>面包系列培训</h3><span class="tc"><img src="/template/img/ico6.png"></span><p>报名人气 ：3179</p></a></li>

            </ul>

        </div>
    </div>







</div>





<script>
    $(function(){
        $('.pc3 a:nth-child(3n)').addClass('no');
        $('.px_xmimg li:nth-child(5n)').addClass('no');
    })
</script>









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