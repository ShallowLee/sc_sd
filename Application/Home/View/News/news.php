

<div class="i_body p40 w100">
    <div class="w clearfix">

        <ul class="llist clearfix">

            <li><a  href="{:U('home/news/index/classify/公司动态')}">公司动态</a></li>  <li><a  href="{:U('home/news/index/classify/行业资讯')}" target="_self">行业资讯</a></li>

        </ul>


        <div class="manr clearfix">

            <div id="art_title"><h2>{$news.title}</h2></div>
            <div id="art_xinxi">
                <span>时间：{$news.time}</span>
                <span>来源：{$news.source}</span>
                <span>点击：{$news.click}次</span>
            </div>
            <div id="art_content">
                <div id="MyContent">
                    <a href="javascript:;" onclick="showimg('__PUBLIC__/UploadFiles/2017-01/2017010314370114796.gif');">
                        <img src="__PUBLIC__/{$news.img}" alt="{$news.name}" onmousewheel="return bbimg(this)" onload="javascript:resizepic(this)" border="0"/>
                    </a>
                    <div>
                        {$news.content}
                    </div>

                </div>

            </div>
            <!--            <div id="art_xguan">-->
            <!--                <span class="">上一篇：<a href="/Item/Show.asp?m=1&d=3108" title="张子尧">张子尧</a></span>-->
            <!--                <span class="">下一篇：<a href="/Item/Show.asp?m=1&d=3110" title="林志远">林志远</a></span>-->
            <!--                <p class="art_a tc"><a href="/Item/list.asp?id=1662" class="art_btn">返回</a></p>-->
            <!--            </div>-->

        </div>


    </div>
</div>

