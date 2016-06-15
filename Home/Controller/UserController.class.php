<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index () {
           $blog = M('blog');
        // $total = $blog -> count();
        // $per = 4;
        // $Page = new \Component\Page($total,$per);  //分页显示
        // // $show = $Page->show();
        // $list = $blog->where('id'>0)->limit($Page ->firstRow.','.$Page->listRows)->order("id desc")->select();
        // $show = $Page->show();// 分页显示输出

        // $this -> assign('blog',$list);
        // $this -> assign('list',$show);
        // $this -> display();
    //     $tab = D('tab');
    // //     // $blog = D('blog')->relation(true)->select();
    // //     // print_r($blog);
    // //     // $b = $blog->where(1)->select();
    // //     // htmlspecialchars_decode($b);
    //     $this->assign('tab',$tab->select());
        $this->assign('blog',$blog->order("id desc")->select());
        $this->display();
//         var_dump(get_defined_constants(true));
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
    //目录视图
    public function View() {

        // echo "login in";
        // echo '<br>';
        // echo U('User/login');

        //调用视图display()
        // $blog = M('blog');

         // $content = Array(
         //    // $blog -> query("select content from blog")
         //    $blog->select()
         //    );
       // htmlspecialchars_decode($content);
        // $this->assign('blog',$blog->order("id desc")->select())->display();

    }

    //user sign up
    public function count () {
        $blog = M('blog');
        $ht = $blog -> where("tag= 'HTML/CSS'") -> count();
    }
    public function other () {
        $this->display();
    }

    //错误页面信息
    // public function _empty() {
    //     echo "<img src='".IMG_URL.'404_error.jpg'."' alt='' />";

    // }
}