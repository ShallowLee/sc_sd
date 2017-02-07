<?php
namespace Home\Controller;
use Think\Controller;
class CookerController extends Controller {
    public function index(){
        $cooker    = M('cooker')->select();

        $this -> assign('cooker'   ,  $cooker);
        $this -> display();
    }

    public function cooker(){
        $id        = $_GET['id'];
        $cooker    = M('cooker')->where(array('id' => $id))->find();
        $click     = $cooker['click'] + 1;
        M('cooker')->where(array('id' => $id))->save(array(
            'click'  =>  $click
        ));
        $this -> assign('cooker'   ,  $cooker);
        $this -> display();
    }

}