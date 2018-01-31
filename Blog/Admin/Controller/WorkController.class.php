<?php
namespace Admin\Controller;
use Think\Controller;
class WorkController extends Controller {
    public function add(){
        import("@.Util.Vquery");
        $content=file_get_contents("http://www.10juhua.com/");
        $vq=new \Org\Util\Vquery($content);
        $vp=new \Org\Util\Vquery($content);
        $vb = $vq->find('div$class="sjh_ten_img fl-l",')->attr("src");
        $vc=$vp->find('div$class="sjh_ten_title fl-l"')->find("a")->deal();
        $m = M();
        for ($i=0; $i < 10; $i++) { 
         $a = $m->execute('insert into blog_shijuhua(content,ctime,pic) values ("'.preg_replace('/"([^"]*)"/', '“${1}”', strip_tags($vc[$i][0])).'",'.time().',"'.$vb[0][$i].'")');
        }   
    }

}