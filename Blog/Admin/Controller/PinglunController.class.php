<?php
namespace Admin\Controller;
use Think\Controller;
class PinglunController extends CommonController {
    //加载评论数据
    public function index(){
        $diary = M('pinglun');
        $count      = $diary->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();// 分页显示输出
        $list = $diary->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    //删除评论
    public function del(){
        $id = $_GET['id'];
        $pinglun = M('pinglun');
        $res = $pinglun->where("id = $id")->delete();
        if ($res) {
            $this->success('评论删除成功');
        }else{
            $this->error('评论删除失败');
        }
    }
    //批量删除
    public function deall(){
        $m = M('pinglun');
        $id = implode(",",$_POST['arr']);

        $res = $m->delete($id);
        if ($res) {
            echo('删除成功');
        }else{
            echo('删除失败');
        }
    }

}