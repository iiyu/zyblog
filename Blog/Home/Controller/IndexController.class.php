<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $link  = M('friendlink');
        $lin   = $link->order('ctime')->limit(0,10)->select();
    	$Model = new \Think\Model();
		$sql   = "select a.*,b.username,c.name from blog_article as a, blog_admin as b,blog_fenlei as c where a.uid=b.id and a.status=0 and c.id=a.pid order by view desc limit 0,5"; 
		$sqln = "select a.*,b.username,c.name,c.id as fid from blog_article as a, blog_admin as b,blog_fenlei as c where a.uid=b.id and a.status=0 and c.id=a.pid order by edittime desc limit 0,5"; 
		$list  = $Model->query($sql);
		$listn = $Model->query($sqln);
        $ju = M('shijuhua');
        $shi = $ju->order('id desc')->limit('0,10')->select();
        // echo "<pre/>";
        // var_dump($shi);die();
    	$this->assign('list',$list);// 赋值数据集
        $this->assign('listn',$listn);// 赋值数据集
        $this->assign('shi',$shi);
    	$this->assign('linl',$lin);// 赋值数据集
    	$this->display(); // 输出模板
    }
    public function about(){
        $this->display('about');
    }

    public function xiangce(){
        $m = M('photo');
        $mm = M('slides');
        $arr1 = $m->select();
        $arr2 = $mm->select();
        $this->assign('arr1',$arr1);
        $this->assign('arr2',$arr2);
        $this->display('xiangce');
    }
}