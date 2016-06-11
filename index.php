<?php
    header("content-type:text/html;charset=utf-8");
    //定义css、js、img等常量
    define('SITE_URL', 'http://localhost/');
    define('CSS_URL', SITE_URL.'blog/Public/Home/css/');    //Home css
    define('IMG_URL', SITE_URL.'blog/Public/Home/img/');      //Home img
    define('JS_URL', SITE_URL.'blog/Public/Home/js/');        //Home js
//    define('PHP_URL', SITE_URL.'blog/Public/Home/php/');
    // define('FONTS_URL', SITE_URL.'blog/Public/fonts/');      //fonts
    define('ADMIN_CSS_URL', SITE_URL.'blog/Public/Admin/css/');    //Admin css
    // define('ADMIN_IMG_URL', SITE_URL.'blog/Public/Home/img/');      //Admin img
    define('ADMIN_JS_URL', SITE_URL.'blog/Public/Admin/js/');        //Admin js
    //开启开发模式（上线后应改为false关闭）
    define('APP_DEBUG', true);
    //引入框架核心程序
    require './ThinkPHP/ThinkPHP.php'
?>