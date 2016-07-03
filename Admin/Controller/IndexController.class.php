<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    //主页面
    function index() {

        $admin = M('admin');
        $ip = M('ip');
        $blog = M('blog_tag');
        $listb = M('blog');
        $tag = M('tag');
        $max = $ip -> max('id')-1;
        $this->assign('ip',$ip->where(array('id' => $max ))->select());
        $this->assign('admin',$admin->select());
        $this->assign('tag',$tag->select());
        $this->assign('listblog',$blog->order("bid desc")->select());
        $id = (int)$_GET['id'];
        $this->assign('changeb',$blog->where(array('bid'=>$id))->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    function blog() {

        $blog = M('blog_tag');
        $listb = M('blog');
        $tag = M('tag');
        $this->assign('tag',$tag->select());
        $this->assign('listblog',$blog->order("bid desc")->select());
        $id = (int)$_GET['id'];
        $this->assign('changeb',$blog->where(array('bid'=>$id))->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
        //        var_dump(get_defined_constants(true));
    }
    //添加blog的上传数据库操作
    function addblog() {

        // if (!IS_POST)  U('index');
        $blog = M('blog');
        $blog_num = M('blog_num');
        $tag = M('tag');
        // $blo_tag =M('blo_tag');
        // $id = $blog_num->max('id')+1;
        $id = $blog_num->where(1)->getField('num')+1;;
            $data = array(
                'title' => $_POST['title'],
                'author' => '燈龍仔',
                'content' => $_POST['edit'],
                'createtime' => date('Y-m-d H:i:s'),
                );

            $itag = array(
                'tid' => I('tag'),
                'bid' => $id,
                );
            $tid = I('tag');
            $num = $tag -> where(array('tid'=>$tid))->getField('num')+1;
            $num1 = array('num' => $num, );
            $num2 = array('num' => $id,);
            print_r($data);
            print_r($itag);
            print_r($num2);
            // $blog_num->data($num2)->add();
           if( M('blog')->data($data)->add()&&M('blo_tag')->data($itag)->add()&&$tag->where(array('tid'=>$tid))->data($num1)->save()&&$blog_num->where(1)->data($num2)->save()) {
                $this->success('发布成功','blog');
           } else {
            $this->error('失败');
           }
    }
    function change() {
        $blog = M('blog_tag');
        $listb = M('blog');
        $tag = M('tag');
        $this->assign('tag',$tag->select());
        $this->assign('listblog',$blog->order("bid desc")->select());
        $id = (int)$_GET['id'];
        $this->assign('changeb',$blog->where(array('bid'=>$id))->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    function changeblog() {
        $blog = M('blog');
        $blo_tag = M('blo_tag');
        $tag = M('tag');
             $data = array(
                'title' => $_POST['title'],
                'author' => '燈龍仔',
                'content' => $_POST['edit1'],
                'bid' => $_POST['id1']   ,
                'updatetime' => date('Y-m-d H:i:s'), );
            $itag = array(
                'tid' => I('tag'), );
            $bid = $_POST['id1'];
            $tid = $blo_tag -> where(array('bid'=>$bid))->getField('tid');
            $num = $tag -> where(array('tid'=>$tid))->getField('num')-1;
            $num1 = array('num' => $num, );
            $tidget = I('tag');
            $num2 = $tag -> where(array('tid'=>$tidget))->getField('num')+1;
            $num3 = array('num' => $num2, );
            print_r($data);
            print_r($itag);
            print_r($bid);
            print_r($num1);
            print_r($num3);
           if( M('blog')->data($data)->save()&&M('blo_tag')->where(array('bid'=>$bid))->data($itag)->save()&&$tag->where(array('tid'=>$tid))->save($num1)&&$tag->where(array('tid'=>$tidget))->save($num3)) {
                $this->success('修改成功','index');
           } else {
            $this->error('失败');
           }
    }
    function del() {
        $id = array(
            'id' => (int) $_GET['id'] , );
        $bid = $_GET['id'];
        $tag = M('tag');
        $blo_tag = M('blo_tag');
        $tid = $blo_tag -> where(array('bid'=>$bid))->getField('tid');
        $num4 = $tag -> where(array('tid'=>$tid))->getField('num')-1;
            $num5 = array('num' => $num4, );
            // print_r($bid);
            // print_r($tid);
            // print_r($num1);
            if($blo_tag->where(array('bid'=>$bid))->delete()&&M('blog')->where(array('bid'=>$bid))->delete()&&$tag->where(array('tid'=>$tid))->save($num5)) {
            $this->display();
            } else {
            $this->error('失败');
           }
        // if($blo_tag->where(array('bid'=>$bid))->delete()&&M('blog')->where(array('bid'=>$bid))->delete()&&$tag->where(array('tid'=>$tid))->save($num5)) {
        //         $this->success('删除成功','index');
        //    }
        //    else {
        //     $this->error('失败');
        //    }
    }
    function addtag() {
        $tag = M('tag');
        $data = array(
                'tag' => $_POST['tag'],
                'num' => '0',
                );
        print_r($data);
        if($tag->add($data)) {
            $this->success('添加成功','index');
            } else {
            $this->error('失败');
           }
    }
    function message() {
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
    }
    //留言回复
    function addreply() {
        $wish =M('wish');
        $mess_reply = M('mess_reply');
        $id = $_GET['id'];
        // $data = array(
        //     'rid' => $id,
        //     'reply' => $_POST['treply'],
        //     'rname' => '燈龍仔',
        //     'rtime' => date('Y-m-d H:i:s'),
        //     );
        $data = array(
            'rid' => $id,
            'picture' => '/blog/Public/home/img/v.png',
            'reply' => $_POST['treply'],
            'rname' => '燈龍仔',
            'rtime' => date('Y-m-d H:i:s'),
            );
            if($wish->where(array('id' => $id ))->save($data)&&$mess_reply->add($data)) {
            $this -> redirect('message');
            } else {
            $this->error('失败');
           }
        // print_r($id);
        // print_r($data);
    }
    // 删除留言
    function delmessage() {
        $wish =M('wish');
        $mess_reply = M('mess_reply');
        $id = $_GET['id'];
        // print_r($id);
        $mess_reply->where(array('rid'=>$id))->delete();
        if($wish->where(array('id'=>$id))->delete()) {
            $this -> redirect('message');
            } else {
            $this->error('失败');
           }
    }
    //退出登陆
    function logout() {
        // session(null);
        session_unset();
        session_destroy();
        $this -> redirect('Login/login');
    }

    function other() {
        $this->display();
    }

    function getAllNode(){
        $this->assign('nodes',$this->_node);
        $this->display('nodes');
    }

}

?>
