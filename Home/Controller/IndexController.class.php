<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index () {
        $blog = M('blog');
        $this->assign('blog',$blog->order("id desc")->select());
        $ht = $blog  ->where(1)-> count();
        $this->assign('count',$ht);
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
   //摘要视图
    public function Contents() {
        $blog = M('blog');
        $this->assign('blog',$blog->order("id desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    function read() {
        $blog = M('blog');
        $id = (int)$_GET['id'];
        $this->assign('id',$blog->where(array('id'=>$id))->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();

    }
    public function count () {
        $blog = M('blog');
        $tag = $_GET['tag'];
        $this->assign('tag',$blog->where(array('tag'=>$tag))->select());
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

}