<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    function Verify() {
        $config = array(

           'fontSize' => 25,    // 验证码字体大小
           'length' => 4,     // 验证码位数
           'useNoise' => false, // 关闭验证码杂点
           );
           $Verify = new \Think\Verify($config);// 设置验证码字符为纯数字
           $Verify->codeSet = '0123456789';
           $Verify->entry();
    }
    //登陆判断
  function hlogin() {
        echo $_SESSION['verify'];
        // print_r(I('post.'));
        // echo I('username');
        $code=I('post.code');
        $junge=$this->check_verify($code);
        // if (!IS_POST)  U('login');
        if (!$junge) {
            $this->error('验证码错误');
        // //     # code...
        }
            // echo "code right";
        $log = M('Admin');
        $ip = M('ip');
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
            $ip->data($data)->add();
            $login = $log->where('id=1')->save($data);
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
                $this->redirect('Index/index');
            }
        }

    }
    //验证码检验
    function check_verify($code, $id = '') {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
    }

?>