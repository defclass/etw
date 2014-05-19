<title>注册</title>

<p class="message register">注册为推广人,以赚佣金。</p>
<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'admin-form',
  'action'=>'/Admin/Login/Register/',
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
  <?php echo $form->labelEx($model,'email'); ?>
  <?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>32,'id'=>'user_login','class'=>'input')); ?>
  <?php echo $form->error($model,'email'); ?>
</p>
<p id="reg_passmail">密码将通过电子邮件发送给您。</p>
<br class="clear">
<input name="redirect_to" value="" type="hidden">
<p class="submit"><input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="注册" type="submit"></p>
<?php $this->endWidget(); ?>
<p id="nav">
  <a href="<?php echo $this->createUrl('/Admin/Login/Login/'); ?>">登录</a> |
  <a href="" title="找回密码">忘记密码？</a>
</p>
  </div>
