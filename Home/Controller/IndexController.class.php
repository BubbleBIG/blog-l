<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index () {
        // var_dump(get_defined_constants(true));
        $blog = M('blog_tag');
        // $blo_tag = M('blo_tag');
        $tag = M('tag');
        $this->assign('tag',$tag->order("tid desc")->select());
        $this->assign('blog',$blog->order("bid desc")->select());
        // $ht1 = $blog ->where('tid=1')-> count();
        // $ht2 = $blog ->where('tid=2')-> count();
        // $ht3 = $blog ->where('tid=3')-> count();
        // $ht4 = $blog ->where('tid=4')-> count();
        // $this->assign('count1',$ht1);
        // $this->assign('count2',$ht2);
        // $this->assign('count3',$ht3);
        // $this->assign('count4',$ht4);
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
   //摘要视图
    public function Contents() {
        $blog = M('blog_tag');
        $this->assign('blog',$blog->order("bid desc")->select());
        $tag = M('tag');
        $this->assign('tag',$tag->order("tid desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    function read() {
        $blog = M('blog_tag');
        $id = (int)$_GET['id'];
        $this->assign('id',$blog->where(array('bid'=>$id))->select());
        $tag = M('tag');
        $this->assign('tag',$tag->order("tid desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();

    }
    function search() {
        $blog_tag = M('blog_tag');
        $keywords = "%".$_GET['keywords']."%";  //获取搜索关键字
          $where['title|content|tag'] = array('like',$keywords);  //用like条件搜索title和content两个字段
          // $data = $blog_tag->where($where)->select();
          $this->assign('blog',$blog_tag->where($where)->select());
          // print_r($keywords);
          // print_r($data);
          $tag = M('tag');
        $this->assign('tag',$tag->order("tid desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
          $this->display();
    }
    public function count () {
        $blog = M('blog_tag');
        $taglist = $_GET['tag'];
        $this->assign('taglist',$blog->where(array('tid'=>$taglist))->order("bid desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $tag = M('tag');
        $this->assign('tag',$tag->order("tid desc")->select());
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
                'time' => date('Y-m-d H:i:s'),

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