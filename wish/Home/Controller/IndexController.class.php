<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign('wish',M('wish')->select())->display('index');
        // dump($array,1,'<pre>',0);
        // print_r($_GET);die;

    }
    public function handle() {

        // print_r(I('post.'));
        // echo I('username');
        if (!IS_POST)  U('index');
            $data = array(
                'username' => I('username'),
                'content' => I('content'),
                'time' => time(),

                );
            // print_r($data);
           if( M('wish')->data($data)->add()) {
                $this->success('发布成功','index');
           } else {
            $this->error('失败');
           }



    }
}