<?php
namespace Admin\Controller;
use Think\Controller;
class XiangceController extends CommonController {
    //加载评论数据
    public function index(){
        $m = M('photo');
        $count      = $m->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,7);// 实例化分页传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $arr = $m->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('arr',$arr);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function xiangpian(){
        $id = $_GET['id'];
        $m = M('slides');
        $count      = $m->where("pid = $id")->count();
        $Page       = new \Think\Page($count,7);// 实例化分页传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出/
        $Model = new \Think\Model();
        $list = $m->where("pid = $id")->order('ctime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display('xiangpian');
    }
    public function doadd(){
        $link = D('photo');
        $link->create();
        $link->ctime = time();
        if ($link->add()) {
            $this->success('相册添加成功');
        }else{
            $this->error('相册添加失败');
        }
    }
    public function del(){
        $id = $_GET['id'];
        $m = M('Photo');
        $res = $m->where("id = $id")->delete();
        if ($res) {
            $this->success('相册删除成功');
        }else{
            $this->error('相册删除失败');
        }
    }
    //批量删除
    public function deall(){
        $m = M('Photo');
        $id = implode(",",$_POST['arr']);

        $res = $m->delete($id);
        if ($res) {
            echo('删除成功');
        }else{
            echo('删除失败');
        }
    }
    public function delpian(){
        $id = $_GET['id'];
        $m = M('slides');
        $res = $m->where("id = $id")->getField('pic');
        $path = "./Public/Uploads/$res";
        $result = unlink($path); 
        if($result){
          $res = $m->where("id=$id")->delete();
        if ($res) {
            $this->success('相片删除成功');
        }else{
            $this->error('相片删除失败');
        }
        }
        else{
            $this->error('相片文件删除失败');
        }
     
    }
    public function edit(){
        $id = $_GET['id'];
        $m = M('photo');
        $res = $m->where("id = $id")->find();
        $this->assign('res',$res);
        $this->display('edit');

    }

    public function doedit(){
        $id = $_POST['id'];
        $m = M('Photo');
        $m->title = $_POST['title'];
        $m->ctime = time();
        $res = $m->where("id = $id")->save();
        if ($res) {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function uploads(){
        $m = M('photo');
        $arr = $m->select();
        $this->assign('arr',$arr);
        $this->display('addphoto');
    }

    public function doupload(){
            $m=M("slides");
            $data = $m->create();
            $data['ctime']=time();
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath= './Public/Uploads/'; // 设置附件上传目录    // 上传文件
            $info = $upload->uploadOne($_FILES['pic']);
            if(!$info) {            // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{                  // 上传成功
                $data['pic']=$info['savepath'].$info['savename'];
                $result = $m->add($data);
                if($result>0){
                    $this->success("上传成功！");
                }else{
                    $this->error("上传失败！");
                }
            }
}

}