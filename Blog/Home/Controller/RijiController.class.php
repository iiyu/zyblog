<?php
namespace Home\Controller;
use Think\Controller;
class RijiController extends Controller {
    public function index(){
        $day = M('diary');
        $arr = $day->order('ctime desc')->select();
        $this->assign('arr',$arr);
    	$this->display(); // 输出模板
    }
    public function about(){
        $this->display('about');
    }
}