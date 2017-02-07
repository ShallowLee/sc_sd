

<div class="i_body p40 w100">
    <div class="w clearfix">



        <div class="tc clearfix">
            <img src="__PUBLIC__/template/img/shipower.jpg" alt="">
        </div>




        <div class="manr clearfix">

            <ul class="teacher clearfix">

                <volist name = "cooker" id = "cookers">
<!--        url备用            {:U('home/cooker/cooker/id/'.$cookers['id'])}-->
                    <li><a href=""><img src="__PUBLIC__/{$cookers.img}"></a></li>

                </volist>

            </ul>


        </div>
        <script type="text/javascript">
            $(function(){
                $('.teacher li:odd').addClass('odd')
            })
        </script>



    </div>
</div>



<

