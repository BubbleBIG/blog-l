<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index () {
           $blog = M('blog');
        $this->assign('blog',$blog->order("id desc")->select());
        $this->display();
    }
   //摘要视图
    public function Contents() {
        $blog = M('blog');
        $this->assign('blog',$blog->order("id desc")->select());
        $this->display();
    }
    function read() {
        $blog = M('blog');
        $id = (int)$_GET['id'];
        $this->assign('id',$blog->where(array('id'=>$id))->select());
        $this->display();

    }
    public function count () {
        $blog = M('blog');
        $ht = $blog -> where("tag= 'HTML/CSS'") -> count();
    }
    public function other () {
        $this->display();
    }

}