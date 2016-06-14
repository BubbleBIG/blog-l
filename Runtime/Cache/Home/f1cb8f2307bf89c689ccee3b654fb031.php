<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>index.css">

    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.min.css">

    <script src="<?php echo (JS_URL); ?>jquery.min.js"></script>

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
<div class="menu" >
    <div class="contents-btn" align="right">
        <ul  class="con" >

            <li  >
                <div class="btn btn-default ">
                <a href="<?php echo U('index');?>">摘要列表</a>
                </div>
            </li>
            <li>
                <div class="btn btn-default">
                <a href="<?php echo U('Contents');?>">标题列表</a>
                </div>
            </li>
            <li>
                <div class="btn btn-default">
                <a href="#">留言板</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="pull-left" id="cont">
    <div id='main'>
        <?php if(is_array($id)): foreach($id as $key=>$v): ?><div align="center" class='title' style="font-size: 21px;"><?php echo ($v["title"]); ?></div>

                <div class='summary' style="font-size: 14px;"><p><?php echo ($v["content"]); ?></p></div>
<!--

                <div align="right" class="more" style="font-size: 14px;"><a href="#<?php echo U('/' .$v['id']);?> ">阅读全文</a></div> -->
                <div align="right" class='time'><?php echo ($v["createtime"]); ?></div><br><?php endforeach; endif; ?>
    </div>

        <div class="left"></div>
        <div  ></div>
    </div>
<div class="body">
<div class="pull-right">

     <div class="info">
    <div class="he ca" align='center'><p>Calendar</p></div>


    </div>
    <div class="sea" >
    <div class="he" align="center"><span>Content-Search</span></div>
       <div class="panel_head"></div>
        <div  class="form">
        <form action="#" name="search">
        <table border="0" cellpadding="0" cellspacing="0" class="tab_search" align="center">
            <tr>
                <td>
                    <input type="text" name="q" title="Search" class="searchinput" id="searchinput" onkeydown="if (event.keyCode==13) {}" onblur="if(this.value=='')value='- Search Something -';" onfocus="if(this.value=='- Search Something -')value='';" value="- Search Something -" size="10"/>
                </td>
                <td>
                    <input type="image" width="21" height="17" class="searchaction" onclick="if(document.forms['search'].searchinput.value=='- Search Something -')document.forms['search'].searchinput.value='';" alt="Search" src="<?php echo (IMG_URL); ?>search.png" border="0" hspace="2"/>
                </td>
            </tr>
        </table>
        </form>
        </div>
    </div>
    <div class="tag-view">
    <div class="he" align="center"><p>Taglist</p></div>

    </div>
    <div class="message">
    <div class="he" align="center"><label class="lab">message</label></div>
        <div id="message" class="mess">
            <div class="">&nbsp;&nbsp;最新留言：</div>

            <div id="mes"></div>

        </div>
        <div id="mess-view" class=""></div>
        <div id="mess-add" >
            <button type="submit" class="btn btn-default" >View all Or Add message</button>
        </div>
    </div>
    <div class="other">
    <div class="he" align="center"><p>other</p></div>

    </div>

</div>
</div>
</body>

</html>