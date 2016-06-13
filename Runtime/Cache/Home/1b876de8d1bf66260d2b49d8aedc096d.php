<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>index.css">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="<?php echo (JS_URL); ?>jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
    <script src="<?php echo (JS_URL); ?>index.js"></script>
</head>
<body>
<div class="container header">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="" alt="">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<div id="navigator">
    <div class="navigator_bg">
    </div>
    <div class="navigator" align="right">
        <ul  class="">

            <li  >
                <input id="Contents" class="btn btn-default" type="button" value="Contents">
            </li>
            <li>
                <input id="View" class="btn btn-default" type="button" value="View">
            </li>
            <li>
                <input id="Other" class="btn btn-default" type="button" value="Other">
            </li>
            <!--<li>-->
            <!--<div  class="form">-->

            <!--<form action="" method="post" class="form-inline" >-->
            <!--<div class="form-group input">-->
            <!--<input class="form-control" type="text" name="search" placeholder="内容搜索">-->
            <!--</div>-->
            <!--<div class="form-group input">-->
            <!--<button type="submit" class="btn btn-default"><span class=""></span>搜索</button>-->
            <!--</div>-->
            <!--</form>-->
            <!--</div>-->
            <!--</li>-->
        </ul>
        </div>
    </div>


<div class="body">
<div class="pull-left">
    <div class=""><p>left</p></div>
    <div class="info">
        <p>about me</p>
    </div>
    <div class="sea" >
       <div class="panel_head"><span>Content-Search</span></div>
        <div  class="form">

        <form action="" method="post" class="form-inline" >
        <div class="form-group input">
        <input class="form-control" type="text" name="search" placeholder="something">
        </div>
        <div class="form-group input">
        <button type="submit" class="btn btn-default"><span class=""></span>search</button>
        </div>
        </form>
        </div>
    </div>
    <div class="message">
        <div id="message" class="mess">
            <label class="lab"><h4>message</h4></label>

        </div>
        <div id="mess-view" class=""></div>
        <div id="mess-add">
            <button type="submit" class="btn btn-default">add message</button>
        </div>
    </div>
    <div class="other">
        <p>other</p>
    </div>
</div>

    <div class="sear pull-right">


    </div>
    <div class="pull-right" id="cont">

        <div class="right"><p>right<br>hello world<br>hello world<br>hello world<br>hello world</p></div>
        <div  ></div>
    </div>
</div>
</body>
</html>