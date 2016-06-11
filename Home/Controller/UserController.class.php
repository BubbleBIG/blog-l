<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index () {
        $this->display();
//         var_dump(get_defined_constants(true));
    }
   //摘要视图
    public function Contents() {

        // echo "login in";
        // echo '<br>';
        // echo U('User/login');

        //调用视图display()
        $blog = M('blog');

         $content = Array(
            // $blog -> query("select content from blog")
            $blog->select()
            );
       // htmlspecialchars_decode($content);
        $this->assign('blog',$blog->select())->display();

    }
    //目录视图
    public function View() {

        // echo "login in";
        // echo '<br>';
        // echo U('User/login');

        //调用视图display()
        $blog = M('blog');

         $content = Array(
            // $blog -> query("select content from blog")
            $blog->select()
            );
       // htmlspecialchars_decode($content);
        $this->assign('blog',$blog->select())->display();

    }

    //user sign up
    public function register () {
        $this->display();
    }
    public function other () {
        $this->display();
    }

    //错误页面信息
    // public function _empty() {
    //     echo "<img src='".IMG_URL.'404_error.jpg'."' alt='' />";

    // }
}