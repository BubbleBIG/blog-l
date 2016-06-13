<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<div id='main'>
        <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><div align="left" class='title' style="font-size: 21px;"><a href="#<?php echo U('/' .$v['id']);?>"><?php echo ($v["title"]); ?></a></div>
                <div align="right" class='time'><?php echo ($v["createtime"]); ?></div><br><?php endforeach; endif; ?>


</div>
</body>
</html>