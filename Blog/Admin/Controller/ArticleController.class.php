<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    //加载博文数据
    public function index(){
		$article = M('article');
        $count      = $article->where("status = 0")->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();// 分页显示输出
		$list = $article->where("status = 0")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }
    //删除博文
    public function del(){
    	$m = M('article');
    	$id = $_GET['id'];
    	$res = $m->where("id = $id")->delete();
    	if ($res) {
    		$this->success('删除成功');
    	}else{
    		$this->error('删除失败');
    	}
    }
    //批量删除
    public function deall(){
        $m = M('article');
        $id = implode(",",$_POST['arr']);

        $res = $m->delete($id);
        if ($res) {
            echo('删除成功');
        }else{
            echo('删除失败');
        }
    }
    //添加博文
    public function add(){
    	$fenlei=A("Fenlei");  
   		$fenlei->index();
    	//$this->display();
    }
    //处理添加博文
    public function doadd(){
            $m=M("article");
            $data = $m->create();
            $data['uid']= 1;
            $data['ctime']=time();
            $data['edittime']=time();
            $data['view']=1;
            $data['status']=0;           
            $data['content'] = $_POST['content'];
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath= './Public/Uploads/'; // 设置附件上传目录    // 上传文件
            $info = $upload->uploadOne($_FILES['pic']);
            if(!$info) {			// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{					// 上传成功
                $data['pic']=$info['savepath'].$info['savename'];
                $result = $m->add($data);
                if($result>0){
                    $this->success("发布成功！");
                }else{
                    $this->error("发布失败！");
                }
            }
    }
    //修改博文
    public function edit(){
    	$fenlei=A("Fenlei"); 
    	$id = $_GET['id'];
    	$article = M('article');
    	$res = $article->where("id = $id")->select();
    	$this->assign('arr',$res[0]); 
   		$fenlei->index();
    }
    //执行修改博文
    public function doedit(){
			$id = $_POST['id'];
    	 	$m=M("article");
            $data = $m->create();
            $data['edittime']=time();           
            $data['content'] = $_POST['content'];
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath= './Public/Uploads/'; // 设置附件上传目录    // 上传文件
            $info = $upload->uploadOne($_FILES['pic']);
            if(!$info) {			// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{					// 上传成功
                $data['pic']=$info['savepath'].$info['savename'];
                $result = $m->where("id = $id")->save($data);
                if($result>0){
                    $this->success("修改成功！");
                }else{
                    $this->error("修改失败！");
                }
            }
    }
}
