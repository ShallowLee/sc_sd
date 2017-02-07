


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
<volist name="cooker" id="cookers">

     <li><a href="{:U('home/cooker/cooker/id/'.$cookers['id'])}"><img width="210" height="296" src="__PUBLIC__/{$cookers.img}"></a></li>

 </volist>

            </ul>
    </div>

</div>
</div>









<div class="i_pc3 p400 w100">
<div class="w clearfix">

    <h2 class="h2"><span>热销项目</span></h2>
    <div class="pc3 clearfix">

    <volist name="project" id="projects">

        <a href="{:U('home/project/index/id='.$projects['id'])}"><img src="__PUBLIC__/{$projects.img}"></a>

    </volist>

    </div>

</div>
</div>






<div class="i_pcpx w100">
<div class="w clearfix">



    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s1">特色小吃培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="__PUBLIC__/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                            <ul class="px_xmul clearfix">
                                <volist name = "food_one" id = "food_1">

                                    <li><a href="{:U('home/project/food/id/'.$food_1['id'])}" title="{$food_1.name}">{$food_1.name}</a></li>

                                </volist>

                            </ul>
                            <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                    <div class="px1r fr">
                            <ul class="px_xmimg clearfix">
                                <volist name = "food_one" id = "food_1">

                                    <li><img class="img" src="__PUBLIC__/{$food_1.img}"><a href="{:U('home/project/food/id/'.$food_1['id'])}"><h3>{$food_1.name}</h3><span class="tc"><img src="__PUBLIC__/template/img/ico6.png" alt=""></span><p>报名人气 ：{$food_1.click}</p></a></li>

                                </volist>
                            </ul>
                    </div>
            </div>
    </div>
    

    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s2">中式面点</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="__PUBLIC__/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                <div class="px1l fl">
                    <ul class="px_xmul clearfix">
                        <volist name = "food_two" id = "food_2">

                            <li><a href="{:U('home/project/food/id/'.$food_2['id'])}" title="{$food_2.name}">{$food_2.name}</a></li>

                        </volist>

                    </ul>
                    <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <volist name = "food_two" id = "food_2">

                            <li><img class="img" src="__PUBLIC__/{$food_2.img}"><a href="{:U('home/project/food/id/'.$food_2['id'])}"><h3>{$food_2.name}</h3><span class="tc"><img src="__PUBLIC__/template/img/ico6.png" alt=""></span><p>报名人气 ：{$food_2.click}</p></a></li>

                        </volist>
                    </ul>
                </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s3">早餐早点培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="__PUBLIC__/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                        <ul class="px_xmul clearfix">
                            <volist name = "food_three" id = "food_3">

                                <li><a href="{:U('home/project/food/id/'.$food_3['id'])}" title="{$food_3.name}">{$food_3.name}</a></li>

                            </volist>

                        </ul>
                        <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <volist name = "food_three" id = "food_3">

                            <li><img class="img" src="__PUBLIC__/{$food_3.img}"><a href="{:U('home/project/food/id/'.$food_3['id'])}"><h3>{$food_3.name}</h3><span class="tc"><img src="__PUBLIC__/template/img/ico6.png" alt=""></span><p>报名人气 ：{$food_3.click}</p></a></li>

                        </volist>
                    </ul>
                </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s4">烧烤油炸培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="__PUBLIC__/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                        <ul class="px_xmul clearfix">
                            <volist name = "food_four" id = "food_4">

                                <li><a href="{:U('home/project/food/id/'.$food_4['id'])}" title="{$food_4.name}">{$food_4.name}</a></li>

                            </volist>

                        </ul>
                        <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <volist name = "food_four" id = "food_4">

                            <li><img class="img" src="__PUBLIC__/{$food_4.img}"><a href="{:U('home/project/food/id/'.$food_4['id'])}"><h3>{$food_4.name}</h3><span class="tc"><img src="__PUBLIC__/template/img/ico6.png" alt=""></span><p>报名人气 ：{$food_4.click}</p></a></li>

                        </volist>
                    </ul>
                </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s5">卤菜卤味培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="__PUBLIC__/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                            <ul class="px_xmul clearfix">
                                 <volist name = "food_five" id = "food_5">

                                     <li><a href="{:U('home/project/food/id/'.$food_5['id'])}" title="{$food_5.name}">{$food_5.name}</a></li>

                                 </volist>



                            </ul>
                            <p class="tc"><a class="px_xma" href="{:U('home/project/classify')}">更多培训项目 &gt;&gt;</a></p>
                    </div>
                    <div class="px1r fr">
                            <ul class="px_xmimg clearfix">
                                <volist name = "food_five" id = "food_5">

                                    <li><img class="img" src="__PUBLIC__/{$food_5.img}"><a href="{:U('home/project/food/id/'.$food_5['id'])}"><h3>{$food_5.name}</h3><span class="tc"><img src="__PUBLIC__/template/img/ico6.png" alt=""></span><p>报名人气 ：{$food_5.click}</p></a></li>

                                </volist>
                            </ul>
                    </div>
            </div>
    </div>


    <div class="pcpx1 clearfix">
            <div class="pxtit"><span class="s6">西餐西点培训</span><a href="http://p.qiao.baidu.com/im/index?siteid=9314473&ucid=6948249&cp=&cr=&cw=" target="_blank"><img src="__PUBLIC__/template/img/titlink.png"></a></div>
            <div class="xm_box clearfix">
                    <div class="px1l fl">
                        <ul class="px_xmul clearfix">
                            <volist name = "food_six" id = "food_6">

                                <li><a href="{:U('home/project/food/id/'.$food_6['id'])}" title="{$food_6.name}">{$food_6.name}</a></li>

                            </volist>

                        </ul>
                        <p class="tc"><a class="px_xma" href="Item/list.asp�id=1659.html">更多培训项目 &gt;&gt;</a></p>
                    </div>
                <div class="px1r fr">
                    <ul class="px_xmimg clearfix">
                        <volist name = "food_six" id = "food_6">

                            <li><img class="img" src="__PUBLIC__/{$food_6.img}"><a href="{:U('home/project/food/id/'.$food_6['id'])}"><h3>{$food_6.name}</h3><span class="tc"><img src="__PUBLIC__/template/img/ico6.png" alt=""></span><p>报名人气 ：{$food_6.click}</p></a></li>

                        </volist>
                    </ul>
                    </div>
            </div>
    </div>

</div>
</div>


