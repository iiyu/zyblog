<?php
namespace Home\Controller;
use Think\Controller;
class ShijuhuaController extends Controller {
    public function show(){
        $m = M('shijuhua');
        $id = $_GET['id'];
        $res = $m->where("id = $id")->find();
        $preid = $id - 1;
        $preshow = $m->where("id = $preid")->find();
      //  var_dump($preshow);die;
        if (!$preshow){//如果不存在的话
            $preshow['content'] = '不存在';
        }
        $this->assign('preshow',$preshow);
         
        //下一篇
        $nextid = $id + 1;
        $nextshow = $m->where("id = $nextid")->find();
        if (!$nextshow){//如果不存在的话
            $nextshow['content'] = '不存在';
        }
        $this->assign('nextshow',$nextshow);
        $this->assign('res',$res);
        $this->display('show');
    }
}