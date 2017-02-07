

<div class="i_body p40 w100">
    <div class="w clearfix">

        <ul class="llist clearfix">

            <li><a  href="{:U('home/news/index/classify/公司动态')}">公司动态</a></li>  <li><a  href="{:U('home/news/index/classify/行业资讯')}" target="_self">行业资讯</a></li>

        </ul>

        <div class="manr clearfix">

            <ul class="newslist clearfix">

                <volist name = "news" id = "newss">

                    <li><em>{$newss.time|date="Y-m-d H:i:s",###}</em><a href="{:U('home/news/news/id/'.$newss['id'])}">{$newss.title}</a></li>

                </volist>

            </ul>


        </div>

    </div>
</div>

