<?php if (!defined('THINK_PATH')) exit();?>


<div id='main'>
        <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><div id="id" align="center" class='title' style="font-size: 21px;"><a id="id" href="<?php echo U('id',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></div>

                <div class='summary' style="font-size: 14px;"><p><?php echo ($v["content"]); ?></p></div>


                <div align="right" class="more" style="font-size: 14px;"><a href="#<?php echo U('/' .$v['id']);?> ">阅读全文</a></div>
                <div align="right" class='time'><?php echo ($v["createtime"]); ?></div><br><?php endforeach; endif; ?>
<!-- <div><?php echo ($list); ?></div> -->

</div>