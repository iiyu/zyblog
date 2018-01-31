<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function index(){
        $smiles=$this->getsmiles();
    	$mess = M('liuyan');
    	$arr = $mess->select();
        $this->assign('smiles',$smiles);
        unset($smiles);
    	$this->assign('arr',$arr);
    	$this->display(); // 输出模板
    }
    public function add(){
    	if(check_code($_POST['verify']) === false){       //给function.php中定义的函数check_code，然后它返回真假
            echo 0;
         }else{
    	$mess = M('liuyan');
    	$mess->create();
    	$mess->ctime = time();
    	$mess->ip = $_SERVER["REMOTE_ADDR"];
    	if ($mess->add()) {
    		echo 1;
    	}else{
    		echo 2;
    	}
    	}
    }
    public function verify_c(){
    	$Verify = new \Think\Verify();
    	$Verify->entry();
    }

    function getsmiles() {
  if ($handle = opendir('Public/Home/images/smiles')) {
    while (false !== ($file = readdir($handle))) {
      if (preg_match('/(.+?)[.]gif/ie',$file, $name)) {
        $result[$name[1]]=$file;
      }
    }
    closedir($handle);
    return $result;
  }else{
    return;
  }
}
}