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
<div class="menu nav nav-pills" >
<!-- <nav class=""> -->
  <div class="na" align="right">

    <ul class="nav nav-pills nav-stacked" >

    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">摘要列表</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">标题列表</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>

  </ul>
        </div>
 </div>

    <div class="pull-left" >
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">


<table id="list" width="100%">

 <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
               <td > <div id="id" align="center" class='title' style="font-size: 21px;"><a id="id" href="<?php echo U('id',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></div>
                </td>
            </tr>
            <tr>
                <td>
                <div class='summary' style="font-size: 14px;"><p><?php echo ($v["content"]); ?></p></div>
                <!-- <div align="right" class="more" style="font-size: 14px;"><a href="#<?php echo U('/' .$v['id']);?> ">阅读全文</a></div> -->
                </td>
                </tr>
                <tr width="100%" align="right">
                <td >
                <div class='time'>发布于：<?php echo ($v["createtime"]); ?> &nbsp;&nbsp;标签：<?php echo ($v["tag"]); ?></div>
                </td>
                </tr><?php endforeach; endif; ?>
        </tr>
</table>
<br>
<div align="center" id="changpage"></div>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">2.</div>
    <div role="tabpanel" class="tab-pane" id="messages">3.</div>
  </div>
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
        <!-- <form action="" method="post" class="form-inline" >
        <div class="form-group input">
        <input class="form-control" type="text" name="search" placeholder="something">
        </div>
        <div class="form-group input">
        <input type="submit" class="btn btn-default"><span class=""></span></input>
        </div>
        </form> -->
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

    <div class="sear pull-left">


    </div>


</div>
<script language="javascript">
var obj,j;
var page=0;
var nowPage=0;//当前页
var listNum=15;//每页显示<ul>数
var PagesLen;//总页数
var PageNum=4;//分页链接接数(5个)
onload=function(){
obj=document.getElementById("list").getElementsByTagName("tr");
j=obj.length
PagesLen=Math.ceil(j/listNum);
upPage(0)
}
function upPage(p){
nowPage=p
//内容变换
for (var i=0;i<j;i++){
obj[i].style.display="none"
}
for (var i=p*listNum;i<(p+1)*listNum;i++){
if(obj[i])obj[i].style.display="block"
}//欢迎来到站长特效网，我们的网址是www.zzjs.net，很好记，zz站长，js就是js特效，本站收集大量高质量js代码，还有许多广告代码下载。
//分页链接变换
strS='<a href="###" onclick="upPage(0)">首页</a>  '
var PageNum_2=PageNum%2==0?Math.ceil(PageNum/2)+1:Math.ceil(PageNum/2)
var PageNum_3=PageNum%2==0?Math.ceil(PageNum/2):Math.ceil(PageNum/2)+1
var strC="",startPage,endPage;
if (PageNum>=PagesLen) {startPage=0;endPage=PagesLen-1}
else if (nowPage<PageNum_2){startPage=0;endPage=PagesLen-1>PageNum?PageNum:PagesLen-1}//首页
else {startPage=nowPage+PageNum_3>=PagesLen?PagesLen-PageNum-1: nowPage-PageNum_2+1;var t=startPage+PageNum;endPage=t>PagesLen?PagesLen-1:t}
for (var i=startPage;i<=endPage;i++){
 if (i==nowPage)strC+='<a href="###" style="color:red;font-weight:700;" onclick="upPage('+i+')">'+(i+1)+'</a> '
 else strC+='<a href="###" onclick="upPage('+i+')">'+(i+1)+'</a> '
}//欢迎来到站长特效网，我们的网址是www.zzjs.net，很好记，zz站长，js就是js特效，本站收集大量高质量js代码，还有许多广告代码下载。
strE=' <a href="###" onclick="upPage('+(PagesLen-1)+')">尾页</a>  '
strE2=nowPage+1+"/"+PagesLen+"页"+"  共"+(j/3+2)+"条"
document.getElementById("changpage").innerHTML=strS+strC+strE+strE2
}
</script>

<script>
$(function(){
  $('.nav a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
   });
$(function(){
    $('#Contents').click(function() {
    $('#cont').load("<?php echo U(Contents);?>");
});
})
</script>
</body>

</html>