<html>
  <head>
  </head>
  <body>
    亲爱的 <?php echo $myMail->login_name; ?>:
    <br>
    你的密码是:<code style='padding:5px 40px;margin: 10px 20px;border:1px solid red;display:inline-block;'>  <?php echo $myMail->orig_pass; ?> </code>  。请牢记。
    <br>
    ------------------------------------------------------
    <br>
    您收到这封邮件是因为您注册了本站会员，如要退订此邮件请<a href='#'>点击</a>。
  </body>
</html>
