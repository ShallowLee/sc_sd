<?php
namespace Home\Controller;
use Think\Controller;
class MobileController extends Controller {
    public function index(){
        layout(false);
        $this -> display();
    }
}