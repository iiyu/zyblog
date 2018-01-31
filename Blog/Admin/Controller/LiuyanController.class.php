<?php
namespace Admin\Controller;
use Think\Controller;
class LiuyanController extends CommonController {
    public function index(){
            $m = M("liuyan");
            $count      = $m->count();
            $Page       = new \Think\Page($count,10);
            $show       = $Page->show();// 分页显示输出
            $list = $m->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign("list",$list);
            $this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }

    public function del(){
        $id = $_GET['id'];
        $m =M("liuyan");
        $result = $m->where("id = {$id}")->delete();
        if($result>0){
            $this->success("留言成功！");
        }else{
            $this->error("留言失败！");
        }
    }
    //批量删除
    public function deall(){
        $m = M('liuyan');
        $id = implode(",",$_POST['arr']);

        $res = $m->delete($id);
        if ($res) {
            echo('删除成功');
        }else{
            echo('删除失败');
        }
    }


}