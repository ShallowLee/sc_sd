<div class="i_pc3 p400 w100">

    <div class="w clearfix">

        <h2 class="h2"><span>热销项目</span></h2>


<volist name = "project_nav" id="project_navs">

    <a href="http://p.qiao.baidu.com/im/index?siteid=5367383&ucid=6948249&cp=lxxcpx.com&cr=&cw=" target="_self"><img src="__PUBLIC__/{$project_navs.img}"></a>　

</volist>

    </div>

</div>

<div class="i_body p40 w100">

    <div class="w clearfix">

        <ul class="llist clearfix">

            <volist name = "project_nav" id="project_navs">

                <li><a  href="{:U('home/project/index/classify/'.$project_navs['id'])}" target="_self">{$project_navs.name}</a></li>　

            </volist>
        </ul>

        <div class="manr clearfix">

            <ul class="px_ul clearfix">

                <volist name = "food" id = "foods">

                    <li><a href="{:U('home/project/food/id/'.$foods['id'])}"><img src="__PUBLIC__/{$foods.img}"><p>{$foods.name}</p></a></li>

                </volist>

            </ul>

        </div>

    </div>

</div>