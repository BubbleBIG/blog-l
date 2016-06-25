<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
    // public function index(){
    // echo 'hello,world!!!!';}
    //登陆界面
    public function login() {
        // $db = M('admin');
        // $result = $db->select();
        // dump($result);
        // echo 'admin login in';
        //display()没有参数，查找模板名称和操作名称一致

        session_start();
        // $_SESSION['a_name'] = 'admin';
        // die;
        $this -> display();
//        var_dump(get_defined_constants(true));

    }
    //主页面
 function index() {

        $blog = D('blog');
    //     $tab = D('tab');
    // //     // $blog = D('blog')->relation(true)->select();
    // //     // print_r($blog);
    // //     // $b = $blog->where(1)->select();
    // //     // htmlspecialchars_decode($b);
    //     $this->assign('tab',$tab->select());
        $id = (int)$_GET['id'];
        $this->assign('changeb',$blog->where(array('id'=>$id))->select());
        $this->assign('listblog',$blog->order("id desc")->select());
        $wish = M('wish');
        $this->assign('wish',$wish->order("id desc")->select());
        $this->display();
//        var_dump(get_defined_constants(true));

    }
    function changblog() {

    }
    function Verify() {
        $config = array(

           'fontSize' => 18,    // 验证码字体大小
           'length' => 4,     // 验证码位数
           'useNoise' => false, // 关闭验证码杂点
           );
           $Verify = new \Think\Verify($config);// 设置验证码字符为纯数字
           $Verify->codeSet = '0123456789';
           $Verify->entry();
    }
    //登陆判断
  function handle() {


        // echo $_SESSION['verify'];
        // print_r(I('post.'));
        // echo I('username');
        $code=I('post.code');
        $junge=$this->check_verify($code);
        if (!IS_POST)  U('login');
        // if (!$junge) {
        //     $this->error('验证码错误');
        // //     # code...
        // }
            // echo "code right";
        $log = M('Admin');
        // $log = $db->select();
        $username = I('username');
        $password = I('password','','md5');
        $user = $log->where(array('a_name'=>$username))->find();
        if (!$user||$user['a_password']!=$password) {
            # code...
            $this->error('账号或密码错误');
        }else{
            echo "right";
            $log->create();
            // $data=array(
            //     'logintime'=>date('Y-m-d H:i:s'),
            //     'loginip'=>get_client_ip(),
            //     );
            $data['logintime'] = Date('Y-m-d H:i:s');
            $data['loginip'] = get_client_ip();
            $login = $log->where('id=1')->setField($data);

// echo $log->getLastSql();
//             dump($log);
//             print_r($data);
            // dump($user);
            // dump($logi);
            if (!$login) {
                $this->error('登陆错误');
                # code...
            }else {
                // $this->success('success');
                session('[start]');
                session('aid',$user['id']);
                session('username',$user['a_name']);
                session('logintime',date('Y-m-d H:i:s', $user['logintime']));
                session('loginip',$user['loginip']);
                $this->redirect('index',array('id'=>19,'name'=>'Bubble'),1,'，正在跳转...');
            }
        }

    }
    //验证码检验
    function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    //编辑器页面
    function blog() {
        $this->display();
    }
    //退出登陆
    function logout() {
        session(null);
        $this -> redirect('login');
    }
    //添加blog的上传数据库操作
    function addblog() {
        session_start();
        // if (!IS_POST)  U('index');
            $data = array(
                'title' => $_POST['title'],
                'content' => $_POST['edit'],
                'tag' => I('tag'),
                'createtime' => date('Y-m-d H:i:s'),

                );
            print_r($data);
           if( M('blog')->data($data)->add()) {
                $this->success('发布成功','index');
           } else {
            $this->error('失败');
           }
    }
    //blog列表
    function listblog() {
        // $blog = M('blog');
        // $total = $blog -> count();
        // $per = 4;
        // $Page = new \Component\Page($total,$per);  //分页显示
        // // $show = $Page->show();
        // $list = $blog->where('id'>0)->limit($Page ->firstRow.','.$Page->listRows)->order("id desc")->select();
        // $show = $Page->show();// 分页显示输出

        // $this -> assign('listblog',$list);
        // $this -> assign('list',$show);
        // $this -> display();

        $blog = D('blog');
    //     // $blog = D('blog')->relation(true)->select();
    //     // print_r($blog);
    //     // $b = $blog->where(1)->select();
    //     // htmlspecialchars_decode($b);
        $this->assign('listblog',$blog->select())->display();
    }
    function other() {
        $this->display();
    }
    function del() {
        // $id = (int)$_GET['id'];
        // echo $id;
        $update = array(
            'id' => (int) $_GET['id'] , );
    }
     //
        function getAllNode()
        {
            $this->assign('nodes',$this->_node);
            $this->display('nodes');
        }

}