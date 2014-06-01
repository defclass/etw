<?php foreach($classifies as $cf){ ?>
<span style="float:left;width:150px;overflow:hidden;margin:5px 10px 5px 10px;">
<a href="<?php echo  Yii::app()->createUrl('/Product/Index/').'/classify/'.$cf->cid; ?>"><?php echo $cf->classify_name;?> </a>
</span>
<?php } ?>
