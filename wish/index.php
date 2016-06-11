<?php
    header("content-type:text/html;charset=utf-8");
    //定义css、js、img等常量
    define('SITE_URL', 'http://localhost/');
    define('CSS_URL', SITE_URL.'blog/wish/Public/css/');    //Home css
    define('IMG_URL', SITE_URL.'blog/wish/Public/img/');      //Home img
    define('JS_URL', SITE_URL.'blog/wish/Public/js/');        //Home js

    //开启开发模式（上线后应改为false关闭）
    define('APP_DEBUG', true);
    //引入框架核心程序
    require '../ThinkPHP/ThinkPHP.php';
?>