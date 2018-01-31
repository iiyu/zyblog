<?php
namespace Admin\Controller;
use Think\Controller;
class FenleiController extends CommonController {
    public function index(){
    	    $Fenlei = M('fenlei');
    	    $list=$Fenlei->field("id,name,pid,path,concat(path,'-',id) as bpath")->group('bpath')->select();

 			 foreach($list as $key=>$value){

 			 $list[$key]['count']=count(explode('-',$value['bpath']));
 			 }

 			$this->assign('alist',$list);
			$this->display();
    }
    //新增分类
    public function add(){
			self::index();
    }
    //执行添加
    public function doadd(){
    	//引入分类MODEL
    	$Fenlei=new \Admin\Model\FenleiModel();
    	if($vo=$Fenlei->create()){
		 if($Fenlei->add()){
		 $this->success('添加分类成功');
		 }else{ 
		 $this->error('添加分类失败');
		 }
		 }else{
		 $this->error($Fenlei->getError());
		 }
    }
    //删除分类
    public function del(){
    	$fenlei = M('fenlei');
    	$id = $_GET['id'];
    	$check = $fenlei->where("pid = $id")->select();
    	if ($check != null) {
    		$this->error("你小弟还没清理干净呢");
    	}else{
    		$res = $fenlei->delete($id);
    	}
    	if ($res>0) {
    		$this->success("删除成功！");
    	}else{
    		$this->error("删除失败");
    	}
    }
    //批量删除
    public function pidele(){
    	$fenlei = M('fenlei');
    	$ids = I('id');
    	var_dump($_POST['id']);die;
		$res = $fenlei->where(array('id'=>array('in',$ids)))->delete();
		if ($res) {
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
    }
    //修改分类
    public function edit(){
    	$this->assign('id',$_GET['id']);
    		self::index();
    }

    public function doedit(){
    	 //引入分类MODEL
    	$id = $_GET['id'];
    	$fenlei = M('fenlei');
    	$co = $fenlei->where("id= $id")->setField('name',$_POST['name']);
		 if(!$vo){
		 $this->success('修改分类成功');
		 }else{ 
		 $this->error('修改分类失败');
    	}
	}

}
?>