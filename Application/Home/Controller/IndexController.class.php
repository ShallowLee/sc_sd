<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $cooker     = M('cooker') ->limit('3') -> order('id desc') ->select();
        $project    = M('classify') -> select();
        $food       = M('food');
        $food_one   = $food->where(array(
                        'classify'    => "特色小吃培训",
                        'recommend'   => "0"
                    ))->limit('8')  ->order('id desc')->select();
        $food_two   = $food->where(array(
                        'classify'    => "中式面点",
                        'recommend'   => "0"
                    ))->order('id desc')->limit('8')->select();
        $food_three   = $food->where(array(
                        'classify'    => "早餐早点培训",
                        'recommend'   => "0"
                    ))->limit('8')->order('id desc')->select();
        $food_four   = $food->where(array(
                        'classify'    => "烧烤油炸培训",
                        'recommend'   => "0"
                    ))->limit('8')->order('id desc')->select();
        $food_five   = $food->where(array(
                        'classify'    => "卤菜卤味培训",
                        'recommend'   => "0"
                    ))->limit('8')->order('id desc')->select();
        $food_six   = $food->where(array(
                        'classify'    => "西餐西点培训",
                        'recommend'   => "0"
                    ))->limit('8')->order('id desc')->select();


        $this->assign('food_six'     ,   $food_six);
        $this->assign('food_five'    ,   $food_five);
        $this->assign('food_four'    ,   $food_four);
        $this->assign('food_three'   ,   $food_three);
        $this->assign('food_two'     ,   $food_two);
        $this->assign('food_one'     ,   $food_one);
        $this->assign('cooker'       ,   $cooker);
        $this->assign('project'      ,   $project);

        $this->display();
    }

}