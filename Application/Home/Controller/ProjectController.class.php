<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function index(){
        $project_nav     = M('classify')->select();
        $food            = M('food')->limit('16')->order('id desc')->select();

        $this->assign('food'           ,  $food);
        $this->assign('project_nav'    ,  $project_nav);
        $this->display();
    }


    public function food(){
        $id    =  $_GET['id'];
        $food            = M('food')->where(array('id' => $id))->find();
        $this->assign('food'    ,  $food);
        $this->display();
    }

}