<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $a=M('test');
        $result = $a->select()[0];

        $this->assign('eatcat',$result['id']);
        $this->display();
        }
    public function abc(){
        $this->show("hello");
        }
}