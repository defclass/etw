<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="pageContent">

<?php echo "<?php \$form=\$this->beginWidget('ext.dwz.DwzActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
	    'class'=>'pageForm required-validate',
	    'onsubmit'=>'return iframeCallback(this,dialogAjaxDone)',
	)
)); ?>\n"; ?>
    <div class="pageFormContent" layoutH="58">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
	<div class="unit">
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>

<?php
}
?>
    </div>
	<div class="formBar">
        <ul>
            <li>
                <div class="buttonActive">
                    <div class="buttonContent">
                        <?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save'); ?>\n"; ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="button">
                    <div class="buttonContent">
                        <button type="button" class="close">取消</button>
                    </div>
                </div>
            </li>
        </ul>

	</div>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->