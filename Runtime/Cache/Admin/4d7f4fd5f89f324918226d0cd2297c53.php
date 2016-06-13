<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS_URL); ?>login.css">
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>login.js"></script>
<title>用户登录</title>
</head>
<body>
<div class="login">
<fieldset>
<legend>用户登录/Login</legend>
<form name="form1" method="post" action="<?php echo U('handle');?>" name="admin" onSubmit="return InputCheck(this)">
<div class="log">
<p>
<label for="username" class="label">用户名:</label>
<input id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密 码:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<label for="code" class="label">验证码:</label>
<input id="code" name="code" type="text" class="input" /><!-- <img class="code" src="/blog/index.php/Admin/Manager/code" /> -->
<img src="/blog/index.php/Admin/Manager/Verify" alt="点击刷新" height="30" align="bottom" class="code" style="cursor:pointer;"  onclick="javascript:this.src='/blog/index.php/Admin/Manager/Verify?d='+Math.random();" />
<p/>
</div>

<div class="button left">
      <input type="submit" value="登 录" name="B1" >
      <input type="reset" value="重 置">
      <input type="hidden" name="submit" value="login">
</div>

<!-- <input type="submit" name="submit" value="  确 定  " class="left" /> -->
<!-- <a class="right" href=""> 注册</a> -->

</form>
</fieldset>
</div>
</body>
</html>