<?php
namespace Admin\Controller;
use Think\Controller;
class DiaryController extends CommonController {
    //加载博文数据
    public function index(){
        $diary = M('diary');
        $count      = $diary->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();// 分页显示输出
        $list = $diary->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    //添加日记
    public function add(){
        $this->display();
    }
    //执行添加日记
    public function doadd(){
         $m=M("diary");
            $data = $m->create();
            $data['ctime']=time();         
            $data['content'] = $_POST['content'];
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath= './Public/Uploads/'; // 设置附件上传目录    // 上传文件
                $data['pic']=$info['savepath'].$info['savename'];
                $result = $m->add($data);
                if($result>0){
                    $this->success("发布成功！");
                }else{
                    $this->error("发布失败！");
                }
    }
    //删除日记
    public function del(){
        $id = $_GET['id'];
        $diary = M('diary');
        $res = $diary->where("id = $id")->delete();
        if ($res) {
            $this->success('日记删除成功');
        }else{
            $this->error('日记删除失败');
        }
    }
    //批量删除
    public function deall(){
        $m = M('diary');
        $id = implode(",",$_POST['arr']);

        $res = $m->delete($id);
        if ($res) {
            echo('删除成功');
        }else{
            echo('删除失败');
        }
    }
    //修改日记
    public function edit(){
        $id = $_GET['id'];
        $diary = M('diary');
        $res = $diary->where("id = $id")->select();
        $this->assign('res',$res[0]);
        $this->display();
    }
}