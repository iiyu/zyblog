<?php
namespace Home\Controller;
use Think\Controller;
class BowenController extends Controller {
    public function index(){
        $m = M('article');
        $bowen = new \Think\Model();// 实例化User对象
        $count = $m->where('status=0')->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $sql = "select a.*,b.username,c.name,c.id as fid from blog_article as a, blog_admin as b,blog_fenlei as c where a.uid=b.id and a.status=0 and c.id=a.pid order by edittime desc limit $Page->firstRow,$Page->listRows"; 
        $list = $bowen->query($sql);
        $sho = $m->join('blog_admin on blog_article.uid=blog_admin.id')->field('username,blog_article.title,blog_article.id')->order('view desc')->limit(0,5)->select();
        $this->assign('sho',$sho);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    	$this->display(); // 输出模板
    }

    public function show(){
        $m = M('article');
        $id = $_GET['id'];
        $name = $_GET['user'];
        $res = $m->where("id = $id")->find();
        $view = $res['view'] + 1;
        $m->where("id = $id")->setField('view',$view);
        $preid = $id - 1;
        $preshow = $m->where("id = $preid")->find();
        if (!$preshow){//如果不存在的话
            $preshow['title'] = '不存在';
        }
        $this->assign('preshow',$preshow);
         
        //下一篇
        $nextid = $id + 1;
        $nextshow = $m->where("id = $nextid")->find();
        if (!$nextshow){//如果不存在的话
            $nextshow['title'] = '不存在';
        }

        $pid = $res['pid'];
        $list = $m->where("pid = $pid")->limit(6)->select();
        $this->assign('list',$list);
        $this->assign('nextshow',$nextshow);
        $this->assign('res',$res);
        $this->assign('name',$name);
        $this->display('show');
    }

    public function showfen(){

        $m = M('article');
        $fid = $_GET['fid'];
        $bowen = new \Think\Model();// 实例化User对象
        $count = $m->where("status=0 and pid=$fid")->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $sql = "select a.*,b.username,c.name from blog_article as a, blog_admin as b,blog_fenlei as c where a.uid=b.id and a.status=0 and c.id='".$fid."' and c.id=a.pid order by edittime desc limit $Page->firstRow,$Page->listRows"; 
        $list = $bowen->query($sql);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('index'); // 输出模板
    }
}