
<div>
	<div class="accountInfo">
		<br/>这里是一些测试实例，DwzGridView、DwzGrid参考类文件中说明
		<p>
		要自定义本页请编辑： <tt><?php echo __FILE__; ?></tt>
		</p>
	</div>
	<?php $this->widget('ext.dwz.DwzPanel',array(
		'title'=>'个人账户情况',
		'content'=>'可提现金额：',
		'height'=>100,
	)); ?>
	<div class="pageFormContent" layoutH="80">
		<?php echo CHtml::link('测试navTabTodo', array('/Admin/default/test'), array('target' => 'navTabTodo', 'title' => 'message')); ?>
		<?php echo CHtml::link('弹出窗中打开', array('/Admin/default/test'), array('target' => 'dialog', 'rel' => '窗口标识', 'title' => '[自定义标题]', 'width' => 800, 'height' => 600)); ?>
		<?php echo CHtml::link('在navTab中打开', array('/Admin/default/test'), array('target' => 'navTab', 'rel' => 'tab标识号,相同标识号会覆盖之前的')) ?>
		<?php echo CHtml::textField('name', '', array('alt' => '测试input alt扩展')); ?>
		<input type="text" name="xxx" class="date"/>
		<?php echo CHtml::textField('name', '', array('class' => 'date')); ?>
	<?php $this->widget('ext.dwz.DwzTabs', array(
		'tabs'=>array(
			'标题1'=>'Html<br/>内容',
			'标题2'=> $this->renderPartial('test',array(),true),
			'ajaxTab'=>array('ajax'=>array('/Admin/default/test','id'=>11)),
		),
		'height'=>100,
	)); ?>
	<?php $this->widget('ext.dwz.DwzPanel',array(
		'title'=>'Panel标题',
		'content'=>'Panel内容',
		'height'=>100,
	)); ?>

	</div>
</div>
	