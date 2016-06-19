<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>bootstrap.min.css">

    <script src="<?php echo (JS_URL); ?>jquery.min.js"></script>

    <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
    <!-- <script src="<?php echo (ADMIN_JS_URL); ?>"></script> -->
    <!-- <link rel="stylesheet" href="<?php echo (ADMIN_JS_URL); ?>add.js"> -->
    <!-- <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>add.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/froala_editor.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/froala_style.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/code_view.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/colors.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/emoticons.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/image_manager.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/image.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/table.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/char_counter.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/video.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/plugins/file.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" href="/blog/Public/Admin/js/froala/css/themes/royal.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="/blog/Public/Admin/css/index.css">

  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 80%;
      margin: auto;
      text-align: left;
    }

  </style>


</head>
<body>
<div class="header">welcome</div>
<div class="logout pull-right ">
<a data-toggle="tooltip" data-placement="top" title="退出登陆" onclick="if (confirm('sure')) return true; else return false;" href="<?php echo U('logout');?>" target="_top">安全退出</a>
</div>
<div class="nav nav-pills ">
<!-- <nav class=""> -->
  <div class="na">

    <ul class="nav nav-pills nav-stacked">
     <!-- <ul class="nav nav-tabs" role="tablist"> -->
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">主页信息</a></li>
    <li role="presentation" ><a href="#Labelclass" aria-controls="Labelclass" role="tab" data-toggle="tab">标签分类</a></li>
    <li role="presentation"><a href="#Manageblog" aria-controls="Manageblog" role="tab" data-toggle="tab">博客管理</a></li>
    <li role="presentation"><a href="#MessageManage" aria-controls="MessageManage" role="tab" data-toggle="tab">留言管理</a></li>
    <li role="presentation"><a href="#UserInfo" aria-controls="UserInfo" role="tab" data-toggle="tab">用户信息</a></li>
    <!-- <li role="presentation"><a href="#ContentsSummary" aria-controls="ContentsSummary" role="tab" data-toggle="tab">前往前台</a></li> -->
     <!-- <li class=" pull-right logout" >
        <a onclick="if (confirm('sure')) return true; else return false;" href="<?php echo U('logout');?>" target="_top">安全退出</a>
    <form action="<?php echo U('logout');?>">
        <button class="btn"  onclick="if (confirm('确认退出？')) return true; else return false;" type="submit" value="" >安全退出</button>
         </form>
     </li> -->

      </ul>

<script>
//     $(function(){
//     $('.logout').click(function() {
//     $(this).load();
// });

// });
</script>
  </div>
<!-- </nav> -->
</div>

<div class="body" id="body">
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <div class="table-responsive">
            <table class="table table-striped table-bordered " >
            <div class="">
            <tr>
                <td align="right" width="200px">11</td>
                <td width="550px">22</td>
            </tr>
            <tr>
                <td align="right" width="200px">11</td>
                <td width="550px">22</td>
            </tr>
            <tr>
                <td align="right" width="200px">11</td>
                <td width="550px">22</td>
            </tr>
            </div>

  </table>
</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="Labelclass">...2</div>
    <!-- <div role="tabpanel" class="tab-pane" id="ContentsSummary">.3..</div> -->
    <div role="tabpanel" class="tab-pane" id="Manageblog">
      <div class="blo">
  <ul class="nav nav-tabs" role="tablist" >

    <li role="presentation" ><a href="#addblog" aria-controls="addblog" role="tab" data-toggle="tab">添加博客</a></li>
    <li role="presentation"><a href="#changeblog" id='ch' aria-controls="changeblog" role="tab" data-toggle="tab">查看修改</a></li>
    <li role="presentation"><a href="#deleteblog" id="oth" aria-controls="deleteblog" role="tab" data-toggle="tab">blog回收</a></li>
  </ul>

  <script>
    function InputCheck(AddbForm)
{
    if (AddbForm.title.value == "")
    {
        alert("标题不能为空!");
        AddbForm.title.focus();
        return (false);
    }
    if (AddbForm.edit.value == "")
    {
        alert("内容不能为空!");
        AddbForm.edit.focus();
        return (false);
    }
}
  </script>

  <div class="tab-content">

    <div role="tabpanel" class="tab-pane" id="addblog">
    <div id="editor" >
    <div class="addb">
