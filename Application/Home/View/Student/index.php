



<div class="i_body p40 w100">
    <div class="w clearfix">

        <ul class="llist clearfix">

            <li><a  href="" target="_self">优秀学员</a></li>

        </ul>


        <div class="seccess p2 clearfix">
            <div class="w clearfix" id="seccess">
                <div class="ys_title">
                    <p class="tc">成功学员</p>
                    <div class="ys_line w100"><i></i><span class="linebg1" style="margin-left: -112px;">你也可以像他们一样成功</span></div>
                    <div class="tc"><a class="ysa">了解学费 在线咨询</a></div>
                </div>


                <ul class="seccess_yuan clearfix">

                    <volist name = "student" id = "students">
<!--          URL备用              {:U('home/student/student/id/'.$students['id'])}-->
                        <li><a href=""><img src="__PUBLIC__/{$students.img}"></a><p>{$students.name}</p></li>

                    </volist>

                </ul>
                <div align="right" class="fenye" id="fenye">
                    <table border="0"><tr><td id="pagelist">
                                <a href="javascript:;" class="prev" style=" display:none;">首页</a>
                                <a href="javascript:;" class="next"><<</a>
                                <a href="#" class="curr">1</a>
                                <a href="javascript:;" class="next">>></a>
                                <a href="javascript:;" class="prev" style=" display:none;">末页</a>
                                <span style=" display:none;">共<span id="totalpage">1</span>页</span></td></tr></table>
                </div>

            </div>
        </div>


    </div>
</div>

<

