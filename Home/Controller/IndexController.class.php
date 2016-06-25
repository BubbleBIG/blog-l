<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index () {
        // $blog = M('blog');
        $blog = M('blog_tag');
        $this->assign('blog',$blog->order("bid desc")->select());
        // $this->assign('blog',$blog->order("bid desc")->select());
        $ht = $blog  ->where(1)-> count();
        $this->assign('count',$ht);
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
   //摘要视图
    public function Contents() {
        $blog = M('blog_tag');
        $this->assign('blog',$blog->order("bid desc")->select());
        // $blog = M('blog');

        // $this->assign('blog',$blog->order("bid desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    function read() {
        $blog = M('blog_tag');
        // $this->assign('blog',$blog->order("bid desc")->select());
        $id = (int)$_GET['bid'];
        $this->assign('id',$blog->where(array('id'=>$id))->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();

    }
    public function count () {
        $blog = M('blog_tag');
        $tag = $_GET['tag'];
        $this->assign('tag',$blog->where(array('tag'=>$tag))->order("bid desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        // $ht = $blog -> where("tag= 'NoTag'") -> count();
        // $this->assign('count',$ht);
        $this->display();
        // print_r($ht);
    }
    public function message () {
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    public function addmessage() {

        // print_r(I('post.'));
        // echo I('username');
        $code=I('post.code');
        $junge=$this->check_verify($code);
        if (!$junge) {
            $this->error('验证码错误');
        //     # code...
        }
        if (!IS_POST)  U('message');
            $data = array(
                'username' => $_POST['name'],
                'content' => $_POST['edit'],
                'time' => time(),

                );
            // print_r($data);
           if( M('wish')->data($data)->add()) {
                $this->success('发布成功','message');
           } else {
            $this->error('失败');
           }
    }
    function Verify() {
        $config = array(

           'fontSize' => 24,    // 验证码字体大小
           'length' => 3,     // 验证码位数
           'useNoise' => false, // 关闭验证码杂点
           );
           $Verify = new \Think\Verify($config);// 设置验证码字符为纯数字
           $Verify->codeSet = '123456789';
           $Verify->entry();
    }
    function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

}