<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><!--<![endif]--><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>snowh4r3 › 忘记密码</title>
  <link rel="stylesheet" id="open-sans-css" href="login/css.css" type="text/css" media="all">
  <link rel="stylesheet" id="dashicons-css" href="login/dashicons.css" type="text/css" media="all">
  <link rel="stylesheet" id="wp-admin-css" href="login/wp-admin.css" type="text/css" media="all">
  <link rel="stylesheet" id="buttons-css" href="login/buttons.css" type="text/css" media="all">
  <link rel="stylesheet" id="colors-fresh-css" href="login/colors.css" type="text/css" media="all">
  <!--[if lte IE 7]>
  <link rel='stylesheet' id='ie-css'  href='http://wp.com/wp-admin/css/ie.min.css?ver=3.8.3' type='text/css' media='all' />
  <![endif]-->
  <meta name="robots" content="noindex,follow">
</head>
<body class="login login-action-lostpassword wp-core-ui">
  <div id="login">
    <h1><a href="http://cn.wordpress.org/" title="基于WordPress">snowh4r3</a></h1>
    <p class="message">请输入您的用户名或电子邮箱地址。您会收到一封包含创建新密码链接的电子邮件。</p>

    <form name="lostpasswordform" id="lostpasswordform" action="http://wp.com/wp-login.php?action=lostpassword" method="post">
      <p>
	<label for="user_login">用户名或电子邮件地址：<br>
	  <input name="user_login" id="user_login" class="input" size="20" type="text"></label>
      </p>
      <input name="redirect_to" value="" type="hidden">
      <p class="submit"><input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="获取新密码" type="submit"></p>
    </form>

    <p id="nav">
      <a href="http://wp.com/wp-login.php">登录</a>
    </p>

    <p id="backtoblog"><a href="http://wp.com/" title="不知道自己在哪？">← 回到snowh4r3</a></p>
    
  </div>

  <script type="text/javascript">
   try{document.getElementById('user_login').focus();}catch(e){}
   if(typeof wpOnload=='function')wpOnload();
  </script>
  
  <div class="clear"></div>
  
  
</body></html>
