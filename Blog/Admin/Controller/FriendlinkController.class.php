<?php
namespace Admin\Controller;
use Think\Controller;
class FriendlinkController extends CommonController
{
	public function index()
	{
		$link = M('friendlink');
		$count = $link->count();
		$Page = new \Think\Page($count,10);
		$show = $Page->show();
		$list = $link->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();

	}

	public function add(){
		$this->display();
	}

	public function doadd(){
		$link = D('friendlink');
		$link->create();
		$link->ctime = time();
		$link->type = 'info';
		if ($link->add()) {
			$this->success('友情链接生成成功');
		}else{
			$this->error('友情链接生成失败');
		}
	} 
	//删除链接
	public function del(){
		$id = $_GET['id'];
		$link = M('friendlink');
		$res = $link->where("id = $id")->delete();
		if ($res) {
			$this->success('链接删除成功');
		}else{
			$this->error('链接删除失败');
		}
	}
	//批量删除
    public function deall(){
        $m = M('friendlink');
        $id = implode(",",$_POST['arr']);

        $res = $m->delete($id);
        if ($res) {
            echo('删除成功');
        }else{
            echo('删除失败');
        }
    }
	//修改链接
	public function edit(){
		$id = $_GET['id'];
		$link = M('friendlink');
		$res = $link->where("id = $id")->find();
		$this->assign('res',$res);
		$this->display();
	}
	public function doedit(){
		$id = $_POST['id'];
		$link = D('friendlink');
		$link->create();
		$link->ctime = time();
		if ($link->where("id = $id")->save()) {
			$this->success('友情链接修改成功','index');
		}else{
			$this->error('友情链接修改失败');
		}
	}
}
 ?>