<title>登录</title>

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'admin-form',
  'action'=>'/Admin/Login/login/',
  'htmlOptions'=>array(
    'id'=>'loginform',
    'method'=>"post",
    'name'=>"loginform",
  ))); ?>
<p>
  <?php echo $form->labelEx($model,'login_name'); ?>
  <?php echo $form->textField($model,'login_name',array('size'=>20,'maxlength'=>32,'id'=>'user_login','class'=>'input')); ?>
  <?php echo $form->error($model,'login_name'); ?>
</p>

<p>
  <?php echo $form->labelEx($model,'login_passwd'); ?>
  <?php echo $form->passwordField($model,'login_passwd',array('size'=>20,'maxlength'=>32,'id'=>'user_pass','class'=>'input','id'=>'user_pass')); ?>
  <?php echo $form->error($model,'login_passwd'); ?>
</p>

<p class="submit">
  <input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" type="submit">
</p>
<?php $this->endWidget(); ?>

<p id="nav">
  <!-- <a href="<?php echo $this->createUrl('/Admin/Login/Register/'); ?>" title="注册">注册</a>
  |
  <a href="#" title="找回密码">忘记密码？</a> -->
</p>