<fieldset>

    <form action="<?php echo U('addblog');?>" method="post" name="addblog" onSubmit="return InputCheck(this)">
    <div class="tit">
    <input class="title form-control" name="title" id="title" type="text" placeholder="Type title" autofocus="autofocus"></input>
    </div>
    <div class="text">
      <textarea id='edit' class="edit" name="edit" style="margin-top: 10px;" placeholder="Type some text,write down somthing you just want to record">

      </textarea>
      </div>


      <div class="se">
        <button type="submit" class="btn btn-default" name="btn">确认发表</button>


        <select name="tag" id = "tag" class="tag form-control pull-left">
          <option name="0" value="NoTag">--未分类--</option>
          <option name='1' value="JavaScript">JavaScript</option>
          <option name='2' value="PHP">PHP</option>
          <option name='3' value="HTML_CSS">HTML/CSS</option>
          <option name='4' value="Essay">随笔</option>
          <option name='5' value="Other">其他</option>
        </select>

      </div>
    </form>
    </fieldset>
  </div>
  </div>

  </div>
    <div role="tabpanel" class="tab-pane" id="changeblog">
        <div class="table-list">
        <table class="table table-list table-striped table-bordered" id="list">

         <!--  <tr>
          <?php if(is_array($tab)): foreach($tab as $key=>$v): ?><th width="98px" align="left"><?php echo ($v["id"]); ?></th>
            <th width="293px" align="left"><?php echo ($v["title"]); ?></th>
            <th width="147px" align="left"><?php echo ($v["tag"]); ?></th>
            <th width="176px" align="left"><?php echo ($v["time"]); ?></th>
            <th width="146px" align="left"><?php echo ($v["do"]); ?></th><?php endforeach; endif; ?>
            </tr> -->
            <tr> <foreach>

            <th width="98px" align="left">ID</th>
            <th width="293px" align="left">标题</th>
            <th width="147px" align="left">分类</th>
            <th width="176px" align="left">发布时间</th>
            <th width="146px" align="left">操作</th>
            </foreach>
            </tr>

          <tr >
          <?php if(is_array($listblog)): foreach($listblog as $key=>$v): ?><tr>
            <td width="10%" align="left"><?php echo ($v["id"]); ?></td>
            <td width="30%" align="left"><?php echo ($v["title"]); ?></td>
            <td width="15%" align="left"><?php echo ($v["tag"]); ?></td>
            <td width="18%" align="left"><?php echo ($v["createtime"]); ?></td>
            <td width="15%" align="left">
              [<a href="#">修改</a>]
              [<a href="<?php echo U('del',array('id'=>$v['id']));?>">删除</a>]
            </td>
            </tr><?php endforeach; endif; ?>
            </tr>
</table>
<div id="changpage"></div>
        <!--   <tr>
            <th>ID</th>
            <th>标题</th>
            <th>分类</th>
            <th>发布时间</th>
            <th>操作</th>
          </tr>
          <tr class="ww">
       </tr> -->

      </div>
    </div>
    <script>
      $(function () {
        $('#edit').froalaEditor({
            heightMin: 230,
//            heightMax: 800,
            theme: 'royal'
        });
    });

    </script>
    <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            $('#edit').parents('form').on('submit', function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null, })

      });
      $('#ch').click(function() {
      // $('.table-list').load("<?php echo U('listblog');?>");
});
       $('#oth').click(function() {
       $('.oth').load("<?php echo U('other');?>");
       });
  </script>
    <script language="javascript">
var obj,j;
var page=0;
var nowPage=0;//当前页
var listNum=6;//每页显示<ul>数
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
}
strS='<a href="###" onclick="upPage(0)">首页</a>  '
var PageNum_2=PageNum%2==0?Math.ceil(PageNum/2)+1:Math.ceil(PageNum/2)
var PageNum_3=PageNum%2==0?Math.ceil(PageNum/2):Math.ceil(PageNum/2)+1
var strC="",startPage,endPage;
if (PageNum>=PagesLen) {startPage=0;endPage=PagesLen-1}
else if (nowPage<PageNum_2){startPage=0;endPage=PagesLen-1>PageNum?PageNum:PagesLen-1}//首页
else {startPage=nowPage+PageNum_3>=PagesLen?PagesLen-PageNum-1: nowPage-PageNum_2+1;var t=startPage+PageNum;endPage=t>PagesLen?PagesLen-1:t}
for (var i=startPage;i<=endPage;i++){
 if (i==nowPage)strC+='<a href="#" style="color:red;font-weight:700;" onclick="upPage('+i+')">'+(i+1)+'</a> '
 else strC+='<a href="#" onclick="upPage('+i+')">'+(i+1)+'</a> '
}
strE=' <a href="#" onclick="upPage('+(PagesLen-1)+')">尾页</a>  '
strE2=nowPage+1+"/"+PagesLen+"页"+"  共"+j+"条"
document.getElementById("changpage").innerHTML=strS+strC+strE+strE2
}
</script>
    <div role="tabpanel" class="tab-pane" id="deleteblog">
      <div class="oth"></div>
    </div>
  </div>
  </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="MessageManage">.5..</div>
    <div role="tabpanel" class="tab-pane" id="UserInfo">..6.</div>
</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="/blog/Public/Admin/js/froala/js/languages/ro.js"></script>
  <!-- <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script> -->
<script>

$(function(){
  $('.nav a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
   });
$(document).ready(function() {
    // $('#Manageblog').load("<?php echo U('blog');?>");
});

</script>
</body>
</html>