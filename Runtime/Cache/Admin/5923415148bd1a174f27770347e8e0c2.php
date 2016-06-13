<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="<?php echo (JS_URL); ?>jquery.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
    <!-- <script src="<?php echo (ADMIN_JS_URL); ?>"></script> -->
    <!-- <link rel="stylesheet" href="<?php echo (ADMIN_JS_URL); ?>add.js"> -->
    <script type="text/javascript" src="<?php echo (JS_URL); ?>add.js"></script>

</head>
<body>
<div class="header">welcome</div>
<div class="">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">标签分类</a></li>
        <li><a href="#">目录摘要</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文章管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="add" href="#">添加</a></li>
            <li><a href="#">修改</a></li>
            <li><a href="#">删除</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">待定。。</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav ">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">留言管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">回复</a></li>
            <li><a href="#">删除</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">待定。。</a></li>
          </ul>
        </li>
        <li><a href="#">用户信息</a></li>
        <li><a href="#">前台首页</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">安全退出</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="body" id="body">
<p>body</p>
</div>
<div class=""></div>

</body>
</html>