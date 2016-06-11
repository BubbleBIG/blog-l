<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
  Public function _initialize_ () {
    if (!isset($_SESSION['aid'])||!isset($_SESSION['username'])) {
        $this->redirect('Manager/login')
        # code...
    }
  }
}
?>