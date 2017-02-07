<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
        $news    = M('news')->select();
        $this -> assign('news'   ,  $news);
        $this -> display();
    }

    public function news(){
        $id        = $_GET['id'];
        $news    = M('news')->where(array('id' => $id))->find();
        $click     = $news['click'] + 1;
        M('news')->where(array('id' => $id))->save(array(
            'click'  =>  $click
        ));
        $this -> assign('news'   ,  $news);
        $this -> display();
    }

}