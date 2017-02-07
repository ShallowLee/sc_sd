<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
    public function index(){
        $student    = M('student')->select();

        $this -> assign('student'   ,  $student);
        $this -> display();
    }

    public function student(){
        $id        = $_GET['id'];
        $student    = M('student')->where(array('id' => $id))->find();
        $click     = $student['click'] + 1;
        M('student')->where(array('id' => $id))->save(array(
            'click'  =>  $click
        ));
        $this -> assign('student'   ,  $student);
        $this -> display();
    }

}